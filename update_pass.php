<?php
session_start();

include 'dbconnection.php';

if(isset($_POST['submit']))
{
    $pass=$_POST['password'];
    $confirm_pass=$_POST['confirm_password'];
    $ans=$_POST['answer'];
    $email=$_POST['email'];
    $security=$_POST['security'];
    if($pass!="" && $confirm_pass!="" && $ans!="" && $email!="" && $security!="aa")
    {
        if($pass==$confirm_pass)
        {
            $get_ans_query="SELECT `Answer` FROM `users` WHERE `Email`='$email'";
            $result=mysqli_query($conn, $get_ans_query);
            if(mysqli_num_rows($result) > 0)
            {
                $row=mysqli_fetch_assoc($result);
                $correct_ans=$row['Answer'];
            }
            else
            {
                $_SESSION['update_pass_msg']="Unregistered Email";
                header("Location: forpass_page.php");
                die;
            }
            if($correct_ans==$ans)
            {
                $update_query="UPDATE `users` SET `Password`='$pass'WHERE `Email`='$email'";
                $run=mysqli_query($conn, $update_query);
                if($run==true)
                {
                    $_SESSION['update_pass_msg']="Password updated";
                }
                else
                {
                    $_SESSION['update_pass_msg']="Error updating password";
                }
            }
            else
            {
                $_SESSION['update_pass_msg']="The answer is incorrect";
            }
        }
        else
        {
            $_SESSION['update_pass_msg']="Passwords dont match";
        }
    }
    else
    {
        $_SESSION['update_pass_msg']="One or more fields were left blank";
    }
}
else
    $_SESSION['update_pass_msg']="Something went Wrong. Please Try Again";

header("Location: forpass_page.php");
?>