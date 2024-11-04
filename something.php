<?php
// Vulnerable code: SQL Injection
$username = $_GET['username'];
$password = $_GET['password'];

// Not using prepared statements leads to SQL injection
$conn = new mysqli("localhost", "root", "", "testdb");
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Login successful!";
} else {
    echo "Invalid credentials.";
}
$conn->close();
?>
