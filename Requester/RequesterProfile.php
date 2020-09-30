<?php
// define('TITLE', 'Requester Profile');
// define('PAGE', 'RequesterProfile');
// include('includes/header.php'); 
// include('../dbConnection.php');
//  session_start();
//  if($_SESSION['is_login']){
//   $rEmail = $_SESSION['rEmail'];
//  } else {
//   echo "<script> location.href='RequesterLogin.php'; </script>";
//  }

//  $sql = "SELECT * FROM requesterlogin_tb WHERE r_email='$rEmail'";
//  $result = $conn->query($sql);
//  if($result->num_rows == 1){
//  $row = $result->fetch_assoc();
//  $rName = $row["r_name"]; }

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
  <link rel="stylesheet" href="../css/bootstrap.min.css">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="../css/all.min.css">

  
  <title>Profile</title>
</head>

<body>
  <!-- navbar -->
<nav class="navbar navbar-light bg-danger shadow">
  <span class="navbar-brand mb-0 h1">
  <a class="navbar-brand" href="RequesterProfile.php">
   OSMS
  </a>
  </span>
</nav>
<!-- side bar -->


















<div class="col-sm-6 mt-5">
  <form class="mx-5" method="POST">
    <div class="form-group">
      <label for="inputEmail">Email</label>
      <input type="email" class="form-control" id="inputEmail" value=" <?php echo $rEmail ?>" readonly>
    </div>
    <div class="form-group">
      <label for="inputName">Name</label>
      <input type="text" class="form-control" id="inputName" name="rName" value=" <?php echo $rName ?>">
    </div>
    <button type="submit" class="btn btn-danger" name="nameupdate">Update</button>
    <?php if(isset($passmsg)) {echo $passmsg; } ?>
  </form>
</div>
</div>
</div>
<?php
include('includes/footer.php'); 
?>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>