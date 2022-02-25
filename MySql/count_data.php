<?php 
$sql_count_podcast ="SELECT COUNT(*) as CP FROM podcast";
$num_podcast=mysqli_query($conn,$sql_count_podcast);
$data1=mysqli_fetch_assoc($num_podcast);
$sql_count_catygory ="SELECT COUNT(*) as CC FROM catygory";
$num_catygory = mysqli_query($conn,$sql_count_catygory);
$data2=mysqli_fetch_assoc($num_catygory);
$sql_count_book ="SELECT COUNT(*) as CB FROM book";
$num_book=mysqli_query($conn,$sql_count_book);
$data3=mysqli_fetch_assoc($num_book);
//-------------------count user----------------//
$sql_c ="SELECT * FROM admin_user";
$result_c= mysqli_query($conn, $sql_c);
$rowcount=mysqli_num_rows($result_c);
?>
<?php 
echo '<div class =col-md-3>
<div class="card text-white bg-dark mb-3" style="width: 12rem;">
 <div class="card-body">
 <h5 class="card-title text-center">
 <i class="fas fa-microphone me-2"></i>Podcast</h5>
  <h3 class ="text-center">'.$data1['CP'].'
  </h3>
                    </div>
                 </div>
              </div>
              <div class =col-md-3>
                <div class="card  text-white bg-dark mb-3" style="width: 12rem;">
                  <div class="card-body">
                    <h5 class="card-title text-center">
                    <i class="fas fa-book me-2"></i>Book</h5>
                    <h3 class ="text-center">'.$data3['CB'].'</h3>
                    </div>
                 </div>
              </div>
              <div class =col-md-3>
                <div class="card text-white bg-dark mb-3" style="width: 12rem;">
                  <div class="card-body">
                  <h5 class="card-title text-center">
                  <i class="fas fa-user me-2"></i>User</h5>
                    <h3 class ="text-center">'.$rowcount.'</h3>
                    </div>
                 </div>
              </div>
              <div class =col-md-3>
                <div class="card text-white bg-dark mb-3" style="width: 12rem;">
                  <div class="card-body">
                  <h5 class="card-title text-center">
                  <i class="fas fa-headphones me-2"></i>Catygory</h5>
                    <h3 class ="text-center">'.$data2['CC'].'</h3>
                    </div>
                 </div>
              </div>';
?>

