<?php
session_start();

include 'dbconnection.php';
if(isset($_POST['login']))
{
    $user=htmlentities($_POST['username']);
    $pass=htmlentities($_POST['password']);
    $query="SELECT * FROM `admin` WHERE Username='$user' AND Password='$pass'";
    $run=mysqli_query($conn, $query);
    if(mysqli_num_rows($run) === 1)
    {    
        $_SESSION['login_msg']="Successfully Logged in";
    }
    else
    {    
        $_SESSION['login_msg']="Invalid Username or Password";
    }
}
else
    $_SESSION['login_msg']="Something Went Wrong. Please Try Again";

header("Location: admin_login_page.php");

?>