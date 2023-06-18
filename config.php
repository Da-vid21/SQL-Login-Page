<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['signup'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "INSERT INTO users(username, password) VALUES ('$username', '$password')";
    if (mysqli_query($conn, $sql)) {
        echo "Signup successful $username.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    } 
}
if (isset($_POST['signin'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo "Sign in successful $username.";
    } else {
        echo "incorret username or password";
    } 
}
mysqli_close($conn);
?>