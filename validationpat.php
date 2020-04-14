<?php
session_start();
$con = mysqli_connect('localhost','root');
if($con){
	echo" connection successful";
}else{
	echo " no connection"; 
}

mysqli_select_db($con,'byteforbait');
$pname = $_POST['username'];
$ppass = $_POST['password'];
$mass=password_verify($ppass,$passs);
$q = " select * from patientlogin  where username = '$pname' && password = '$ppass' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
	
	$_SESSION['username'] = $pname;
	header('location:in.php');


}else{

	header('location:patientlogin.php');
}



?>