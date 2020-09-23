<?php include('includes/header.php');
    if (isset($_GET['id'])){
        $albumId=$_GET['id'];
    }else{
        header('location:index.php');
    }
    $albumQuery=mysqli_query($con,"SELECT * from albums where id='$albumId'");
    $album=mysqli_fetch_array($albumQuery);
    $artist= new Artist($con,$album['artist']);
    echo $album['title']."<br>";
    echo $artist->getName();
?>

<?php include('includes/footer.php');?>