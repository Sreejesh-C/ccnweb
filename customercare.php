<?php
session_start();
if ($_SESSION['role'] != 'customercare') {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Customer Care Dashboard</title>
</head>
<body>
    <h2>Welcome to the Customer Care Dashboard</h2>
    <p>Hello, <?php echo $_SESSION['username']; ?>!</p>
    <a href="logout.php">Logout</a>
</body>
</html>
