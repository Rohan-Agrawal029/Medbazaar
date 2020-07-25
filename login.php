<?php
session_start();

include 'dbconnection.php';
if(isset($_POST['login']))
{
    $email=htmlentities($_POST["email"]);
    $pass=htmlentities($_POST["pass"]);

    $search_query="SELECT * FROM users WHERE Email='$email' AND Password='$pass'";
    $result=mysqli_query($conn, $search_query);

    if(mysqli_num_rows($result) === 1)
        $_SESSION['login_msg']="Successfully Logged In";
    else 
        $_SESSION['login_msg']="Invalid Email or Password";
}
else
    $_SESSION['login_msg']="Something went Wrong. Please Try Again.";

header("Location: login_page.php");
?>