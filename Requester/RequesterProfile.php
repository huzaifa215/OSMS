<?php
// define('TITLE', 'Requester Profile');
// define('PAGE', 'RequesterProfile');
// include('includes/header.php'); 
include('../dbConnection.php');
 session_start();
 if($_SESSION['is_login']){
  $rEmail = $_SESSION['rEmail'];
 } else {
  echo "<script> location.href='RequesterLogin.php'; </script>";
 }

 $sql = "SELECT * FROM requesterlogin_tb WHERE r_email='$rEmail'";
 $result = $conn->query($sql);
 if($result->num_rows == 1){
 $row = $result->fetch_assoc();
 $rName = $row["r_name"]; }

//  if(isset($_REQUEST['nameupdate'])){
//   if(($_REQUEST['rName'] == "")){
//    // msg displayed if required field missing
//    $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
//   } else {
//    $rName = $_REQUEST["rName"];
//    $sql = "UPDATE requesterlogin_tb SET r_name = '$rName' WHERE r_email = '$rEmail'";
//    if($conn->query($sql) == TRUE){
//    // below msg display on form submit success
//    $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Updated Successfully </div>';
//    } else {
//    // below msg display on form submit failed
//    $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Update </div>';
//       }
//     }
//    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="./online-service-management-system-in-php/css/bootstrap.min.css">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="./online-service-management-system-in-php/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <title>Profile</title>
</head>

<body>
  <!-- navbar -->
<nav class="navbar navbar-light fixed-top  bg-danger flex-md-nowrap p-0 shadow">
  <span class="navbar-brand mb-0 h1">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="RequesterProfile.php">
   OSMS
  </a>

</nav>
<!-- side bar -->
<div class="container-fluid" style="margin-top:40px;">
  <div class="row">
    <nav class="col-sm-2 bg-light sidebar py-5">
      
    <!-- <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-app-indicator" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z"/>
  <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
</svg> -->

      <div class="sidebar-sticky">
        <ul class="nav flex-colum">

          <li class="nav-item">
            <a class="nav-link" href="RequesterProfile.php">
              <i class="fas fa-user"></i>Profile</a></li>

              <li class="nav-item">
            <a class="nav-link" >
              <i class="fas fa-user"></i></a></li>

              <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fas fa-user"></i>Submit request</a></li>

              <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fas fa-user"></i>Service Status</a></li>

              <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fas fa-user"></i>Change Password</a></li>

              <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fas fa-sign-out-alt"></i>LogOut</a></li>

              
      </ul>
    </div>
</nav><!-- !st colum end -->
<!-- form for 2nd colum -->
<div class="col-sm-6 mt-5">
  <form class="mx-5" method="POST">
    <div class="form-group">
      <label for="rEmail">Email</label>
      <input type="email" class="form-control" id="rEmail" value=" <?php echo $rEmail ?>" readonly>
    </div>
    <div class="form-group">
      <label for="rName">Name</label>
      <input type="text" class="form-control" id="rName" name="rName" value=" <?php echo $rName ?>">
    </div>
    <button type="submit" class="btn btn-danger" name="nameupdate">Update</button>
    <?php if(isset($passmsg)) {echo $passmsg; } ?>
  </form>

  </div>
  </div>
</div>
  <!-- side bar end -->


 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<!-- java sript -->
<script src="../js/jquery.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/all.min.js"></script>
<?php
include('includes/footer.php'); 
?>

</body>
</html>