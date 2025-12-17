<?php

    require_once __DIR__ . '/../app/Router/Router.php';
    require_once __DIR__ . '/../app/Database/DBConnection.php';

    if($con && !$con->connect_error){
        echo "Connectiion Success , Everything is good !!!";
    }else{
        echo "Connection Failed !!";
    }

?>