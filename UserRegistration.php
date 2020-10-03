<?php
  include('./dbConnection.php');

  if(isset($_REQUEST['rSignup'])){
    // Checking for Empty Fields
    if(($_REQUEST['rName'] == "") || ($_REQUEST['rEmail'] == "") || ($_REQUEST['rPassword'] == "")){
     $regmsg = '<div class="alert alert-danger mt-2" role="alert"> All Fields are Required </div>';
    // $regmsg="All feilds are requires";
    } else {
      $sql = "SELECT r_email FROM requesterlogin_tb WHERE r_email='".$_REQUEST['rEmail']."'";
      $result = $conn->query("SELECT r_email FROM requesterlogin_tb WHERE r_email='".$_REQUEST['rEmail']."'");
      // $result = $conn->query($sql);
      if($result->num_rows == 1){
        $regmsg = '<div class="alert alert-warning mt-2" role="alert"> Email ID Already Registered </div>';
      } else {
        // Assigning User Values to Variable
        $rName = $_REQUEST['rName'];
        $rEmail = $_REQUEST['rEmail'];
        $rPassword = $_REQUEST['rPassword'];
        $sql = "INSERT INTO requesterlogin_tb(r_name, r_email, r_password) VALUES ('$rName','$rEmail', '$rPassword')";
        if($conn->query($sql) == TRUE){
          $regmsg = '<div class="alert alert-success mt-2" role="alert"> Account Succefully Created </div>';
        } else {
          $regmsg = '<div class="alert alert-danger mt-2" role="alert"> Unable to Create Account </div>';
        }
      }
    }
 }
?>



<!-- start registertion form -->
<div class="container pt-5" id="registration">
    <h2 class="text-center">Create an Account</h2>
    <div class="row mt-4 mb-4">
<div class="col-md-6 offset-md-3">

<form action="" class="shadow-lg p-4" method="POST">

<div class="from-group">
    <i class="fas fa-user"></i>
    <label for="name" class="font-weight-bold p1-2">Name</label>
    <input type="text" class="form-control" placeholder="Enter your Name" name="rName">

</div>

<div class="from-group">
    <i class="fas fa-user"></i>
    <label for="email" class="font-weight-bold p1-2">Email</label>
    <input type="email" class="form-control" placeholder="Enter your email" name="rEmail">
<small class="form-text">We'll never share your email</small>
</div>

<div class="from-group">
    <i class="fas fa-key"></i>
    <label for="pass" class="font-weight-bold p1-2">New Password</label>
    <input type="password" class="form-control" placeholder="Enter your password" name="rPassword">

</div>
 <button type="submit" class="btn btn-danger mt-5 btn-block shadow-sm font-weight-bold" name="rSignup">Sign Up</button>
 <em style="font-size:10px;">Note: By clicking sign up you agree our term and conditions</em>
 <?php if(isset($regmsg)){
     echo $regmsg;
 } 
 ?>
</form>
</div>

    </div>
</div>