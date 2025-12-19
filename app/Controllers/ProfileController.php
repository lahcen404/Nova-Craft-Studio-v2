<?php

    require_once __DIR__ . '/../Database/DBConnection.php';

    if(!isset($_SESSION['user_id'])){
        header("Location: /login");
        exit();
    }

    $user_id = $_SESSION['user_id'];
    $user_data = null;

    $sql = "SELECT id , name , email , created_at FROM users WHERE id = ?";
    $stmt = mysqli_prepare($con , $sql);
    mysqli_stmt_bind_param($stmt, "i",$user_id);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
    $user_data = mysqli_fetch_assoc($result);

    mysqli_stmt_close($stmt);


?>