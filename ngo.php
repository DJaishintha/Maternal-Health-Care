<!DOCTYPE html>
<html>
<head>
  <title></title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style type="text/css">
      .aboutimg{
    width:100%;
    height:350px!important;
  }
  
</style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 </head>
 <body>
<header>
    <?php include 'includes/header.php';?>
   </header>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<img src="assets/ngo.jpg" class="img-fluid" style="height: 70%;width: 100%; padding-top: 30px;">
			</div>
			<div class="col-lg-6 col-md-6 col-12">
        <h1 style="text-align: center;">NGOs FOR HELP </h1>
				<p>Non-governmental organizations (also known as NGOs, nongovernmental organizations, or nongovernment organizations) are organizations that are independent of any government. They are usually non-profit. Many of them are active in humanitarian or social areas. However, NGOs can also be lobby groups for corporations, such as the World Economic Forum.
<br>
NGOs are a subgroup of all organizations founded by citizens, which include clubs and other associations that provide services, benefits, and premises only to members[dubious – discuss]. Sometimes the term is used as a synonym of "civil society organization" to refer to any association founded by citizens,[12] but this is not how the term is normally used in the media or everyday language, as recorded by major dictionaries.

<br>

NGOs are usually funded by donations, but some avoid formal funding altogether and are run primarily by volunteers. NGOs are highly diverse groups of organizations engaged in a wide range of activities, and take different forms in different parts of the world. Some may have charitable status, while others may be registered for tax exemption based on recognition of social purposes. Others may be fronts for political, religious, or other interests. Since the end of World War II, NGOs have had an increasing role in international development, particularly in the fields of humanitarian assistance and poverty alleviation.</p>
</div>
</div>
       <section >
   <div class="container">
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="font-size: 20px">
    LOGIN / SIGNUP
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header ">
          <h4 class="modal-title text-capitalize text-primary">Login TO Continue</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body text-center">
        	<div class="form-group">
        	<div class="row">
        		<div class="col-sm-12">
        	<input type="text" class="form-control" name="username" placeholder="User ID" required="required">
        </div>
    </div>
</div>
       
           	<div class="form-group">
        	<div class="row">
        		<div class="col-sm-12">
        	<input type="text" class="form-control" name="ngo" placeholder="Name of the NGO" required="required">
        </div>
    </div>
</div>
         <div class="form-group">
        
            <input type="password" class="form-control" name="location" placeholder="location of the NGO" required="required">
        </div>
         <div class="form-group">
        
            <input type="password" class="form-control" name="time" placeholder="How long the NGO is expected to exist" required="required">
        </div>

        
        <div class="form-group">
        
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>
    </div>
        
        
        <!-- Modal footer -->
        <div class="modal-footer">
        <button class="btn btn-primary">login</button>


        </div>
        
      </div>
    </div>
  </div>
  
</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</section></div>
<?php include 'includes/footer.php';?>


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 
</body>
</html>