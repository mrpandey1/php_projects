<?php
include('includes/includedFiles.php');
?>
<div class="userDetails">
    <div class="container borderBottom">
        <h2>Email</h2>
        <input type="text" class="email" name="email" placeholder="email address" value="<?php echo $userLoggedIn->getEmail(); ?>">
        <span class="message"></span>
        <button class="button" onclick="updateEmail('email')">save</button>
    </div>
    <div class="container">
        <h2>Password</h2>
        <input type="password" class="oldPassword" name="oldPassword" placeholder="Old Password">
        <input type="password" class="newPassword1" name="newPassword1" placeholder="New Password">
        <input type="password" class="newPassword2" name="newPassword2" placeholder="Confirm Password">
        <span class="message"></span>
        <button class="button" onclick="updatePassword('oldPassword','newPassword1','newPassword2')">save</button>
    </div>
</div>