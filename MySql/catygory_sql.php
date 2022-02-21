<?php
$query_catygory = "SELECT *
FROM catygory ";
$rus_catygory=mysqli_query($conn,$query_catygory);
$catygorys=mysqli_fetch_all($rus_catygory,MYSQLI_ASSOC);
echo'
<label for="catygorys">Choose a catygory:</label>
<select name="catygory" id="catygory">
 ';
foreach ($catygorys as $cat) {
   echo '<option value='.$cat['id_caty'].'>'.$cat['name'].'</option>';
  }
echo'</select>';
?>