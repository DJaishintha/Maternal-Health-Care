<?php

session_start();


$con = mysqli_connect('localhost','root');
if($con){
	echo" connection successful";
}else{
	echo " no connection"; 
}

mysqli_select_db($con,'byteforbait');

$name = $_POST['username'];
$pass = $_POST['password'];


if ($passv) {
	echo "hello";
}
$q = " select * from doctorlogin  where username = '$name' && password=$pass";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
	
	$_SESSION['username'] = $name;
	header('location:index.php');


}else{

	header('location:doctorlogin.php');
}



?>