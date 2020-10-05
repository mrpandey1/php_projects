<?php
include("../../config.php");

if(isset($_POST['playlistId'])) {
	$playlistId = $_POST['playlistId'];
	$playListquery = mysqli_query($con, "DELETE from playlists where id='$playlistId'");
	$songsquery = mysqli_query($con, "DELETE from playlistSongs where playlistId='$playlistId'");
}
else {
	echo "Playlistid parameter not passed into file";
}

?>