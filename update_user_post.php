<?php
    require('includ/dbCon.php');
        $id                             = $_POST["id"];
        $name                           = filter_var($_POST["name"],FILTER_SANITIZE_STRING);
        $email                          = filter_var($_POST["email"],FILTER_VALIDATE_EMAIL);
        $password                       = $_POST["password"];
        $uppercase                      = preg_match('@[A-Z]@', $password);
        $lowercase                      = preg_match('@[a-z]@', $password);
        $number                         = preg_match('@[0-9]@', $password);
        $specialChars                   = preg_match('@[^\w]@', $password);


    // name field
    if(empty($name)){
        $err_mass = 'Name field requerd';
        header('location: update_post.php?nam_err='.$err_mass);
    }
// email field
    elseif(empty($email)){
        $err_mass = 'Email field requerd';
        header('location: update_post.php?email_err='.$err_mass);
    }
// password field
    elseif(empty($password)){
        $err_mass = 'Password field requerd';
        header('location: update_post.php?pass_err='.$err_mass);
    }elseif(!$uppercase | !$lowercase | !$number | !$specialChars >= 8){
        $err_mass = 'Password should be strong';
        header('location: update_post.php?pass_err='.$err_mass);
    }else{
        $user_update_data_insart = "UPDATE user SET name ='$name',email='$email',pass='$password' WHERE id=$id";
        mysqli_query($db_connect,$user_update_data_insart);
        $upSucc = 'Your profile update successfull';
        header('location:reg_post.php?update_success='.$upSucc);
    }

?>