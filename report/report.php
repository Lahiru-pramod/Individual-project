<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./report.css?v=<?php echo time(); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/7c77a89f23.js"></script>
    <script src="https://kit.fontawesome.com/b961a2b7a4.js" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css'>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../common-code/navbar.css?v=<?php echo time(); ?>">
    <script src="../common-code/common.js?v=<?php echo time(); ?>"></script>
    <title>Report</title>
</head>
<body>

<div class="container-fluid">
    <div class="row pt-3 pb-2" id="main-topic">
        <h3>Report Generation</h3>
        <div class="row">

          <a href="../main-panel/main-panel.php" id="backlink"><i class="fa fa-hand-o-left" aria-hidden="true"></i> Back to Dashboard</a>
         
         </div>
    </div>

    <div class="row mt-3">
        <div class="row">
            <h4 style="color: blue;"><i class="fa fa-check-circle" aria-hidden="true"></i> Summary of Revenue</h4>
        </div>
        <div class="row">
                  <div class="col" id="summary2">
                    <h4 >Total Revenue:today</h4>
                    <?php
                   $connection = mysqli_connect('localhost', 'root', '', 'captaincruise');
                   $today = date("Y-m-d");
                   $sql_qry = "SELECT SUM(Total_cost) AS count FROM bills WHERE Ontime='$today'";

                    $duration = $connection->query($sql_qry);
                    $record = $duration->fetch_array();
                    $total = $record['count'];

                    echo"<h4 style='color: brown;'>$total.00</h4>"
                    ?>
                  </div>
                  <div class="col" id="summary2">
                    <h4>Total Revenue:current month</h4>
                    <?php
                   $connection = mysqli_connect('localhost', 'root', '', 'captaincruise');
                   $first_day = date('Y-m-01');  
                   $last_day = date('Y-m-t');
                   $sql_qry = "SELECT SUM(Total_cost) AS count FROM bills where Ontime between '$first_day' and '$last_day'";

                    $duration = $connection->query($sql_qry);
                    $record = $duration->fetch_array();
                    $total = $record['count'];

                    echo"<h4 style='color: brown;' id='revenuetotal'>$total.00</h4>"
                    ?>
                  </div>
                  <div class="col" id="summary2">
                    <h4>Total Revenue:previous month</h4>
                    <?php
                   $connection = mysqli_connect('localhost', 'root', '', 'captaincruise');
                   $first_day = date('Y-m-01');  
                   $last_day = date('Y-m-t');
                   $sql_qry = "SELECT SUM(Total_cost) AS count FROM bills where month(Ontime) = month(NOW() - INTERVAL 1 MONTH)";

                    $duration = $connection->query($sql_qry);
                    $record = $duration->fetch_array();
                    $total = $record['count'];

                    echo"<h4 style='color: brown;'>$total.00</h4>"
                    ?>
                  </div>
                  <div class="col" id="summary2">
                  <h4>Total Revenue:current year</h4>
                  
                  <?php
                   $connection = mysqli_connect('localhost', 'root', '', 'captaincruise');
                   $first_day = date('Y-m-01');  
                   $last_day = date('Y-m-t');
                   $sql_qry = "SELECT SUM(Total_cost) AS count FROM bills where YEAR(Ontime) = YEAR(CURDATE())";

                    $duration = $connection->query($sql_qry);
                    $record = $duration->fetch_array();
                    $total = $record['count'];

                    echo"<h4 style='color: brown;'>$total.00</h4>"
                    ?>
                  </div>
        </div>

    </div>

    

    
    <!-- summary of cost -->

    <div class="row mt-3">
        <div class="row">
            <h4 style="color: red;"><i class="fa fa-check-circle" aria-hidden="true"></i> Summary of Costs</h4>
        </div>
        <div class="row">
                  <div class="col" id="summary">
                    <h4 >Total Cost:today</h4>
                    <?php
                   $connection = mysqli_connect('localhost', 'root', '', 'captaincruise');
                   $today = date("Y-m-d");
                   $sql_qry = "SELECT SUM(expensevalue) AS count FROM expenses WHERE expensedate='$today'";

                    $duration = $connection->query($sql_qry);
                    $record = $duration->fetch_array();
                    $total = $record['count'];

                    echo"<h4 style='color: brown;'>$total.00</h4>"
                    ?>
                  </div>
                  <div class="col" id="summary">
                    <h4>Total Cost:current month</h4>
                    <?php
                   $connection = mysqli_connect('localhost', 'root', '', 'captaincruise');
                   $first_day = date('Y-m-01');  
                   $last_day = date('Y-m-t');
                   $sql_qry = "SELECT SUM(expensevalue) AS count FROM expenses where expensedate between '$first_day' and '$last_day'";

                    $duration = $connection->query($sql_qry);
                    $record = $duration->fetch_array();
                    $total = $record['count'];

                    echo"<h4 style='color: brown; id='monthcost'>$total.00</h4>"
                    ?>
                  </div>
                  <div class="col" id="summary">
                    <h4>Total Cost:previous month</h4>
                    <?php
                   $connection = mysqli_connect('localhost', 'root', '', 'captaincruise');
                   $first_day = date('Y-m-01');  
                   $last_day = date('Y-m-t');
                   $sql_qry = "SELECT SUM(expensevalue) AS count FROM expenses where month(expensedate) = month(NOW() - INTERVAL 1 MONTH)";

                    $duration = $connection->query($sql_qry);
                    $record = $duration->fetch_array();
                    $total = $record['count'];

                    echo"<h4 style='color: brown;'>$total.00</h4>"
                    ?>
                  </div>
                  <div class="col" id="summary">
                  <h4>Total Cost:current year</h4>
                  
                  <?php
                   $connection = mysqli_connect('localhost', 'root', '', 'captaincruise');
                   $first_day = date('Y-m-01');  
                   $last_day = date('Y-m-t');
                   $sql_qry = "SELECT SUM(expensevalue) AS count FROM expenses where YEAR(expensedate) = YEAR(CURDATE())";

                    $duration = $connection->query($sql_qry);
                    $record = $duration->fetch_array();
                    $total = $record['count'];

                    echo"<h4 style='color: brown;'>$total.00</h4>"
                    ?>
                  </div>
        </div>

    </div>

    <div class="row">
  <table class="table" id="pre-table">
      <tr>
          <th>position</th>
          <th>payment calculate precentage (%)</th>
      </tr>
      <tr>
          <td>Guide</td>
          <?php

