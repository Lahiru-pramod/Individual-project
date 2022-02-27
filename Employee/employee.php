<?php session_start(); ?>
<?php require_once('../DBconnection/connection.php'); ?>
<?php require_once('../DBconnection/functions.php'); ?>
<?php

if(isset($_POST['submit'])){

    
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $EmNIC = mysqli_real_escape_string($connection, $_POST['nic']);
    $BOD = mysqli_real_escape_string($connection, $_POST['bod']);
    $gender = mysqli_real_escape_string($connection, $_POST['gender']);
    $address = mysqli_real_escape_string($connection, $_POST['address']);
    $contact = mysqli_real_escape_string($connection, $_POST['contact']);
    $image = mysqli_real_escape_string($connection, $_FILES['image']['name']);
    $position = mysqli_real_escape_string($connection, $_POST['position']);
    $pdescribe = mysqli_real_escape_string($connection, $_POST['describe']);
    $Qualifications = mysqli_real_escape_string($connection, $_POST['Qualifications']);
    $Joblocation = mysqli_real_escape_string($connection, $_POST['Job-location']);
    $ce1 = mysqli_real_escape_string($connection, $_POST['Qua-certificate']);
    $ce2 = mysqli_real_escape_string($connection, $_POST['Medi-certificate']);
    $ce3 = mysqli_real_escape_string($connection, $_POST['Char-certificate']);
    $Bank = mysqli_real_escape_string($connection, $_POST['account']);
    $today = date('Y-m-d');

    $query= "INSERT INTO employee (";
    $query .= " EmNIC , Name, Position, JobDate, Address, Contact, Birthdate, Picture, Gender, PositionDescribe, Qualifications, JobLocation, Quace , Medice , Charce, Bankaccount";
    $query .= ") VALUES (";
    $query .= "'{$EmNIC}','{$name}','{$position}','{$today}','{$address}','{$contact}','{$bod}','{$image}','{$gender}','{$pdescribe}','{$Qualifications}','{$Joblocation}','{$ce1}','{$ce2}','{$ce3}','{$Bank}'";
    $query .= ")";

    $result = mysqli_query($connection, $query);
    if ($result){
// if successful

function function_alert($message) {
 
    echo "<script>alert('$message');</script>";
}

function_alert("Successfull");
  
    header("location:employee.php");


    }else{

       echo'<script> alert("Process is Falied, Please try again")</script>';
       header("location:employee.php");


    }


}



//image upload part
if(isset($_POST['submit'])){

    //button clicked
    $file_name = $_FILES['image']['name'];
    $file_type = $_FILES['image']['type'];
    $file_size = $_FILES['image']['size'];
    $temp_name = $_FILES['image']['tmp_name'];
    
    $upload_to = 'profilepic/';
    move_uploaded_file($temp_name, $upload_to . $file_name);
    }




?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./employee.css?v=<?php echo time(); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/7c77a89f23.js"></script>
    <script src="https://kit.fontawesome.com/b961a2b7a4.js" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css'>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="./employee.js?v=<?php echo time(); ?>"></script>
    <link rel="stylesheet" href="../common-code/navbar.css?v=<?php echo time(); ?>">
    <script src="../common-code/common.js?v=<?php echo time(); ?>"></script>
    <title>Employee</title>

