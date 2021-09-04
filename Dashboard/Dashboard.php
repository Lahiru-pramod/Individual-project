<?php session_start(); ?>
<?php require_once('../DBconnection/connection.php'); ?>
<?php require_once('../DBconnection/functions.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Dashboard.css?v=<?php echo time(); ?> ">
    <script src="./Dashboard.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/7c77a89f23.js"></script>
    <title>Dashboard</title>
</head>
<body>

    <div class="container">
      <div class="row" id="row1">
          <h1><i class="fa fa-sliders" aria-hidden="true"></i> Dashboard</h1>
      </div>
      <div class="row" id="row2">

        <a href="#">
            <div class="col">
                <h2><i class="fa fa-pencil" aria-hidden="true"></i></h2>
                <h3>Details of Bills</h3>
                <p>If you want to check bill details click here</p>
            </div>
        </a>
        <a href="#">
            <div class="col">
                <h2><i class="fa fa-users" aria-hidden="true"></i></h2>
                <h3>Employee details section</h3>
                <p>If you want to check employee details and add new employee click here</p>
            </div>
        </a>
        <a href="#">
            <div class="col">
                <h2><i class="fa fa-bar-chart" aria-hidden="true"></i></h2>
                <h3>Business analysis section</h3>
                <p>If you want to check revenue/cost details click here</p>
                
            </div>
        </a>
        <a href="#">
            <div class="col">
                <h2><i class="fa fa-wrench" aria-hidden="true"></i></h2>
                <h3>Boats repair details section</h3>
                <p>If you want to check or put some note about boat repairing click here</p>
            </div>
        </a>


      </div>

      <div class="row" id="row3">
          <h3>- Billing Section - </h3>
      </div>
      <div class="row" id="row4">
          <h4>*Create a new bill</h4>
      </div>

      <div class="row" id="row5">

         <form action="#">

                <table class="table" id="form-table">

                <tr>
                    <td><h5>Orderer name</h5></td>
                    <td><h5>: <input type="text" name="" id="" required></h5></td>
                </tr>
                <tr>
                    <td><h5>Orderer NIC no.</h5></td>
                    <td><h5>: <input type="text" name="" id="" required></h5></td>
                </tr>
                <tr>
                    <td><h5>Booking date</h5></td>
                    <td><h5>: <input type="date" name="" id="" required></h5></td>
                </tr>
                <tr>
                    <td><h5>Booking time</h5></td>
                    <td><h5>: <input type="time" name="" id="" required></h5></td>
                </tr>
                <tr>
                    <td><h5>Passagers</h5></td>
                    <td><h5>Adult : <input type="number" name="" id="" required min="0" max="100"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><h5>Child : <input type="number" name="" id="" min="0" max="20"></td>
                </tr>
                <tr>
                    <td><h5>Location</h5></td>
                    <td><h5>: <select id="location" name="location">
                            <option value="Madu">Madu river safari - Balapitiya</option>
                            
                            </select></h5></td>
                </tr>
                <tr>
                    <td><h5>Address</h5></td>
                    <td><h5>: <input type="text" name="" id="" required></h5></td>
                </tr>
                <tr>
                    <td><h5>Contact no</h5></td>
                    <td><h5>: <input type="text" name="" id="" required></h5></td>
                </tr>
                <tr>
                    <td><h5>Email Address</h5></td>
                    <td><h5>: <input type="text" name="" id="" required></h5></td>
                </tr>
                <tr>
                    <td><h5>Meals</h5></td>
                    <td><h5>: Yes <input type="checkbox" name="" id="" value="Yes"></h5></td>
                </tr>
                <tr>
                    <td>
                    
                    </td>

                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Confirm" id="confirm-btn"> <input type="reset" value="Clear" id="clear-btn"> </td>
                </tr>

            


                </table>
                
        </form>   
     </div>



    </div>


</body>
</html>