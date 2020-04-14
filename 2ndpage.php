<?php
  include 'includes/header.php';
  include 'language.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Maternal Health Care | Pregnancy | Childbirth | Postpartum period</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="includes/style1.css">
  </head>
  <style >
  	.accordion {
  		background-color: #27AE60;
  		color: #fff;
  		cursor: pointer;
  		padding: 18px;
  		width: 95%;
  		text-align: left;
  		border: 1px solid white;
  		transition: 0.4s;
  		font: 20px Lato, sans-serif;

  	}

  	.panel {
  		padding: 0 18px;
  		background-color: white;
  		display: none;
  		overflow: hidden;
  	}

  	p{
  		font: 16px Lato, sans-serif;
  	}
  	
  	.accordion:after {
  		content: '\02795';
  		font-size: 15px;
  		float: right;
  		margin-left: 5px;
  	}
  	
  </style>
<body>
		
   <section class="my-5">
   	   <div class="row mb-5">
          <div class="col-lg-6 col-lg-6 col-12">>
   	   	<img src="assets/care.jpg" class="img-fluid">
   	   	
   	     </div>
   	    <div class="col-lg-6 col-lg-6 col-12 py-4">
   	    	<h1>Moms Need To Know</h1>
   	    	<hr>
   	    	<button class="accordion">Hygiene & Sanitation</button>
            <div class="panel">
                     <p class="py-2">  Maternal health is the health of women during pregnancy, childbirth, and the postpartum period. It encompasses the health care dimensions of family planning, preconception, prenatal, and postnatal care in order to ensure a positive and fulfilling experience, in most cases, and reduce maternal morbidity and mortality, in other cases<a href="hygienesanitation.php">click to read more</a></p>
            </div>

             <button class="accordion">Government Policies</button>
              <div class="panel">
                  <p class="py-2">Since the beginning of the Safe Motherhood Initiative, India has accounted for at least a quarter of maternal deaths reported globally. India's goal is to lower maternal mortality to less than 100 per 100,000 livebirths but that is still far away despite its programmatic efforts and rapid economic progress over the past two decades<a href="gov_pol_modify.php">click to read more</a></p>
              </div>

              <button class="accordion py-2">NewsRoom</button>
              <div class="panel">
                    <p class="py-2">Maternal health is the health of women during pregnancy, childbirth, and the postpartum period. It encompasses the health care dimensions of family planning, preconception, prenatal, and postnatal care in order to ensure a positive and fulfilling experience, in most cases, and reduce maternal morbidity and mortality, in other cases<a href="newsroom.php">click to read more</a></p>
              </div>
               <button class="accordion">Non Governmental Organisation (NGO) </button>
              <div class="panel">
                    <p class="py-2">Non-governmental organizations (also known as NGOs, nongovernmental organizations, or nongovernment organizations) are organizations that are independent of any government. They are usually non-profit. Many of them are active in humanitarian or social areas. However, NGOs can also be lobby groups for corporations, such as the World Economic Forum.<a href="ngo.php">click to read more</a></p>
              </div>
               <button class="accordion">Anganwadi Services Scheme</button>
              <div class="panel">
                    <p class="py-2">Anganwadi is a type of rural child care centre in India. They were started by the Indian government in 1975 as part of the Integrated Child Development Services program to combat child hunger and malnutrition. Anganwadi means "courtyard shelter" in Indian languages<a href="angan_new.php">click to read more</a>
                    </p>
              </div>
              <button class="accordion">Consultancies</button>
              <div class="panel">
                    <p class="py-2">“Mental health…is not a destination, but a process. It’s about how you drive, not where you’re going.”<a href="cons.php">click to read more</a>
                    </p>
              </div>
              <script type="text/javascript">
              	var acc = document.getElementsByClassName("accordion");
                      var i;

                    for (i = 0; i < acc.length; i++) {
                      acc[i].addEventListener("click", function() {
                           /* Toggle between adding and removing the "active" class,
                               to highlight the button that controls the panel */
                         this.classList.toggle("active");

                              /* Toggle between hiding and showing the active panel */
                              var panel = this.nextElementSibling;
                            if (panel.style.display === "block") {
                              panel.style.display = "none";
                             } else {
                           panel.style.display = "block";
                                }
                               });
                       }
              </script>
   	</section>
   	    
    <section>
    	
    <div class="container-fluid">
    	
    	<hr class="w-25 mx-auto">

    	<div class="row mb-5">
    		<div class="col-lg-6 col-md-6 col-12">
    			<img src="assets/1.jpg" class="img-fluid">  			
    		</div>
    		<div class="col-lg-6 col-md-6 col-12">
    			<h1>Rural moms needs care</h1>
    			<hr>
    			<p style="font-size: 23px">You cannot have maternal health without reproductive health. And reproductive health includes contraception and family planning and access to legal, safe abortion. </p>
    			<br>
    			<br>
    			<br>

                                <p style="font-size: 20px "> Improved maternal health benefits the whole of society.</p><br><br>
                           

    		</div>
    		
    	</div>
    </div>

    </section>

   	<section>
   		<div class="container-fluid">
        <hr class="w-25 mx-auto">
 
  <div class="card-deck">
    <div class="card bg-secondary">
      <div class="card-body text-center">
        <a href="contactdoc.php"><p class="card-text font-italic font-weight-bold">Nearby Doctors/ Patients</p></a>
      </div>
    </div>
    <div class="card bg-warning">
      <div class="card-body text-center">
        <a href="region.php"><p class="card-text font-italic font-weight-bold">Nearby Pharmacy</p></a>
      </div>
    </div>
    <div class="card bg-success">
      <div class="card-body text-center">
        <a href="region.php"><p class="card-text font-italic font-weight-bold">Nearby Blood Bank</p></a>
      </div>
    </div>
    <div class="card bg-danger">
      <div class="card-body text-center">
        <a href="region.php"><p class="card-text font-italic font-weight-bold">Private Vehicles</p></a>
      </div>
    </div>  
  </div>
