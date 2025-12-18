<?php
require_once __DIR__ . '/../Database/DBConnection.php';

$errors = [];
$success_message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = filter_input(INPUT_POST , 'name' , FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST , 'email' , FILTER_SANITIZE_EMAIL);
    $message = filter_input (INPUT_POST , 'message' , FILTER_SANITIZE_SPECIAL_CHARS);

    if(empty($name)){
        $errors['name'] = 'Full Name requiired please !!!';
    }

     if(empty($email) || !filter_var($email , FILTER_VALIDATE_EMAIL)){
        $errors['email'] = 'Emil requiired please , and must be valiid !!!';
    }

     if(empty($message)){
        $errors['message'] = 'Message requiired please !!!';
    }

     if(empty($errors)){
        $sql_query = "INSERT INTO contact (name , email , message) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($con,$sql_query);

        mysqli_stmt_bind_param($stmt, "sss" , $name , $email , $message);

        if (mysqli_stmt_execute($stmt)) {
            $success_message = 'Your message saved in DB !!!';
            $name = $email = $message = "";
        } else {
            $errors['db'] = 'Database error: ' . mysqli_error($con);
        }
        mysqli_stmt_close($stmt);
    }
}
?>