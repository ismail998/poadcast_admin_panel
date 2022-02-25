<?php
if (isset($_POST['submit2'])) {
    $namecat = $_POST['name_catygory'];  
    if (empty($namecat)  ) {
        echo'<div class="alert alert-danger" role="alert">
        One of the fields is empty !!
         </div>';
    }else{
        $sql_insert_c="INSERT INTO catygory(name)
        VALUES ('$namecat')";
     mysqli_query($conn,$sql_insert_c);
     header("Location: dachboard.php");
    }
}
?>