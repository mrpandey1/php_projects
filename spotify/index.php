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
    <div id='nowPlayingBarContainer'>
        <div id="nowPlayingBar">
            <div id="nowPlayingLeft">
            
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
                
            </div>
        </div>
    </div>
</body>
</html>