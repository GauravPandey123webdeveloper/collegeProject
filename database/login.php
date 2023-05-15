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
//sign in 
if (isset($_POST['signin'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo "Login successful";
        header('Location: ../index.html');
        // You can redirect the user to a different page here
    } else {
        echo "Incorrect email or password";
    }
}


// Close the connection
mysqli_close($conn);
?>
