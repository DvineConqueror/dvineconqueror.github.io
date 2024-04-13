<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "legendary_motorsports";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        // Check role and redirect accordingly
        if ($row['role'] == 'admin'){
            header("Location: admin/adminhub/admin_index.php"); // Redirect to admin view
        } else {
            header("Location: index.php"); // Redirect to customer view
        }
        exit();
    } else {
        echo "Incorrect password";
    }
} else {
    echo "User not found";
}

$conn->close();
?>
