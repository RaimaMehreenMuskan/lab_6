<?php
session_start();

// If user is NOT logged in → go back to login
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<?php include 'header.inc'; ?>

<h3>Welcome Page</h3>

<p>Hello <?php echo $_SESSION['user']; ?></p>

<br>
<a href="logout.php">Logout</a>

<?php include 'footer.inc'; ?>