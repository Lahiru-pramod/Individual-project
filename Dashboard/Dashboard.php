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
    $location = mysqli_real_escape_string($connection, $_POST['location']);
    $Address = mysqli_real_escape_string($connection, $_POST['Address']);
    $contact = mysqli_real_escape_string($connection, $_POST['contact']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $meal = mysqli_real_escape_string($connection, $_POST['meal']);
    $adcost = mysqli_real_escape_string($connection, $_POST['adcost']);
    $chicost = mysqli_real_escape_string($connection, $_POST['chicost']);
    $mealcost = mysqli_real_escape_string($connection, $_POST['mealcost']);
    $totalcost = mysqli_real_escape_string($connection, $_POST['totalcost']);

    $query= "INSERT INTO bills (";
    $query .= "Orderer_name , Orderer_ID , Booking_date, Booking_time , Adult, Child, Location, Address, Contact_no, Email, Meals, Adult_cost, Child_cost,Meal_cost , Total_cost";
    $query .= ") VALUES (";
    $query .= "'{$orderer}','{$ordID}','{$bookdate}','{$booking}','{$adult}','{$child}','{$location}','{$Address}','{$contact}','{$email}','{$meal}','{$adcost}','{$chicost}','{$mealcost}','{$totalcost}'";
    $query .= ")";

    $result = mysqli_query($connection, $query);
     if ($result){
// if successful
     echo'<script> alert("Bill is successfully Added!");
             </script>';

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
    <link rel="stylesheet" href="./Dashboard.css?v=<?php echo time(); ?> ">
    <script src="./Dashboard.js?v=<?php echo time(); ?>" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/7c77a89f23.js"></script>
    <title>Dashboard</title>
</head>
<body>

    <div class="container">
      <div class="row" id="row1">
          <h1><i class="fa fa-sliders" aria-hidden="true"></i> Dashboard</h1>
      </div>
      <div class="row" id="row2">

        <a href="#">
            <div class="col">
                <h2><i class="fa fa-pencil" aria-hidden="true"></i></h2>
                <h3>Details of Bills</h3>
                <p>If you want to check bill details click here</p>
            </div>
        </a>
        <a href="#">
            <div class="col">
                <h2><i class="fa fa-users" aria-hidden="true"></i></h2>
                <h3>Employee details section</h3>
                <p>If you want to check employee details and add new employee click here</p>
            </div>
        </a>
        <a href="#">
            <div class="col">
                <h2><i class="fa fa-bar-chart" aria-hidden="true"></i></h2>
                <h3>Business analysis section</h3>
                <p>If you want to check revenue/cost details click here</p>
                
            </div>
        </a>
        <a href="#">
            <div class="col">
                <h2><i class="fa fa-wrench" aria-hidden="true"></i></h2>
                <h3>Boats repair details section</h3>
                <p>If you want to check or put some note about boat repairing click here</p>
            </div>
        </a>


      </div>

      <div class="row" id="row3">
          <h3>- Billing Section - </h3>
      </div>
      <div class="row" id="row4">
          <h4>*Create a new bill</h4>
      </div>

      <div class="row" id="row5">

         <form action="Dashboard.php" method="POST" enctype="multipart/form-data">

                <table class="table" id="form-table">

                <tr>
                    <td><h5>Orderer name</h5></td>
                    <td><h5>: <input type="text" name="orderer" id="" required  ></h5></td>
                </tr>
                <tr>
                    <td><h5>Orderer NIC no.</h5></td>
                    <td><h5>: <input type="text" name="orderid" id="" required ></h5></td>
                </tr>
                <tr>
                    <td><h5>Booking date</h5></td>
                    <td><h5>: <input type="date" name="bookingdate" id="" required ></h5></td>
                </tr>
                <tr>
                    <td><h5>Booking time</h5></td>
                    <td><h5>: <input type="time" name="bookingtime" id="" required ></h5></td>
                </tr>
                <tr>
                    <td><h5>Passagers</h5></td>
                    <td><h5>Adult : <input type="number"   name="adult" id="adult" required min="0" max="100" placeholder="0"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><h5>Child : <input type="number" name="child" id="child" min="0" max="20" placeholder="0"></td>
                </tr>
                <tr>
                    <td><h5>Location</h5></td>
                    <td><h5>: <select id="location" name="location" >
                            <option value="Madu">Madu river safari - Balapitiya</option>
                            
                            </select></h5></td>
                </tr>
                <tr>
                    <td><h5>Address</h5></td>
                    <td><h5>: <input type="text" name="Address" id=""   required></h5></td>
                </tr>
                <tr>
                    <td><h5>Contact no</h5></td>
                    <td><h5>: <input type="text" name="contact" id=""   required></h5></td>
                </tr>
                <tr>
                    <td><h5>Email Address</h5></td>
                    <td><h5>: <input type="text" name="email" id=""  required></h5></td>
                </tr>
                <tr>
                    <td><h5>Meals</h5></td>
                    <td>:<select id="meal" name="meal" >
                            <option value="select" selected>Choose...</option>
                            <option value="Yes" >Yes</option>
                            <option value="No" >No</option>
                            </select></td></td>
                </tr>
                <tr>
                    <td></td>
                    <td> <input type="button" onclick="JavaScript:genarate()" value="Genarate Cost" id="cost-btn"><input type="submit" name="submit" value="Confirm" id="confirm-btn"> <input type="reset" value="Clear" id="clear-btn"> </td>
                </tr>
                <tr>
                    <td >
                        <tr>
                            <td><p id="ad"></p></td>
                            <td><input type="text" name="adcost" id="ad-cost"  ></td>
                        </tr>
                        <tr>
                            <td><p id="chi-pass-co"></p></td>
                            <td><input type="text" name="chicost" id="chi-cost"  ></td>
                        </tr>
                        <tr>
                            <td><p id="pass-meal-co"></p></td>
                            <td><input type="text" name="mealcost" id="meal-cost"  ></td>
                        </tr>
                        <tr>
                            <td><p id="tot-pass-cost"></p></td>
                            <td><input type="text" name="totalcost" id="total-cost" ></td>
                        </tr>

                    
                    </td>

                </tr>


            


                </table>
                
        </form>   
     </div>



    </div>


</body>
</html>