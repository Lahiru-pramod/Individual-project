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
echo "<table  id='tabledetails' class=\"table\">";
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
echo "<td id='emposition'>".$row['Position']."</td>";
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

<!-- total payment show start -->

<div class="row mt-2">

<div class="row" id="tour-details-topic">

    <h4 id="tourpayment"></h4>

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

<div class="row">
  <table class="table" id="totalpaymentdetails">
    <tr>
      <th>Total tours handled this month</th>
      <th>Tour's bills total</th>
      <th>payment precentage (%)</th>
      <th>Total payment</th>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </table>
</div>
  

</div>
<!-- total payment show finish -->


        <div class="row mt-3" id="tour-details-pane">

           <div class="row" id="tour-details-topic">

                <h4 id="tourdetailsmonthname"></h4>


           </div>

           <div class="row" id="tour-details-table">
              <table class="table" id="tourdetails">
                <thead>
                  <tr>
                      <th>Bill no</th>
                      <th>Date</th>
                      <th>Bill value</th>
                      <th>time</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php

                    $connection = mysqli_connect('localhost', 'root', '', 'captaincruise');
                    $name = $_GET['Name'];
                    $first_day = date('Y-m-01');  
                    $last_day = date('Y-m-t');
                    $sql = "SELECT * FROM bills where (Booking_date between '$first_day' and '$last_day') And (Guide ='$name' OR Rider = '$name')  ";
                    $result = mysqli_query($connection , $sql);
                    while($row = mysqli_fetch_array($result)){

                    echo "<tr>";
                    echo "<td>".$row['bill_ID']."</td>";
                    echo "<td>".$row['Booking_date']."</td>";
                    echo "<td>".$row['Total_cost']."</td>";
                    echo "<td>".$row['Booking_time']."</td>";
                    echo "";
                    echo "</tr>";
                    }
                  ?>
                  </tbody>
              </table>

            

           </div>

        </div>




</div>
    
</body>





<script>
    const monthNames = ["January", "February", "March", "April", "May", "June",
  "July", "August", "September", "October", "November", "December"
];

const d = new Date();
var text = "Tour Details : " + monthNames[d.getMonth()];
var text1 = "Tour payment details : " + monthNames[d.getMonth()];


    document.getElementById("tourdetailsmonthname").innerHTML=text;
    document.getElementById("tourpayment").innerHTML = text1;



    // total find

    var x = document.getElementById("tourdetails").tBodies[0].rows.length;
    var table = document.getElementById("tourdetails");
    document.getElementById("totalpaymentdetails").rows[1].cells[0].innerHTML = x;

    var count = 0;

   for(var i=1; i<=x; i++){

    count = count + parseInt(table.rows[i].cells[2].innerHTML)

   }

   document.getElementById("totalpaymentdetails").rows[1].cells[1].innerHTML = count+".00";
   
  

  //total find end

  var position = document.getElementById("tabledetails").rows[3].cells[2].innerHTML;
  var guide = document.getElementById("pre-table").rows[1].cells[1].innerHTML;
  var rider = document.getElementById("pre-table").rows[2].cells[1].innerHTML;

   if(position == "Guide"){

    document.getElementById("totalpaymentdetails").rows[1].cells[2].innerHTML = guide;

   }
   if(position == "Boat Rider"){

    document.getElementById("totalpaymentdetails").rows[1].cells[2].innerHTML = rider;

}
   
  //calculate precentage

var pre = parseInt(document.getElementById("totalpaymentdetails").rows[1].cells[2].innerHTML);
  var precentage = pre.toFixed(1)
   
   var total = (count * precentage)/100;
 
   document.getElementById("totalpaymentdetails").rows[1].cells[3].innerHTML = total+".00";



</script>
</html>