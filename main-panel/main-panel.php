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
    <script src="./main-panel.js?v=<?php echo time(); ?>"></script>
    <title>Captain-cruise</title>
</head>
<body>
    <div id="mySidenav" class="sidenav">
        <div class="logo" id="logo"><i class="fas fa-anchor"></i></div>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="../Billing-section/billing.php" style="text-align: center;"><i class="fa fa-book" aria-hidden="true" style="color: yellow;"></i>    Billing</a>
        <a href="#" style="text-align: center;"><i class="fa fa-users" aria-hidden="true" style="color: rgb(255, 153, 0);"></i> Employees</a>
        <a href="#" style="text-align: center;"><i class="fa fa-wrench" aria-hidden="true" style="color: rgb(0, 196, 245);"></i> Boat repaires</a>
        <a href="#" style="text-align: center;"><i class="fa fa-file" aria-hidden="true" style="color: rgb(25, 192, 48);"></i>    Reports</a>
        <a href="#" style="text-align: center;"><i class="fa fa-external-link-square" aria-hidden="true" style="color: rgb(255, 0, 234);"></i> Bookings</a>
        <a href="#" style="text-align: center;"><i class="fa fa-sign-out" aria-hidden="true" style="color: rgb(243, 7, 7);"></i>    Sign out</a>
        
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
      
  
</body>
</html>