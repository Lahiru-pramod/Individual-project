<?php session_start(); ?>
<?php require_once('../DBconnection/connection.php'); ?>
<?php require_once('../DBconnection/functions.php'); ?>
<?php

if (isset($_GET['id'])){

    $id =$_GET['id'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/7c77a89f23.js?v=<?php echo time(); ?>"></script>
    <script src="https://kit.fontawesome.com/b961a2b7a4.js?v=<?php echo time(); ?>" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./Bill-section.css?v=<?php echo time(); ?>"/>
    <title>Details</title>

    <script>
    var myApp = new function () {
        this.printDiv = function () {
            // Store DIV contents in the variable.
            var div = document.getElementById('allclass');

            // Create a window object.
            var win = window.open('', '', 'height=700,width=700'); // Open the window. Its a popup window.
            win.document.write(div.outerHTML);     // Write contents in the new window.
            win.document.close();
            win.print();       // Finally, print the contents.
        }
    }
</script>

   
</head>
<body>

    <div class="container-fluid">
      <h2 class="p-3 mt-2 text-center" id="header">CAPTAIN CRUISE</h2>

         <div class="container">

            <div class="row" id="print-box-row">
                <div class="allclass" id="allclass">
                 <div class="row" id="print-box">
                        <h3 class="mb-4 text-center">Bill information</h3>
                        <p style="color: green;">Address : 190/D, Siddhartha bridge, Balapitiya 80550</p>
                        <p style="color: green;">Contact no. 091-2567345 , Piyal - 071-2356839</p>
                        <p style="color: green;">Email - captaincruise2@gmail.com</p>
                 </div>
                    <?php
                        $connection = mysqli_connect('localhost', 'root', '', 'captaincruise');
                if (isset($_GET['id'])){
                    $id = $_GET['id'];
                $sql = "SELECT * FROM bills where bill_ID='$id'";
                $result = mysqli_query($connection , $sql);
                while($line = mysqli_fetch_array($result)){

                echo "<div class=\"row\" id=\"print-box2\">";
                echo "<h4>Info :</h4>";
                echo "<hr>";
                echo "<h5 style=\"text-align: right;\">Bill ID:".$line['bill_ID']."</h5>";
                echo "<div class=\"table-responsive\">";
                    

                    echo "<table class='table' id='info-table'>";
                    echo "<tr colspan=\"4\">";
                    echo "<td id=\"topic\">Orderer name :</td>";
                    echo "<td colspan=\"3\" >".$line['Orderer_name']."</td>";
                    echo "</tr>";
                    echo "<tr colspan=\"4\">";
                    echo "<td id=\"topic\">Orderer NIC :</td>";
                    echo "<td>".$line['Orderer_ID']."</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td id=\"topic\">Booking date:</td>";
                    echo "<td>".$line['Booking_date']."</td>";
                    echo "<td id=\"topic\">Booking time :</td>";
                    echo "<td>".$line['Booking_time']."</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td id=\"topic\">Passangers:</td>";
                    echo "<td>Adult : ".$line['Adult']."</td>";
                    echo "<td>Children : ".$line['Child']."</td>";
                    echo "</tr>";
                    echo "<tr colspan=\"4\">";
                    echo "<td id=\"topic\">Location :</td>";
                    echo "<td>".$line['Location']."</td>";
                    echo "</tr>";
                    echo "";
                    echo "<!-- cost part -->";
                    echo "";
                    echo "<tr>";
                    echo "<td colspan=\"2\"><h5>- Cost Estimate -</h5></td>";
                    echo "</tr>";
                    echo "<tr id=\"topic\">";

                    $adultcost = $line['Adult_cost'];
                    $adult = $line['Adult'];
                    $eachprice = $adultcost/$adult;


                    
                    echo "<td colspan=\"2\">Adult Cost - ( ".$line['Adult']." * $eachprice)</td>";
                    echo "<td>: ".$line['Adult_cost']."</td>";
                    echo "</tr>";
                    echo "<tr id=\"topic\">";

                    $adultcost = $line['Child_cost'];
                    $child = $line['Child'];
                    $eachprice = $adultcost/$child;


                    
                    echo "<td colspan=\"2\"> Child Cost - ( ".$line['Child']." * $eachprice)</td>";
                    echo "<td>: ".$line['Child_cost']."</td>";
                    echo "</tr>";

                    echo "<tr id=\"topic\">";

                $adultcost = $line['Child_cost'];
                $Adultnum = $line['Adult'];
                $childnum = $line['Child'];
                $allpassager= $Adultnum +  $childnum;
                $Totalmealcost = $line['Meal_cost'];
                $eachprice = $Totalmealcost/$allpassager;


                    
                    echo "<td colspan=\"2\"> Meal Cost - ( per one - $eachprice * $allpassager  )</td>";
                    echo "<td>: ".$line['Meal_cost']."</td>";
                    echo "</tr>";

                    echo "<tr id=\"topic\">";
                    echo "<td colspan=\"2\" style=\"font-weight: bold;\">Total Cost</td>";
                    echo "<td style=\"font-weight: bold;\">: ".$line['Total_cost']."</td>";
                    echo "</tr>";
                    echo "";
                    echo "";
                    echo "";
                    echo "";
                    echo "</table>";
                
                   
            
                echo"</div>";
                echo"</div>";
               
                echo"</div>";
                echo"<div class='row mt-2'>";
                echo "<input type=\"button\" onclick='myApp.printDiv()' id='printbtn' class=\"btn btn-success\" value=\"Print Bill\"> <a href=\"../Billing-section/billing.php\" class=\"btn btn-danger\" id='cancelbtn'>Cancel</a>";
                echo"</div>";

                    

               }
            }

                    ?>
                
                
            </div>




















            
         </div>   
    </div>

    
</body>
</html>