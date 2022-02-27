<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./profile.css?v=<?php echo time(); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/7c77a89f23.js"></script>
    <script src="https://kit.fontawesome.com/b961a2b7a4.js" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css'>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="./profile.js?v=<?php echo time(); ?>"></script>
    <title>Profile</title>
</head>
<body>

<div class="container">

<div class="row mt-2" id="row-1">

<h3><Label>Employee Details</Label></h3>

</div>

   <?php

$connection = mysqli_connect('localhost', 'root', '', 'captaincruise');
$id = $_GET['id'];
$sql = "SELECT * FROM employee where ID ='$id' ";
$result = mysqli_query($connection , $sql);
while($row = mysqli_fetch_array($result)){

echo "<div class=\"row mt-3\" id=\"profile-data-row\">";
echo "<div class=\"col-4\" id=\"profile-picture\">";
echo "<img src=\"../profilepic/$row[Picture]\" class=\"img-thumbnail\" alt=\"\" id=\"profilepic\">";
echo "</div>";
echo "<div class=\"col-8\">";
echo "<div class=\"table-responsive\">";
echo "<table class=\"table\">";
echo "<tr>";
echo "<th>Employee ID</th>";
echo "<th>:</th>";
echo "<td>".$row['ID']."</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Full Name</th>";
echo "<th>:</th>";
echo "<td>".$row['Name']."</td>";
echo "</tr>";
echo "<tr>";
echo "<th>NIC Number</th>";
echo "<th>:</th>";
echo "<td>".$row['EmNIC']."</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Position</th>";
echo "<th>:</th>";
echo "<td>".$row['Position']."</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Entry Date</th>";
echo "<th>:</th>";
echo "<td>".$row['JobDate']."</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Address</th>";
echo "<th>:</th>";
echo "<td>".$row['Address']."</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Contact</th>";
echo "<th>:</th>";
echo "<td>".$row['Contact']."</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Bank account number</th>";
echo "<th>:</th>";
echo "<td>".$row['Bankaccount']."</td>";
echo "</tr>";
echo "";
echo "";
echo "";
echo "";
echo "</table>";
echo "";
echo "";
echo "</div>";
echo "</div>";
echo "";
echo "";
echo "</div>";
}
?>


</div>
    
</body>
</html>