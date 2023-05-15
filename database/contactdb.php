<?php
$servername="localhost";
$username="root";
$password="";
$dbname="newuser";
$con = mysqli_connect($servername,$username,$password,$dbname );
if(!$con)
{
    echo "try again";

}
?>