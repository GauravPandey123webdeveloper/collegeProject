<?php
$servername = "localhost"; // Change this to your server name
$username = "root"; // Change this to your MySQL username
$password = ""; // Change this to your MySQL password
$dbname = "newuser";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// If the connection is successful
if (isset($_POST['signup'])) {
    $user = $_POST['user'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (username, email, password) VALUES ('$user', '$email', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
// Close the connection
mysqli_close($conn);
?>
