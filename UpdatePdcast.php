<?php
 include 'MySql/connt.php';
 include 'MySql/getuser.php';
 $sql_podcast_update="SELECT * FROM podcast WHERE id_podcast = ".$_GET['id']."";
$resulte =mysqli_query($conn,$sql_podcast_update);
$row=mysqli_fetch_array($resulte);
?>
<?php 
  if (isset($_POST['submit3'])) {
    $name1 = $_POST['name_podcast'];
    $image1 = $_POST['image'];
    $url_podcast1 = $_POST['url_podcast'];
    $speaker1 = $_POST['speaker'];
    $catygory1=$_POST['catygory'];
    if (empty($name1) || empty($image1) || empty($url_podcast1) ||empty($speaker1) ) {
        echo '<br>error';
    }else{ 
        $sql_update=" UPDATE podcast SET name = '".$name1."'
        , url_img ='".$image1."'
       , url_podcast = '".$url_podcast1."' , speaker = '".$speaker1."' WHERE podcast.id_podcast = ".$_GET['id']."";
        mysqli_query($conn,$sql_update);
        header("Location: dachboard.php");
        exit();
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
 rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
  crossorigin="anonymous"> 
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>Document</title>
</head>
<body>   
<div id="page-content-wrapper"> 
<div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                  
                <i class="fas fa-arrow-alt-circle-left me-2 "></i><h2 class="fs-2 m-0">UPdate Posdcast</h2>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i><?php echo $name_user ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="Settings.php">Settings</a></li>
                                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="container-fluid px-12">
            <form action="" method="POST">
             <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Name Podcast</label>
               <input type="text" name="name_podcast" 
               value ="<?php echo $row['name'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
               <div id="emailHelp" class="form-text"></div>
             </div>
             <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">url image</label>
               <input type="url" name ="image"
               class="form-control" value ="<?php echo $row['url_img'] ?>"
                id="exampleInputEmail1" aria-describedby="emailHelp">
               <div id="emailHelp" class="form-text"></div>
             </div>
             <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">url podcast</label>
               <input type="url" name ="url_podcast" value ="<?php echo $row['url_podcast'] ?>"
               class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
               <div id="emailHelp" class="form-text"></div>
             </div>
             <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">speaker</label>
               <input type="text" name="speaker" class="form-control"
               value ="<?php echo $row['speaker'] ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
               <div id="emailHelp" class="form-text"></div>
             </div>
             <div class="mb-3">
             <?php include 'MySql/catygory_sql.php'?>
             </div>
             <div class="position-absolute  start-50 translate-middle">
             <input type ="submit" name ="submit3" value = "UPDATE" class ="btn btn-primary"> 
             <a class="btn btn-primary" href="dachboard.php" role="button">Go to dashboard</a>
             </div>
       </form>     
    </div>
    </div>


<?php include 'parts/fin.php'?>