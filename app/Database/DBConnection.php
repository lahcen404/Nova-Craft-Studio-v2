<?php

$con = new mysqli("localhost","root","root","novacraftdb");

if($con->connect_error){
    die("Connectiion faileed :" . $con->connect_error);
}
