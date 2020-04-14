<?php

session_start();

$con = mysqli_connect('localhost','root');
if($con){
	echo "connection successful";
} else{
	echo "no connection";
}

mysqli_select_db($con, 'byteforbait');

$userid = $_POST['username'];
$gn = $_POST['gname'];
$mob = $_POST['mobile'];
$emg = $_POST['emg'];
$add = $_POST['address'];
$city = $_POST['city'];
$pin = $_POST['pin'];
$hissues= $_POST['issues'];
$mstage= $_POST['stage'];
$prob = $_POST['prob'];
$med = $_POST['med'];
$email=$_POST['email'];

$q = "select * from patientregis where username = '$userid'";

$result = mysqli_query($con, $q);

$qy = "insert into patientregis (username,guardianname,mobilenumber,emergencynumber,address,city,pincode,healthissues,months,problems,medication) values ('$userid', '$gn','$mob', '$emg', '$add', '$city','$pin', '$hissues', '$mstage','$prob','$med') ";  

	mysqli_query($con, $qy);
header('location:in.php');