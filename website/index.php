<!-- Define file as HTML for browser. -->
<!DOCTYPE html>

<!-- Declare native language. -->
<html lang="en">

  <!-- Declare header for metadata. -->
  <head>

	<!-- Set website character set and dimensions so that it displays correctly. -->
	<meta charset="UTF-8">

	<!-- Declare title that will display in tabs.  -->
	<title>TrueOG SMP</title>

    <!-- Make page recognizable by a wide range of browsers. -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<!-- Link to favicons for thumbnails in browsers. -->
	<!-- Generic: -->
	<link rel="icon" type="image/x-icon" href="assets/favicons/favicon.ico">
	<link rel="icon" href="assets/favicons/favicon-32.png" sizes="32x32">
	<link rel="icon" href="assets/favicons/favicon-57.png" sizes="57x57">
	<link rel="icon" href="assets/favicons/favicon-76.png" sizes="76x76">
	<link rel="icon" href="assets/favicons/favicon-96.png" sizes="96x96">
	<link rel="icon" href="assets/favicons/favicon-128.png" sizes="128x128">
	<link rel="icon" href="assets/favicons/favicon-192.png" sizes="192x192">
	<link rel="icon" href="assets/favicons/favicon-228.png" sizes="228x228">
	<!-- Android: -->
	<link rel="shortcut icon" sizes="196x196" href="assets/favicons/favicon-196.png">
	<!-- iOS: -->
	<link rel="apple-touch-icon" href="assets/favicons/favicon-120.png" sizes="120x120">
	<link rel="apple-touch-icon" href="assets/favicons/favicon-152.png" sizes="152x152">
	<link rel="apple-touch-icon" href="assets/favicons/favicon-180.png" sizes="180x180">
	<!-- Windows 8 IE 10: -->
	<meta name="msapplication-TileColor" content="#FFFFFF">
	<meta name="msapplication-TileImage" content="assets/favicons/favicon-144.png">
	<!-- Windows 8.1 + IE11 and above: -->
	<meta name="msapplication-config" content="assets/favicons/browserconfig.xml"/>
	
    <!-- Responsive design scaling adaptation. -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Import CSS Framework Bluma. -->
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css"/>

    <!-- Import custom Stylesheet and then keep the rendering engine awake using PHP trick -->
    <link rel="stylesheet" href="stylesheet.css?v=<?php echo time(); ?>">
	
	<!-- Load Font Awesome CSS for glyph support. -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Load w3.css Framework. -->
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<!-- End header -->
</head>

<!-- Declare Body -->
<body style="font-family: minecraft; height: 100%; line-height: 1.6">

	<!-- Declare Navbar (sit on top). -->
    <nav class="navbar" style="background-color: black; opacity: 65%">
     <div class="container">
        <a class="navbar-item" href="#">
          <img src="logos/Logo-Alternate-Transparent.png" alt="Logo">
        </a>
		<span class="navbar-burger burger" data-target="navbarMenu">
          <span></span>
          <span></span>
          <span></span>
        </span>
        <div id="navbarMenu" class="navbar-menu">
          <div class="navbar-end">
            <a class="navbar-item is-active">
              Home
            </a>
            <a class="navbar-item">
              Examples
            </a>
            <a class="navbar-item">
              Features
            </a>
            <a class="navbar-item">
              Team
            </a>
            <a class="navbar-item">
              Archives
            </a>
            <a class="navbar-item">
              Help
            </a>
          </div>
        </div>
      </div>
    </nav>
    <!-- END NAV -->

<!-- Declare animated shooting stars from CSS as objects -->
<section>
    <span class="star"></span>
    <span class="star"></span>
    <span class="star"></span>
    <span class="star"></span>
    <span class="star"></span>
    <span class="star"></span>
    <span class="star"></span>
    <span class="star"></span>
    <span class="star"></span>
    <span class="star"></span>
</section>

