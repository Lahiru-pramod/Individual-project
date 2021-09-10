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
        $query = "SELECT * FROM user 
						WHERE Email = '{$email}' 
						AND Password = '{$hashed_password}' 
						LIMIT 1";

                $result_set = mysqli_query($connection, $query);

                verify_query($result_set);

                if (mysqli_num_rows($result_set) == 1){


                   header('Location:../main-panel/main-panel.php');
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
    <link rel="stylesheet" href="./index.css?v=<?php echo time(); ?> ">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/7c77a89f23.js"></script>
    <script src="index.js"></script>
   
    <title>Home</title>
</head>
<body>
    <!-- Head Section -->
    <div class="name-logo">

        <h1><i class="fa fa-ship" aria-hidden="true"></i> Captain Cruise Safari </h1>
        
    </div>
    <div class="name2">
        <marquee direction="left"><h3>Service center Main Management System</h3></marquee>

    </div>

<!-- Banner Section -->

    <div class="banner">

        <div class="login">
            
            <h2>Sign In</h2>
            <form name="formlogin" method="POST" action="Index.php" required  >
                <h4>Email</h4>
                <input type="email" name="email" placeholder="Enter e-mail" required>
                <h5></h5>
                <h4>Password</h4>
                <input type="password" name="pass" placeholder="Password" required>
                <h5></h5>
                <button type="submit" name="signin" value="submit">Sign in</button>

            </form>

            <div class="icons">
                <a href=""><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                <a href=""><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                <a href=""><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>

            </div>


        </div>





         </div>
         <div class="footer">
            <h4>Copyright @2021 - Captain Cruise</h4>
    
        </div>
         

</body>
</html>