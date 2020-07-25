<!doctype html>

<html>

<head>
    <link rel="shortcut icon" href="logo.ico" />
    <title>
        MedBazaar: Sign Up
    </title>
    <link href="https://fonts.googleapis.com/css?family=Bitter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/signup.css">
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

<?php

session_start();

?>

    <form action="signup.php" method="POST">
        <div class="card">
            <div class="card-body">
                <h1 class="display-4 card-title">Sign Up</h1>
                <hr class="underline">

                <div class="enter">
                    <div class="w3-row w3-section">
                        <div class="w3-col" style="width:50px">
                        </div>
                        <div class="w3-rest">
                           
                                <input class="w3-input w3-border" name="first_name" type="text" placeholder="First Name">
                           
                        </div>
                    </div>
                </div>
                </br>
                <div class="enter">
                    <div class="w3-row w3-section">
                        <div class="w3-col" style="width:50px">
                        </div>
                        <div class="w3-rest">
                           
                                <input class="w3-input w3-border" name="last_name" type="text" placeholder="Last Name">
                           
                        </div>
                    </div>
                </div>
                <br>
                <div class="enter">
                    <div class="w3-row w3-section">
                        <div class="w3-col" style="width:50px">
                        </div>
                        <div class="w3-rest">
                            
                                <input class="w3-input w3-border" name="email" type="email" placeholder="Email ID">
                            
                        </div>
                    </div>
                </div>
                </br>
                <div class="enter">
                    <div class="w3-row w3-section">
                        <div class="w3-col" style="width:50px">
                        </div>
                        <div class="w3-rest">
                           
                                <input class="w3-input w3-border" name="pass" type="password" placeholder="Password">
                           
                        </div>
                    </div>
                </div>
                </br>
                <div class="enter">
                    <div class="w3-row w3-section">
                        <div class="w3-col" style="width:50px">
                        </div>
                        <div class="w3-rest">
                           
                                <input class="w3-input w3-border" name="phone" type="text" placeholder="Mobile Number">
                           
                        </div>
                    </div>
                </div>
                </br>

                
                    <div class="enterop">
                        <select id="secques" name="security">
                                    <option value="aa">Security Question</option>
                                    <option value="Name Of My Favorite Color">Name Of My Favorite Color</option>
                                    <option value="Name Of My First Pet">Name Of My First Pet</option>
                                    <option value="Name Of My Favorite Dish">Name Of My Favorite Dish</option>
                                    <option value="Name Of My First Primary School">Name Of My First Primary School</option>
                                    <option value="Name Of My Favorite Aunt">Name Of My Favorite Aunt</option>
                                </select>
                    </div>
                
                </br>
                <div class="enter">
                    <div class="w3-row w3-section">
                        <div class="w3-col" style="width:50px">
                        </div>
                        <div class="w3-rest">
                           
                                <input class="w3-input w3-border" name="answer" type="text" placeholder="Answer">
                           
                        </div>
                    </div>
                </div>
                </br>
                <p class="verify">
                    By clicking Sign Up, you agree to our Terms, Data Policy and Cookie Policy. </br>You may receive SMS notifications from us and can opt out at any time.
                </p>
                </br>

                <input type="submit" value="SIGN UP" name="signup" class="button">

                </br>

            </div>
        </div>
    </form>
    </br>
    </br>
<?php

if(!empty($_SESSION['signup_msg']))
{   
?>
    <script>
     alert("<?php echo $_SESSION['signup_msg']; ?>");
    </script>
<?php
    $msg=$_SESSION['signup_msg'];
    session_unset();
    if($msg=="Sign Up Successful")
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
</body>

</html>