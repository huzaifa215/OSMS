<?php
$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="newosms";
$db_port=3306;
//  create a connection
$conn=new mysqli($db_host,$db_user,$db_password,$db_name,$db_port);
//chechking connection
if($conn->connect_errno){
    die("connection failed");
}

?>