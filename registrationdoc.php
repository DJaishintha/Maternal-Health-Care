<?php

session_start();
header('location:doctorlogin.php');
$con = mysqli_connect('localhost','root');
if($con){
	echo "connection successful";
} else{
	echo "no connection";
}

mysqli_select_db($con, 'byteforbait');

$userid = $_POST['username'];
$fn = $_POST['first_name'];
$ln = $_POST['last_name'];
$email = $_POST['email'];
$mob = $_POST['mobile'];
$pass = $_POST['password'];
$loc = $_POST['location'];
$exp = $_POST['expert'];
$wex = $_POST['workexp'];



$q = "select * from doctorlogin where username = '$userid' &&  password = '$pass' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);
//$password=password_hash('$pass', PASSWORD_DEFAULT);
if($num == 1){
	echo " duplicate data";
}
else{

	$qy = "insert into doctorlogin (username , first_name, last_name,  email, mobile, password, location, expert, workexp) values ('$userid', '$fn','$ln', '$email', '$mob', '$pass','$loc', '$exp', '$wex') ";  

	mysqli_query($con, $qy);
}





?>