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
    <link rel="stylesheet" href="./billing.css?v=<?php echo time(); ?> ">
    <script src="./billing.js?v=<?php echo time(); ?>" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/7c77a89f23.js"></script>
    <script src="https://kit.fontawesome.com/b961a2b7a4.js" crossorigin="anonymous"></script>
    <script src="../common-code/common.js?v=<?php echo time(); ?>"></script>
    <title>Billing section</title>
</head>
<body onload="initClocks()">

<div id="mySidenav" class="sidenav">
        <div class="logo" id="logo"><i class="fas fa-anchor"></i></div>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <table id="menu-table">

        <tr id="menu-row" >
           <td id="menu-col1">

           <h3><i class="fa fa-arrow-left" aria-hidden="true"></i></h3>

           </td>
           <td id="menu-col2">

           <h3>  <a href="../main-panel/main-panel.php">Dashboard</a></h3>

           </td>

   </tr>

       <tr id="menu-row" >
           <td id="menu-col1">

           <i class="fa fa-book" aria-hidden="true" style="color: yellow;"></i>

           </td>
           <td id="menu-col2">

           <h3>  <a href="../Billing-section/billing.php"> Billing</a></h3>

           </td>

   </tr>
   <tr id="menu-row" >
           <td id="menu-col1">

           <i class="fa fa-users" aria-hidden="true" style="color: rgb(255, 153, 0);"></i>

           </td>
           <td id="menu-col2">

           <h3>  <a href="#"> Employees</a></h3>

           </td>

   </tr>
   <tr id="menu-row" >
           <td id="menu-col1">

           <i class="fa fa-wrench" aria-hidden="true" style="color: rgb(0, 196, 245);"></i>

           </td>
           <td id="menu-col2">

           <h3>  <a href="#"> Boat repaires</a></h3>

           </td>

   </tr>
   <tr id="menu-row" >
           <td id="menu-col1">

           <i class="fa fa-file" aria-hidden="true" style="color: rgb(25, 192, 48);"></i>

           </td>
           <td id="menu-col2">

           <h3>  <a href="#">Reports</a></h3>

           </td>

   </tr>
   <tr id="menu-row" >
           <td id="menu-col1">

           <h3><i class="fa fa-external-link-square" aria-hidden="true" style="color: rgb(255, 0, 234);"></i></h3>

           </td>
           <td id="menu-col2">

           <h3>  <a href="../Booking-section/booking.php">Bookings</a></h3>

           </td>

   </tr>
   <tr id="menu-row" >
           <td id="menu-col1">

           <i class="fa fa-money" aria-hidden="true" style="color: blue;"></i>

           </td>
           <td id="menu-col2">

           <h3>  <a href="#">Price Changes</a></h3>

           </td>

   </tr>
   <tr id="menu-row" >
           <td id="menu-col1">

           <h3><i class="fa fa-sign-out" aria-hidden="true" style="color: rgb(243, 7, 7);"></i></h3>

           </td>
           <td id="menu-col2">

           <h3>  <a href="../Home/Index.php" onclick="javascript:logout();" >Sign out</a></h3>

           </td>

   </tr>
   </table>

      </div>



      <!-- body part -->




    <div class="container">
    <div class="row fixed-top" id="row1">
            <div class="col-8" id="col1">
                <h3><i class="fas fa-anchor"></i> Captain Cruise</h3>
            </div>
            <div class="col" id="col2">
                <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
            </div>
        </div>

      <div class="row " id="row3">
          <h3>- Billing Section - </h3>
      </div>
  <!-- Prices normal and packages....................... -->

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

      <div class="row" id="timedate">
       <h5 id="timeanddate">
      <span id="datetimeonline"><i class="fa fa-clock-o" aria-hidden="true"></i> Today Date & Time :</span>
              <span id="dayname"></span>,
              <span id="month"></span>
              <span id="daynum"></span>,
              <span id="year"></span> -----
              <span id="hour"></span>.
              <span id="min"></span>.
              <span id="sec"> </span>
              <span id="period"></span>
              </h5>
              
      </div>




      <div class="row" id="row4">
          <h4> -- Bill Create & Find Section --</h4>
      </div>

      <!-- bill form -->

      <div class="row" id="row5">
          <!-- <div class="col"> -->

         <form action="billing.php" method="POST" enctype="multipart/form-data" id="form-menu">

                <table class="table" id="form-table">

                <tr>
                    <td id="bill-form-td">
                      <p> Orderer name :</p>
                    <p><input type="text" name="orderer" id="" required  ></p>
                    </td>
                    <td>
                    <p>Orderer NIC no:</p>
                    <p><input type="text" name="orderid" id="" required ></p>
                    </td>
                    <td>
                    <p>Traveling date:</p>
                    <p><input type="date" name="bookingdate" id="" required ></p>
                    </td>
                    <td colspan="2">
                    <p>Traveling time:</p>
                    <p> <select id="bookingtime" name="bookingtime" required >
                    <option value="8 am - 10 am">Morning 8 - 10 am</option>
                            <option value="10am - 12 am">Morning 10 - 12 am</option>
                            <option value="2 pm - 4 pm">Evening 2 - 4 pm</option>
                            <option value="4 pm - 6 pm">Evening 4 - 6 pm</option>

                            </select></p>
                    </td>
                


                </tr>
                <tr>
                    <td>
                        <p>Passagers:</p>
                        <p>Adult : <input type="number"   name="adult" id="adult" required min="0" max="100" placeholder="0"></p>
                    </td>
                    <td>
                        <p>Passagers: </p>
                        <p>Child : <input type="number" name="child" id="child" min="0" max="20" placeholder="0"></p>
                    </td>
                    <td>
                        <p>Package :</p>
                        <p> <select id="package" name="package" >
                            <option value="normal">Normal Prices</option>
                            <option value="10up">10 up Package</option>
                            <option value="20up">20 up Package</option>
                            <option value="30up">30 up Package</option>

                            </select></p>
                    </td>

                    <td>
                        <p>Location :</p>
                        <p> <select id="location" name="location" >
                            <option value="Madu">safari-Balapitiya</option>

                            </select></p>
                    </td>
                    <td>
                        <p>Address :</p>
                        <p> <input type="text" name="Address" id=""   required></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Contact no:</p>
                        <p> <input type="text" name="contact" id=""   required></p>
                    </td>
                    <td>
                        <p>Email Address:</p>
                        <p><input type="text" name="email" id=""  required></p>
                    </td>
                    <td>
                        <p>Meals:</p>
                        <p><select id="meal" name="meal" >
                            <option value="notvalue" selected>Choose...</option>
                            <option value="Yes" >Yes</option>
                            <option value="No" >No</option>
                            </select></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">

                   Click "genarate button" For Cost: <input type="button" onclick="JavaScript:genarate()" value="Genarate Cost" id="cost-btn">

                    </td>
                </tr>
                <tr>
                    <td colspan="5">
                        <p>-----------------------------------------------------------------
                        </p>
                    </td>
                </tr>

                <tr id="count">
                    <td  id="ad"></td>
                    <td><input type="text" name="adcost" id="ad-cost"  ></td>
                </tr>
                <tr  id="count">
                    <td id="chi-pass-co"></td>
                    <td><input type="text" name="chicost" id="chi-cost"  ></td>
                </tr>
                <tr id="count">
                    <td id="pass-meal-co"><p id="pass-meal-co"></p></td>
                    <td><input type="text" name="mealcost" id="meal-cost"  ></td>
                </tr>
                <tr id="count">
                    <td id="tot-pass-cost"></td>
                    <td><input type="text" name="totalcost" id="total-cost" ></td>
                </tr>
                <tr>
                    <td colspan="5">
                    <p>-----------------------------------------------------------------
                        </p>

                    </td>
                </tr>
                <tr>
                    <td>
                        <p> Safari Guide's Name :</p>
                        <p><select id="guide" name="guide" >
                            <option hidden>Choose...</option>


                            <?php
                
                $connection = mysqli_connect('localhost', 'root', '', 'captaincruise');
                $sql = "SELECT * FROM employee where Position='Guide' ";
                $result = mysqli_query($connection , $sql);
                while($row = mysqli_fetch_array($result)){
                    $emvalue = $row['Name'];

                           echo "<option value='$emvalue' >".$row['Name']."</option>";
                }
                ?>

                            </select></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="5">
                    <p>-----------------------------------------------------------------
                        </p>

                    </td>

                <tr>

                <td colspan="2">
                <input type="submit" name="submit" value="Confirm" id="confirm-btn"> <input type="reset" value="Clear" onclick="Clean()" id="clear-btn"> 
                </td>

                </tr>

    

                </table>

        </form>

