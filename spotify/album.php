<?php include('includes/header.php');
    if (isset($_GET['id'])){
        $albumId=$_GET['id'];
    }else{
        header('location:index.php');
    }

    $album=new Album($con,$albumId);
    $artist= $album->getArtist();
    $numberOfSongs=$album->getNumberOfSongs()
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
<?php include('includes/footer.php');?>