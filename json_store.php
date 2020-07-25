<?php

$string=file_get_contents("C:/xampp/htdocs/Medbazaar/pharmeasy.json");
if ($string===false)
    echo "<p>Couldn't open json file</p>";
$json_a=json_decode($string,true);
if($json_a===null)
    echo "<p>Coudn't Decode</p>";

include 'dbconnection.php';
foreach($json_a as $key => $val)
{
    $source=$val["source"];
    $med_name=$val["med_name"];
    $comp_name=$val["comp_name"];
    $quan=$val["quantity"];
    $price=$val["price"];
    $link=$val["link"];
    $search_term=$val["search_term"];
    if($price=="")
        $price="To be Updated";
    if($comp_name=="")
        $comp_name="To be Updated";
    if($quan=="")
        $quan="To be Updated";
    
    $insert_query="INSERT INTO `medicines`(`Name`, `Comp Name`, `Quantity`, `Price`, `Link`, `Source`, `Search_Term`) VALUES ('$med_name','$comp_name','$quan','$price','$link','$source','$search_term')";
    $run=mysqli_query($conn, $insert_query);
    if($run==true)
        echo "inserted";
    else
        echo "Couldn't insert " + $insert_query.mysqli_error($conn);
}

?>