<?php session_start(); ?>
<?php require_once('../DBconnection/connection.php'); ?>
<?php require_once('../DBconnection/functions.php'); ?>

<?php

if(isset($_POST['submit'])){

    // $orderer= $_POST['orderer'];
    // $ordID = $_POST['orderid'];
    // $bookdate =$_POST['bookingdate'];
    // $booking = $_POST['bookingtime'];
    // $adult= $_POST['adult'];
    // $child=$_POST['child'];
    // $location=$_POST['location'];
    // $Address=$_POST['Address'];
    // $contact=$_POST['contact'];
    // $email=$_POST['email'];
    // $meal=$_POST['meal'];
    // $adcost=$_POST['adcost'];
    // $chicost=$_POST['chicost'];
    // $mealcost=$_POST['mealcost'];
    // $totalcost=$_POST['totalcost'];

    $orderer = mysqli_real_escape_string($connection, $_POST['orderer']);
    $ordID = mysqli_real_escape_string($connection, $_POST['orderid']);
    $bookdate = mysqli_real_escape_string($connection, $_POST['bookingdate']);
    $booking = mysqli_real_escape_string($connection, $_POST['bookingtime']);
    $adult = mysqli_real_escape_string($connection, $_POST['adult']);
    $child = mysqli_real_escape_string($connection, $_POST['child']);
    $package = mysqli_real_escape_string($connection, $_POST['package']);
    $location = mysqli_real_escape_string($connection, $_POST['location']);
    $Address = mysqli_real_escape_string($connection, $_POST['Address']);
    $contact = mysqli_real_escape_string($connection, $_POST['contact']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $meal = mysqli_real_escape_string($connection, $_POST['meal']);
    $adcost = mysqli_real_escape_string($connection, $_POST['adcost']);
    $chicost = mysqli_real_escape_string($connection, $_POST['chicost']);
    $mealcost = mysqli_real_escape_string($connection, $_POST['mealcost']);
    $totalcost = mysqli_real_escape_string($connection, $_POST['totalcost']);
    $guide = mysqli_real_escape_string($connection, $_POST['guide']);

    $query= "INSERT INTO bills (";
    $query .= "Orderer_name , Orderer_ID , Booking_date, Booking_time , Adult, Child, package, Location, Address, Contact_no, Email, Meals, Adult_cost, Child_cost,Meal_cost , Total_cost, Guide";
    $query .= ") VALUES (";
    $query .= "'{$orderer}','{$ordID}','{$bookdate}','{$booking}','{$adult}','{$child}','{$package}','{$location}','{$Address}','{$contact}','{$email}','{$meal}','{$adcost}','{$chicost}','{$mealcost}','{$totalcost}','{$guide}'";
    $query .= ")";

    $result = mysqli_query($connection, $query);
     if ($result){
// if successful
     echo'<script> alert("Bill is successfully Added!");
             </script>';
             header('Location:../Billing-section/billing.php');

     }else{

        echo'<script> alert("Process is Falied, Please try again")</script>';


     }




}






?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./billing-convert.css?v=<?php echo time(); ?> ">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/7c77a89f23.js"></script>
    <link rel="stylesheet" href="../Billing-section/billing.css?v=<?php echo time(); ?>">
    <script src="https://kit.fontawesome.com/b961a2b7a4.js" crossorigin="anonymous"></script>
    <script src="../common-code/common.js?v=<?php echo time(); ?>"></script>
    <script src="./billing-convert.js?v=<?php echo time(); ?>"></script>
    <title>Convert-bill</title>
</head>
<body>

<div class="container-fluid">
    <div class="row text-center pt-2 bg-dark" id="row1">

    <h2>- Create a Bill by Booking -</h2>

    </div>

    <div class="row" id="row-price">

<table class="table" id="price-board">

<tr >
    <th colspan="4">Latest Prices Board (normal/Packages)</th>

</tr>
<tr>
    <th>Status</th>
    <th>Adult(.rs)</th>
    <th>Child(.rs)</th>
    <th>Meal(.rs)</th>

</tr>
<tr>
    <th  id="topic-table">Normal prices </th>
    <?php
          
          $connection = mysqli_connect('localhost', 'root', '', 'captaincruise');
          $sql = "SELECT * FROM prices where id=1 order by ID desc";
          $result = mysqli_query($connection , $sql);
          while($row = mysqli_fetch_array($result)){

   echo" <td>".$row['Adult']."</td>";
   echo"<td >".$row['child']."</td>";
    echo"<td>".$row['meal']."</td>";

    
  };
  ?>
</tr>
<tr>
    <th id="topic-table">10 members up package </th>
    <?php
          
          $connection = mysqli_connect('localhost', 'root', '', 'captaincruise');
          $sql = "SELECT * FROM prices where id=2 order by ID desc";
          $result = mysqli_query($connection , $sql);
          while($row = mysqli_fetch_array($result)){

   echo" <td>".$row['Adult']."</td>";
   echo"<td>".$row['child']."</td>";
    echo"<td>".$row['meal']."</td>";

    
  };
  ?>
</tr>
<tr>
    <th id="topic-table">20 members up package </th>
    <?php
          
          $connection = mysqli_connect('localhost', 'root', '', 'captaincruise');
          $sql = "SELECT * FROM prices where id=3 order by ID desc";
          $result = mysqli_query($connection , $sql);
          while($row = mysqli_fetch_array($result)){

   echo" <td>".$row['Adult']."</td>";
   echo"<td>".$row['child']."</td>";
    echo"<td>".$row['meal']."</td>";

    
  };
  ?>
</tr>
<tr>
    <th id="topic-table">30 members up package </th>
    <?php
          
          $connection = mysqli_connect('localhost', 'root', '', 'captaincruise');
          $sql = "SELECT * FROM prices where id=4 order by ID desc";
          $result = mysqli_query($connection , $sql);
          while($row = mysqli_fetch_array($result)){

   echo" <td>".$row['Adult']."</td>";
   echo"<td>".$row['child']."</td>";
    echo"<td>".$row['meal']."</td>";

    
  };
  ?>
</tr>



</table>

</div>





    <div class="row" id="row2">

     
    <form action="billing-convert.php" method="POST" enctype="multipart/form-data" id="form-menu">

    <?php

echo"<div class='item-detail-container'>";
 echo"<div class='detail-row'>";
    echo "<div class='detail-col'>";
    $connection = mysqli_connect('localhost', 'root', '', 'captaincruise');
    if (isset($_GET['id'])){
        $id = $_GET['id'];
    $sql = "SELECT * FROM booking where bill_ID='$id'";
    $result = mysqli_query($connection , $sql);
    while($line = mysqli_fetch_array($result)){

        $nameO = $line['Orderer_name'] ;
        $nameid = $line['Orderer_ID'] ;
        $traveldate = $line['Booking_date'] ;
        $traveltime = $line['Booking_time'] ;
        $adultnum = $line['Adult'] ; 
        $childnum = $line['Child'] ;
        $addressN = $line['Address'] ;
        $contactN = $line['Contact_no'] ;
        $emailN = $line['Email'] ;



echo '<table class="table" id="form-table">';
echo '';
echo '<tr>';
echo '';
echo '<td id="bill-form-td">';
echo '<p> Orderer name :</p>';
echo "<p><input type='text' name='orderer' id='Oname' value='$nameO'  readonly required ></p>";
echo '</td>';
echo '<td>';
echo '<p>Orderer NIC no:</p>';
echo "<p><input type='text' name='orderid' id='' value='$nameid' readonly required ></p>";
echo '</td>';
echo '<td>';
echo '<p>Traveling date:</p>';
echo "<p><input type='text' name='bookingdate' id='' value='$traveldate' readonly required></p>";
echo '</td>';
echo '<td colspan="2">';
echo '<p>Traveling time:</p>';
echo "<p><input type='text' name='bookingtime' id='bookingtime' value='$traveltime' readonly required></p>";
echo '</td>';
echo '';
echo '';
echo '';
echo '</tr>';
echo '<tr>';
echo '<td>';
echo '<p>Passagers:</p>';
echo "<p>Adult : <input type='number' value='$adultnum'   name='adult' id='adult'  required min='0' max='100' placeholder='0'   ></p>";
echo '</td>';
echo '<td>';
echo '<p>Passagers: </p>';
echo "<p>Child : <input type='number' name='child' value='$adultnum' id='child' min='0' max='20' placeholder='0'  required  ></p>";
echo '</td>';
echo '<td>';
echo '<p>Package :</p>';
echo '<p> <select id="package" name="package" >';
echo '<option hidden>select....</option>';
echo '<option value="normal">Normal Prices</option>';
echo '<option value="10up">10 up Package</option>';
echo '<option value="20up">20 up Package</option>';
echo '<option value="30up">30 up Package</option>';
echo '';
echo '</select></p>';
echo '</td>';
echo '';
echo '<td>';
echo '<p>Location :</p>';
echo '<p> <select id="location" name="location" >';
echo '<option value="Madu" selected>safari-Balapitiya</option>';
echo '';
echo '</select></p>';
echo '</td>';
echo '<td>';
echo '<p>Address :</p>';
echo "<p> <input type='text' name='Address' id='' value='$addressN'   required></p>";
echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td>';
echo '<p>Contact no:</p>';
echo "<p> <input type='text' name='contact' id='' value='$contactN'  required></p>";
echo '</td>';
echo '<td>';
echo '<p>Email Address:</p>';
echo "<p><input type='text' name='email' id=''  value='$emailN'    required></p>";
echo '</td>';
echo '<td>';
echo '<p>Meals:</p>';
echo '<p><select id="meal" name="meal" >';
echo '<option hidden>Choose...</option>';
echo '<option value="Yes" >Yes</option>';
echo '<option value="No" >No</option>';
echo '</select></p>';
echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td colspan="2">';
echo '';
echo 'Click "genarate button" For Cost: <input type="button" onclick="genarate()" value="Genarate Cost" id="cost-btn">';
echo '';
echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td colspan="5">';
echo '<p>-----------------------------------------------------------------';
echo '</p>';
echo '</td>';
echo '</tr>';
echo '';
echo '<tr id="count">';
echo '<td  id="ad"></td>';
echo '<td><input type="text" name="adcost" id="ad-cost" required readonly  ></td>';
echo '</tr>';
echo '<tr  id="count">';
echo '<td id="chi-pass-co"></td>';
echo '<td><input type="text" name="chicost" id="chi-cost" required readonly  ></td>';
echo '</tr>';
echo '<tr id="count">';
echo '<td id="pass-meal-co"><p id="pass-meal-co"></p></td>';
echo '<td><input type="text" name="mealcost" id="meal-cost"  required readonly ></td>';
echo '</tr>';
echo '<tr id="count">';
echo '<td id="tot-pass-cost"></td>';
echo '<td><input type="text" name="totalcost" id="total-cost"required readonly  ></td>';
echo '</tr>';
echo '<tr>';
echo '<td colspan="5">';
echo '<p>-----------------------------------------------------------------';
echo '</p>';
echo '';
echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td>';
echo '<p> Safari Guide Name :</p>';
echo '<p><select id="guide" name="guide" required >';
echo '<option hidden>Choose...</option>';             
$connection = mysqli_connect('localhost', 'root', '', 'captaincruise');
$sql = "SELECT * FROM employee where Position='Guide' ";
$result = mysqli_query($connection , $sql);
while($row = mysqli_fetch_array($result)){
    $emvalue = $row['Name'];

           echo "<option value='$emvalue' >".$row['Name']."</option>";
}
echo '</select></p>';
echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td colspan="5">';
echo '<p>-----------------------------------------------------------------';
echo '</p>';
echo '';
echo '</td>';
echo '';
echo '<tr>';
echo '';
echo '<td colspan="2">';
echo '<input type="submit" name="submit" value="Confirm" id="confirm-btn"> <input type="reset" value="Clear" onclick="Clean()" id="clear-btn">';
echo '</td>';
echo '';
echo '</tr>';
echo '';
echo '';
echo '';
echo '</table>';
    }
}
?>

    

   </form>

    </div>
</div>




    
</body>
</html>