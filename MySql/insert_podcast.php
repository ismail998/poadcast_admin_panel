<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name_podcast'];
    $image = $_POST['image'];
    $url_podcast = $_POST['url_podcast'];
    $speaker = $_POST['speaker'];
    $catygory=$_POST['catygory'];
    if (empty($name) || empty($image) || empty($url_podcast) ||empty($speaker) ) {
        echo'<div class="alert alert-danger" role="alert">
        One of the fields is empty !!
         </div>';
    }else{
        $sql_insert="INSERT INTO podcast(name,url_img,url_podcast,speaker,id_catygory)
     VALUES ('$name','$image','$url_podcast','$speaker',$catygory)";
     mysqli_query($conn,$sql_insert);
     header("Location: dachboard.php");
    }
}
?>