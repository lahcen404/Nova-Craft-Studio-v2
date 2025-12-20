<?php

require_once __DIR__ . '/../Database/DBConnection.php';

$sql = 'SELECT * FROM contact ORDER BY created_at DESC';
$result = mysqli_query($con , $sql);

$messages = mysqli_fetch_all($result,MYSQLI_ASSOC);

?>