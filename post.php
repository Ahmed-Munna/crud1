<?php
    require('includ/dbCon.php');
// all inpute variable
    $name                           = filter_var($_POST["name"],FILTER_SANITIZE_STRING);
    $email                          = filter_var($_POST["email"],FILTER_VALIDATE_EMAIL);
    $password                       = $_POST["password"];
    $uppercase                      = preg_match('@[A-Z]@', $password);
    $lowercase                      = preg_match('@[a-z]@', $password);
    $number                         = preg_match('@[0-9]@', $password);
    $specialChars                   = preg_match('@[^\w]@', $password);
    $conPassword                    = $_POST["conPassword"];
    $gender                         = filter_var($_POST["gender"],FILTER_SANITIZE_STRING);
    $country                        = filter_var($_POST["country"],FILTER_SANITIZE_STRING);
// Database connection end

// name field
    if(empty($name)){
        $err_mass = 'Name field requerd';
        header('location: index.php?nam_err='.$err_mass);
    }
// email field
    elseif(empty($email)){
        $err_mass = 'Email field requerd';
        header('location: index.php?email_err='.$err_mass);
    }
// password field
    elseif(empty($password)){
        $err_mass = 'Password field requerd';
        header('location: index.php?pass_err='.$err_mass);
    }elseif(!$uppercase | !$lowercase | !$number | !$specialChars >= 8){
        $err_mass = 'Password should be strong';
        header('location: index.php?pass_err='.$err_mass);
    }
// confirm password field
    elseif(empty($conPassword)){
        $err_mass = 'Confirm field requerd';
        header('location: index.php?cpass_err='.$err_mass);
    }elseif($password !== $conPassword){
        $err_mass = 'password and confirm password not match';
        header('location: index.php?cpass_err='.$err_mass);
    }
// gender field
    elseif(empty($gender)){
        $err_mass = 'Gender field requerd';
        header('location: index.php?gen_err='.$err_mass);
    }
// country field
    elseif(empty($country)){
        $err_mass = 'Country field requerd';
        header('location: index.php?con_err='.$err_mass);
    }
// send database
    else{
        $insart = "INSERT INTO user(name, email, pass, gender, country) VALUES ('$name','$email','$password','$gender','$country')";
        mysqli_query($db_connect,$insart);
        $succ = 'Submited successfully';
        header('location:index.php?success='.$succ);
    }


?>