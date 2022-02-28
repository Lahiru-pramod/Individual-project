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

       header('Location:./prices-changes-logged.php');


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



// Special 10 package prices = database row 2










if(isset($_POST['10adultbtn'])){

    

    $adultpack10=  mysqli_real_escape_string($connection, $_POST['10adult']);

    $query= "UPDATE prices SET Adult = '{$adultpack10}' WHERE ID = 2";
    

    $result = mysqli_query($connection, $query);
    if ($result){
     // if successful
    echo'<script> confirm("Do you want change 10 up Package price?");
            </script>';


    }else{

       echo'<script> alert("Process is Falied, Please try again")</script>';


    };


};

if(isset($_POST['10childbtn'])){

    $child=  mysqli_real_escape_string($connection, $_POST['10child']);

    $query= "UPDATE prices SET child = '{$child}' WHERE ID = 2";

    $result = mysqli_query($connection, $query);
    if ($result){
     // if successful
    echo'<script> alert("Do you want change Child price?");
            </script>';

    }else{

       echo'<script> alert("Process is Falied, Please try again")</script>';


    };


};

if(isset($_POST['10mealbtn'])){

    

    $meal=  mysqli_real_escape_string($connection, $_POST['10meal']);

    $query= "UPDATE prices SET meal = '{$meal}' WHERE ID = 2";
    

    $result = mysqli_query($connection, $query);
    if ($result){
     // if successful
    echo'<script> confirm("Do you want change meal price?");
            </script>';


    }else{

       echo'<script> alert("Process is Falied, Please try again")</script>';


    };


};

// 20 up package logic



if(isset($_POST['20adultbtn'])){

    

    $adultpack20=  mysqli_real_escape_string($connection, $_POST['20adult']);

    $query= "UPDATE prices SET Adult = '{$adultpack20}' WHERE ID = 3";
    

    $result = mysqli_query($connection, $query);
    if ($result){
     // if successful
    echo'<script> confirm("Do you want change 20 up Package price?");
            </script>';


    }else{

       echo'<script> alert("Process is Falied, Please try again")</script>';


    };


};

if(isset($_POST['20childbtn'])){

    $child=  mysqli_real_escape_string($connection, $_POST['20child']);

    $query= "UPDATE prices SET child = '{$child}' WHERE ID = 3";

    $result = mysqli_query($connection, $query);
    if ($result){
     // if successful
    echo'<script> alert("Do you want change Child price?");
            </script>';

    }else{

       echo'<script> alert("Process is Falied, Please try again")</script>';


    };


};

if(isset($_POST['20mealbtn'])){

    

    $meal=  mysqli_real_escape_string($connection, $_POST['20meal']);

    $query= "UPDATE prices SET meal = '{$meal}' WHERE ID = 3";
    

    $result = mysqli_query($connection, $query);
    if ($result){
     // if successful
    echo'<script> confirm("Do you want change meal price?");
            </script>';


    }else{

       echo'<script> alert("Process is Falied, Please try again")</script>';


    };


};

// 30 up package code........................


if(isset($_POST['30adultbtn'])){

    

    $adultpack30=  mysqli_real_escape_string($connection, $_POST['30adult']);

    $query= "UPDATE prices SET Adult = '{$adultpack30}' WHERE ID = 4";
    

    $result = mysqli_query($connection, $query);
    if ($result){
     // if successful
    echo'<script> confirm("Do you want change 10 up Package price?");
            </script>';


    }else{

       echo'<script> alert("Process is Falied, Please try again")</script>';


    };


};

if(isset($_POST['30childbtn'])){

    $child=  mysqli_real_escape_string($connection, $_POST['30child']);

    $query= "UPDATE prices SET child = '{$child}' WHERE ID = 4";

    $result = mysqli_query($connection, $query);
    if ($result){
     // if successful
    echo'<script> alert("Do you want change Child price?");
            </script>';

    }else{

       echo'<script> alert("Process is Falied, Please try again")</script>';


    };


};

if(isset($_POST['30mealbtn'])){

    

    $meal=  mysqli_real_escape_string($connection, $_POST['30meal']);

    $query= "UPDATE prices SET meal = '{$meal}' WHERE ID = 4";
    

    $result = mysqli_query($connection, $query);
    if ($result){
     // if successful
    echo'<script> confirm("Do you want change meal price?");
            </script>';


    }else{

       echo'<script> alert("Process is Falied, Please try again")</script>';


    };


};

//employee payment changes

if(isset($_POST['gpre'])){

    

    $pre=  mysqli_real_escape_string($connection, $_POST['gprece']);

    $query= "UPDATE paymentpre SET presentage = '{$pre}' WHERE preID = 1";
    

    $result = mysqli_query($connection, $query);
    if ($result){
     // if successful
    echo'<script> confirm("Do you want change guide payment precentage?");
            </script>';


    }else{

       echo'<script> alert("Process is Falied, Please try again")</script>';


    };


};

