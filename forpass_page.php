<!doctype html>

<html>

<head>
    <link rel="shortcut icon" href="logo.ico" />
    <title>
        MedBazaar: Forgot Password
    </title>
    <link href="https://fonts.googleapis.com/css?family=Bitter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/forpass.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">
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

    <div class="card">
        <div class="card-body">
            <h3 class="display-4 card-title">
                Find Your Account
            </h3>
            <hr class="underline">

<?php session_start(); ?>
            <form action="update_pass.php" method="POST">

                <p class="passacc">
                    Enter Your Email ID Below
                </p>
                <div class="enter">
                    <div class="w3-row w3-section">
                        <div class="w3-col" style="width:50px">
                        </div>
                        <div class="w3-rest">

                            <input class="w3-input w3-border" name="email" type="email" placeholder="Email ID">
                        </div>
                    </div>
                </div>


                <p class="passsec">
                    Select Your Security Question
                </p>
                
                    <div class="enterop">
                        <select id="secques" name="security">
                            <option value="aa">Choose An Option</option>
                            <option value="Name Of My Favorite Color">Name Of My Favorite Color</option>
                            <option value="Name Of My First Pet">Name Of My First Pet</option>
                            <option value="Name Of My Favorite Dish">Name Of My Favorite Dish</option>
                            <option value="Name Of My First Primary School">Name Of My First Primary School</option>
                            <option value="Name Of My Favorite Aunt">Name Of My Favorite Aunt</option>
                        </select>
                    </div>
                



                <p class="passans">
                    Enter Your Answer
                </p>
                <div class="enter">
                    <div class="w3-row w3-section">
                        <div class="w3-col" style="width:50px">
                        </div>
                        <div class="w3-rest">
                            <input class="w3-input w3-border" name="answer" type="text" placeholder="Answer">
                        </div>
                    </div>
                </div>


                <p class="passent">
                    Enter New Password
                </p>
                <div class="enter">
                    <div class="w3-row w3-section">
                        <div class="w3-col" style="width:50px">
                        </div>
                        <div class="w3-rest">
                            <input class="w3-input w3-border" name="password" type="password" placeholder="New Password">
                        </div>
                    </div>
                </div>

                <p class="passent">
                    Confirm Password
                </p>
                <div class="enter">
                    <div class="w3-row w3-section">
                        <div class="w3-col" style="width:50px">
                        </div>
                        <div class="w3-rest">
                            <input class="w3-input w3-border" name="confirm_password" type="password" placeholder="Confirm Password">
                        </div>
                    </div>
                </div>


                <input type="submit" value="CHANGE PASSWORD" name="submit" class="button">

            </form>
        </div>
    </div>
    </br>
    </br>
<?php

if(!empty($_SESSION['update_pass_msg']))
{    
?>
<script>
    alert("<?php echo $_SESSION['update_pass_msg']; ?>");
</script>
<?php
    $msg=$_SESSION['update_pass_msg'];
    session_unset();
    if($msg=="Password updated")
    {   echo "<script> location.href='login_page.php'; </script>";
    }
}
?>
    </br>
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
    </br>
    </br>
</body>

</html>