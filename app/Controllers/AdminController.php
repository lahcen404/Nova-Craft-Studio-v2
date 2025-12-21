<?php

require_once __DIR__ . '/../Database/DBConnection.php';

$limit = 5;
$page_num = isset($_GET['p']) ? (int)$_GET['p'] : 1;
if($page_num < 1){
    $page_num = 1;
}

$offset = ($page_num - 1) * $limit;

$count_resultat = mysqli_query($con , "SELECT COUNT(*) as total FROM contact ");
$total_rows = mysqli_fetch_assoc($count_resultat)['total'];
$total_pages = ceil($total_rows / $limit);

$sql = "SELECT * FROM contact ORDER BY created_at DESC LIMIT $limit OFFSET $offset";
$result = mysqli_query($con , $sql);

$messages = mysqli_fetch_all($result,MYSQLI_ASSOC);

?>