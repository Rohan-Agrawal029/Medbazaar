<?php

include 'dbconnection.php';

$query="DELETE FROM `medicines` WHERE `Name` LIKE '%'";
$run=mysqli_query($conn, $query);

?>