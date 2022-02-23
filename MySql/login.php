<?php 
session_start();

if(isset($_SESSION['id'])){
    header("Location: dachboard.php");
}
if (isset($_POST['submit'])) {
    $username= $_POST['user'];
    $pass= $_POST['pass']; 
if(empty($username) || empty($pass) ){
   echo 'is empty';
}else{
    $sql ="SELECT * FROM admin_user WHERE user_name = '".$username."' AND password =  '".$pass."' ";
    $result= mysqli_query($conn, $sql);
    $rowcount=mysqli_num_rows($result);
    $user=mysqli_fetch_all($result,MYSQLI_ASSOC);
    foreach($user as $u){
      $id= $u['id_admin'];
    }
    if ($rowcount==1) {
        session_start();
        $_SESSION['id']=$id;
        header("Location: dachboard.php");
    }else{
        echo 'incorect';
    }
}
}
?>