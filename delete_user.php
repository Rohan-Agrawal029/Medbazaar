<?php
session_start();
include 'dbconnection.php';
if(isset($_POST['delete']))
{
    $email=$_POST['email'];
    $query="DELETE FROM `users` WHERE Email='$email'";
    $run=mysqli_query($conn, $query);
    if($run)
        $_SESSION['delete_msg']="User Deleted";
    else
        $_SESSION['dlete_msg']="Can't Deleted due to some error";
}
else
    $_SESSION['delete_msg']="Something went Wrong. Please Try Again Later.";
header("Location: admin.php");

?>