<?php include('includes/header.php');
    if (isset($_GET['id'])){
        $albumId=$_GET['id'];
    }else{
        header('location:index.php');
    }

    $album=new Album($con,$albumId);
    $artist= $album->getArtist();
    $numberOfSongs=$album->getNumberOfSongs();
?>
<div class="entityInfo">
    <div class="leftSection">
        <img src="<?php echo $album->getArtworkPath() ?>" alt="">
    </div>
    <div class="rightSection">
        <h2><?php echo $album->getTitle() ?></h2>
        <span>By <?php echo $artist->getName() ?></span>
        <p><?php if($numberOfSongs>1){
            echo $numberOfSongs.' songs';
        }else{
            echo $numberOfSongs.' song';
        }?></p>
    </div>
</div>

<div class='trackListContainer'>
    <ul class="trackList">
        <?php
            $songIdArray=$album->getSongIds();
            $i=1;
            foreach($songIdArray as $songId){
                $albumSong=new Song($con,$songId);
                $albumArtist=$albumSong->getArtist();

                echo "<li class='trackListRow'>
                        <div class='trackCount'>
                            <img class='play' src='assets/images/icons/play-white.png'/>
                            <span class='trackNumber'>$i</span>
                        </div>
                        <div class='trackInfo'>
                            <span class='trackName'>".$albumSong->getTitle()."</span>
                            <span class='trackName'>".$albumArtist->getName()."</span>
                        </div>
                        <div class='trackOptions'>
                            <img class='optionsButton' src='assets/images/icons/more.png'/>
                        </div>

                        <div class='trackDuration'>
                            <span class='duration'>".$albumSong->getDuration()."</span>
                        </div>

                      </li>";
                $i+=1;
            }
        ?>
    </ul>
</div>
<?php include('includes/footer.php');?>