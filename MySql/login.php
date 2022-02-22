<?php 
if (isset($_POST['submit'])) {
    $username= $_POST['user'];
    $pass= $_POST['pass']; 
if(empty($username) || empty($pass) ){
   echo 'is empty';
}else{
    $sql ="SELECT * FROM admin_user WHERE user_name = '".$username."' AND password =  '".$pass."' ";
    $result= mysqli_query($conn, $sql);
    $rowcount=mysqli_num_rows($result);
    if ($rowcount==1) {
        session_start();
        $_SESSION['user']=$username;
        header("Location: dachboard.php");
    }else{
        echo 'incorect';
    }
}
}
?>