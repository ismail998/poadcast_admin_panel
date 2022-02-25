<?php
  $key_search= $_GET['key_search'];
?>
<?php
$conn= mysqli_connect('localhost','root','','podcastdb');
$query="SELECT * FROM book WHERE name LIKE '%".$key_search."%'";
 $resu =mysqli_query($conn,$query);
$rows = array();
while($r = mysqli_fetch_assoc($resu)) {
    $rows[] = $r;
}
echo json_encode($rows,JSON_UNESCAPED_UNICODE);
?>