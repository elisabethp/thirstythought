<?php 
    $nav = array("ABOUT", "CATEGORIES", "GIVEAWAYS", "FEATURES", "CONTACT", "FOLLOW ME");
?>

<html>
    <head>
        <meta charset="utf-8"/>
        <title><?php if (isset($current_item)) { 
                    echo $feed[$current_item]['title'] . " | "; }?>Thirstythought</title>

        <!--CSS-->
        <link rel="stylesheet" type = "text/css" href="./css/style.css"/>
        <link href="//cdn.rawgit.com/noelboss/featherlight/1.7.1/release/featherlight.min.css" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" href="./css/font-awesome/css/font-awesome.min.css">
        
        <!--SCRIPTS-->
        <script type="text/javascript" src="./js/jquery-1.8.3.min.js"></script>
        <script type="text/javascript" src="./js/site.js"></script>
        <!-- http://masonry.desandro.com/ -- includes image grid -->
        <script src="./js/masonry.js"></script> 
        <!-- http://imagesloaded.desandro.com/ -- fixes layoutting issue bc of slow loading -->
        <script src="https://unpkg.com/imagesloaded@4.1/imagesloaded.pkgd.min.js"></script>
        <!-- http://noelboss.github.io/featherlight/ -- includes lightbox -->
        <script src="//cdn.rawgit.com/noelboss/featherlight/1.7.1/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>
    </head>
    <body>
        <div id="nav">
            <ul>
                <?php 
                    for ($i = 0; $i < count($nav); $i++) {
                        echo "<div><li>" . $nav[$i] . "</li></div>";
                    }
                ?>
                <div><li id="resp-menu"><i class="fa fa-bars" aria-hidden="true"></i>Navigation</li></div>
            </ul>
            <div id="s-media">
                <img src="./img/topmenu-twitter-mo.png"/>
                <img src="./img/topmenu-instagram-mo.png"/>
                <img src="./img/topmenu-fb-mo.png"/>
                <img src="./img/topmenu-bloglovin-mo.png"/>
                <img src="./img/topmenu-yt-mo.png"/>
            </div>
        </div> <!-- end of nav -->
        <div id="resp-menu-options">
            <ul> 
                <?php 
                    for ($i = 0; $i < count($nav); $i++) {
                        echo "<div><li>" . $nav[$i] . "</li></div>";
                    }
                 ?>
            </ul>
        </div>
        <div id="site-container">
            <div id="header">
                <div id="logo-container">
                    <!--<div>-->
                        <img src="./img/logo-top.png"/>
                    <!--</div> <!-- end of logo div -->
                </div>  <!--end of logo container -->
            </div> <!--end of header -->