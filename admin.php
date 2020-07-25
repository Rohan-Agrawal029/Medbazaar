<!doctype html>

<html>

<head>
    <link rel="shortcut icon" href="logo.ico" />
    <title>
        MedBazaar: Admin Login
    </title>
    <link href="https://fonts.googleapis.com/css?family=Bitter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        #customers {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        
        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }
        
        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        
        #customers tr:hover {
            background-color: #ddd;
        }
        
        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }
    </style>
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
                    <li class="navbar-item"> <a class="nav-link" href="login_page.php" style="color: white;"> Sign Out</a></li>
                </ul>
            </div>
        </div>
    </nav>
    </br>
    </br>

    <table id="customers">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email ID</th>
            <th>Password</th>
            <th>Mobile No</th>
            <th>Security Question</th>
            <th>Answer</th>
            <th>Want To Delete The User?</th>
        </tr>

<?php
    session_start();
    include 'dbconnection.php';
    $query="CALL `get_users`()";
    $result=mysqli_query($conn, $query);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_assoc($result))
        {
            $email=$row['Email'];
            $first_name=$row['First Name'];
            $last_name=$row['Last Name'];
            $phone=$row['Phone No'];
            $pass=$row['Password'];
            $security=$row['Security Ques'];
            $ans=$row['Answer'];
?>
        <tr>
            <td><?php echo $first_name ?></td>
            <td><?php echo $last_name ?></td>
            <td><?php echo $email ?></td>
            <td><?php echo $pass ?></td>
            <td><?php echo $phone ?></td>
            <td><?php echo $security ?></td>
            <td><?php echo $ans ?></td>
            <td><form action="delete_user.php" method="post">
                <input type="hidden" name="email" value="<?= $email ?>">
                <input type="submit" value="DELETE" name="delete" class="button">
            </form></td>
        </tr>

<?php
        }
    }
    else
        echo "<h4> Looks like no one signed up until now... </h4>";
?>
    </table>
    </br>
    </br>

<?php
    if(!empty($_SESSION['delete_msg']))
    {
?>
<script>
    alert("<?php echo $_SESSION['delete_msg'] ?>")
</script>
<?php
        $msg=$_SESSION['delete_msg'];
        session_unset();
        if($msg=="User Deleted")
            echo "<script> location.href='admin.php'; </script>";
    }
?>

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