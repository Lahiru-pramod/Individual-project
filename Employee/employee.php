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

                    <h3><i class="fa fa-users" aria-hidden="true"></i> Employee Management</h3>

               </div>
    
            </div>

            <div class="row" id="row4">

                <div class="col mt-2 text-center" id="create-profile">
                    <h5><i class="fa fa-user" aria-hidden="true"></i></h5>
                    <h4>Create a new employee profile</h4>
                    <input type="button" class="btn btn-success" id="createbtn" value="Create">
                </div>
            </div>

              

           





















    </div> 
     <!-- container fluid close tag -->
 
    
</body>
</html>