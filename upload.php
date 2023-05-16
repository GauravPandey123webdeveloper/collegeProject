// upload.php
<?php
// check if user is logged in
session_start();
if (!isset($_SESSION['user_id'])) {
	header('Location: login.php');
	exit();
}

// connect to the database
$host = 'localhost';
$username = 'root
