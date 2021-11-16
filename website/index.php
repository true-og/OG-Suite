<!DOCTYPE html>
<html>

<title>TrueOG SMP</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="stylesheet.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body style="font-family: Minecraftchmc-dBlX; height: 100%; line-height: 1.8">

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="nav" style="opacity: 80%">
    <a href="https://true-og.net/"><img class="small-logo" src="True-OG-Small-Logo.png" alt="TrueOG Small Logo"></a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small" style="font-size: 4vh">
      <a href="#features" class="w3-bar-item w3-button"><i class="fa fa-star yellow"></i> <strong>Features</strong></a>
      <a href="#faq" class="w3-bar-item w3-button"><i class="fa fa-question-circle lightgreen"></i> <strong>FAQ</strong></a>
      <a href="#staff" class="w3-bar-item w3-button"><i class="fa fa-id-badge blue"></i> <strong>Staff</strong></a>
      <a href="#apply" class="w3-bar-item w3-button"><i class="fa fa-level-up orange"></i> <strong>Apply</strong></a>
      <a href="#shop" class="w3-bar-item w3-button"><i class="fa fa-usd green"></i> <strong>Shop</strong></a>
	</div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none; font-size: 4vh" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#features" onclick="w3_close()" class="w3-bar-item w3-button">Features</a>
  <a href="#faq" onclick="w3_close()" class="w3-bar-item w3-button">FAQ</a>
  <a href="#staff" onclick="w3_close()" class="w3-bar-item w3-button">Staff</a>
  <a href="#apply" onclick="w3_close()" class="w3-bar-item w3-button">Apply</a>
  <a href="#shop" onclick="w3_close()" class="w3-bar-item w3-button">Shop</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1" id="home" style="padding: 64px 32px">
  <div class="left-pad" style="font-size: 4.5vw">
	<span><mark class="main-text">&nbsp;Hello again world. Welcome home to the&nbsp;<br><span class="lightgreen">&nbsp;True</span><span class="darkred">OG</span> SMP!&nbsp;<br>&nbsp;Unique Meta. Historic Map. No resets<span class="darkred">&nbsp;ever</span>!&nbsp;</mark></span>
	<p><span><a style="text-decoration:none; font-size: 3.5vw" href="https://youtu.be/jJHfFrv9ptc" class="w3-button-small w3-right w3-white w3-opacity w3-hover-opacity-off">&nbsp;UNOFFICIAL TRAILER&nbsp;</a></span></p>
  </div>
  <div class="w3-display-bottomleft w3-text-white w3-large" style="padding:48px 64px">
    <a href="https://www.facebook.com/True-OG-108371428331070"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
	<a href="https://twitter.com/TrueOGSMP"><i class="fa fa-twitter w3-hover-opacity"></i></a>
	<a href="https://reddit.com/r/trueog"><i class="fa fa-reddit w3-hover-opacity"></i></a>
  </div>
</header>

<!-- Features Section -->
<div class="w3-container" style="padding: 32px 32px" id="features">
  <p class="w3-center" style="font-size: 6vh"><strong>What makes<span class="lightgreen">&nbsp;True</span><span class="darkred">OG</span> Special?</strong></p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="fa fa-gamepad w3-margin-bottom w3-jumbo w3-center green"></i>
      <p style="font-size: 5vh"><strong>The "OG" Meta</strong></p>
      <p class="reduce-line-height" style="font-size: 4vh; text-align: left">OG means more to us than "not being pay-to-win". OG is about maintaining and building upon what we loved about SMP servers back in the day. A simple, robust economy. Competative, fast-paced PvP. Worlds that become richer and more fun to explore as the versions go by, giving players a sense of deep time and community. The <span class="lightgreen">True</span><span class="red">OG</span> Meta is more "OG" than OG:SMP and more anarchistic than anarchy. Here, you are truly free to play however you want, on a fair playing field. No bots. No hacks. There's nothing quite like it in Minecraft, or any other game for that matter.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-heart w3-margin-bottom w3-jumbo red"></i>
      <p style="font-size: 5vh"><strong>Classic Combat</strong></p>
      <p class="reduce-line-height" style="font-size: 4vh; text-align: left"><span class="lightgreen">True</span><span class="red">OG</span> utilizes the 1.8 style PvP/PvE system with NO click-delay. We believe this model is vastly superior to 1.9+ combat. It's quicker, more intense, and has a longer, more fulfilling skill ladder. Mojang is well aware of the new system's flaws, which is why they haven't added it to Bedrock. The experimental combat snapshot also eliminates the click-delay, and we will consider switching to those new mechanics once they are rolled out in a future version of Minecraft. Until that time we are committed to supporting 1.8 combat.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-diamond w3-margin-bottom w3-jumbo" style="color: lightblue"></i>
      <p style="font-size: 5vh"><strong>Great on 1.8</strong></p>
      <p class="reduce-line-height" style="font-size: 4vh; text-align: left">Unlike some <i>other</i> servers, we don't believe in leaving our loyal players in the dust with no support. There are good reasons many people continue to use Minecraft 1.8. From performance, to combat, to mods. If you are one of them, welcome home! Here you will experience being treated like a first class citizen. We have working fishing rods, ladders, lily pads, and brewing stands. All potions work on 1.8 at their correct durations. Builds at spawn have been optimized for 1.8 block appearance. You can even craft enchanted golden apples and utilize classic (1.7 style) TNT cannons!</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-cog w3-margin-bottom w3-jumbo grey"></i>
      <p style="font-size: 5vh"><strong>Fully Open Source</strong></p>
	    <p class="reduce-line-height" style="font-size: 4vh; text-align: left"><span class="lightgreen">True</span><span class="red">OG</span> is run by a dedicated Socialist and open source advocate. As such, the server will be published to GitHub in its entirety. Original code uses <a style="text-decoration: none;"href="https://unlicense.org/">The Unlicense</a>, meaning it is released into the public domain for any purpose, commercial or personal, for free, forever. The code for community projects utilized by <span class="lightgreen">True</span><span class="red">OG</span> is linked to on GitHub. Their respective terms must be followed. The only proprietary part of <span class="lightgreen">True</span><span class="red">OG</span> is our post-launch map and seed. This is to prevent coordinates and bases from being compromised.</p>
    </div>
  </div>
