<?php
    require('includ/dbCon.php');
    $id = $_GET["id"];
    $delete_user = "DELETE FROM `user` WHERE id=$id";
    $delete_user_data  = mysqli_query($db_connect,$delete_user);
    $dsuccess = 'Delete successfull';
    header('location:reg_post.php?delete_success='.$dsuccess);
?>