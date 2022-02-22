
<?php include 'MySql/connt.php'?>
<?php include 'MySql/login.php'?>

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
<section class="vh-100 gradient-custom " style ="background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))">
<form action ="" method ="POST"> 
<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white-50 mb-5">Please enter your username and password!</p>
              <div class="form-outline form-white mb-4">
                <input type="text" name ="user"  id="typeEmailX" class="form-control form-control-lg"
                placeHolder="Username" />
              </div>
              <div class="form-outline form-white mb-4">
                <input type="password"  name ="pass"id="typePasswordX" class="form-control form-control-lg "placeHolder="Password" />
              </div>
              <button class="btn btn-outline-light btn-lg px-5" type="submit" name ="submit">Login</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </form> 
</section>
</body>
</html>