<?php session_start(); ?>
<?php require_once('../DBconnection/connection.php'); ?>
<?php require_once('../DBconnection/functions.php'); ?>

<?php

if(isset($_POST['adult'])){

    $adult=  mysqli_real_escape_string($connection, $_POST['adultprice']);

    $query= "UPDATE prices SET Adult = '{$adult}' WHERE ID = 1";

    $result = mysqli_query($connection, $query);
    if ($result){
     // if successful
    echo'<script> alert("Do you want change Adult price?");
            </script>';

    }else{

       echo'<script> alert("Process is Falied, Please try again")</script>';


    };


};

if(isset($_POST['child'])){

    $child=  mysqli_real_escape_string($connection, $_POST['childprice']);

    $query= "UPDATE prices SET child = '{$child}' WHERE ID = 1";

    $result = mysqli_query($connection, $query);
    if ($result){
     // if successful
    echo'<script> alert("Do you want change Child price?");
            </script>';

    }else{

       echo'<script> alert("Process is Falied, Please try again")</script>';


    };


};

if(isset($_POST['meal'])){

    

    $meal=  mysqli_real_escape_string($connection, $_POST['mealprice']);

    $query= "UPDATE prices SET meal = '{$meal}' WHERE ID = 1";
    

    $result = mysqli_query($connection, $query);
    if ($result){
     // if successful
    echo'<script> confirm("Do you want change meal price?");
            </script>';


    }else{

       echo'<script> alert("Process is Falied, Please try again")</script>';


    };


};



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
    <link rel="stylesheet" href="./prices-changes-logged.css?v=<?php echo time(); ?>">
    <script src="../common-code/common.js?v=<?php echo time(); ?>"></script>
    <script src="./prices-changes-logged.js?v=<?php echo time(); ?>"></script>
    <title>Price-changes-logged</title>
</head>
<body>

<div class="container-fluid">
    <div class="row text-center pt-2" id="row1">
        <h2 id="blink">Latest Prices of packages</h2>
        <h4><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> <a href="../main-panel/main-panel.php">Dashboard</a></h4>

    </div>

    <!-- prices -->
    <div class="container">
    <div class="row d-flex justify-content-around" id="row2">

        <div class="row pt-5 " id="row2-row1">

            <div class="col" id="boxes"  >
                <h3>Normal Adult</h3> 

                <?php
                
                $connection = mysqli_connect('localhost', 'root', '', 'captaincruise');
                $sql = "SELECT Adult FROM prices order by ID desc";
                $result = mysqli_query($connection , $sql);
                while($row = mysqli_fetch_array($result)){

                echo"<h3 style='color:red;'>".$row['Adult']." </h3>";

                };

                
                ?>
                <form action="prices-changes-logged.php" method="post" enctype="multipart/form-data">
                <input type="text" name="adultprice" placeholder="Change price.."><br>
                <input type="submit" value="Change" id="change" name="adult" ><br>
                </form>

            </div>
            <div class="col" id="boxes" >
                <h3>Normal Child</h3>

                <?php
                
                $connection = mysqli_connect('localhost', 'root', '', 'captaincruise');
                $sql = "SELECT child FROM prices order by ID desc";
                $result = mysqli_query($connection , $sql);
                while($row = mysqli_fetch_array($result)){

                echo"<h3 style='color:red;'>".$row['child']." </h3>";

                };
                ?>

                <form action="prices-changes-logged.php" method="post" enctype="multipart/form-data">
                <input type="text" name="childprice" placeholder="Change price.."><br>
                <input type="submit" value="Change" id="change" name="child" ><br>
                </form>

            </div>
            <div class="col" id="boxes" >
                <h3>Meal price</h3>
                
                <?php
                
                $connection = mysqli_connect('localhost', 'root', '', 'captaincruise');
                $sql = "SELECT meal FROM prices order by ID desc";
                $result = mysqli_query($connection , $sql);
                while($row = mysqli_fetch_array($result)){

                echo"<h3 style='color:red;'>".$row['meal']." </h3>";

                };
                ?>
                <form action="prices-changes-logged.php" method="post" enctype="multipart/form-data">
                <input type="text" name="mealprice" placeholder="Change price.."><br>
                <input type="submit" value="Change" id="change" name="meal" ><br>
                </form>

            </div>
        </div>


    </div>

    <!-- Prices close -->

    <!-- Special Packages -->

    <div class="row text-center mt-5 bg-dark" id="row4">
        <h3 style="color: white;">- Special Package Prices - </h3>
    </div>



    <div class="row mt-4 d-flex justify-content-around" id="row5">
       <div class="row text-center" id="row5-1">
           <div class="col" id="boxes">
               <div class="row" id="box-image">

               <h2>Lahiru</h2>
               <img src="./images/6308.jpg" alt="">

               </div>
           </div>

           <div class="col" id="boxes">
               <h2>Lahiru</h2>
           </div>

           <div class="col" id="boxes">
               <h2>Lahiru</h2>
           </div>

           <div class="col" id="boxes">
               <h2>Lahiru</h2>
           </div>


       </div>




    </div>









    </div>
</div>




    
</body>
</html>