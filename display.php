<!DOCTYPE html>
<html>
<head>
	<title>ASSIGNMENT</title>
      <!-- Bootstrap CSS -->
      <link rel = "stylesheet" 
         href = "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
         integrity = "sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
         crossorigin = "anonymous">
             <!-- jQuery library -->
      <script src = "https://code.jquery.com/jquery-3.2.1.slim.min.js" 
         integrity = "sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" 
         crossorigin = "anonymous">
      </script>

      
         <!-- Latest compiled and minified Bootstrap JavaScript -->
      <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
         integrity = "sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" 
         crossorigin = "anonymous">
      </script>
       <!-- Popper -->
      <script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" 
         integrity = "sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" 
         crossorigin = "anonymous">
      </script>
</head>
<body>


<div class="container-fluid">
	<!--<a href=" https://www.iiit.ac.in/"><img src="
	https://www.iiit.ac.in/img/iiit-new.png" class="img-fluid" style="width:160px;height:160px"></a>

  <a href="/"  class="navbar-nav ml-auto" >Home</a>-->
	
<nav class='navbar navbar-expand-md navbar-light bg-light' >
  <a href="#" class="navbar-brand"><a href=" https://www.iiit.ac.in/"><img src="
	https://www.iiit.ac.in/img/iiit-new.png" class="img-fluid" style="width:100px;height:100px"></a>
</a>
  
  <a href="https://serc.iiit.ac.in/rdip "  class="navbar-nav ml-auto" style="color: blue;margin-right: 20px;"><h5><b>RDIP</b></h5></a>
  


</nav>

</div>












	<div class="container-fluid">


	<div class='container1'>
<nav class='navbar navbar-expand-md navbar-dark bg-secondary'>
	<ul class="navbar-nav">
		<li class='nav-item'><a href="home.html" class='nav-link' style="color: white">Home</a></li>&nbsp&nbsp
		<li class='nav-item'><a href="reg.html" class='nav-link' style="color: white">Registration Form</a></li>
		
	</ul>
</nav>

<!--<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Register</a>
      </li>
      
    
    </ul>
  </div>
</nav>
-->

</div>
</div>



<?php
First name:echo "$_POST["first_name"]";
Email:echo "$_POST["email"]";
Phone No:echo "$_POST["number"]";
Gender:echo "$_POST["gender"]";
Reason for RDIP:echo "$_POST["reason"]";
college:echo "$_POST["college"]";






?>





</body>
</html>