</head>
<body>
    <div class="container-fluid">
        
           <?php include("../common-code/navbar.php"); ?>

           <div class="row mt-5 pt-4 pb-2" id="row3">

               <div class="row">

                    <h3><i class="fa fa-users" aria-hidden="true"></i> Employee Management  <input type="button" title="For Create a new Employee profile click me." class="btn btn-success" popup-open="popup-1" href="javascript:void(0)" id="createbtn" value="Create new a Employee profile"></h3>

               </div>
    
            </div>
            <div class="row mt-3" id="row4">
                  <div class="form-group has-search">
                      <input type="text" onkeyup="search()" id="searchbox" class="form-control" placeholder="Search Profile by NIC">
                 </div>
            </div>

            <div class="row mt-3" id="row5">
                <div class="table-responsive">
                    <table class="table table-dark text-center" id="Employee-details">
                        <thead>
                            <tr>
                                <th>Em.no</th>
                                <th>Name</th>
                                <th>NIC</th>
                                <th>Position</th>
                                <th>Contact</th>
                                <th>Profile</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                              $connection = mysqli_connect('localhost', 'root', '', 'captaincruise');
                              $sql = "SELECT * FROM employee ";
                              $result = mysqli_query($connection , $sql);
                              while($row = mysqli_fetch_array($result)){
                            echo "<tr>";
                            echo "<td>".$row['ID']."</td>";
                            echo "<td>".$row['Name']."</td>";
                            echo "<td>".$row['EmNIC']."</td>";
                            echo "<td>".$row['Position']."</td>";
                            echo "<td>".$row['Contact']."</td>";
                            echo "<td><h3><a href=\"./Profile/profile.php?id=".$row['ID']."\"><i class=\"fa fa-user\" aria-hidden=\"true\" title=\"Watch Profile\"></i></a></h3></td>";
                            echo "</tr>";
                              }
                           ?>
                        </tbody>
                        
                    </table>
                </div>

            </div>



           

           

















 <!-- popup window open -->

 <div class="popup" popup-name="popup-1">
    <div class="popup-content">
        <div class="table-responsive"> 
            <table class="table">
            <form action="employee.php" id="regform" method="POST" enctype="multipart/form-data" >
                <tr>
                    <th colspan="3" style="color: blue; font:20px;"><i class="fa fa-user" aria-hidden="true"></i> Create new employee profile</th>
                </tr>
                <tr>
                    <th>Name</th>
                    <th>:</th>
                    <td><input type="text" name="name" id="name" required ></td>
                </tr>
                <tr>
                    <th>NIC</th>
                    <th>:</th>
                    <td><input type="text" name="nic" id="" required></td>
                </tr>
                <tr>
                    <th>Birth date</th>
                    <th>:</th>
                    <td><input type="date" name="bod" id="birth" required></td>
                </tr>
                <tr>
                    <th>Gender</th>
                    <th>:</th>
                    <td>
                        <input type="radio" name="gender" value="male" class="containerRadio" required> Male
                        <input type="radio" name="gender" value="female" class="containerRadio" required> Female
                    </td>
                </tr>
                <tr>
                    <th>Address</th>
                    <th>:</th>
                    <td><input type="textarea" name="address" id="" required></td>
                </tr>
                <tr>
                    <th>Contact</th>
                    <th>:</th>
                    <td><input type="textarea" name="contact" id="" required></td>
                </tr>
                <tr>
                    <th>Employee's Image</th>
                    <th>:</th>
                    <td> <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1" required></td>
                </tr>

                <tr>
                    <th colspan="3" style="color:red;">- Job Details -</th>
                </tr>

                <tr>
                    <th>Applied Position</th>
                    <th>:</th>
                    <td>
                        <select required name="position">
                            <option value="" disabled selected hidden>select..</option>
                            <option value="Manager">Manager</option>
                            <option value="Officer">Officer</option>
                            <option value="Guide">Guide</option>
                            <option value="Boat Rider">Boat Rider</option>
                            <option value="Servent">Servent</option>
                            <option value="Mechanic">Mechanic</option>

                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Position Describe</th>
                    <th>:</th>
                    <td><input type="text" name="describe" id="" required></td>
                </tr>
                <tr>
                    <th>Qualifications</th>
                    <th>:</th>
                    <td>  <textarea name="Qualifications" required placeholder="Employee Qualifications type here.." class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea></td>
                </tr>
                <tr>
                    <th>Job Location</th>
                    <th>:</th>
                    <td><input type="text" name="Job-location" id="" required></td>
                </tr>
                <tr>
                    <th>Qua: Certificates</th>
                    <th>:</th>
                    <td><input type="checkbox" class="check-certificate" name="Qua-certificate" value="OK" id="" required></td>
                </tr>
                <tr>
                    <th>Medical Certificate</th>
                    <th>:</th>
                    <td><input type="checkbox" class="check-certificate" name="Medi-certificate" value="OK" id="" required></td>
                </tr>
                <tr>
                    <th>Character Certificate</th>
                    <th>:</th>
                    <td><input type="checkbox" class="check-certificate" name="Char-certificate" value="OK" id="" required></td>
                </tr>
                
                <tr>
                    <th colspan="3" style="color:red;">- Employee Bank Details -</th>
                </tr>

                <tr>
                    <th>Bank account number</th>
                    <th>:</th>
                    <td><input type="text" name="account" id="account-number" onkeyup="check()"></td>
                </tr>
                <tr>
                    <th>Bank account number - Re</th>
                    <th>:</th>
                    <td><input type="text" name="account" onkeyup="check()" id="account-number-confirm" placeholder="Re-enter"> <span id="message"></span></td> 
        
                </tr>

                <tr>
                    <td></td>
                    <td colspan="2">
                        <input type="submit" onclick="return confirm('Do you want to create a new profile with this details?')"  name="submit" id="submit" class="btn btn-success" value="Create">
                        <input type="reset" class="btn btn-danger" value="Reset" id="clear" > 
                
                    </td>
                </tr>









                </form>
            </table>

        </div>
          <a class="close-button" popup-close="popup-1" href="javascript:void(0)"><i class="fa fa-window-close" aria-hidden="true"></i></a>
    </div>
 </div>  

        <!-- code close -->



    </div> 
     <!-- container fluid close tag -->
 


    
</body>
</html>