<!-- Header with full-height image -->
<div class="w3-container" style="padding: 32px 32px; height: 100%">
  <span class="background-wrapper"></span>
  <div class="w3-center" style="margin-top:64px">
 	  <br><br>
    <mark class="main-text"> &nbsp;<span class="bukkit-green"> The Open Source,</span>&nbsp;<br>&nbsp;<span class="bukkit-red"> Community-First,&nbsp;</span><br><span class="saddle-brown">&nbsp; OG Minecraft Experience! </span>&nbsp;
      <br><br><br>
	  <p><a class="main-text" style="font-size: 2vw; text-decoration: none" href="https://discord.gg/ma9pMYpBU6" class="w3-button">&nbsp; <span class="bukkit-blue"><strong>Join Server</strong></span> &nbsp;</a>
    </mark>
    <br>
  </div>
</div>

<!-- Features Section -->
<div class="w3-container" style="padding: 32px 32px" id="features">
  <p class="w3-center" style="font-size: 6vh"><strong>What makes<span class="bukkit-darkgreen">&nbsp;True</span><span class="bukkit-darkred">OG</span> Special?</strong></p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="fa fa-gamepad w3-margin-bottom w3-jumbo w3-center bukkit-darkgreen"></i>
      <p style="font-size: 5vh"><strong>The "OG" Meta</strong></p>
      <p class="reduce-line-height" style="font-size: 4vh; text-align: left">OG means more to us than "not being pay-to-win". OG is about maintaining and building upon what we loved about SMP servers back in the day. A simple, robust economy. Competative, fast-paced PvP. Worlds that become richer and more fun to explore as the versions go by, giving players a sense of deep time and community. The <span class="bukkit-darkgreen">True</span><span class="red">OG</span> Meta is more "OG" than OG:SMP and more anarchistic than anarchy. Here, you are truly free to play however you want, on a fair playing field. No bots. No hacks. There's nothing quite like it in Minecraft, or any other game for that matter.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-heart w3-margin-bottom w3-jumbo red"></i>
      <p style="font-size: 5vh"><strong>Classic Combat</strong></p>
      <p class="reduce-line-height" style="font-size: 4vh; text-align: left"><span class="bukkit-darkgreen">True</span><span class="red">OG</span> utilizes the 1.8 style PvP/PvE system with NO click-delay. We believe this model is vastly superior to 1.9+ combat. It's quicker, more intense, and has a longer, more fulfilling skill ladder. Mojang is well aware of the new system's flaws, which is why they haven't added it to Bedrock. The experimental combat snapshot also eliminates the click-delay, and we will consider switching to those new mechanics once they are rolled out in a future version of Minecraft. Until that time we are committed to supporting 1.8 combat.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-diamond w3-margin-bottom w3-jumbo bukkit-blue"></i>
      <p style="font-size: 5vh"><strong>Great on 1.8</strong></p>
      <p class="reduce-line-height" style="font-size: 4vh; text-align: left">Unlike some <i>other</i> servers, we don't believe in leaving our loyal players in the dust with no support. There are good reasons many people continue to use Minecraft 1.8. From performance, to combat, to mods. If you are one of them, welcome home! Here you will experience being treated like a first class citizen. We have working fishing rods, ladders, lily pads, and brewing stands. All potions work on 1.8 at their correct durations. Builds at spawn have been optimized for 1.8 block appearance. You can even craft enchanted golden apples and utilize classic (1.7 style) TNT cannons!</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-cog w3-margin-bottom w3-jumbo grey"></i>
      <p style="font-size: 5vh"><strong>Open Source</strong></p>
	    <p class="reduce-line-height" style="font-size: 4vh; text-align: left"><span class="bukkit-darkgreen">True</span><span class="red">OG</span> is run by a dedicated Socialist and open source advocate. As such, the server will be published to GitHub in its entirety. Original code uses <a href="https://unlicense.org/" style="text-decoration: none">The Unlicense</a>, meaning it is released into the public domain for any purpose, commercial or personal, for free, forever. The code for community projects utilized by <span class="bukkit-darkgreen">True</span><span class="red">OG</span> is linked to on GitHub. Their respective terms must be followed. The only proprietary part of <span class="bukkit-darkgreen">True</span><span class="red">OG</span> is our post-launch map and seed. This is to prevent coordinates and bases from being compromised.</p>
    </div>
  </div>
</div>

