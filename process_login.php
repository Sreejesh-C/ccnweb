<?php
// process_login.php
session_start();
include 'db.php'; // Include database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['username'] = $row['username'];
        $_SESSION['role'] = $row['role'];

        // Redirect based on the role
        if ($row['role'] === 'store') {
            header('Location: store.php');
        } elseif ($row['role'] === 'services') {
            header('Location: services.php');
        } elseif ($row['role'] === 'customercare') {
            header('Location: customercare.php');
        } elseif ($row['role'] === 'supportengineer') {
            header('Location: supportengineer.php');
        }
        exit;
    } else {
        echo "Invalid login details.";
    }
}
?>