$connection = mysqli_connect('localhost', 'root', '', 'captaincruise');
$sql = "SELECT * FROM paymentpre where preID=1";
$result = mysqli_query($connection , $sql);
while($row = mysqli_fetch_array($result)){

          echo"<td>".$row['presentage']."</td>";

}
        ?>
      </tr>
      <tr>
          <td>BoatRider</td>
          <?php

$connection = mysqli_connect('localhost', 'root', '', 'captaincruise');
$sql = "SELECT * FROM paymentpre where preID=2";
$result = mysqli_query($connection , $sql);
while($row = mysqli_fetch_array($result)){

          echo"<td>".$row['presentage']."</td>";

}
        ?>
          
      </tr>
  </table>
</div>









 
    <div class="row mt-3" id="report-gen">

     <table style="margin-left: 10px; max-width:50%" id="report">
       <tr>
         <th style="text-align: center;">Income and Expenditure Report : <span id="month"></span> </th>
       </tr>
       <tr>
         <th><u>Revenue</u></th>
       </tr>
       <tr>
         <td>Boat Safari tour revenue : </td>
         <td></td>
         <?php
         $connection = mysqli_connect('localhost', 'root', '', 'captaincruise');
         $first_day = date('Y-m-01');  
         $last_day = date('Y-m-t');
         $sql_qry = "SELECT SUM(Total_cost) AS count FROM bills where Ontime between '$first_day' and '$last_day'";

          $duration = $connection->query($sql_qry);
          $record = $duration->fetch_array();
          $total = $record['count'];
          echo"<td>$total.00</td>";
          ?>
       </tr>
       <tr>
         <th><u>Expenditure</u></th>
       </tr>
       <tr>
         <td>Boat riders payments</td>
         <td id="b-pay"></td>
         <td></td>
       </tr>
       <tr>
       <td>Guides payments</td>
       <td id="g-pay">3000</td>
       <td></td>
       </tr>
       <tr>
         <td>other costs :</td>
         <?php
          $connection = mysqli_connect('localhost', 'root', '', 'captaincruise');
          $first_day = date('Y-m-01');  
          $last_day = date('Y-m-t');
          $sql_qry = "SELECT SUM(expensevalue) AS count FROM expenses where expensedate between '$first_day' and '$last_day'";

           $duration = $connection->query($sql_qry);
           $record = $duration->fetch_array();
           $total = $record['count'];
         echo"<td id='other'>$total.00</td>"
         ?>
         <td style="color: red;"><u></u></td>
       </tr>
       <tr>
         <th>Total Profit / Loss</th>
         <td></td>
         <td><b><u></u></b></td>
       </tr>
       
     </table>

        
    </div>
     <div class="row mt-2">
     <button class="btn-success" id="print" onclick="myApp.printDiv()">Print Report</button>
     </div>
     




</div>

    
</body>
<script>
   const monthNames = ["January", "February", "March", "April", "May", "June",
  "July", "August", "September", "October", "November", "December"
];

const d = new Date();
var text =  monthNames[d.getMonth()];
document.getElementById("month").innerHTML = text;

//revenue report

 var guide = parseInt(document.getElementById("pre-table").rows[1].cells[1].innerHTML) ;
  var rider = parseInt(document.getElementById("pre-table").rows[2].cells[1].innerHTML);
  var revenue = parseInt(document.getElementById("report").rows[2].cells[2].innerHTML);
  var other = parseFloat(document.getElementById("other").innerHTML);

  var riderpayment = (revenue*rider)/100;
  var guidepayment = (revenue*guide)/100;
  

  document.getElementById("report").rows[4].cells[1].innerHTML = riderpayment+".00";
  document.getElementById("report").rows[5].cells[1].innerHTML = guidepayment+".00";

  if(isNaN(other)){

    var cost = 0;
  }
  else{

    cost = other*1;
  }


  var totalcost = riderpayment+guidepayment+cost;

  document.getElementById("report").rows[6].cells[2].innerHTML ="-"+totalcost+".00";

  var profit = revenue - totalcost;
  document.getElementById("report").rows[7].cells[2].innerHTML = profit+".00"





  var myApp = new function () {
        this.printDiv = function () {
            // Store DIV contents in the variable.
            var div = document.getElementById('report-gen');

            // Create a window object.
            var win = window.open('', '', 'height=700,width=700'); // Open the window. Its a popup window.
            win.document.write(div.outerHTML);     // Write contents in the new window.
            win.document.close();
            win.print();       // Finally, print the contents.
        }
    }


</script>
</html>