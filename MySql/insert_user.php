<?php
if (isset($_POST['submit20'])) {
    $F_name = $_POST['F_name'];
    $email = $_POST['email'];
    $username = $_POST['Username'];
    $pass = $_POST['password'];
    echo $F_name ." :".$email;
    if (empty($F_name) || empty($email) || empty($username) ||empty($pass) ) {
        echo'<div class="alert alert-danger" role="alert">
        One of the fields is empty !!
         </div>';
    }else{
        $sql_ins_user="INSERT INTO admin_user(first_last_name,user_name,password,Email)
     VALUES ('".$F_name."','".$username."','".$pass."','".$email."')";
     $data =mysqli_query($conn,$sql_ins_user);
    if ( $data) {
        header("Location: dachboard.php");
    }else{
       
    }
     
    }
}
?>