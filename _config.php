<?php 
$conn = mysqli_connect("localhost", 'anitiumn_anikat' , '010203asa*-', "anitiumn_anikat") or die("Connection fail");


$websiteTitle = "Anitium"; // Website Name
$websiteUrl = "//{$_SERVER['SERVER_NAME']}";  // Website URL
$websiteLogo = $websiteUrl . "/files/images/logo.png"; // Logo
$contactEmail = "anitium09@gmail.com"; // Contact Email

$version = "0.3";

//Donate 
$donate = "https://patreon.com/anitium/";

// Socials 
$telegram = "https://patreon.com/anitium/"; // telegram
$discord = "https://patreon.com/anitium/"; // Discord
$redit = "https://patreon.com/anitium/"; // Reddit
$twitter = "https://patreon.com/anitium/"; // Twitter
 


$disqus = "https://anitium.disqus.com"; // Disqus


// API URL
$api = "https://anitium.cagatayilhan.repl.co"; // https://github.com/shashankktiwariii/anikatsu-api


$banner = $websiteUrl . "/files/images/banner.png";  //Banner
?>
