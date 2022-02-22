<?php
 include 'MySql/connt.php';
if (isset($_GET['delete_podcast'])) {
   $sqld_p = "DELETE FROM podcast WHERE id_podcast = ".$_GET['delete_podcast']."";
   mysqli_query($conn,$sqld_p);
}
?>
<?php
 include 'MySql/connt.php';
if (isset($_GET['delete_book'])) {
   $sqld_b = "DELETE FROM book WHERE id_book = ".$_GET['delete_book']."";
   mysqli_query($conn,$sqld_b);
}
?>
