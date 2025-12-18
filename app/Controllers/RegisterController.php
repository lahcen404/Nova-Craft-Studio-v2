<?php

    require_once __DIR__ . '/../Database/DBConnection.php';

    $errors= [];
    $success_message = '';

    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $name = filter_input(INPUT_POST, 'name' , FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
        $password = $_POST['password'];

        if(empty($name)){
            $errors['name']= 'Name is required !!!';
        }

         if(empty($email) || !filter_var($email , FILTER_VALIDATE_EMAIL)){
            $errors['email']= 'Email must be valid and required !!!';
        }

        



         if(empty($password) || strlen($password) < 6){
            $errors['password']= 'Password is required and at least 6 caracters !!!';
        }

        if(empty($errors)){

            $check_sqlQuery = "SELECT * FROM users WHERE email = ?";
            $check_stmt = mysqli_prepare($con,$check_sqlQuery);
            mysqli_stmt_bind_param($check_stmt , "s" , $email);
            mysqli_stmt_execute($check_stmt);
            mysqli_stmt_store_result($check_stmt);

            if (mysqli_stmt_num_rows($check_stmt) > 0) {
        $errors['email'] = " emaiil is already registered, try Another one or Login in!";
    }

        mysqli_stmt_close($check_stmt);

        }

        if(empty($errors)){

            $hashedPassword = password_hash($password , PASSWORD_DEFAULT);

            $sql_query = "INSERT INTO users (name , email , password ) VALUES (?,?,?)";
            $stmt = mysqli_prepare($con , $sql_query);

            mysqli_stmt_bind_param($stmt , "sss" , $name,$email,$hashedPassword);

            if(mysqli_stmt_execute($stmt)){

                $success_message = "Register Success !!";
                $name = $email = "";
            }else{
                $errors['db'] = 'Dattabase error : ' . mysqli_error($con);
            }

            mysqli_stmt_close($stmt);

        }
    }


?>