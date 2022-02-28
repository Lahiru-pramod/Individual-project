<?php session_start(); ?>
<?php require_once('../DBconnection/connection.php'); ?>
<?php require_once('../DBconnection/functions.php'); ?>
<?php

if(isset($_POST['submit'])){


    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $type = mysqli_real_escape_string($connection, $_POST['type']);
    $ref = mysqli_real_escape_string($connection, $_POST['billref']);
    $total = mysqli_real_escape_string($connection, $_POST['total1']);
    $date = mysqli_real_escape_string($connection, $_POST['date']);

    $query= "INSERT INTO expenses (";
    $query .= " expenseName, expensetype, refno, expensevalue, expensedate";
    $query .= ") VALUES (";
    $query .= "'{$name}','{$type}','{$ref}','{$total}','{$date}'";
    $query .= ")";

    $result = mysqli_query($connection, $query);
    if ($result){
// if successful

function function_alert($message) {
 
    echo "<script>alert('$message');</script>";
}

function_alert("Successfull");
  
    header("location:expenses.php");


    }else{

       echo'<script> alert("Process is Falied, Please try again")</script>';
       header("location:expenses.php");


    }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./expenses.css?v=<?php echo time(); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/7c77a89f23.js"></script>
    <script src="https://kit.fontawesome.com/b961a2b7a4.js" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css'>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../common-code/navbar.css?v=<?php echo time(); ?>">
    <script src="../common-code/common.js?v=<?php echo time(); ?>"></script>
    <title>expenses</title>
</head>
<body>

 <div class="container-fluid">
     <div class="row pt-3 pb-2" id="main-topic">
         <h3>Manage and Record expenses</h3>

         <div class="row">

          <a href="../main-panel/main-panel.php" id="backlink"><i class="fa fa-hand-o-left" aria-hidden="true"></i> Back to Dashboard</a>
         
         </div>
     </div>
     <div class="row mt-5" id="details-form" >
         <form action="./expenses.php" method="POST"enctype="multipart/form-data">
             <div class="table-responsive">
                 <table class="table" id="details-table">
                     <tr>
                         <th colspan="3" style="color: red;">Enter details about expenses!</th>
                     </tr>
                     <tr>
                         <th>Expenses name</th>
                         <th>:</th>
                         <td><input type="text" name="name" id="inputf" required></td>
                     </tr>
                     <tr>
                         <th>Expenses Type</th>
                         <th>:</th>
                         <td>
                         <select required name="type">
                            <option value="" disabled selected hidden>select..</option>
                            <option value="Fuels">Fuels</option>
                            <option value="Boatparts">Boat repairs</option>
                            <option value="Foods">Foods & Drinks</option>
                            <option value="Document">Document Works</option>
                            <option value="Insurance">Insurance</option>
                            <option value="Other">Other</option>
                            
                         </select>
                        </td>
                     </tr>
                     <tr>
                         <th>Bill ref-no (if have)</th>
                         <th>:</th>
                         <td><input type="text" name="billref" id="inputf"></td>
                     </tr>
                     <tr>
                         <th>Bill total</th>
                         <th>:</th>
                         <td><input type="text" name="total1"  onkeyup="check()" id="inputt1" required></td>
                     </tr>
                     <tr>
                         <th>RE - Bill total</th>
                         <th>:</th>
                         <td><input type="text" name="total2" onkeyup="check()" id="inputt2"  required> </td>
                
                         
                     </tr>
                     <tr>
                         <th>Bill matching status</th>
                         <th>:</th>
                     <td><span id="message"></span></td>
                     </tr>
                     <tr>
                         <th>Bill date</th>
                         <th>:</th>
                         <td><input type="date" name="date"  id="inputf" required></td>
                     </tr>
                     <tr>
                     <td></td>
                    <td colspan="2">
                        <input type="submit" onclick="return confirm('Do you want to add bill with this details?')"  name="submit" id="submit" class="btn btn-success" value="Add expense">
                        <input type="reset" class="btn btn-danger" value="Reset" id="clear" > 
                
                    </td>
                     </tr>

                 </table>
             </div>
         </form>
      
     </div>

     














 </div>
    
</body>

<script>
 var check = function() {

if ((document.getElementById('inputt1').value ==
document.getElementById('inputt2').value) && (document.getElementById('inputt1').value != "" && document.getElementById('inputt2').value != "")) {
  document.getElementById('message').style.color = 'green';
  document.getElementById('message').innerHTML = 'bill value is matching';
  document.getElementById('submit').disabled = false;
  
} 
else if(document.getElementById('inputt1').value == "" || document.getElementById('inputt2').value == ""){
 
 document.getElementById('message').innerHTML = "";

}

else {
  document.getElementById('message').style.color = 'red';
  document.getElementById('message').innerHTML = 'bill value is not matching';
  document.getElementById('submit').disabled = true;
}



}


</script>

</html>