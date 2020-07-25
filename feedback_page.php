<!doctype html>

<html>

<head>
    <link rel="shortcut icon" href="logo.ico" />
    <title>
        MedBazaar: Feedback
    </title>
    <link href="https://fonts.googleapis.com/css?family=Bitter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/feedback.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>

<body>
    <nav>
        <div class="navbar navbar-expand-md navbar-light bg-success">
            <a href="#" class="navbar-brand">
                <img src="logo.jpg" class="logo" />
            </a>
            <h1 style="color: white"> MedBazaar: The Online Pharma Search Engine </h1>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav nav ml-auto">
                    <li class="navbar-item"> <a class="nav-link" href="index.php" style="color: white;"> Home</a></li>
                    <li class="navbar-item"> <a class="nav-link" href="aboutus.html" style="color: white;"> About Us</a></li>
                    <li class="navbar-item"> <a class="nav-link" href="login_page.php" style="color: white;"> Login/Sign Up</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <?php session_start(); ?>
    <form action="feedback_store.php" method="post">
<div class="card">
<div class="card-body">
<h3 class="display-4 card-title">
                Feedback
            </h3>
            <hr class="underline" style="margin-top: -10px">
    <div class="femail">
</br>
    <p>
        <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px">
            </div>
            <div class="w3-rest">
                <input class="w3-input w3-border" name="email" type="email" placeholder="Email">
            </div>
        </div>
    </p>
    </div>
    <div class="feed">
    <p>
        <div class="w3-row w3-section">
            <div class="w3-col">
            </div>
            <div class="w3-rest">
                <textarea name="feedback" rows="10" cols="100" placeholder="Please Enter Your Feedback Here... (max 500 characters)"></textarea>
            </div>
        </div>
    </p>
    <input type="submit" value="SUBMIT" name="submit" class="button">

</div>
</div>
</div>
</form>
    </br>

<?php

if(!empty($_SESSION['feedback_msg']))
{    
?>
<script>
    alert("<?php echo $_SESSION['feedback_msg']; ?>");
</script>
<?php
    $msg=$_SESSION['feedback_msg'];
    session_unset();
    if($msg=="Thank You for your Suggestion.")
    {   echo "<script> location.href='index.php'; </script>";
    }
}
?>

    </br>
    </br>
    <div class="footer">
        <h2>Contact Us</h2>
        <p>
            Phone No: +91 8095589795, +91 9739160724</br>
            Email ID: <a href="https://accounts.google.com/signin/v2/identifier?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&service=mail&sacu=1&rip=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin">medbazaarofficial@gmail.com</a></br>
            For Any Feedback & Suggestions, <a href="feedback_page.php">Click Here!</a>
        </p>
    </div>
    </br>

    </br>
    </br>
    </br>
</body>

</html>