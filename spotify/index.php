<?php
include('includes/config.php');

//session_destroy

if(isset($_SESSION['userLoggedIn'])){
    $userLoggedIn=$_SESSION['userLoggedIn'];
}else{
    header('location:register.php');
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to spotify</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div id="mainContainer">
        <div id="topContainer">
            <div id="navBarContainer">
                <nav class='navBar'>
                    <a href="index.php" class="logo">
                        <img src="assets/images/icons/logo.png " alt="">
                    </a>

                    <div class="group">
                        <div class="navItem">
                            <a href="search.php" class="navItemLink">Search
                                <img src="assets/images/icons/search.png" alt="search" class='icon'>
                            </a>
                        </div>    
                    </div>

                    <div class="group">
                        <div class="navItem">
                            <a href="browse.php" class="navItemLink">Browse</a>
                        </div>  
                        <div class="navItem">
                            <a href="yourMusic.php" class="navItemLink">Your music</a>
                        </div>  
                        <div class="navItem">
                            <a href="search.php" class="navItemLink">Nishant Pandey</a>
                        </div>  
                    </div>
                </nav>
            </div>
        </div>

        <div id='nowPlayingBarContainer'>
            <div id="nowPlayingBar">
                <div id="nowPlayingLeft">
                    <div class="content">
                        <span class="albumLink"><img src="https://i.ytimg.com/vi/rb8Y38eilRM/maxresdefault.jpg" class="albumArtwork">
                        </span>
                        <div class="trackInfo">
                            <span class="trackName">
                                <span>Happy Birthday</span>
                            </span>
                            <span class="artistName">
                                <span>Nishant Pandey</span>
                            </span>
                        </div>
                    </div>
                </div>
                <div id="nowPlayingCenter">
                    <div class="content playerControls">
                        <div class="buttons">
                            <button class='controlButton shuffle' title="shuffle button">
                                <img src="assets/images/icons/shuffle.png">
                            </button>
                            <button class='controlButton previous' title="previous button">
                                <img src="assets/images/icons/previous.png">
                            </button>
                            <button class='controlButton play' title="play button">
                                <img src="assets/images/icons/play.png">
                            </button>
                            <button class='controlButton next' title="next button">
                                <img src="assets/images/icons/next.png">
                            </button>
                            <button class='controlButton repeat' title="repeat button">
                                <img src="assets/images/icons/repeat.png">
                            </button>
                        </div>

                        <div class="playbackBar">
                            <span class='progressTime current'>0.00</span>
                            <div class="progressBar">
                                <div class="progressBarBg">
                                    <div class="progress"></div>
                                </div>
                            </div>
                            <span class='progressTime remaining'>0.00</span>
                        </div>

                    </div>
                </div>
                <div id="nowPlayingRight">
                    <div class="volumeBar">
                        <button class="controlButton volume" title="Volume button">
                            <img src="assets/images/icons/volume.png" alt="volume">
                        </button>
                        <div class="progressBar">
                            <div class="progressBarBg">
                                <div class="progress"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>