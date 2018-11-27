<?php
	if(isset($_POST['submit'])){
		 $to = "prolaycsediu@gmail.com";
		 $from = $_POST['mail'];
		 $name = $_POST['name'];
		 $message =$_POST['message'];
		 $subject = "Form submission";
     
		 $headers = "From:" . $from;
       
		 
		 mail($to,$subject,$message,$headers);
		
		 
		 
		 
		 echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
	}
?>






<!DOCTYPE html>
<html>
	<head>
		<title>project</title>
		<link href="home.css" type="text/css" rel="stylesheet">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>-->
	</head>
	<body>
	
		<div class="logoback"><!--start first logo part-->
			<div class="row">
				<div class="col-md-12">
					<p class="pull-left hidden-xs">Logo</p>
					<p class="pull-right"><i class="fa fa-phone"></i>Phone No.+88001751554502</p>
				</div>
			</div>
		</div><!--end first logo part-->
		
		<header><!--start header-->
        <div class="navbar navbar-default navbar-static-top" style=' border: 2px solid red;border-radius: 50px 20px;'>
            <div class="container">
				<div class="navbar-collapse collapse ">
					<ul class="nav nav-pills">
						<li ><a href="home.php">Home</a></li> 
						<li><a href="about.php">About</a></li>
						<li><a href="service.php">Services</a></li>
						<li class="active"><a href="contact.php">Contact</a></li>
					</ul>
				</div>
             </div>
        </div>
	</header><!--End header-->
	
	<!--slider start-->
	<div class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
		  <ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
		  </ol>
	  
      <div class="carousel-inner" role="listbox">
			<div class="item active">
			  <img class="first-slide" src="img/slides/1.jpg" alt="First slide">
			  <div class="container">
				<div class="carousel-caption">
				  <h1></h1>
				  <p></p>
				  <p><a class="btn btn-lg btn-primary" href="#" role="button"></a></p>
				</div>
			  </div>
			</div>
			
			<div class="item">
			  <img class="second-slide" src="img/slides/2.jpg" alt="Second slide">
			    <div class="container">
				  <div class="carousel-caption">
				    <h1></h1>
				    <p></p>
				    <p><a class="btn btn-lg btn-primary" href="#" role="button"></a></p>
				  </div>
			    </div>
			</div>
      </div>
	  
		  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		  </a>
		  
		  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		  </a>
    </div><!--slider end-->


	<br>
	
	
	<div class="container">	
	
	
	   <div class="row">
	      <div class="col-md-12">
	    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
	       <h3>Contact me</h3>
		    <div class="control-group">
                <div class="controls">
			       <input type="text" name="name" class="form-control"placeholder="Full Name" />
		       </div>
	        </div> 
		  <br>
          <div class="control-group">
            <div class="controls">
			    <input type="email" name="mail" class="form-control" placeholder="Email"/>
		    </div>
	      </div> 
		  
		<br>

          <div class="control-group">
            <div class="controls">
				<textarea rows="10" cols="100" name="message" class="form-control" 
                placeholder="Message" id="message" required
		        data-validation-required-message="Please enter your message" minlength="5" 
                data-validation-minlength-message="Min 5 characters" 
                maxlength="999" style="resize:none"></textarea>
		    </div>
          </div> 
  <br>		  
	   <div>
		<input type="submit" name="submit" value="send">
	  </div>
         </form>
	</div>
	</div>
	
	

   <br>
		<footer style=' border: 2px solid red;border-radius: 50px 20px;'>
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h4>our contact</h4>
						<address>
					       <strong>Gloaming property</strong><br>
					               Dhaka;Bangladesh<br>
					               
					    </address>
					<p>
						017777777777 <br>
						Gloamingbd@gmail.com
					</p>
					</div>
					
				<div class="col-lg-6">
					<h4>Quick Links</h4>
					<ul class="list-unstyled">
						<li><a href="#">Latest Events</a></li>
						<li><a href="#">Terms and conditions</a></li>
						<li><a href="#">Privacy policy</a></li>
					
						<li><a href="#">Contact us</a></li>
					</ul>
				</div>
			</div>	
		</div>		
		<br>
<div class="logoback">		
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>
							<span>&copy; www.gloamingbd.com </span><a href="" target="_blank"></a>
						</p>
					</div>
				</div>
	
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>
	
	
		
		<div class="container text-right">
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-linkedin"></i></a>
			<a href="#"><i class="fa fa-google-plus"></i></a>
			<a href="#"><i class="fa fa-skype"></i></a>
		</div>
	</div>
	
	</div>
</div>
					
					
				
			
		</footer>
	
	
	    
		
		<br>
	</body>
</html>