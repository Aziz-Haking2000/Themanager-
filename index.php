
<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>theManager - Dashboard</title>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['user']; ?>!</h1>
    <p><a href="schedule.php">Schedule a Post</a> | <a href="logout.php">Logout</a></p>
</body>
</html>
