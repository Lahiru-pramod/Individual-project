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
                <input type="text" name="" id="fixinput" value="500.00 / 1 per"><br>
                <input type="text" placeholder="Change price.."><br>
                <input type="button" value="Change" id="change" ><br>

            </div>
            <div class="col" id="boxes" >
                <h3>Normal Child</h3>
                <input type="text" name="" id="fixinput" value="250.00 / 1 per"><br>
                <input type="text" placeholder="Change price.."><br>
                <input type="button" value="Change" id="change" ><br>

            </div>
            <div class="col" id="boxes" >
                <h3>Meal price</h3>
                <input type="text" name="" id="fixinput" value="300.00 / 1 per"><br>
                <input type="text" placeholder="Change price.."><br>
                <input type="button" value="Change" id="change" ><br>

            </div>
        </div>


    </div>
    </div>
</div>




    
</body>
</html>