

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>
<body>

<?php

include "../DBconnection/connection.php"; 
include "../DBconnection/functions.php";

$connection = mysqli_connect('localhost', 'root', '', 'captaincruise');

    $id = $_GET['id'];

    echo"<script> confirm('Do you want to Delete This booking record?')</script>";

   $sql = "DELETE FROM bills where bill_ID= $id";
    $result = mysqli_query($connection , $sql);

if($result)
{
    mysqli_close($connection);
    header("location:./billing.php"); 
    exit;	
}
else
{
    echo "Error deleting record";
}

?>




    
</body>
</html>