</div>

<!-- FAQ Section -->
<div class="w3-container w3-light-grey" style="padding: 32px 32px" id="faq">
  <p class="w3-center" style="font-size: 6vh"><strong>Frequently Asked Questions:</strong></p>
	<div class="w3-row-padding" style="font-size: 3vh">
    <div class="w3-col m6">
		<p><strong>Q: Where did <span class="lightgreen">True</span><span class="red">OG</span> come from?</strong></p>
		<p><strong>A:</strong> <span class="lightgreen">True</span><span class="red">OG</span> is a community SMP based on the OG:SMP Season 1 map by players who disagreed with the map reset and the direction of the server away from the "OG" meta.</p>
		<p><strong>Q: What version of Minecraft is the terrain generated in?</strong></p>
		<p><strong>A:</strong> <span class="lightgreen">True</span><span class="red">OG</span> Terrain from spawn to 40k is 1.16.5. Terrain from 40k to 80k is 1.17.1. The world border will be expanded for each major update with new chunks.</p>
		<p><strong>Q: Is a world download available?</strong></p>
		<p><strong>A:</strong> The pre-launch world can be downloaded as a torrent <a href="magnet:?xt=urn:btih:402df9c1d86bebb5f4b0523038e713dc3d50b0be&dn=smp.tar.gz&tr=udp%3A%2F%2Ftracker.openbittorrent.com%3A6969">here</a> for personal use only. Our license to use it commercially is non-transferrable. The post-launch map will not be published during the lifetime of the server.</p>
		<p><strong>Q: How does the economy work?</strong></p>
		<p><strong>A:</strong> Much like 2011-2013 era SMP servers, the <span class="lightgreen">True</span><span class="red">OG</span> economy is based on diamonds. Unlike Essentials money, they are a tangible object with a limited supply. As the universal currency, they combat inflation and facilitate fair, understandable transactions. /pay sends another player the specified amount of diamonds. /withdraw takes the specified amount of diamonds out of your bank account and places them into your inventory. /deposit works the other way around. Diamonds stored in your inventory or at the bank will count towards your balance, which can be checked with /balance. The bank is located to the right of the community marketplace entryway.</p>
	</div>
	<div class="w3-col m6">
		<p><strong>Server Information:</strong></p>
		<p><strong>IP:</strong> true-og.net</p>
		<p><strong>Host:</strong> DigitalOcean (NYC3)</p>
		<p><strong>Hardware:</strong> Intel 4 Core CPU @ 2.5GHz | 8GB RAM | 160GB SSD | 1TB World Block Storage Volume</p>
		<p><strong>Software:</strong> Debian 11 Bookworm | AdoptOpenJDK 16.0.2 | Airplane 1.17.1 | Source Code: <a href="https://github.com/NotAlexNoyle/true-og">GitHub</a></p>
		<p><strong>Known Bugs:</strong></p>
		<p><strong>1.8:</strong> no elytra, no boats, invisible end gateways.</p>
		<p><strong>1.9-1.9.1:</strong> banners sometimes invisible.</p>
		<p><strong>1.9-1.11.x:</strong> glide-only elytra.</p>
		<p><strong>1.13.x & Below:</strong> uncraftable banners.</p>
		<p><strong>Discord:</strong></p>
		<p>Bots can't open DMs (/msg reply from in-game can't function).</p>
		<p>Username mentions from Minecraft to Discord require using back-end IDs.</p>
		<p>Custom emojis don't work from Minecraft to Discord.</p>
	</div>
  </div>
