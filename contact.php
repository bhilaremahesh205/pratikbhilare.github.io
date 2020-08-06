<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  
	<?php include 'links.php'?>
    <!-- <?php include 'contact.css'?> -->
</head>
<body>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end text-center" id="collapsibleNavbar">
    <ul class="navbar-nav font-weight-bold">
      <li class="nav-item">
    <a class="nav-link" href="index.html">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.html">About</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.html">Services</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.html">Portfolio</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="contact.php">Contact</a>
  </li>  
    </ul>
  </div>  
</nav>




<section>
<div class="container mb-5" id="contact" data-aos="fade-up">
		<h1 class="text-center text-capitalize pt-5">Contact Us</h1>
		<hr class="w-100 mt-auto">

		<div class="w-50 mx-auto shadow p-3 mb-5 bg-white rounded">
			<form action="" method="POST">
				  <div class="form-group">
				    <label for="name">Your Name:</label>
				    <input type="text=""" class="form-control" name="name" id="name" autocomplete="off"
				    placeholder="Enter Your Name">
				  </div>
				  <div class="form-group">
				    <label for="email">Email:</label>
				    <input type="email" class="form-control" name="email" placeholder="Enter Your Email" id="email">
				  </div>

				  <div class="form-group">
				    <label for="mno">Mobile Number:</label>
				    <input type="text" class="form-control" name="mobile" placeholder="Enter Your Mobile Number" id="mno">
				  </div>

				  <div class="form-group">
				    <label>Message:</label>
				    <textarea class="form-control" name="message"></textarea>
				    <!-- <input type="text" class="form-control" placeholder="Enter Your Address"> -->
				  </div>
				  <div class="form-group">
				   <input class="btn-primary" type="submit" name="submit">
				  </div> 
				</form>
		</div>
</div>
</section>










<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>



</body>
</html>








<?php
include 'connect.php';


if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $message = $_POST['message'];

    
    $insertquery = " insert into customer(name,email,mobile,message) 
    values('$name','$email','$mobile','$message')";


        $res = mysqli_query($con,$insertquery);

        if($res){
           ?>
           
           <script>
               alert("Thank You For Your Registration!!!");
           </script> 
           <?php

       }else{
        ?>
           
           <script>
               alert("Sorry,Your Registration is Filed");
           </script>
           <?php  

       }
 }

           ?>
