<?php 
if (isset($_POST['submit21'])) {    
    $name_f = $_POST['F_name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $username = $_POST['Username'];
    if (empty($name_f) || empty($email) || empty($pass) ||empty($username) ) {
        echo '<br>error';
    }else{ 
        echo 'hi';
        $sql_update=" UPDATE admin_user SET first_last_name = '".$name_f."'
        , user_name ='".$username."'
       , password = '".$pass."' , Email = '".$email."'
        WHERE id_admin = ".$id."";
        mysqli_query($conn,$sql_update); 
    }
  }
?>