</div>

<!-- Staff Section -->
<div class="w3-container" style="padding:32px 32px" id="staff">
  <p class="w3-center" style="font-size: 6vh"><strong>The TrueOG Staff Team:</strong></p>
  <div class="w3-row-padding" style="margin-top:16px">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="https://minotar.net/avatar/NotAlexNoyle" alt="NotAlexNoyle" style="width:100%">
        <div class="w3-container">
		  <p style="font-size: 5vh" class="w3-center reduce-line-height-more"><strong>NotAlexNoyle</strong><br>
		  <p style="font-size: 4vh" class="w3-center reduce-line-height-more">Owner / Developer</p>
          <p style="font-size: 3vh" class="reduce-line-height">NotAlexNoyle founded <span class="lightgreen">True</span><span class="red">OG</span> to preserve and continue the worlds, along with the "OG" style of gameplay.</p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="https://minotar.net/avatar/aviel900" alt="To Be Decided" style="width:100%">
        <div class="w3-container">
          <p style="font-size: 5vh" class="w3-center reduce-line-height-more">TBA</p>
          <p style="font-size: 4vh" class="w3-center reduce-line-height-more">TBA</p>
          <p style="font-size: 3vh" class="reduce-line-height">Staff will be announced shortly prior to public release.<br><br><br></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom"> 
      <div class="w3-card"> 
        <img src="https://minotar.net/avatar/aviel900" alt="To Be Decided" style="width:100%"> 
        <div class="w3-container"> 
          <p style="font-size: 5vh" class="w3-center reduce-line-height-more">TBA</p> 
          <p style="font-size: 4vh" class="w3-center reduce-line-height-more">TBA</p> 
          <p style="font-size: 3vh" class="reduce-line-height">Staff will be announced shortly prior to public release.<br><br><br></p> 
       </div>
     </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom"> 
      <div class="w3-card"> 
        <img src="https://minotar.net/avatar/aviel900" alt="To Be Decided" style="width:100%"> 
        	<div class="w3-container"> 
        	<p style="font-size: 5vh" class="w3-center reduce-line-height-more">TBA</p> 
     		<p style="font-size: 4vh" class="w3-center reduce-line-height-more">TBA</p> 
        	<p style="font-size: 3vh" class="reduce-line-height">Staff will be announced shortly prior to public release.<br><br><br></p> 
       </div>
     </div>
    </div>
  </div>
</div>

<!-- Apply Section -->
<div class="w3-container w3-dark-grey" style="padding:32px 32px" id="apply">
  <p class="w3-center" style="font-size: 6vh"><strong>Apply for Ranks:</strong></p>
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
          <p><a href="https://docs.google.com/forms/d/e/1FAIpQLSfZKKCgFZl5UQdK7Fo1DEdfPrORpuYWWht4kxZOYmqg8whBhQ/viewform?usp=sf_link" style="text-decoration: none"><button class="w3-button w3-block" style="font-size: 3vh"><i class="fa fa-cubes"></i> APPLY FOR BUILDER</button></a></p>
       </div>
     </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom"> 
      <div class="w3-card"> 
          <div class="w3-container"> 
          <p><a href="https://docs.google.com/forms/d/e/1FAIpQLSfrIq2dr-43r3TJ0H31_NiKHLds0Zl7TgUvQ3vYHgnPGLwQGA/viewform?usp=sf_link" style="text-decoration: none"><button class="w3-button w3-block" style="font-size: 3vh"><i class="fa fa-ban blue"></i> APPLY FOR MODERATOR</button></a></p>
       </div>
     </div>
    </div>
  </div>
  <p class="w3-center" style="font-size: 6vh"><strong>Season 1 Migration:</strong></p>
  <div class="m6 w3-margin-bottom w3-center">
	<div class="w3-card">
		<div class="w3-container">
		<p><a href="https://docs.google.com/forms/d/e/1FAIpQLSdOuBxHJ0CyDRMmCoAKM5i79tuoP2vyv9Zo8G2svM_18y4ALA/viewform?usp=sf_link" style="text-decoration: none"><button class="w3-button w3-block" style="font-size: 4vh"><i class="fa fa-home green"></i> RECOVER HOMES</button></a></p>
	  </div>
    </div>
  </div>

</div>

<!-- Shop Section -->
<div class="w3-container w3-center w3-grey" style="padding: 32px 32px" id="shop">
  <p style="font-size: 6vh"><strong>Buy Ranks</strong></p>
  <p class="reduce-line-height-more" style="font-size: 3vh">Each donor rank requires the prior rank to be purchased first.</p>
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
</footer>

<script>

// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
    } else {
        mySidebar.style.display = 'block';
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>

</body>
</html>