<!-- FAQ Section -->
<div class="w3-container" style="padding: 32px 32px" id="faq">
  <p class="w3-center" style="font-size: 6vh"><strong>Frequently Asked Questions:</strong></p>
	<div class="w3-row-padding" style="font-size: 3.5vh">
    <div class="w3-col m6">
		<p><strong>Q: Where did <span class="bukkit-darkgreen">True</span><span class="red">OG</span> come from?<br>A:</strong> <span class="bukkit-darkgreen">True</span><span class="red">OG</span> is a community SMP based on the OG:SMP Season 1 map by players who disagreed with the map reset and the direction of the server away from the "OG" meta.</p>
        <p><strong>Q: What versions of Minecraft does <span class="bukkit-darkgreen">True</span><span class="red">OG</span> support?<br>A: </strong>The server runs 1.17.1 on the backend, and can support clients running Minecraft Java 1.8.0-1.18.2. Minecraft Bedrock clients will not be supported until the new no-click-delay combat system is rolled out across both versions of Minecraft.</p>
		<p><strong>Q: What versions of Minecraft is the terrain generated in?<br>A:</strong> <span class="bukkit-darkgreen">True</span><span class="red">OG</span> Terrain from spawn to 40k is 1.16.5. Terrain from 40k to 80k is 1.17.1. The world border will be expanded for each major update with new chunks.</p>
		<p><strong>Q: Is a world download available?<br>A:</strong> The pre-launch world can be downloaded as a torrent <a href="magnet:?xt=urn:btih:402df9c1d86bebb5f4b0523038e713dc3d50b0be&dn=smp.tar.gz&tr=udp%3A%2F%2Ftracker.openbittorrent.com%3A6969">here</a> for personal use only. Our license to use it commercially is non-transferrable. The post-launch map will not be published during the lifetime of the server.</p>
		<p><strong>Q: How do I navigate the spawn and community marketplace?<br>A:</strong> <a href="market-map.png">Market Map</a><br>A:</strong> <a href="market-map-2.png">Combined Spawn/Market Map</a></p>
		<p><strong>Q: How does the economy work?</br>A:</strong> Like 2011-2013 era SMP servers, the <span class="bukkit-darkgreen">True</span><span class="red">OG</span> economy is based on diamonds. Unlike Essentials money, they are a tangible object with a limited supply. As the universal currency, they combat inflation and facilitate fair, understandable transactions.<br><strong>/pay</strong> sends another player the specified amount of diamonds.<br><strong>/withdraw</strong> takes the specified amount of diamonds out of your bank account and stores them in your inventory. <br><strong>/deposit</strong> take the specified amount of Diamonds out of your inventory and stores them in the bank. works the other way around. Diamonds stored in your inventory or at the bank will grow your bank balance.<br><strong>/balance</strong> can be used to check your total, and <strong>/balance PLAYER</strong> will show you somebody elses's. The bank is located to the right of the community marketplace entryway.</p>
	</div>
	<div class="w3-col m6">
		<p><strong>Q: How do I connect to the server?<br>A: </strong> Launch Minecraft: Java Edition. From the splash screen, click "Multiplayer", and then click "Add Server". Input any of the following addresses into the box and click "Done". After that, you will be able to join <span class="bukkit-darkgreen">True</span><span class="red">OG</span> by double clicking on it in the Multiplayer Server List.</p>
		<strong>trueog.net
		<br>play.trueog.net
		<br>true-og.net
		<br>play.true-og.net</strong>
		<p><strong>Q: Where is the server hosted?</strong><br><strong>A: </strong><span class="bukkit-darkgreen">True</span><span class="red">OG</span> runs on a <a href="https://www.hetzner.com/dedicated-rootserver/ax61-nvme">Hetzner AX61-NVME</a> in Falkenstein, Germany</p>
		<p><strong>Q: What resources does the server have?</strong><br><strong>A: </strong>Dedicated AMD Ryzen 9 3900x | 128GB RAM (SMP+Duels uses 32GB) | 1.92TB Dedicated NVMe SSD (RAID Cloned) | 1Gbps+ Unmetered Connection </p>
		<p><strong>Q: Which Minecraft server jar does <span class="bukkit-darkgreen">True</span><span class="red">OG</span> run?<br>A: </strong><a href="https://ci.pufferfish.host/job/Pufferfish-Purpur/">Pufferfish-Purpur</a> (1.17.1)</p>
		<p><strong>Q: Where can I find the Source Code to <span class="bukkit-darkgreen">True</span><span class="red">OG</span>?<br>A: </strong><a href="https://github.com/NotAlexNoyle/true-og">TrueOG is currently hosted on GitHub</a></p>
		<strong>Known In-Game Bugs:<br>1.8:</strong> Unusable elytra, unusable boats, invisible end gateways.
        <br><strong>1.8-1.13:</strong> Banners are glitchy.
		<br><strong>1.9-1.11.x:</strong> Elytra only work as gliders.
		<p><strong>Known Discord Bugs:</strong><br>- Bot commands aren't working in bot DMs.
		<br>- Username mentions from Minecraft to Discord require using back-end IDs.
		<br>- Custom emojis don't work from Minecraft to Discord.</p>
	</div>
  </div>
