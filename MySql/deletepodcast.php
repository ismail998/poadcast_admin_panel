<?php
 include 'MySql/connt.php';
if (isset($_GET['delete'])) {
   $sqld = "DELETE FROM podcast WHERE id_podcast = ".$_GET['delete']."";
   mysqli_query($conn,$sqld);
}
 
?>
