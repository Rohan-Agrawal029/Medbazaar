<?php
session_start();

include 'dbconnection.php';
if(isset($_POST['signup']))
{
    $email=htmlentities($_POST['email']);
    $first_name=htmlentities($_POST['first_name']);
    $last_name=htmlentities($_POST['last_name']);
    $pass=htmlentities($_POST['pass']);
    $phone=htmlentities($_POST['phone']);
    $security=htmlentities($_POST['security']);
    $ans=htmlentities($_POST['answer']);
    if(!ctype_digit($phone))
    {
        $_SESSION['signup_msg']="Mobile No. can't contain characters";
        header("Location: signup_page.php");
        die;
    }
    else
        $phone=(int)htmlentities($_POST['phone']);
    if($email!="" && $first_name!="" && $last_name!="" && $phone!="" && $pass!="" && $security!="aa" && $ans!="")
    {
        $search_query="SELECT * FROM users WHERE Email='$email'";
        $result=mysqli_query($conn, $search_query);
        if(mysqli_num_rows($result) > 0)
            $_SESSION['signup_msg']="Email is already Registered";
        else
        {
            $insert_query="INSERT INTO `users`(`First Name`, `Last Name`, `Email`, `Password`, `Phone No`, `Security Ques`, `Answer`) VALUES ('$first_name','$last_name','$email','$pass','$phone','$security','$ans')";
            $run=mysqli_query($conn, $insert_query);
            if($run==true)
                $_SESSION['signup_msg']="Sign Up Successful";
            else
                $_SESSION['signup_msg']="Couldn't Register. Please Try Again".$insert_query.mysqli_error($conn);
        }
    }
    else
        $_SESSION['signup_msg']="One or More Fields were left blank. Please Try Again";
}
else
    $_SESSION['signup_msg']="Something went Wrong. PLease Try Again";

header("Location: signup_page.php");
?>