<div class="row" id="row6">
   <h3>All Bills Details Section</h3>
   <div class="search-container">
        <h5>Search for :</h5>
        <div class="search-bar" id="search-bar">
      <input type="text" onkeyup="search()" placeholder="Enter Orderer NIC ..." name="search" id="searchbox">
        </div>
  </div>

  <!-- Bill details table -->



  <table class="table" id="Bill-table">

  <thead>

      <tr>
          <th scope="col">Bill ID</th>
          <th>Orderer ID</th>
          <th>Date</th>
          <th>Time</th>
          <th>status</th>
          <th>status 2</th>
      </tr>
      </thead>

      <tbody id="tbody">
      <?php

            $connection = mysqli_connect('localhost', 'root', '', 'captaincruise');
            $sql = "SELECT * FROM bills order by bill_ID desc";
            $result = mysqli_query($connection , $sql);
            while($row = mysqli_fetch_array($result)){

      echo'<tr>';
        echo  "<td>".$row['bill_ID']."</td>";
          echo"<td>".$row['Orderer_ID']."</td>";
          echo"<td>".$row['Booking_date']."</td>";
          echo"<td>".$row['Booking_time']."</td>";
          echo"<td><a href='../Bill-details/Bill-details.html?id=".$row['bill_ID']."' id='details-btn'>Print</a></td>";
          echo"<td> <a href='./delete.php?id=".$row['bill_ID']."' id='delete' > Bill Cancel or Remove</td>";
      echo'</tr>';
            }
      ?>

</tbody>
  </table>





     </div>
     <!-- Bill form END -->





    </div>


</body>
</html>