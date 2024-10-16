<?php
session_start();
if ($_SESSION['role'] != 'store') {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Store Dashboard</title>
</head>
<body>
    <h2>Welcome to the Store Dashboard</h2>
    <p>Hello, <?php echo $_SESSION['username']; ?>!</p>
    <a href="logout.php">Logout</a>
</body>
</html>
