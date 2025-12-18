<?php
    require_once __DIR__ . '/../Database/DBConnection.php';

    // session_start();

    if(isset($_SESSION['user_id'])){
        header("Location: /home");
        exist;
    }

    $errors = [];
    
    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $email = filter_input(INPUT_POST , 'email' , FILTER_VALIDATE_EMAIL);
        $password = $_POST['password'];

        if(empty($email)){
            $errors['email'] = 'Email is required !!';
        }

        if(empty($password)){
            $errors['password'] = 'Password is required !!!';
        }

        if(empty($errors)){
            // find user by emaiil 
            $sql = "SELECT id,email,password FROM users WHERE email = ?";
            $stmt = mysqli_prepare($con ,$sql );
            mysqli_stmt_bind_param($stmt,"s",$email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $user = mysqli_fetch_assoc($result);

        }

        //checkk if user exist and passwoord correct
        if($user && password_verify($password , $user['password'])){

            // create session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];

            header("Location: /home");
            exist;
        }else{
            $errors['login']= "Invaliid Email or Password !!";
        }

        mysqli_stmt_close($stmt);

    }

?>