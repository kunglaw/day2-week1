<?php //include "app.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php include "components/navbar.php" ?>
    <?php 
        //$request = $_SERVER['REQUEST_URI'];

        $request = isset($_GET["p"]) ? $_GET["p"] : "";

        switch ($request) {
            case 'home' :
                require 'pages/home.php';
                break;
            case 'product' :
                require 'pages/product.php';
                break;
            case '' :
                require 'pages/home.php';
                break;
           
        }

        //include "footer"
    ?>
    
</body>
</html>