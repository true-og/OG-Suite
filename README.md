# OG-Suite

![Icon](https://github.com/true-og/website/blob/main/assets/images/logos/Logo-Alternate-Transparent.png)

*ad astra per aspera*

The OG Suite are in-house plugins crafted by TrueOG Network which conform to our highest standards. 

OG Suite is public domain software. Contributions are not accepted from citizens of Germany, Australia, nor any other governments that do not recognize the concept of the public domain.

# All OG Suite plugins should abide by the following standards, if applicable:

**Gradle 8.14.3:**

```./gradlew wrapper --gradle-version=8.14.3```

**Kotlin Gradle files:**

```build.gradle.kts, settings.gradle.kts```

**Shadow 8.3.9 from gradleup:**

```plugins { id("com.gradleup.shadow") version "8.3.9" }```

**[Paperweight API](https://docs.papermc.io/paper/dev/userdev/) 2.0.0-beta.17:**

```plugins { id("io.papermc.paperweight.userdev") version "2.0.0-beta.17" }```

**[Purpur API](https://repo.purpurmc.org/javadoc/snapshots/org/purpurmc/purpur/purpur-api/1.19.4-R0.1-SNAPSHOT/raw/index.html) 1.19.4:**

```dependencies { compileOnly("org.purpurmc.purpur:purpur-api:1.19.4-R0.1-SNAPSHOT") }```

**[LuckPerms API](https://luckperms.net/wiki/Developer-API) 5.5:**

```dependencies { compileOnly("net.luckperms:api:5.5") }```

**Shadow license into jars at the end of tasks.processResources:**

```
from("LICENSE") {
        into("/")
    } 
}
```

**Reproducible builds:**

```
tasks.withType<AbstractArchiveTask>().configureEach {
    isPreserveFileTimestamps = false
    isReproducibleFileOrder = true
}
```

**Import TrueOG Network internal dependencies from source via bootstrap.sh.**

**Use TrueOG's custom eclipse auto-formatting and checkstyle profile for java.**

**Examples in:**

[Template-OG](https://github.com/true-og/Template-OG) (Java)

[KotlinTemplate-OG](https://github.com/true-og/KotlinTemplate-OG) (Kotlin)

**[Jasync Postgres API](https://github.com/jasync-sql/jasync-sql) 2.2.4 for object storage > 1GB:**

```dependencies { implementation("com.github.jasync-sql:jasync-postgresql:2.2.4") }```

**[Lettuce KeyDB-compatible API](https://lettuce.io/docs/getting-started.html) 6.7.1 for object storage < 1GB:**

```
dependencies { implementation("io.lettuce:lettuce-core:6.7.1.RELEASE") }
configurations.all {
    exclude(group = "io.projectreactor")
}
```

**Use the TrueOG prefix pattern (only &2 is mutable):**

```String prefix = "&7[&2MyPlugin&f-&4OG&7] "```

**Use postgres or redis to get offline players from a cache, NOT bukkit's slow API:**  
~~`getOfflinePlayer(String)`~~
