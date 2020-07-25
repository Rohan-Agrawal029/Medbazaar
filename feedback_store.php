<?php

session_start();

include 'dbconnection.php';
if(isset($_POST['submit']))
{
    $email=htmlentities($_POST['email']);
    $comment=$_POST['feedback'];
    $search_query="SELECT * FROM `users` WHERE Email='$email'";
    $result=mysqli_query($conn, $search_query);
    if(mysqli_num_rows($result) === 1)
    {
        $insert_query="INSERT INTO `feedback`(`Email`, `Comments`) VALUES ('$email','$comment')";
        $run=mysqli_query($conn, $insert_query);
        if($run)
            $_SESSION['feedback_msg']="Thank You for your Suggestion.";
        else
            $_SESSION['feedback_msg']="Something Went Wrong. Your Suggestions are important to us. Please try again later.";
    }
    else
        $_SESSION['feedback_msg']="Email Not Registered. Please enter a Registered Email.";
}
else
    $_SESSION['feedback_msg']="Something Went Wrong. Your Suggestions are important to us. Please try again later.";    

header("Location: feedback_page.php");

?>