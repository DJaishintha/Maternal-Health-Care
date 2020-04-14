<?php

//session_start();
//$password="";
header('location:patientlogin.php');

$con = mysqli_connect('localhost','root');
if($con){
	echo" connection successful";
}else{
	echo " no connection"; 
}

mysqli_select_db($con,'byteforbait');

$name = $_POST['username'];
$fname=$_POST['first_name'];
$lname=$_POST['last_name'];
$dob=$_POST['bday'];
$email=$_POST['email'];
$mob=$_POST['mobile'];
$pass = $_POST['password'];


$q = " select * from patientlogin  where username = '$name' && password = '$pass' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);
//$password=password_hash('$pass', PASSWORD_DEFAULT);
if($num == 1){
	echo" duplicate data ";
}else{

	$qy= " insert  into patientlogin(username,first_name,last_name,bday,email,mobile,password) values ('$name' , '$fname','$lname','$dob','$email','$mob','$pass') ";
	mysqli_query($con, $qy);
}



?>