<?php 
    $config = array();
    
    include "Config/config.php";
    include "Models/Model.php";

    include "helper/helper.php";

    mysqli_connect(
            $config["database"]["hostname"], 
            $config["database"]["user"], 
            $config["database"]["password"], 
            $config["database"]["database_name"]
    );