<?php session_start(); ?>
<?php require_once('../DBconnection/connection.php'); ?>
<?php require_once('../DBconnection/functions.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./main-panel.css?v=<?php echo time(); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/7c77a89f23.js"></script>
    <script src="https://kit.fontawesome.com/b961a2b7a4.js" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css'>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="./main-panel.js?v=<?php echo time(); ?>"></script>
    <title>Captain-cruise</title>
</head>
<body onload="initClock()">
    <div id="mySidenav" class="sidenav">
        <div class="logo" id="logo"><i class="fas fa-anchor"></i></div>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <table id="menu-table">

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

           <h3>  <a href="../Price-changes/price-changes.php">Price Changes</a></h3>

           </td>

   </tr>
        <tr id="menu-row" >
                <td id="menu-col1">

                <h3><i class="fa fa-sign-out" aria-hidden="true" style="color: rgb(243, 7, 7);"></i></h3>

                </td>
                <td id="menu-col2">

                <h3>  <a href="#">Sign out</a></h3>

                </td>

        </tr>
        </table>
      </div>

      <div class="container-fluid">
         <div class="row fixed-top" id="row1">
            <div class="col-8" id="col1">
                <h3><i class="fas fa-anchor"></i> Captain Cruise</h3>
            </div>
            <div class="col" id="col2">
                <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
            </div>
        </div>
        <div class="row" id="row2">

          <div class="col-sm" id="row2-col1">

              <h2><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</h2>

          </div>
          <div class="col-sm" id="row-col2">

          <div class="date">
              <h4>
              <span id="dayname"></span>,
              <span id="month"></span>
              <span id="daynum"></span>,
              <span id="year"></span>
              </h4>
          </div>
          <div class="time">
              <h3>
              <span id="hour"></span> :
              <span id="min"></span> :
              <span id="sec"> </span>
              <span id="period"></span>
              </h3>

          </div>

          </div>

          <div class="row">
            <h5>
            <span id="checkemail">Hi! Check E-mails & Facebook :</span>
            <span id="icon"><a href="" class="btn" id="iconmail"><i class="fa fa-envelope-o" aria-hidden="true"></i> Mail</a></span>
            <span id="icon"><a href="" class="btn" id="iconfb"><i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook</a></span>
            </h5>

        </div>

        </div>

        <div class="row pt-2" id="row3">


        <!-- booking -data -->

        <div class="col-sm pt-1" id="booking-data">
         <div class="row">
             <h4><i class="fa fa-bookmark" aria-hidden="true"></i> Booking - Summary</h4>
        </div>
        <div class="row" id="data-table-row">

        <div class="table-responsive" id="booking-table">

        <table class="table table-dark" id="booking-data-table">
  <thead>
      <tr>
          <th scope="col" class="text-center" colspan="7">Today Traveling <span id="blink"> coming up!</span></th>
      </tr>
    <tr>
                <th scope="col" >ID</th>
                <th scope="col">NIC</th>
                <th scope="col">Name</th>
                <th scope="col">Date</th>
                <th scope="col">Time</th>
                <th scope="col">Contact</th>
                <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php
                 $today=date('Y-m-d');

                        $connection = mysqli_connect('localhost', 'root', '', 'captaincruise');
                        $sql = "SELECT * FROM booking where booking_date='$today' order by bill_ID desc";
                        $result = mysqli_query($connection , $sql);

                        while($row = mysqli_fetch_array($result)){

                        echo"<tr>";
                        echo"<th scope='row'>".$row['bill_ID']."</th>";
                        echo"<td>".$row['Orderer_ID']."</td>";
                        echo"<td>".$row['Orderer_name']."</td>";
                        echo"<td>".$row['Booking_date']."</td>";
                        echo"<td>".$row['Booking_time']."</td>";
                        echo"<td>".$row['Contact_no']."</td>";
                        echo"<td><span id='blink-table'> Call..</span></td>";


                        echo" </tr>";

                    }
                      

                
    ?>



  </tbody>
</table>
</div>
</div>

       <div class="row" id="booking-counts">

       <div class="col-sm" id="t-booking">
        <h5><i class="fa fa-line-chart" aria-hidden="true"></i> Today</h5>

        <?php
                 $today=date('Y-m-d');

                        $connection = mysqli_connect('localhost', 'root', '', 'captaincruise');
                        $sql = "SELECT * FROM booking where Ontime='$today'";
                        $result = mysqli_query($connection , $sql);
                        $rowcount=mysqli_num_rows($result);
                              echo"<h1>$rowcount</h1>";
                      
                        ?>
       </div>

       <div class="col-sm" id="lm-booking">

       <h5><i class="fa fa-line-chart" aria-hidden="true"></i> This Month</h5>

       <?php

       $today = date('m');
       $year = date('Y');
       $to=01;
       $realtoday = sprintf("%02d", $today);

       $specialyear=$year % 4;

       if( $specialyear==0){

        $today = date('m');
        $year = date('Y');
        $realtoday = sprintf("%02d", $today);
        

        switch($realtoday){

            case 01:
                $firstdate = "$year-$realtoday-01";
                $lastdate = "$year-$realtoday-31";
                break;
            case 02:
                $firstdate = "$year-$realtoday-01";
                $lastdate = "$year-$realtoday-29";
                break;
            case 03:
                $firstdate = "$year-$realtoday-01";
                $lastdate = "$year-$realtoday-31";
                break;
            case 04:
                $firstdate = "$year-$realtoday-01";
                $lastdate = "$year-$realtoday-30";
                break;
            case 05:
                $firstdate = "$year-$realtoday-01";
                $lastdate = "$year-$realtoday-31";
                break;
            case 06:
                $firstdate = "$year-$realtoday-01";
                $lastdate = "$year-$realtoday-30";
                break;
            case 07:
                $firstdate = "$year-$realtoday-01";
                $lastdate = "$year-$realtoday-31";
                break;
            case sprintf("%02d", 8):
                $firstdate = "$year-$realtoday-01";
                $lastdate = "$year-$realtoday-31";
                break;
              
            case sprintf("%02d", 9):
                $firstdate = "$year-$realtoday-01";
                 $lastdate = "$year-$realtoday-30";
                break;
            case sprintf("%02d", 10):
                 $firstdate = "$year-$realtoday-01";
                 $lastdate = "$year-$realtoday-31";
                break;
            case sprintf("%02d", 11):
                $firstdate = "$year-$realtoday-01";
                $lastdate = "$year-$realtoday-30";
                break;
                case sprintf("%02d", 12):
               $firstdate = "$year-$realtoday-01";
               $lastdate = "$year-$realtoday-31";
               break;

             default:
              echo"some error has in date";
              break;
    
           }

       }
       if( $specialyear>0){

        $today = date('m');
        $year = date('Y');
        $realtoday = sprintf("%02d", $today);
        

        switch($realtoday){

            case 01:
                $firstdate = "$year-$realtoday-01";
                $lastdate = "$year-$realtoday-31";
                break;
            case 02:
                $firstdate = "$year-$realtoday-01";
                $lastdate = "$year-$realtoday-28";
                break;
            case 03:
                $firstdate = "$year-$realtoday-01";
                $lastdate = "$year-$realtoday-31";
                break;
            case 04:
                $firstdate = "$year-$realtoday-01";
                $lastdate = "$year-$realtoday-30";
                break;
            case 05:
                $firstdate = "$year-$realtoday-01";
                $lastdate = "$year-$realtoday-31";
                break;
            case 06:
                $firstdate = "$year-$realtoday-01";
                $lastdate = "$year-$realtoday-30";
                break;
            case 07:
                $firstdate = "$year-$realtoday-01";
                $lastdate = "$year-$realtoday-31";
                break;
            case sprintf("%02d", 8):
                $firstdate = "$year-$realtoday-01";
                $lastdate = "$year-$realtoday-31";
                break;
              
            case sprintf("%02d", 9):
                $firstdate = "$year-$realtoday-01";
                 $lastdate = "$year-$realtoday-30";
                break;
            case sprintf("%02d", 10):
                 $firstdate = "$year-$realtoday-01";
                 $lastdate = "$year-$realtoday-31";
                break;
            case sprintf("%02d", 11):
                $firstdate = "$year-$realtoday-01";
                $lastdate = "$year-$realtoday-30";
                break;
                case sprintf("%02d", 12):
               $firstdate = "$year-$realtoday-01";
               $lastdate = "$year-$realtoday-31";
               break;

             default:
              echo"some error has in date";
              break;
    
           }

       }
                

                        $connection = mysqli_connect('localhost', 'root', '', 'captaincruise');
                        $sql = "SELECT * FROM booking where Ontime BETWEEN '$firstdate' AND '$lastdate' ";
                        $result = mysqli_query($connection , $sql);
                        $rowcount=mysqli_num_rows($result);
                              echo"<h1>$rowcount</h1>";
                      
                        ?>
      

       </div>

       <div class="col-sm" id="y-booking">

       <h5><i class="fa fa-line-chart" aria-hidden="true"></i> Total</h5>
       <?php
                 $today=date('Y-m-d');

                        $connection = mysqli_connect('localhost', 'root', '', 'captaincruise');
                        $sql = "SELECT * FROM booking ";
                        $result = mysqli_query($connection , $sql);
                        $rowcount=mysqli_num_rows($result);
                              echo"<h1>$rowcount</h1>";
                      
                        ?>

       </div>



       </div>



        </div>







        <div class="col-sm pt-1" id="billing-data">
        <h4><i class="fa fa-check-circle-o" aria-hidden="true"></i> Billing - Summary</h4>
        <div class="row" id="booking-counts">

<div class="col-sm" id="t-booking">
 <h5><i class="fa fa-line-chart" aria-hidden="true"></i> Today</h5>
 <?php
                 $today=date('Y-m-d');

                        $connection = mysqli_connect('localhost', 'root', '', 'captaincruise');
                        $sql = "SELECT * FROM bills where Ontime='$today'";
                        $result = mysqli_query($connection , $sql);
                        $rowcount=mysqli_num_rows($result);
                              echo"<h1>$rowcount</h1>";
                      
                        ?>
       </div>

       <div class="col-sm" id="lm-booking">

       <h5><i class="fa fa-line-chart" aria-hidden="true"></i> This Month</h5>

       <?php

       $today = date('m');
       $year = date('Y');
       $to=01;
       $realtoday = sprintf("%02d", $today);

       $specialyear=$year % 4;

       if( $specialyear==0){

        $today = date('m');
        $year = date('Y');
        $realtoday = sprintf("%02d", $today);
        

        switch($realtoday){

            case 01:
                $firstdate = "$year-$realtoday-01";
                $lastdate = "$year-$realtoday-31";
                break;
            case 02:
                $firstdate = "$year-$realtoday-01";
                $lastdate = "$year-$realtoday-29";
                break;
            case 03:
                $firstdate = "$year-$realtoday-01";
                $lastdate = "$year-$realtoday-31";
                break;
            case 04:
                $firstdate = "$year-$realtoday-01";
                $lastdate = "$year-$realtoday-30";
                break;
            case 05:
                $firstdate = "$year-$realtoday-01";
                $lastdate = "$year-$realtoday-31";
                break;
            case 06:
                $firstdate = "$year-$realtoday-01";
                $lastdate = "$year-$realtoday-30";
                break;
            case 07:
                $firstdate = "$year-$realtoday-01";
                $lastdate = "$year-$realtoday-31";
                break;
            case sprintf("%02d", 8):
                $firstdate = "$year-$realtoday-01";
                $lastdate = "$year-$realtoday-31";
                break;
              
            case sprintf("%02d", 9):
                $firstdate = "$year-$realtoday-01";
                 $lastdate = "$year-$realtoday-30";
                break;
            case sprintf("%02d", 10):
                 $firstdate = "$year-$realtoday-01";
                 $lastdate = "$year-$realtoday-31";
                break;
            case sprintf("%02d", 11):
                $firstdate = "$year-$realtoday-01";
                $lastdate = "$year-$realtoday-30";
                break;
                case sprintf("%02d", 12):
               $firstdate = "$year-$realtoday-01";
               $lastdate = "$year-$realtoday-31";
               break;

             default:
              echo"some error has in date";
              break;
    
           }

       }
       if( $specialyear>0){

        $today = date('m');
        $year = date('Y');
        $realtoday = sprintf("%02d", $today);
        

        switch($realtoday){

            case 01:
                $firstdate = "$year-$realtoday-01";
                $lastdate = "$year-$realtoday-31";
                break;
            case 02:
                $firstdate = "$year-$realtoday-01";
                $lastdate = "$year-$realtoday-28";
                break;
            case 03:
                $firstdate = "$year-$realtoday-01";
                $lastdate = "$year-$realtoday-31";
                break;
            case 04:
                $firstdate = "$year-$realtoday-01";
                $lastdate = "$year-$realtoday-30";
                break;
            case 05:
                $firstdate = "$year-$realtoday-01";
                $lastdate = "$year-$realtoday-31";
                break;
            case 06:
                $firstdate = "$year-$realtoday-01";
                $lastdate = "$year-$realtoday-30";
                break;
            case 07:
                $firstdate = "$year-$realtoday-01";
                $lastdate = "$year-$realtoday-31";
                break;
            case sprintf("%02d", 8):
                $firstdate = "$year-$realtoday-01";
                $lastdate = "$year-$realtoday-31";
                break;
              
            case sprintf("%02d", 9):
                $firstdate = "$year-$realtoday-01";
                 $lastdate = "$year-$realtoday-30";
                break;
            case sprintf("%02d", 10):
                 $firstdate = "$year-$realtoday-01";
                 $lastdate = "$year-$realtoday-31";
                break;
            case sprintf("%02d", 11):
                $firstdate = "$year-$realtoday-01";
                $lastdate = "$year-$realtoday-30";
                break;
                case sprintf("%02d", 12):
               $firstdate = "$year-$realtoday-01";
               $lastdate = "$year-$realtoday-31";
               break;

             default:
              echo"some error has in date";
              break;
    
           }

       }
                

                        $connection = mysqli_connect('localhost', 'root', '', 'captaincruise');
                        $sql = "SELECT * FROM bills where Ontime BETWEEN '$firstdate' AND '$lastdate' ";
                        $result = mysqli_query($connection , $sql);
                        $rowcount=mysqli_num_rows($result);
                              echo"<h1>$rowcount</h1>";
                      
                        ?>
      

       </div>

       <div class="col-sm" id="y-booking">

       <h5><i class="fa fa-line-chart" aria-hidden="true"></i> Total</h5>
       <?php
                 $today=date('Y-m-d');

                        $connection = mysqli_connect('localhost', 'root', '', 'captaincruise');
                        $sql = "SELECT * FROM bills ";
                        $result = mysqli_query($connection , $sql);
                        $rowcount=mysqli_num_rows($result);
                              echo"<h1>$rowcount</h1>";
                      
                        ?>

       </div>

       <!-- Value of today bills and monthly -->


       <div class="row mt-1">
           <div class="table-responsive">
               <table class="table" id="value-table">

               <tr>
                   <th><i class="fa fa-area-chart" aria-hidden="true"></i></th>
                   <th>Value of Today bills :</th>
                   <?php

                 $Total = 0;
                 $today=date('Y-m-d');

                        $connection = mysqli_connect('localhost', 'root', '', 'captaincruise');
                        $sql = "SELECT * FROM bills where Ontime='$today' ";
                        $result = mysqli_query($connection , $sql);
                        while($row = mysqli_fetch_array($result)){

                         $value = $row['Total_cost'];
                         $Total = $Total + $value;

                        };

                   echo"<th>$Total.00</th>";

                   ?>

               </tr>
               <tr>
                   <th><i class="fa fa-area-chart" aria-hidden="true"></i></th>
                   <th>Value of this month bills :</th>
                   <?php

$today = date('m');
$year = date('Y');
$to=01;
$realtoday = sprintf("%02d", $today);

$specialyear=$year % 4;

if( $specialyear==0){

 $today = date('m');
 $year = date('Y');
 $realtoday = sprintf("%02d", $today);
 

 switch($realtoday){

     case 01:
         $firstdate = "$year-$realtoday-01";
         $lastdate = "$year-$realtoday-31";
         break;
     case 02:
         $firstdate = "$year-$realtoday-01";
         $lastdate = "$year-$realtoday-29";
         break;
     case 03:
         $firstdate = "$year-$realtoday-01";
         $lastdate = "$year-$realtoday-31";
         break;
     case 04:
         $firstdate = "$year-$realtoday-01";
         $lastdate = "$year-$realtoday-30";
         break;
     case 05:
         $firstdate = "$year-$realtoday-01";
         $lastdate = "$year-$realtoday-31";
         break;
     case 06:
         $firstdate = "$year-$realtoday-01";
         $lastdate = "$year-$realtoday-30";
         break;
     case 07:
         $firstdate = "$year-$realtoday-01";
         $lastdate = "$year-$realtoday-31";
         break;
     case sprintf("%02d", 8):
         $firstdate = "$year-$realtoday-01";
         $lastdate = "$year-$realtoday-31";
         break;
       
     case sprintf("%02d", 9):
         $firstdate = "$year-$realtoday-01";
          $lastdate = "$year-$realtoday-30";
         break;
     case sprintf("%02d", 10):
          $firstdate = "$year-$realtoday-01";
          $lastdate = "$year-$realtoday-31";
         break;
     case sprintf("%02d", 11):
         $firstdate = "$year-$realtoday-01";
         $lastdate = "$year-$realtoday-30";
         break;
         case sprintf("%02d", 12):
        $firstdate = "$year-$realtoday-01";
        $lastdate = "$year-$realtoday-31";
        break;

      default:
       echo"some error has in date";
       break;

    }

}
if( $specialyear>0){

 $today = date('m');
 $year = date('Y');
 $realtoday = sprintf("%02d", $today);
 

 switch($realtoday){

     case 01:
         $firstdate = "$year-$realtoday-01";
         $lastdate = "$year-$realtoday-31";
         break;
     case 02:
         $firstdate = "$year-$realtoday-01";
         $lastdate = "$year-$realtoday-28";
         break;
     case 03:
         $firstdate = "$year-$realtoday-01";
         $lastdate = "$year-$realtoday-31";
         break;
     case 04:
         $firstdate = "$year-$realtoday-01";
         $lastdate = "$year-$realtoday-30";
         break;
     case 05:
         $firstdate = "$year-$realtoday-01";
         $lastdate = "$year-$realtoday-31";
         break;
     case 06:
         $firstdate = "$year-$realtoday-01";
         $lastdate = "$year-$realtoday-30";
         break;
     case 07:
         $firstdate = "$year-$realtoday-01";
         $lastdate = "$year-$realtoday-31";
         break;
     case sprintf("%02d", 8):
         $firstdate = "$year-$realtoday-01";
         $lastdate = "$year-$realtoday-31";
         break;
       
     case sprintf("%02d", 9):
         $firstdate = "$year-$realtoday-01";
          $lastdate = "$year-$realtoday-30";
         break;
     case sprintf("%02d", 10):
          $firstdate = "$year-$realtoday-01";
          $lastdate = "$year-$realtoday-31";
         break;
     case sprintf("%02d", 11):
         $firstdate = "$year-$realtoday-01";
         $lastdate = "$year-$realtoday-30";
         break;
         case sprintf("%02d", 12):
        $firstdate = "$year-$realtoday-01";
        $lastdate = "$year-$realtoday-31";
        break;

      default:
       echo"some error has in date";
       break;

    }

}
         $Total=0;

                 $connection = mysqli_connect('localhost', 'root', '', 'captaincruise');
                 $sql = "SELECT * FROM bills where Ontime BETWEEN '$firstdate' AND '$lastdate' ";
                 $result = mysqli_query($connection , $sql);
                 while($row = mysqli_fetch_array($result)){

                    $value = $row['Total_cost'];
                    $Total = $Total + $value;

                   };

              echo"<th>$Total.00</th>";

                   ?>
               </tr>


               

               </table>
           </div>
       </div>
</div>



</div>

        </div>








        </div>


        <div class="row mt-1" id="prices-summary" >
         <div class="col-sm-8">
             <div class="table-responsive" id="price-table">
             <table class="table" id="price-board">

<tr >
    <th colspan="4"><i class="fa fa-money" aria-hidden="true"></i> Latest Prices Board (normal/Packages)</th>

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
         </div>
         <div class="col-sm-4" id="calculator">
             <div class="row mt-1 text-center" id="topic-generator">
                 <h5><i class="fa fa-calculator" aria-hidden="true"></i> Quick Cost Generator</h5>
             </div>
             <div class="row-mt-1">

             <div class="table-responsive">
                 <form>
                 <table class="table">

                 <tr>
                     <th>Total adult</th>
                     <td>: <input type="number" name="" id="adult"  required max="100" min="1" ></td>
                 </tr>
                 <tr>
                     <th>Total child</th>
                     <td>: <input type="number" name="" id="child" required max="100" min="0"></td>
                 </tr>
                 <tr>
                     <th>Package</th>
                     <td>:<select id="package" name="package" >
                            <option value="normal">Normal Prices</option>
                            <option value="10up">10 up Package</option>
                            <option value="20up">20 up Package</option>
                            <option value="30up">30 up Package</option>

                            </select></td>
                 </tr>
                 <tr>
                 <th>Meals</th>
                     <td>: <select id="meal" name="meal" >
                            <option value="notvalue" selected>Choose...</option>
                            <option value="Yes" >Yes</option>
                            <option value="No" >No</option>
                            </select></td>

                 </tr>
                 <tr>
                     <td></td>
                     <td> <button type="button" class="btn btn-success" popup-open="popup-1" href="javascript:void(0)" onclick="JavaScript:genarate()">Generate</button>
                     <button type="reset" class="btn btn-danger">Clear</button>
                     </td>
                 </tr>

                 </table>
                 </form>
             </div>

             </div>
         </div>
        </div>






        <!-- popup window open -->

        <div class="popup" popup-name="popup-1">
            <div class="popup-content">
        <div class="table-responsive">
            <table class="table" id="form-table">

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

            </table>
        </div>
        <a class="close-button" popup-close="popup-1" href="javascript:void(0)">x</a>
            </div>
        </div>  

        <!-- Close -->











    </div>

</body>
</html>