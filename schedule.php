
<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head><title>Schedule Post</title></head>
<body>
    <h2>Schedule a Post</h2>
    <form method="post">
        <textarea placeholder="Write your post..."></textarea><br>
        <input type="datetime-local"><br>
        <select>
            <option>Facebook</option>
            <option>Twitter</option>
            <option>Instagram</option>
        </select><br>
        <button type="submit">Schedule</button>
    </form>
</body>
</html>
