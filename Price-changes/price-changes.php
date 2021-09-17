<?php session_start(); ?>
<?php require_once('../DBconnection/connection.php'); ?>
<?php require_once('../DBconnection/functions.php'); ?>
<?php
    if (isset($_POST['signin'])){
            //define variables - database
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $password =mysqli_real_escape_string($connection, $_POST['pass']);
        $hashed_password = sha1($password);


            //call database elements
        $query = "SELECT * FROM managerlogin 
						WHERE Email = '{$email}' 
						AND Password = '{$hashed_password}' 
						LIMIT 1";

                $result_set = mysqli_query($connection, $query);

                verify_query($result_set);

                if (mysqli_num_rows($result_set) == 1){


                   header('Location:./prices-changes-logged.php');
                }else{

                    echo '<script> alert("Invalid Email or Password")</script>';
                }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/7c77a89f23.js"></script>
    <script src="https://kit.fontawesome.com/b961a2b7a4.js" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./price-changes.css?v=<?php echo time(); ?>">
    <script src="../common-code/common.js?v=<?php echo time(); ?>"></script>
    <script src="./price-changes.js?v=<?php echo time(); ?>"></script>
    <title>price-changes</title>
</head>
<body>
    <div id="mySidenav" class="sidenav">
        <div class="logo" id="logo"><i class="fas fa-anchor"></i></div>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fa fa-times" aria-hidden="true" style="color: black;"></i></a>
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

                <h3>  <a href="#">Bookings</a></h3>

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

                <h3>  <a href="#">Sign out</a></h3>

                </td>
           
        </tr>
        </table>
      </div>

      <div class="container-xxl">
         <div class="row fixed-top" id="row1">
            <div class="col-8" id="col1">
                <h3><i class="fas fa-anchor"></i> Captain Cruise</h3>
            </div>
            <div class="col" id="col2"> 
                <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
            </div>
        </div>
        <div class="row" id="row2">

        </div>  
    </div>

    <!-- containter -->

    <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
    <h3><i class="fa fa-user" aria-hidden="true"></i></h3>
    <h4>Only Authorized persions</h4>
    <h4><i class="fa fa-lock" aria-hidden="true"></i></h4>
    </div>

    <!-- Login Form -->
    <form  method="POST" action="price-changes.php" required >
      <input type="email" id="login" class="fadeIn second" name="email" placeholder="login" required>
      <input type="password" id="password" class="fadeIn third" name="pass" placeholder="password" required>
      <input type="submit" name="signin" class="fadeIn fourth" value="Log In">
    </form>

  </div>
</div>

</body>
</html>