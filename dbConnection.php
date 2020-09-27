<?php
$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="newosms";
$db_port=3306;
//  create a connection
$con=new mysqli($db_host,$db_user,$db_password,$db_name,$db_port);
//chechking connection
if($con->connect_errno){
    echo"connection failed";
}
else{
    echo" Connectd";
}

?>