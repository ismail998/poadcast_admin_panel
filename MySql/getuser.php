<?php 
     session_start();
       $id = $_SESSION["id"];
       $sqluser = "SELECT * FROM admin_user WHERE id_admin  =". $id;
      $query_user =mysqli_query($conn,$sqluser);
       $user_info=mysqli_fetch_all($query_user,MYSQLI_ASSOC);
       foreach($user_info as $info){
        $name_user=$info['first_last_name'];
        $pass_user=$info['password'];
        $username_user=$info['user_name'];
        $email_user=$info['Email'];
       }
?>