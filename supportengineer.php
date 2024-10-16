<?php
session_start();
if ($_SESSION['role'] != 'supportengineer') {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Support Engineer Dashboard</title>
</head>
<body>
    <h2>Welcome to the Support Engineer Dashboard</h2>
    <p>Hello, <?php echo $_SESSION['username']; ?>!</p>
    <a href="logout.php">Logout</a>
</body>
</html>
