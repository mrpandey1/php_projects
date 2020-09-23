<?php
include('includes/config.php');
include('includes/classes/Artist.php');
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
            <?php include('includes/navBarContainer.php') ?>

            <div id="mainViewContainer">
                <div id="mainContent">