<!doctype html>

<html>

<head>
    <link rel="shortcut icon" href="logo.ico" />
    <title>
        MedBazaar: Searches
    </title>
    <link href="https://fonts.googleapis.com/css?family=Bitter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/recsearch.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        #customers {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 50%;
        }
        
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
            text-align: center;
            background-color: #4CAF50;
            color: white;
        }
        
        #customers td {
            text-align: center;
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
                    <li class="navbar-item"> <a class="nav-link" href="login_page.php" style="color: white;"> Login/Sign Up</a></li>
                </ul>
            </div>
        </div>
    </nav>
    </br>
    </br>

    <table id="customers" align="center">
        <tr>
            <th>Frequent Searches</th>
        </tr>
<?php
    include 'dbconnection.php';
    $query="SELECT * FROM `frequent_searches`";
    $result=mysqli_query($conn, $query);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_assoc($result))
        {
            $val=$row["Search_Term"];
?>
        <tr>
            <td><?php echo $val ?></td>
            
        </tr>
<?php         
        }
    }
?>

    </table>
    <br><br>
    <table id="customers" align="center">
        <tr>
            <th>Recent Searches</th>
        </tr>
<?php
    include 'dbconnection.php';
    $query="SELECT * FROM `recent_searches`";
    $result=mysqli_query($conn, $query);
    $prev_val="-1";
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_assoc($result))
        {
            $val=$row["Term"];
            if($val!=$prev_val)
            {
?>
        <tr>
            <td><?php echo $val ?></td>
            
        </tr>
<?php    
                $prev_val=$val;
            }
        }
    }
?>

    </table>
    
    </br>
    </br>
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
</body>
</html>