<?php
include('../../config.php');

if(isset($_POST['playlistId']) && isset($_POST['songId'])) {
	$playlistId = $_POST['playlistId'];
    $songId=$_POST['songId'];
    $orderIdQuery=mysqli_query($con,"SELECT MAX(playlistOrder)+1 as playlistOrder from playlistSongs where playlistId='$playlistId'");
    $row=mysqli_fetch_array($orderIdQuery);
    $order=$row['playlistOrder'];
    echo $order;
    $query=mysqli_query($con,"INSERT INTO playlistSongs (`songId`, `playlistId`, `playlistOrder`) values('$songId','$playlistId','$order')");
}
else {
	echo "parameters not passed into file";
}

?>