if(isset($_POST['bpre'])){

    

    $pre=  mysqli_real_escape_string($connection, $_POST['bprece']);

    $query= "UPDATE paymentpre SET presentage = '{$pre}' WHERE preID = 2";
    

    $result = mysqli_query($connection, $query);
    if ($result){
     // if successful
    echo'<script> confirm("Do you want change boat rider payment precentage?");
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
        <h2 id="blink">Latest Prices of Boat safari packages</h2>
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
                $sql = "SELECT Adult FROM prices where id=1 order by ID desc";
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
                $sql = "SELECT child FROM prices where id=1 order by ID desc";
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
                $sql = "SELECT meal FROM prices where id=1 order by ID desc";
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
               <h5>10 members up Package</h5>
                 <img src="./images/6308.jpg" alt="">

               </div>

               <!-- 10 member package -->
               <table class="table" id="packagetable">

               <tr>
                   <td><h5>Adult</h5></td>
                   <td>
                   <?php
                
                $connection = mysqli_connect('localhost', 'root', '', 'captaincruise');
                $sql = "SELECT Adult FROM prices where ID=2 order by ID desc";
                $result = mysqli_query($connection , $sql);
                while($row = mysqli_fetch_array($result)){

                echo"<h5 style='color:red;'>".$row['Adult']." </h5>";

                };

                
                ?>
                    
                    </td>
                    <form action="prices-changes-logged.php" method="POST" enctype="multipart/form-data">
                   <td><input type="text" name="10adult" id="packageinput" placeholder="New Price"></td>
                   <td><input type="submit" value="change" id="packagebtn" name="10adultbtn"></td>
            </form>
               </tr>
               <tr>
                   <td><h5>Child</h5></td>
                   <td>
                   <?php
                
                $connection = mysqli_connect('localhost', 'root', '', 'captaincruise');
                $sql = "SELECT child FROM prices where ID=2 order by ID desc";
                $result = mysqli_query($connection , $sql);
                while($row = mysqli_fetch_array($result)){

                echo"<h5 style='color:red;'>".$row['child']." </h5>";

                };

                
                ?>
                       
                   
                    
                    </td>
                    <form action="prices-changes-logged.php" method="POST" enctype="multipart/form-data">
                   <td><input type="text" name="10child" id="packageinput" placeholder="New Price"></td>
                   <td><input type="submit" value="change" id="packagebtn" name="10childbtn"></td>
            </form>
               </tr>
               <tr>
                   <td><h5>Meal</h5></td>
                   <td>
                   <?php
                
                $connection = mysqli_connect('localhost', 'root', '', 'captaincruise');
                $sql = "SELECT meal FROM prices where ID=2 order by ID desc";
                $result = mysqli_query($connection , $sql);
                while($row = mysqli_fetch_array($result)){

                echo"<h5 style='color:red;'>".$row['meal']." </h5>";

                };

                
                ?>
                    
                    </td>
                    <form action="prices-changes-logged.php" method="POST" enctype="multipart/form-data">
                   <td><input type="text" name="10meal" id="packageinput" placeholder="New Price"></td>
                   <td><input type="submit" value="change" id="packagebtn" name="10mealbtn"></td>
            </form>
               </tr>

               </table>
           </div>

           <!-- Finish .......................................... -->

           <!-- 20 member package -->
           <div class="col" id="boxes">
               <div class="row" id="box-image">
               <h5>20 members up Package</h5>
                 <img src="./images/6308.jpg" alt="">

               </div>

        
               <table class="table" id="packagetable">

               <tr>
                   <td><h5>Adult</h5></td>
                   <td>
                   <?php
                
                $connection = mysqli_connect('localhost', 'root', '', 'captaincruise');
                $sql = "SELECT Adult FROM prices where ID=3 order by ID desc";
                $result = mysqli_query($connection , $sql);
                while($row = mysqli_fetch_array($result)){

                echo"<h5 style='color:red;'>".$row['Adult']." </h5>";

                };

                
                ?>
                    
                    </td>
                    <form action="prices-changes-logged.php" method="POST" enctype="multipart/form-data">
                   <td><input type="text" name="20adult" id="packageinput" placeholder="New Price"></td>
                   <td><input type="submit" value="change" id="packagebtn" name="20adultbtn"></td>
            </form>
               </tr>
               <tr>
                   <td><h5>Child</h5></td>
                   <td>
                   <?php
                
                $connection = mysqli_connect('localhost', 'root', '', 'captaincruise');
                $sql = "SELECT child FROM prices where ID=3 order by ID desc";
                $result = mysqli_query($connection , $sql);
                while($row = mysqli_fetch_array($result)){

                echo"<h5 style='color:red;'>".$row['child']." </h5>";

                };

                
                ?>
                       
                   
                    
                    </td>
                    <form action="prices-changes-logged.php" method="POST" enctype="multipart/form-data">
                   <td><input type="text" name="20child" id="packageinput" placeholder="New Price"></td>
                   <td><input type="submit" value="change" id="packagebtn" name="20childbtn"></td>
            </form>
               </tr>
               <tr>
                   <td><h5>Meal</h5></td>
                   <td>
                   <?php
                
                $connection = mysqli_connect('localhost', 'root', '', 'captaincruise');
                $sql = "SELECT meal FROM prices where ID=3 order by ID desc";
                $result = mysqli_query($connection , $sql);
                while($row = mysqli_fetch_array($result)){

                echo"<h5 style='color:red;'>".$row['meal']." </h5>";

                };

                
                ?>
                    
                    </td>
                    <form action="prices-changes-logged.php" method="POST" enctype="multipart/form-data">
                   <td><input type="text" name="20meal" id="packageinput" placeholder="New Price"></td>
                   <td><input type="submit" value="change" id="packagebtn" name="20mealbtn"></td>
            </form>
               </tr>

               </table>
           </div>

           <!-- 30 member up code....................................... -->

           <div class="col" id="boxes">
               <div class="row" id="box-image">
               <h5>30 members up Package</h5>
                 <img src="./images/6308.jpg" alt="">

               </div>

            
               <table class="table" id="packagetable">

               <tr>
                   <td><h5>Adult</h5></td>
                   <td>
                   <?php
                
                $connection = mysqli_connect('localhost', 'root', '', 'captaincruise');
                $sql = "SELECT Adult FROM prices where ID=4 order by ID desc";
                $result = mysqli_query($connection , $sql);
                while($row = mysqli_fetch_array($result)){

                echo"<h5 style='color:red;'>".$row['Adult']." </h5>";

                };

                
                ?>
                    
                    </td>
                    <form action="prices-changes-logged.php" method="POST" enctype="multipart/form-data">
                   <td><input type="text" name="30adult" id="packageinput" placeholder="New Price"></td>
                   <td><input type="submit" value="change" id="packagebtn" name="30adultbtn"></td>
            </form>
               </tr>
               <tr>
                   <td><h5>Child</h5></td>
                   <td>
                   <?php
                
                $connection = mysqli_connect('localhost', 'root', '', 'captaincruise');
                $sql = "SELECT child FROM prices where ID=4 order by ID desc";
                $result = mysqli_query($connection , $sql);
                while($row = mysqli_fetch_array($result)){

                echo"<h5 style='color:red;'>".$row['child']." </h5>";

                };

                
                ?>
                       
                   
                    
                    </td>
                    <form action="prices-changes-logged.php" method="POST" enctype="multipart/form-data">
                   <td><input type="text" name="30child" id="packageinput" placeholder="New Price"></td>
                   <td><input type="submit" value="change" id="packagebtn" name="30childbtn"></td>
            </form>
               </tr>
               <tr>
                   <td><h5>Meal</h5></td>
                   <td>
                   <?php
                
                $connection = mysqli_connect('localhost', 'root', '', 'captaincruise');
                $sql = "SELECT meal FROM prices where ID=4 order by ID desc";
                $result = mysqli_query($connection , $sql);
                while($row = mysqli_fetch_array($result)){

                echo"<h5 style='color:red;'>".$row['meal']." </h5>";

                };

                
                ?>
                    
                    </td>
                    <form action="prices-changes-logged.php" method="POST" enctype="multipart/form-data">
                   <td><input type="text" name="30meal" id="packageinput" placeholder="New Price"></td>
                   <td><input type="submit" value="change" id="packagebtn" name="30mealbtn"></td>
            </form>
               </tr>

               </table>
           </div>
        


<!-- over this line -->

             

       </div>


       <div class="row text-center mt-3 bg-dark" id="row4">
        <h3 style="color: white;">- Guide & Boat riders payment precentage controll - </h3>
    </div>

    <div class="row pt-5 " id="row2-row1">

    <div class="col" id="boxes"  >
                <h3>Guide percentage (%)</h3> 

                <?php
                
                $connection = mysqli_connect('localhost', 'root', '', 'captaincruise');
                $sql = "SELECT * FROM paymentpre where preID=1";
                $result = mysqli_query($connection , $sql);
                while($row = mysqli_fetch_array($result)){

                echo"<h3 style='color:red;'>".$row['presentage']." </h3>";

                };

                
                ?>
                <form action="prices-changes-logged.php" method="post" enctype="multipart/form-data">
                <input type="text" name="gprece" placeholder="Change per.."><br>
                <input type="submit" value="Change" id="change" name="gpre" ><br>
                </form>

            </div>


            <div class="col" id="boxes"  >
                <h3>Boat Rider percentage (%)</h3> 

                <?php
                
                $connection = mysqli_connect('localhost', 'root', '', 'captaincruise');
                $sql = "SELECT * FROM paymentpre where preID=2";
                $result = mysqli_query($connection , $sql);
                while($row = mysqli_fetch_array($result)){

                echo"<h3 style='color:red;'>".$row['presentage']." </h3>";

                };

                
                ?>
                <form action="prices-changes-logged.php" method="post" enctype="multipart/form-data">
                <input type="text" name="bprece" placeholder="Change per.."><br>
                <input type="submit" value="change" id="change" name="bpre" ><br>
                </form>

            </div>

    </div>


    </div>









    </div>
</div>




    
</body>
</html>