</div>

<!-- Rules Section (Contains MIT Derived Code - TODO: Add LICENSE -->
<div class="w3-container w3-deep-purple" style="padding: 32px 32px" id="rules">
  <p class="w3-center" style="font-size: 6vh"><strong>Rules:</strong></p>
  <div class="w3-row-padding" style="font-size: 3.5vh">
    <div class="w3-col m6">
      <div class="toggle">
        <!-- Text reveal toggle -->
        <input type="checkbox" value="selected" id="rule-1" class="toggle-input">
        <label for="rule-1" class="toggle-label bukkit-red-background">Rule 1 - No Inappropriate Usernames</label>
        <!-- Content to toggle -->
        <div role="toggle" class="toggle-content reduce-line-height">
          Do not join <span class="bukkit-darkgreen">True</span><span class="red">OG</span> with any username that contains words or phrases which could result in a mute if typed in chat. Inappropriate usernames will be permanently banned. Once you change the username back to something appropriate, you may appeal the ban.
        </div>
      </div>
      <div class="toggle">
        <!-- Text reveal toggle -->
        <input type="checkbox" value="selected" id="rule-2" class="toggle-input">
        <label for="rule-2" class="toggle-label bukkit-red-background">Rule 2 - No Exploiting Bugs</label>
        <!-- Content to toggle -->
        <div role="toggle" class="toggle-content reduce-line-height">
          Do not intentionally abuse a bug or glitch to gain an advantage over other players. This includes duping and abuse of staff privileges. You may use the previously discovered season 1 seed to find resources close to spawn, but no hunting of the new seed(s) is permitted.
        </div>
      </div>
      <div class="toggle">
        <!-- Text reveal toggle -->
        <input type="checkbox" value="selected" id="rule-3" class="toggle-input">
        <label for="rule-3" class="toggle-label background-bukkit-red">Rule 3 - No Faking Evidence</label>
        <!-- Content to toggle -->
        <div role="toggle" class="toggle-content reduce-line-height">
          If you knowingly report someone for an offense they did not commit, you will be permanently banned.
        </div>
      </div>
      <div class="toggle">
        <!-- Text reveal toggle -->
        <input type="checkbox" value="selected" id="rule-4" class="toggle-input">
        <label for="rule-4" class="toggle-label background-bukkit-red">Rule 4 - No Bypassing Accountability</label>
        <!-- Content to toggle -->
        <div role="toggle" class="toggle-content reduce-line-height">
          Don’t evade bans or mutes. This will result in your punishment being made permanent.
        </div>
      </div>
      <div class="toggle">
        <!-- Text reveal toggle -->
        <input type="checkbox" value="selected" id="rule-5" class="toggle-input">
        <label for="rule-5" class="toggle-label background-bukkit-red">Rule 5 - No Stolen Accounts</label>
        <!-- Content to toggle -->
        <div role="toggle" class="toggle-content reduce-line-height">
          You must have acquired your Minecraft account legitimately. If you are caught using an account stolen from a data leak or another player, you will be banned.
        </div>
      </div>
      <div class="toggle">
        <!-- Text reveal toggle -->
        <input type="checkbox" value="selected" id="rule-6" class="toggle-input">
        <label for="rule-6" class="toggle-label background-bukkit-red">Rule 6 - No Staff Abuse</label>
        <!-- Content to toggle -->
        <div role="toggle" class="toggle-content reduce-line-height">
          Do not maliciously insult or threaten staff.
        </div>
      </div>
      <div class="toggle">
        <!-- Text reveal toggle -->
        <input type="checkbox" value="selected" id="rule-7" class="toggle-input">
        <label for="rule-7" class="toggle-label background-bukkit-red">Rule 7 - No Impersonation</label>
        <!-- Content to toggle -->
        <div role="toggle" class="toggle-content reduce-line-height">
          Don’t attempt to trick any player into believing that you are someone you are not.
        </div>
      </div>
      <div class="toggle">
        <!-- Text reveal toggle -->
        <input type="checkbox" value="selected" id="rule-8" class="toggle-input">
        <label for="rule-8" class="toggle-label background-bukkit-red">Rule 8 - No Doxxing</label>
        <!-- Content to toggle -->
        <div role="toggle" class="toggle-content reduce-line-height">
          Do not reveal anyone’s personal information without their consent.
        </div>
      </div>
      <div class="toggle">
        <!-- Text reveal toggle -->
        <input type="checkbox" value="selected" id="rule-9" class="toggle-input">
        <label for="rule-9" class="toggle-label background-bukkit-red">Rule 9 - No Lag Machines</label>
        <!-- Content to toggle -->
        <div role="toggle" class="toggle-content reduce-line-height">
          Do not attempt to make the server unplayable for others. Your build will be discovered, deleted, and you will be banned.
        </div>
      </div>
      <div class="toggle">
        <!-- Text reveal toggle -->
        <input type="checkbox" value="selected" id="rule-10" class="toggle-input">
        <label for="rule-10" class="toggle-label background-bukkit-red">Rule 10 - No Character Automation</label>
        <!-- Content to toggle -->
        <div role="toggle" class="toggle-content reduce-line-height">
          Do not use baritone or any other mod that allows you to automate your character. This world is open to players only, not bots.
        </div>
      </div>
      <div class="toggle">
        <!-- Text reveal toggle -->
        <input type="checkbox" value="selected" id="rule-11" class="toggle-input">
        <label for="rule-11" class="toggle-label background-bukkit-red">Rule 11 - No Stat Boosting</label>
        <!-- Content to toggle -->
        <div role="toggle" class="toggle-content reduce-line-height">
          Do not use alt accounts or friends to farm for gains in kills or other statistics.
        </div>
      </div>
      <div class="toggle">
        <!-- Text reveal toggle -->
        <input type="checkbox" value="selected" id="rule-12" class="toggle-input">
        <label for="rule-12" class="toggle-label background-bukkit-red">Rule 12 - Use the Community Marketplace Responsibly</label>
        <!-- Content to toggle -->
        <div role="toggle" class="toggle-content reduce-line-height">
          Shops are mainly intended for selling, not storage. If the market is full, and your shop consists largely of non-sale blocks, you may be asked to change or remove your shop by a staff member.
        </div>
      </div>
    </div>
    <div class="w3-col m6">
      <div class="toggle">
        <!-- Text reveal toggle -->
        <input type="checkbox" value="selected" id="rule-13" class="toggle-input">
        <label for="rule-13" class="toggle-label background-bukkit-gold">Rule 13 - No Extreme Bigotry</label>
        <!-- Content to toggle -->
        <div role="toggle" class="toggle-content reduce-line-height">
          TrueOG is not an anarchy server. While we are tolerant of swearing and trash talk, targeted hate speech against an individual for being in a marginalized group is unacceptable and will result in a mute.
        </div>
        <div class="toggle">
          <!-- Text reveal toggle -->
          <input type="checkbox" value="selected" id="rule-14" class="toggle-input">
          <label for="rule-14" class="toggle-label background-bukkit-gold">Rule 14 - No Bypassing Chat Filters</label>
          <!-- Content to toggle -->
          <div role="toggle" class="toggle-content reduce-line-height">
          Using Discord or special symbols to bypass your mute is not allowed. Circumvention of your mute will result in a longer mute.
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Staff Section -->
<div class="w3-container w3-light-grey" style="padding:32px 32px" id="staff">
  <p class="w3-center" style="font-size: 6vh"><strong>The TrueOG Staff Team:</strong></p>
  <div class="w3-row-padding" style="margin-top:16px">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="https://crafatar.com/avatars/9c272295-71dd-4aad-b59e-3de12d73b68a" alt="NotAlexNoyle" style="width:100%">
        <div class="w3-container">
    		  <p style="font-size: 6vh" class="w3-center reduce-line-height-more purple"><strong>NotAlexNoyle</strong><br>
    		  <p style="font-size: 4vh" class="w3-center reduce-line-height-more"><mark class="main-text"><span style="color: #7DF9FF">&nbsp;Owner</span> + <span class="bukkit-darkgreen">Developer&nbsp;</span></mark></p>
    		  <p style="font-size: 3vh" class="reduce-line-height w3-center discord-blue"><img src="discord-logo-creative-commons.png" alt="Discord Logo" style="max-width: 48px;"/> <strong>NotAlexNoyle#4794</strong></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="https://crafatar.com/avatars/1ca5f38d-0f3b-4dd6-b675-70de09328f6c" alt="Burbie" style="width:100%">
        <div class="w3-container">
          <p style="font-size: 6vh" class="w3-center reduce-line-height-more bukkit-gold"><strong>Burbie_</strong><br>
          <p style="font-size: 4vh" class="w3-center reduce-line-height-more"><mark class="main-text"><span class="bukkit-gold">&nbsp;Moderator&nbsp;</span></mark></p>
          <p style="font-size: 3vh" class="reduce-line-height w3-center discord-blue"><img src="discord-logo-creative-commons.png" alt="Discord Logo" style="max-width: 48px"/> <strong>Burbie?#5939</strong></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="https://crafatar.com/avatars/42ca230e-d44d-4c4b-841c-2d0bedb4f005" alt="dvik" style="width:100%">
        <div class="w3-container">
          <p style="font-size: 6vh" class="w3-center reduce-line-height-more bukkit-gold"><strong>dvik</strong><br>
          <p style="font-size: 4vh" class="w3-center reduce-line-height-more"><mark class="main-text"><span class="bukkit-gold">&nbsp;Moderator&nbsp;</span></mark></p>
          <p style="font-size: 3vh" class="reduce-line-height w3-center discord-blue"><img src="discord-logo-creative-commons.png" alt="Discord Logo" style="max-width: 48px"/> <strong>Dvik#7958</strong></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="https://crafatar.com/avatars/966052e3-5424-4934-a2c1-81250f2d1d55" alt="ItzNinjaYT" style="width:100%">
        <div class="w3-container">
          <p style="font-size: 6vh" class="w3-center reduce-line-height-more bukkit-gold"><strong>ItzNinjaYT</strong><br>
          <p style="font-size: 4vh" class="w3-center reduce-line-height-more"><mark class="main-text"><span class="bukkit-gold">&nbsp;Moderator&nbsp;</span></mark></p>
          <p style="font-size: 3vh" class="reduce-line-height w3-center discord-blue"><img src="discord-logo-creative-commons.png" alt="Discord Logo" style="max-width: 48px"/> <strong>ItzNinja_#5374</strong></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="https://crafatar.com/avatars/e0908757-b813-4a89-8c19-4f65612541b9" alt="ixAl" style="width:100%">
        <div class="w3-container">
          <p style="font-size: 6vh" class="w3-center reduce-line-height-more bukkit-gold"><strong>ixAl_</strong><br>
          <p style="font-size: 4vh" class="w3-center reduce-line-height-more"><mark class="main-text"><span class="bukkit-gold">&nbsp;Moderator&nbsp;</span></mark></p>
          <p style="font-size: 3vh" class="reduce-line-height w3-center discord-blue"><img src="discord-logo-creative-commons.png" alt="Discord Logo" style="max-width: 48px"/> <strong>ixAl_#8810</strong></p>
        </div>
      </div>
	</div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="https://crafatar.com/avatars/aec7ca7a-3ca9-4001-adfc-a81b596d8201" alt="OmeniusKamis1" style="width:100%">
        <div class="w3-container">
          <p style="font-size: 6vh" class="w3-center reduce-line-height-more bukkit-gold"><strong>OmeniusKamis1</strong><br>
          <p style="font-size: 4vh" class="w3-center reduce-line-height-more"><mark class="main-text"><span class="bukkit-gold">&nbsp;Moderator&nbsp;</span></mark></p>
          <p style="font-size: 3vh" class="reduce-line-height w3-center discord-blue"><img src="discord-logo-creative-commons.png" alt="Discord Logo" style="max-width: 48px"/> <strong>OmeniusKamis2#6439</strong></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="https://crafatar.com/avatars/938697f8-c771-439e-b237-b1ce9b51d339" alt="Tolga 1978" style="width:100%">
        <div class="w3-container">
          <p style="font-size: 6vh" class="w3-center reduce-line-height-more bukkit-gold"><strong>Tolga1978</strong><br>
          <p style="font-size: 4vh" class="w3-center reduce-line-height-more"><mark class="main-text"><span class="bukkit-gold">&nbsp;Moderator&nbsp;</span></mark></p>
          <p style="font-size: 3vh" class="reduce-line-height w3-center discord-blue"><img src="discord-logo-creative-commons.png" alt="Discord Logo" style="max-width: 48px"/> <strong>ItzNinja_#5374</strong></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="https://crafatar.com/avatars/9950501e-140d-4f62-a883-06b989013d4d" alt="ElvisUHD" style="width:100%">
        <div class="w3-container">
          <p style="font-size: 6vh; color: hotpink" class="w3-center reduce-line-height-more"><strong>ElvisUHD</strong><br>
          <p style="font-size: 4vh" class="w3-center reduce-line-height-more"><mark class="main-text"><span style="color: #7DF9FF">&nbsp;MVP</span>&nbsp;+&nbsp;<span style="color: hotpink;">Builder&nbsp;</span></mark></p>
          <p style="font-size: 3vh" class="reduce-line-height w3-center discord-blue"><img src="discord-logo-creative-commons.png" alt="Discord Logo" style="max-width: 48px"/> <strong>Elvis#5891</strong></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="https://crafatar.com/avatars/9f8277da-b652-467a-8d06-0c5795e2e967" alt="OpenGL3" style="width:100%">
        <div class="w3-container">
          <p style="font-size: 6vh; color: hotpink" class="w3-center reduce-line-height-more"><strong>OpenGL3</strong><br>
          <p style="font-size: 4vh" class="w3-center reduce-line-height-more"><mark class="main-text"><span style="color: hotpink">&nbsp;Builder&nbsp;</span></mark></p>
          <p style="font-size: 3vh" class="reduce-line-height w3-center discord-blue"><img src="discord-logo-creative-commons.png" alt="Discord Logo" style="max-width: 48px"/> <strong>abcdef#6780</strong></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Shop Section -->
<div class="w3-container w3-center w3-black" style="padding: 32px 32px" id="shop">
  <p style="font-size: 6vh"><strong>Buy Ranks</strong></p>
  <p class="reduce-line-height" style="font-size: 4vh">Each donor rank requires the prior rank to be purchased first.</p>
  <p class="reduce-line-height" style="font-size: 3vh">Donor benefits are subject to change as the server evolves over time.</p>
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-white w3-xlarge w3-padding-32"><strong>OG</strong></li>
        <li class="w3-padding-16"><strong>TBA</strong></li>
        <li class="w3-padding-16">
          <p style="font-size: 5vh">$ 10</p>
          <span class="w3-opacity"><strong>one time</strong></span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-black w3-padding-large"><strong>COMING SOON</strong></button>
        </li>
      </ul>
    </div>
    <div class="w3-third">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-red w3-xlarge w3-padding-48">OG Pro (BEST VALUE)</li>
        <li class="w3-padding-16"><strong>TBA</strong></li>
        <li class="w3-padding-16">
          <p style="font-size: 7vh">$ 50</p>
          <span class="w3-opacity"><strong>one time</strong></span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-black w3-padding-large"><strong>COMING SOON</strong></button>
        </li>
      </ul>
    </div>
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32"><span class="w3-red">&nbsp;OG Master&nbsp;</span></li>
        <li class="w3-padding-16"><strong>TBA</strong></li>
        <li class="w3-padding-16">
          <p style="font-size: 5vh">$ 10</p>
          <span class="w3-opacity"><strong>per month</strong></span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-black w3-padding-large"><strong>COMING SOON</strong></button>
        </li>
      </ul>
    </div>
  </div>
  <div class="w3-row-padding" style="margin-top:16px">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <div class="w3-container">
          <p><a href="https://docs.google.com/forms/d/e/1FAIpQLSfi8XjGDKSYS2ayyit8TUXaUjrWLsGbgHTYX1JBju0xwgu2cg/viewform?usp=sf_link" style="text-decoration: none"><button class="w3-button w3-block" style="font-size:3vh"><i class="fa fa-exclamation-triangle yellow"></i> APPLY FOR TESTER</button></a></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <div class="w3-container">
          <p><a href="https://docs.google.com/forms/d/e/1FAIpQLSflSlerMnv0E6wjMUT8NPdQAnjQVJ-7hRwZmDLIgSIrRv2zTQ/viewform?usp=sf_link" style="text-decoration: none"><button class="w3-button w3-block" style="font-size: 3vh"><i class="fa fa-youtube-play red"></i> APPLY FOR YOUTUBE</button></a></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <div class="w3-container">
          <p><a href="https://docs.google.com/forms/d/e/1FAIpQLSfZKKCgFZl5UQdK7Fo1DEdfPrORpuYWWht4kxZOYmqg8whBhQ/viewform?usp=sf_link" style="text-decoration: none"><button class="w3-button w3-block" style="font-size: 3vh"><img src="diamond-pickaxe-minecraft.png" alt="Diamond Pickaxe Icon" style="height: 1em"> APPLY FOR BUILDER</button></a></p>
        </div>
     </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
          <div class="w3-container">
          <p><a href="https://docs.google.com/forms/d/e/1FAIpQLSfrIq2dr-43r3TJ0H31_NiKHLds0Zl7TgUvQ3vYHgnPGLwQGA/viewform?usp=sf_link" style="text-decoration: none"><button class="w3-button w3-block" style="font-size: 3vh"><img src="minecraft_heart.png" alt="Heart Icon" style="height: 1em"> APPLY FOR MODERATOR</button></a></p>
       </div>
     </div>
    </div>
  </div>
  <div class="w3-col m6 w3-margin-bottom w3-center">
      <p><a href="https://docs.google.com/forms/d/e/1FAIpQLSdOuBxHJ0CyDRMmCoAKM5i79tuoP2vyv9Zo8G2svM_18y4ALA/viewform?usp=sf_link" style="text-decoration: none"><button class="w3-block" style="font-size: 4vh; background-color: #55FFFF"><i class="fa fa-home bukkit-darkgreen"></i> RECOVER HOMES</button></a></p>
  </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <div class="w3-xlarge w3-section">
	<a href="https://www.facebook.com/True-OG-108371428331070"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
	<a href="https://twitter.com/TrueOGSMP"><i class="fa fa-twitter w3-hover-opacity"></i></a>
	<a href="https://reddit.com/r/trueog"><i class="fa fa-reddit w3-hover-opacity"></i></a>
  </div>
 
  <p>Powered by <a href="https://www.w3schools.com/w3css/">w3.css</a></p>
  <a href="https://www.spigotmc.org/resources/minecraft-one-page-template.59734/"><p>Forked from aviel900</p></a>
  <a href="https://github.com/NotAlexNoyle/true-og/tree/main/website"><p>Source Code</p></a>

  <div class="container">
    <div class="content has-text-centered">
      <p> 
        Forked from <strong>Bulma</strong> by <a href="http://jgthms.com">Jeremy Thomas</a>.
        The source code is licensed <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. <br>
      </p>
    </div>
  </div>
  </footer>

</html>
