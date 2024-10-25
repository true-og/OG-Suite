# This is free and unencumbered software released into the public domain.
# Author: NotAlexNoyle (admin@true-og.net)

#!/bin/bash

# Array to store results
declare -A build_results
halted=false

# Trap Ctrl+C (SIGINT) to stop the script gracefully
trap 'echo -e "\n\nBuild process interrupted."; halted=true' SIGINT

# Get the name of the current directory
current_dir=$(basename "$PWD")

# Count total directories to set up the progress bar
total_dirs=$(find . -maxdepth 1 -type d ! -name '.*' | wc -l)
completed=0

# Function to display progress bar with current project name, formatted to a fixed width
progress_bar() {
    local project_name="$1"
    local progress=$(( (completed * 100) / total_dirs ))
    local bar=""

    # Format project name to a fixed width (truncate or pad to 15 characters)
    local formatted_project_name=$(printf "%-15.15s" "$project_name")

    for ((i = 0; i < progress / 2; i++)); do
        bar+="#"
    done
    printf "\r%s Building: %s [%-50s] %d%%" "$current_dir" "$formatted_project_name" "$bar" "$progress"
}

# Get a sorted list of directories to ensure alphabetical order
dirs=(*/)
IFS=$'\n' sorted_dirs=($(sort <<<"${dirs[*]}"))
unset IFS

# Loop through each sorted subdirectory
for dir in "${sorted_dirs[@]}"; do
    # Skip hidden folders
    [[ "$dir" == .* ]] && continue

    # Stop processing if halted
    if $halted; then
        break
    fi

    # Get the project name without the trailing slash
    project_name="${dir%/}"

    # Check if it's a Gradle project
    if [[ -f "$dir/build.gradle" || -f "$dir/settings.gradle" || -f "$dir/build.gradle.kts" || -f "$dir/settings.gradle.kts" ]]; then
        # Display the progress bar with the current project name
        progress_bar "$project_name"

        # Navigate into the directory and build the project, sending output to /dev/null
        (cd "$dir" && ./gradlew build &> /dev/null)

        # Check the exit code of the build command
        if [[ $? -eq 0 ]]; then
            build_results["$project_name"]="Pass"
        else
            build_results["$project_name"]="Fail"
        fi
    else
        build_results["$project_name"]="Not a Gradle Project"
    fi

    # Update progress and increment completed count
    completed=$((completed + 1))
    progress_bar "$project_name"
done

# New line after progress bar
echo -e "\n\nBuild Summary:"

# Separate and sort Pass and Fail lists
pass_list=()
fail_list=()

for project in "${!build_results[@]}"; do
    if [[ "${build_results[$project]}" == "Pass" ]]; then
        pass_list+=("$project")
    elif [[ "${build_results[$project]}" == "Fail" ]]; then
        fail_list+=("$project")
    fi
done

# Sort and display the results
echo -e "\nPassed Projects:"
IFS=$'\n' sorted_pass_list=($(sort <<<"${pass_list[*]}"))
unset IFS
for project in "${sorted_pass_list[@]}"; do
    echo "$project"
done

echo -e "\nFailed Projects:"
IFS=$'\n' sorted_fail_list=($(sort <<<"${fail_list[*]}"))
unset IFS
for project in "${sorted_fail_list[@]}"; do
    echo "$project"
done

# Message if script was interrupted
if $halted; then
    echo -e "\nBuild process was halted by the user."
fi

