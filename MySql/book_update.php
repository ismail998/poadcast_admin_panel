<?php
 include 'MySql/connt.php';
 $sql_book_update="SELECT * FROM book WHERE id_book = ".$_GET['id']."";
$resu =mysqli_query($conn,$sql_book_update);
$row=mysqli_fetch_array($resu);
?>
<?php
 if (isset($_POST['submit_b'])) {
    $name = $_POST['name_book'];
    $pdf = $_POST['pdf'];
    $audio = $_POST['url_audio'];
    $writer = $_POST['writer'];
    $img = $_POST['img'];
    $catygory=$_POST['catygory'];
    if (empty($name) || empty($img) || empty($pdf) ||empty($writer) ) {
        echo '<br>error';
    }else{ 
        $sql_update=" UPDATE book SET name = '".$name."'
        , pdf ='".$pdf."'
       , audio = '".$audio."' , img = '".$img."',
       writer ='".$writer."', id_caty  ='".$catygory."'
        WHERE id_book = ".$_GET['id']."";
        mysqli_query($conn,$sql_update); 
     header("Location: dachboard.php");
     exit();
    }
  }
?>
