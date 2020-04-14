

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>Maternal Health Care | Pregnancy | Childbirth | Postpartum period</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
	body{
		color: #fff;
		background: url(assets/9.jpg);
		background-size: cover;
		font-family: 'Roboto', sans-serif;

	}
    .form-control{
		height: 41px;
		background: #f2f2f2;
		box-shadow: none !important;
		border: none;
	}
	.form-control:focus{
		background: #e2e2e2;
	}
    .form-control, .btn{        
        border-radius: 3px;
    }
	.signup-form{
		width: 390px;
		margin: 30px auto;
	}
	.signup-form form{
		color: #999;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #fff;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
	.signup-form h2 {
		color: #333;
		font-weight: bold;
        margin-top: 0;
    }
    .signup-form hr {
        margin: 0 -30px 20px;
    }    
	.signup-form .form-group{
		margin-bottom: 20px;
	}
	.signup-form input[type="checkbox"]{
		margin-top: 3px;
	}
	.signup-form .row div:first-child{
		padding-right: 10px;
	}
	.signup-form .row div:last-child{
		padding-left: 10px;
	}
    .signup-form .btn{        
        font-size: 16px;
        font-weight: bold;
		background: #3598dc;
		border: none;
		min-width: 140px;
    }
	.signup-form .btn:hover, .signup-form .btn:focus{
		background: #2389cd !important;
        outline: none;
	}
    .signup-form a{
		color: #fff;
		text-decoration: underline;
	}
	.signup-form a:hover{
		text-decoration: none;
	}
	.signup-form form a{
		color: #3598dc;
		text-decoration: none;
	}	
	.signup-form form a:hover{
		text-decoration: underline;
	}
    .signup-form .hint-text {
		padding-bottom: 15px;
		text-align: center;
		color: black;
    }
    .signup-form .hint-text a {
    	color: black;
    }
</style>
</head>
<body>
<div class="signup-form">
    <form action="regispat.php" method="post">
		<h2 class="font-italic">Please fill in this form</h2>
		<hr>
		        <div class="form-group">
        	<div class="row">
        		<div class="col-sm-12"><label>Name:</label><br>
        	<input type="text" class="form-control" name="username" placeholder="Name" required="required">
        </div>
    </div>
</div>

       <div class="form-group">
        	<div class="row">
        		<div class="col-sm-12"><label>Guardian Name:</label><br>
        	<input type="text" class="form-control" name="gname" placeholder="Guardian Name" required="required">
        </div>
    </div>
</div>

    

        <div class="form-group">
			<div class="row">
	    <div class="col-sm-6"><label>Mobile No:</label><input type="tel" class="form-control" name="mobile" placeholder="Mobile Number" required="required"></div>
        <div class="col-sm-6"><label>Emergency No:</label><input type="tel" class="form-control" name="emg" placeholder="Emergency Number" maxlength="10" required="required" ></div>
			</div>        	
        </div>
        <div class="form-group">
             <label>Address:</label><br>
            <textarea class="form-control" rows="4" name="address" placeholder="Home Address" required="required"></textarea>
        </div>
          <div class="form-group">
			<div class="row">
	    <div class="col-sm-6"><label>City:</label><input type="text" class="form-control" name="city" placeholder="city" required="required"></div>
        <div class="col-sm-6"><label>PinCode:</label><input type="text" class="form-control" name="pin" placeholder="49****" maxlength="6" required="required" ></div>
			</div>        	
        </div>
        
	       <div class="form-group"><label>Previous Health Issues:</label><br>
	       	 <input type="text" class="form-control" name="issues" placeholder="feel free to share" required="required">

        </div>
         <div class="form-group"><label>Maternal Stage (Months)::</label><br>
	       	 <input type="text" class="form-control" name="stage" placeholder="feel free to share" required="required">

        </div>
         
       
        <div class="form-group"><label>Problems Your Facing During This Period::</label><br>
	       	 <input type="text" class="form-control" name="prob" placeholder="feel free to share" required="required">
	       	</div>

         <div class="form-group"><label>Medication Taken Before:</label><br>
	       	 <textarea class="form-control" name="med" placeholder="feel free to share" required="required"></textarea>


        </div>
        <div class="form-group"><label>email:</label><br>
	       	 <input type="text" class="form-control" name="email" placeholder="feel free to share" required="required">
	       	</div>
        
		<div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg">Submit</button>

        </div>
   </form>
</body>
</html>                            