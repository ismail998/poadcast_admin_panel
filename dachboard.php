<?php include 'parts/header.php'?>
<?php include 'MySql/connt.php'?>
<?php include 'MySql/deletepodcast.php'?>
<?php include 'MySql/getuser.php'?>
          <div class ="list-group list-group-flush my-3" id ="side_bar">
            <a href="dachboard.php" class="list-group-item list-group-item-action bg-transparent second-text active">
            <i class="fas fa-tachometer-alt me-2"></i> dashboard
            </a>
            <a href="add_Podcast.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
            <i class="fas fa-microphone me-2"></i>Add Podcast
            </a>
            <a href="add_Book.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
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
                <a onclick="tog()">
                 <i class="fas fa-align-left primary-text fs-4 me-3"  id="menu-toggle" ></i>
                </a>
                    <h2 class="fs-2 m-0">Dashboard</h2>
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
            <div class ="row">
              <?php
              include 'MySql/count_data.php';
              ?>
            </div>
            <h2 class="fs-2 m-0">Podcast</h2>
            <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name podcast</th>
      <th scope="col">image</th>
      <th scope="col">speaker</th>
      <th scope="col">URL</th>
      <th scope="col">Edit</th>
      <th scope="col">delete</th>
    </tr>
  </thead>
  <tbody>
  <?php include 'MySql/getAllPodcast.php'; ?>
<h2 class="fs-2 m-0">Book</h2>
            <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name book</th>
      <th scope="col">image</th>
      <th scope="col">Writer</th>
      <th scope="col">URL PDF</th>
      <th scope="col">URL audio</th>
      <th scope="col">Edit</th>
      <th scope="col">delete</th>
    </tr>
  </thead>
  <tbody>
  <?php include 'MySql/getAllBook.php'; ?>  
            </div>
    </div>
 <?php include 'parts/fin.php'?>