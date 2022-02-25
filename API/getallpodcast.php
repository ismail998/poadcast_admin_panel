<?php
$conn= mysqli_connect('localhost','root','','podcastdb');
$query="SELECT * FROM podcast";
 $resu =mysqli_query($conn,$query);

$rows = array();
while($r = mysqli_fetch_assoc($resu)) {
    $rows[] = $r;
}
print json_encode($rows,JSON_UNESCAPED_UNICODE);
?>