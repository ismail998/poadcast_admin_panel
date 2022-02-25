<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name_book'];
    $image = $_POST['image'];
    $url_pdf = $_POST['url_pdf'];
    $url_audio = $_POST['audio'];
    $Writer = $_POST['Writer'];
    $catygory=$_POST['catygory'];
    if (empty($name) || empty($image) || empty($url_pdf) ||empty($Writer) ) {
         echo'<div class="alert alert-danger" role="alert">
             One of the fields is empty !!
              </div>';
    }else{
        $sql_insert="INSERT INTO book(name,pdf,audio,img,writer,id_caty)
     VALUES ('$name','$url_pdf','$url_audio','$image','$Writer',$catygory)";
     mysqli_query($conn,$sql_insert);
    }
}
?>