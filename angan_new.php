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
 
.overlay {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
  overflow-x: hidden;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  top: 25%;
  width: 100%;
  text-align: center;
  margin-top: 30px;
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
  color: #f1f1f1;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}
</style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 </head>
 <body>
<header>

    <?php include 'includes/header.php';?>
 
   </header>
<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    
    <a href="services_angan.php">Services</a>
    <a href="https://www.google.co.in/maps/search/anganwadi/@20.9205575,80.6375831,805611m/data=!3m2!1e3!4b1!4m8!2m7!3m6!1sanganwadi!2sChhattisgarh!3s0x3a261f16c67a8bad:0x5c23f412fb179d95!4m2!1d81.8661442!2d21.2786567?hl=en">Location</a>
    <a href="https://economictimes.indiatimes.com/topic/Anganwadi">Latest News</a>
  </div>
</div>
<div id="main">
  <h2 style="text-align: center;padding-top: 10px;">Anganwadi Services Scheme</h2>

<span style="font-size:30px;cursor:pointer; padding: 15px;" onclick="openNav()">&#9776; open</span>

<script>
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>
     
</script>


<section class="my-6">
  <div class="py-6">
    
  </div>
  <div class="container-fluid">
  <div class="row">
    
    <div class="col-lg-6 col-md-6 col-12">
      <img src="assets/angan3.jpg" class="img-fluid aboutimg" style="padding-top: 40px; margin-top: 40px;height: 50px;height: 80px;">
      
    </div>
    <div class="col-lg-6 col-md-6 col-12">


        
      <p style="font-family: cursive; padding: 30px;"class="py-3">Anganwadi is a type of rural child care centre in India. They were started by the Indian government in 1975 as part of the Integrated Child Development Services program to combat child hunger and malnutrition. Anganwadi means "courtyard shelter" in Indian languages.
<br>
A typical Anganwadi centre provides basic health care in a village. It is a part of the Indian public health care system. Basic health care activities include contraceptive counseling and supply, nutrition education and supplementation, as well as pre-school activities. The centres may be used as depots for oral rehydration salts, basic medicines and contraceptives. As of 31 January 2013, as many as 13.3 lakh  Anganwadi and mini-Anganwadi centres  are operational out of 13.7 lakh sanctioned AWCs/mini-AWCs. These centres provide supplementary nutrition, non-formal pre-school education, nutrition and health education, immunization, health check-up and referral services of which the last three are provided in convergence with public health systems. 
<br>
The main objectives of the Department are to focus on promoting the survival, protection, development, welfare and participation of women and children in a holistic manner. The department is responsible for policy making, formulation of programmes /schemes, implementation of development programmes, and co-ordination of efforts of both governmental and non-governmental organizations working in the field of Women and Child Development.
<br>
</p>

      

    </div>
    
  </div>
</section>


<?php include 'includes/footer.php';?>


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 </body>
 </html>

