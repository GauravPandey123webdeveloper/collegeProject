<?php
require "contactdb.php";
if($_SERVER["REQUEST_METHOD"] == "POST"){
     echo $first_name=$_POST['first_name'];
     echo $last_name=$_POST['last_name'];
     echo $state=$_POST['state'];
    echo   $comment=$_POST['comment'];
    
 
    $sql="INSERT INTO `contact`(`first_name`, `last_name`, `state`, `comment`) VALUES ('$first_name','$last_name','$state','$comment')";

    $res=mysqli_query($con,$sql);

    if($res){
        header('Location: ../index.html');
    }
    else{
        echo "Something is wrong!";
    }
}
else{
    echo "failed";
}


?>