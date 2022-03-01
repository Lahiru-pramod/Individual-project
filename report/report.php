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
            <h4 style="color: blue;"><i class="fa fa-check-circle" aria-hidden="true"></i> Summary of all sections</h4>
        </div>
        <div class="row">
                  <div class="col" id="summary">
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
                  <div class="col" id="summary">
                    <h4>Total Revenue:current month</h4>
                    <?php
                   $connection = mysqli_connect('localhost', 'root', '', 'captaincruise');
                   $first_day = date('Y-m-01');  
                   $last_day = date('Y-m-t');
                   $sql_qry = "SELECT SUM(Total_cost) AS count FROM bills where Ontime between '$first_day' and '$last_day'";

                    $duration = $connection->query($sql_qry);
                    $record = $duration->fetch_array();
                    $total = $record['count'];

                    echo"<h4 style='color: brown;'>$total.00</h4>"
                    ?>
                  </div>
                  <div class="col" id="summary">
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
                  <div class="col" id="summary">
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








</div>

    
</body>
</html>