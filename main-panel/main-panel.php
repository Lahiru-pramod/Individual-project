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

        <div class="table-responsive">

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
    <tr>
      <th scope="row">1</th>
      <td>1234567v</td>
      <td>Damith kumara</td>
      <td>2021.08.01</td>
      <td>8am-10am</td>
      <td>0912476528</td>
      <td><span id="blink-table"> Call..</span></td>
            
      
    </tr>
   
   
  </tbody>
</table>
</div>
</div>   

       <div class="row" id="booking-counts">

       <div class="col-sm" id="t-booking">
        <h5><i class="fa fa-line-chart" aria-hidden="true"></i> Today</h5>
        <h1>3</h1>
       </div>

       <div class="col-sm" id="lm-booking">

       <h5><i class="fa fa-line-chart" aria-hidden="true"></i> This Month</h5>
        <h1>7</h1>

       </div>

       <div class="col-sm" id="y-booking">

       <h5><i class="fa fa-line-chart" aria-hidden="true"></i> Total</h5>
        <h1>200</h1>

       </div>


           
       </div>

     

        </div>







        <div class="col-sm pt-1" id="billing-data">
        <h4><i class="fa fa-check-circle-o" aria-hidden="true"></i> Billing - Summary</h4>
        <div class="row" id="booking-counts">

<div class="col-sm" id="t-booking">
 <h5><i class="fa fa-line-chart" aria-hidden="true"></i> Today</h5>
 <h1>3</h1>
</div>

<div class="col-sm" id="lm-booking">

<h5><i class="fa fa-line-chart" aria-hidden="true"></i> This Month</h5>
 <h1>7</h1>

</div>

<div class="col-sm" id="y-booking">

<h5><i class="fa fa-line-chart" aria-hidden="true"></i> Total</h5>
 <h1>200</h1>

</div>


    
</div>
        </div>

        



        

        </div>
















    
    </div>
      
</body>
</html>