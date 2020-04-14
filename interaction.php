<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		*{margin: 0;padding: 0;}
		#main {border: 1px solid black; width: 600px;height: 500px; margin: 24px auto;}
		#messagearea {width:98%;border: 1px solid blue;height: 400px;}
	</style>
</head>
<body>
	<?php 
	session_start();
	if (isset($_SESSION['username'])) {
		echo "Welcome".$_SESSION['username'];
		echo '<a href="logout.php">LOG OUT</a><br>';
	}
	else
	{
		header('location:verify.php');
	}
	?>

<div id="main">
	<div id="messagearea">
	<?php
	$q1="select * from interaction";
	$r1= mysqli_query($conn,$q1);
	while($row=mysqli_fetch_assoc($r1)){
		
		$username=$row['username'];
		$message=$row['texts'];
		echo '<h4 style="color:red">'.$username.'</h4>';
       	echo '<p>'.$message.'</p>';

	}
      
     if (isset($_POST['submit'])) {
     	$message= $_POST['message'];
     $q='INSERT INTO interaction(username,texts, role)VALUES("'.$_SESSION['username'].'","'.$message.'", 1)';  
       if(mysqli_query($conn,$q)){
       	echo '<h4 style="color:red">'.$_SESSION['username'].'</h4>';
       	echo '<p>'.$message.'</p>';
       }
   }

	?>
     </div>

	
	<form method="post">
		<input type="text" id="transcript1" name="message" placeholder="type your text/speech">
		<img onclick="startDictation('transcript1')" src="//i.imgur.com/cHidSVu.gif" />
		<input type="submit" name="submit" value="message" >
	</form>
	<!-- HTML5 Speech Recognition API -->
<script>
  function startDictation(speechID) {

    if (window.hasOwnProperty('webkitSpeechRecognition')) {

      var recognition = new webkitSpeechRecognition();

      recognition.continuous = false;
      recognition.interimResults = false;

      recognition.lang = "en-US";
      recognition.start();

      recognition.onresult = function(e) {
        document.getElementById(speechID).value
                                 = e.results[0][0].transcript;
        recognition.stop();
        document.getElementById('labnol').submit();
      };

      recognition.onerror = function(e) {
        recognition.stop();
      }

    }
  }
</script>
	

</div>
</body>
</html>
