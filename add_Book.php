<?php include 'parts/header.php'?>
<?php include 'MySql/connt.php'?>
<?php include 'MySql/getuser.php'?>
<div class ="list-group list-group-flush my-3">
            <a href="dachboard.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
            <i class="fas fa-tachometer-alt me-2"></i> dashboard
            </a>
            <a href="add_Podcast.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
            <i class="fas fa-microphone me-2"></i>Add Podcast
            </a>
            <a href="add_Book.php" class="list-group-item list-group-item-action bg-transparent second-text active">
            <i class="fas fa-book me-2"></i>Add Book
            </a>
            <a href="catygory.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
            <i class="fas fa-align-justify me-2"></i>Add Catygory
            </a>
            <a href="addNewUser.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
            <i class="fas fa-user me-2"></i>Add new user
            </a>
            <a href="api.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
            <i class="fas fa-link me-2"></i> Api
            </a>
            <a href="logout.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold">
            <i class="fas fa-sign-out-alt me-2"></i>log out
            </a>
          </div>
      </div>
    <div id="page-content-wrapper"> 
    <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Add new Book</h2>
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
            <div class="container-fluid px-4">
            <form action="" method="POST">
             <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Name Book</label>
               <input type="text" name="name_book" class="form-control" placeholder="Name Book">
               <div id="emailHelp" class="form-text"></div>
             </div>
             <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">url image</label>
               <input type="url_img" name ="image"class="form-control" placeholder="url image">
               <div id="emailHelp" class="form-text"></div>
             </div>
             <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">url audio</label>
               <input type="url_audio" name ="audio"class="form-control" placeholder="url audio">
               <div id="emailHelp" class="form-text"></div>
             </div>
             <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">url book pdf</label>
               <input type="url_pdf" name ="url_pdf" class="form-control" placeholder="url book pdf">
               <div id="emailHelp" class="form-text"></div>
             </div>
             <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Writer</label>
               <input type="text" name="Writer" class="form-control" placeholder="Writer">
               <div id="emailHelp" class="form-text"></div>
             </div>
             <div class="mb-3">
             <?php include 'MySql/catygory_sql.php'?>
             </div>
             <input type ="submit" name ="submit" value = save class ="btn btn-primary">
       </form>
            </div>
            <?php include 'MySql/insert_book.php'?>
    </div>
 <?php include 'parts/fin.php'?>