</div>
   	</section>
    <hr>
   	<section>
      <div class="container-fluid">
        <hr class="w-25 mx-auto">
   	<hr>
      <div class="row text-center">
        <div class="col-lg-4 col-md-4 col-12">
            <div class="card" style="width:400px">
            <img class="card-img-top" src="assets/2.jpg" alt="Card image">
           <div class="card-body">
             <h4 class="card-title">maternal deaths and injuries:</h4>
               <a href="mdandinjuries.php"><p class="card-text">Childbirth in rural areas: maternal deaths, village deliveries and obstetric service use</p></a><br>
               <a href="mdandinjuries.php" class="btn btn-primary">Read More</a>
         </div>
      </div>
        </div>

           <div class="col-lg-4 col-md-4 col-12">
            <div class="card" style="width:400px">
            <img class="card-img-top" src="assets/3.jpg" alt="Card image">
           <div class="card-body">
             <h4 class="card-title">sexual and reproductive health</h4>
                <a href="reproductivehealth.php"><p class="card-text">antenatal care for a positive pregnancy experience</p></a>
                <br>
               <a href="reproductivehealth.php" class="btn btn-primary">Read More</a>
         </div>
      </div>
        </div>

           <div class="col-lg-4 col-md-4 col-12">
            <div class="card" style="width:400px">
            <img class="card-img-top" src="assets/7.jpg" alt="Card image">
           <div class="card-body">
             <h4 class="card-title">Adolescent Pregnancy </h4>
                <a href="adl.php"><p class="card-text">Addressing Pregnancy Among Rural Teens: young, poor, & pregnant.</p></a><br>
               <a href="adl.php" class="btn btn-primary">Read More</a>
         </div>
      </div>
        </div>
      </div>
    </div>
   	</section>
    <br>
<hr>
   








  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<?php
include 'includes/footer.php';
?>

</body>
</html>