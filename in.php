<?php
include 'includes/header.php';
include 'connection.php';

?>
<!DOCTYPE html>
<html>
<head>

	<title></title>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <style >
    .accordion {
        background-color: #F37155;
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

.accordion:after {
        content: '\02795';
        font-size: 15px;
        float: right;
        margin-left: 5px;
    
    }
</style>
    
</head>
<body>
      <img src="assets/gynaec.jpg" width="100%" height="600vh">
 
<h2 class="text-center py-2">DOCTORS AVAILABLE FOR YOU !!</h2>
<br>
<br>
<h3>Please enter your details to move further:><a href="patientregis.php"><button type="submit" name="submit">click here</button></a></h3>
<hr>

 <?php 
        $sql= "SELECT * FROM doctorlogin;";
        $result=mysqli_query($conn,$sql);
        $resultcheck=mysqli_num_rows($result);
        if ($resultcheck>0){
            while($row=mysqli_fetch_assoc($result)){
               ?>
              <section>
                <div class="container">
                      
                    <button class="accordion py-2 text-center"><?php echo $row['first_name']." ".$row['last_name'];?></button>
                        <div class="panel py-1">
                            <ul>
                                   <li style="font-size: 18px;"><?php echo"WORK EXPIREINCE:"." ".$row['workexp']; ?></li>
                                   <li style="font-size: 18px;"><?php echo"EXPERT IN :"." ".$row['expert'] ;?></li>
                                   <li style="font-size: 18px;"><?php echo"SITS AT:"." ".$row['location'];?></li>
                                   <li style="font-size: 18px;"><?php echo"CONTACT AT:"." ".$row['mobile']; ?></li>

                               </ul>
                               <a href="verify.php"><button type="submit"class="btn btn-primary ">Verify</button></a>     
                     
            </div>
            
</div>
        </div>
        
               
             </section>
             <hr>


             <?php
           }

        
         }
         ?>
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

        
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">


        	
     



</body>
</html>