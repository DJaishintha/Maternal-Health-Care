<?php

session_start();


$con = mysqli_connect('localhost','root');
if($con){
	echo" connection successful";
}else{
	echo " no connection"; 
}

mysqli_select_db($con,'byteforbait');

$userid = $_POST['username'];
$mob = $_POST['mobile'];

$q = " select * from patientregis  where username = '$userid' && mobilenumber='$mob'";

$result = mysqli_query($con,$q);

$num = mysqli_num_rows($result);
echo $num;
$_SESSION['username'] = $userid;
if($num == 1){
	
	//$_SESSION['username'] = $userid;
	//echo "Won !!";
	 header('location:interaction.php');


}else{

	header('location:verify.php');
}



?>