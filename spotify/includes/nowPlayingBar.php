<?php
    $songQuery=mysqli_query($con,"SELECT id from Songs ORDER BY RAND() LIMIT 10");
    $resultArray=array();
    while ($row=mysqli_fetch_array($songQuery)){
        array_push($resultArray,$row['id']);
    }
    $jsonArray=json_encode($resultArray);
?>
<script>
    $(document).ready(function(){
    currentPlaylist=<?php echo $jsonArray ?>;
    console.log(currentPlaylist);
    audioElement=new Audio(); 
    setTrack(currentPlaylist[0],currentPlaylist,false);
    });
    function setTrack(trackId,newPlayList,play){

        $.post("includes/handlers/ajax/getSongjson.php",{ songId:trackId  },function(data){
            var track=JSON.parse(data); 
            $(".trackName span").text(track.title);
            $.post("includes/handlers/ajax/getArtistjson.php",{ artistId:track.artist  },function(data){
                var artist=JSON.parse(data); 
                $(".artistName span").text(artist.name);
            }); 
            audioElement.setTrack(track.path);
            audioElement.play();
        });

        if(play){
            audioElement.play();
        }
    }

    function playSong(){
        $('.controlButton.play').hide();
        $('.controlButton.pause').show();
        audioElement.play();
    }
    function pauseSong(){
        $('.controlButton.pause').hide();
        $('.controlButton.play').show();
        audioElement.pause();
    }

</script>

<div id='nowPlayingBarContainer'>
            <div id="nowPlayingBar">
                <div id="nowPlayingLeft">
                    <div class="content">
                        <span class="albumLink"><img src="https://i.ytimg.com/vi/rb8Y38eilRM/maxresdefault.jpg" class="albumArtwork">
                        </span>
                        <div class="trackInfo">
                            <span class="trackName">
                                <span></span>
                            </span>
                            <span class="artistName">
                                <span></span>
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
                            <button class='controlButton play' onclick="playSong()" title="play button">
                                <img src="assets/images/icons/play.png">
                            </button>
                            <button class='controlButton pause' onclick="pauseSong()" style="display: none;" title="pause button">
                                <img src="assets/images/icons/pause.png">
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