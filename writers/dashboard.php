<?php
session_start();
// Check if user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: ../auth/login.php");
    exit;
}
?>
<!-- html top section -->
<?php require('./includes/header.php'); ?>


<h1>welcome writer</h1>
<a href="./articles/create.php">create article</a>
<!-- footer section -->
<?php require('./includes/footer.php'); ?>