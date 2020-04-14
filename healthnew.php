<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
}

.navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #18C588;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  width: 100%;
  height: 100%;
  left: 0;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content .header {
  background: #18C588;
  padding: 16px;
  color: white;
}

.dropdown:hover .dropdown-content {
  display: block;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 10px;
  background-color: #ccc;
  height: 600px;
}

.column a {
  float: none;
  color: black;
  padding: 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.column a:hover {
  background-color: #ddd;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    height: auto;
  }
}
</style>
</head>
<body>

    <?php include 'language.php';
    ?>

  <section>
    <div class="col-12">
          <img src="assets/22.jpg" style="width: 100%; height: 50vh" class="rounded" alt="Cinque Terre"> 
  </section>

 
  <section>

<div class="navbar">
  
  <div class="dropdown">
    <button class="dropbtn">HEALTH TOPICS
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <div class="header">
        <h2>A TO Z</h2>
      </div>   
      <div class="row">
        <div class="column">
          
          <a href="a.php">A</a>
          <a href="#">B</a>
          <a href="#">C</a>

          <a href="#">D</a>
          <a href="#">E</a>
          <a href="#">F</a>

          <a href="#">G</a>
          <a href="#">H</a>
          <a href="#">I</a>
           <a href="#">J</a>
        </div>
        <div class="column">

          <a href="#">K</a>
          <a href="#">L</a>
          <a href="#">M</a>
          <a href="#">N</a>
          <a href="#">O</a>
          <a href="#">P</a>
          <a href="#">Q</a>
          <a href="#">R</a>
          <a href="#">S</a>
           <a href="#">T</a>
        </div>
         <div class="column">
           <a href="#">U</a> 
           <a href="#">V</a>
            <a href="#">W</a>
          <a href="#">X</a>
          <a href="#">Y</a>
          <a href="#">Z</a>
        </div>
      </div>
    </div>
  </div> 
</div>
</section>
<?php
include 'includes/footer.php';
?>
</body>
</html>
