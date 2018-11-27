<!DOCTYPE html>
	<html>
		<head>
			<title>Home page </title>
			<link href="home.css" type="text/css" rel="stylesheet">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
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
        <div class="navbar navbar-default navbar-static-top" style=" border: 2px solid red;border-radius: 50px 20px;">
            <div class="container">
				<div class="navbar-collapse collapse ">
					<ul class="nav nav-pills">
						<li class="active"><a href="home.php">Home</a></li> 
						<li><a href="about.php">About</a></li>
						<li><a href="service.php">Services</a></li>
						<li><a href="contact.php">Contact</a></li>
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

    <div class="container"> 
		 <div class="row"><!--search option start-->
			<div class="col-md-4 text-center">
			   <div class="bord">
				<h2 >property serch</h2>
				<form>
					<div class="form-group">
						property type:<br>
						<input type="text" class="form-control" placeholder="property type">
					</div>
					<div class="form-group">
						Area:<br>
						<input type="text" class="form-control" placeholder="area">
					</div>
					<div class="form-group">
						Size:<br>
						<input type="text" class="form-control" placeholder="property size">
					</div>
				</form>
					<button type="button" class="btn btn-default btn-lg">search</button>
		       </div>
		   </div><!--search option end-->


		  <div class="col-md-4 text-center" ><!--describe our goal-->
		      <div class="bord">
				  <h2 class="aligncenter">Our Goal</h2>
				  <p class="aligncenter">Gloaming Properties Service’s goal is to achieve customer satisfaction through excellence in residential housing, Real Estate, Commercial space etc. Sharif properties Service act with absolute honesty, integrity and fairness. We work hard to enhance continuously our reputation for accessibility, professionalism, performance, and the depth and quality of our long-term consultative relationships with clients. We endeavor to be valued as an industry leader in client satisfaction, sales growth, financial strength and profitability.
					We are giving challenging rental service all over Dhaka city for residence pose area and commercial building all over Dhaka.
				  </p> 
			  </div>	  
		  </div><!-- End describe our goal-->

		  <div class="col-md-4 text-center">
			 <div class="bord">
				<h2 class="aligncenter">Adds</h2>   
			 </div>
		   </div>
	  </div>
	</div>
	
	
	<?php 
	echo"<div style=' border: 2px solid red;border-radius: 50px 20px;margin:10px;'>";
		$db = mysqli_connect("localhost","root","","property");
		$sql= "SELECT * FROM apartment";
		$result=mysqli_query($db ,$sql);
		
		echo"<div class='container'>";
			echo"<div class='row'>";
			    echo"<h3>Apertment</h3><br>";
				echo "<br>";
		while($row = mysqli_fetch_array($result)){
						echo"<div class='col-md-3 text-center'>";
							echo"<img src= 'images/".$row['image']."' class='img-thumbnail'>";
							echo"<p>".$row['name']."</p>";
							echo"<p>Rent is= ".$row['rent']."tk</p>";
							echo"<p>".$row['details']."</p>";
			            echo"</div>";	   
		}	
		    echo"</div>";
		echo"</div>";
	
	echo"</div>";
	?>
	
   
   
   <?php
	echo"<div style=' border: 2px solid red;border-radius: 50px 20px;margin:10px;'>";
		$sql1= "SELECT * FROM furnished_aprt";
		$result1 = mysqli_query($db,$sql1);
		
		echo"<div class='container'>";
			echo"<div class='row'>";
			    echo"<h3>Furnished Apertment</hr></h3>";
				    while($row1 = mysqli_fetch_array($result1)){
						echo"<div class='col-md-3 text-center'>";
							echo"<img src='images/".$row1['img']."' class='img-thumbnail'>";
							echo"<p>".$row1['name']."</p>";
							echo"<p>Rent is= ".$row1['rent']."tk</p>";
							echo"<p>".$row1['details']."</p>";
						echo"</div>";
					}
				echo"</div>";
			echo"</div>";
		echo"</div>";
	echo"</div>";
   ?>
   
   
   
   <?php
	echo"<div style=' border: 2px solid red;border-radius: 50px 20px;margin:10px;'>";
		$sql2= "SELECT * FROM commercial_space";
		$result2 = mysqli_query($db,$sql2);
		
		echo"<div class='container'>";
			echo"<div class='row'>";
			    echo"<h3>commercial space</hr></h3>";
				    while($row2 = mysqli_fetch_array($result2)){
						echo"<div class='col-md-3 text-center'>";
							echo"<img src='images/".$row2['image']."' class='img-thumbnail'>";
							echo"<p>".$row2['name']."</p>";
							echo"<p>Rent is= ".$row2['rent']."tk</p>";
							echo"<p>".$row2['details']."</p>";
						echo"</div>";
					}
				echo"</div>";
			echo"</div>";
		echo"</div>";
	echo"</div>";	
   ?>
	
	
	
	
   <?php
   echo"<div style=' border: 2px solid red;border-radius: 50px 20px;margin:10px;'>";
		$sql3= "SELECT * FROM office_space";
		$result3 = mysqli_query($db,$sql3);
		
		echo"<div class='container'>";
			echo"<div class='row'>";
			    echo"<h3>Office Space</hr></h3>";
				    while($row3 = mysqli_fetch_array($result3)){
						echo"<div class='col-md-3 text-center'>";
							echo"<img src='images/".$row3['image']."' class='img-thumbnail'>";
							echo"<p>".$row3['name']."</p>";
							echo"<p>Rent is= ".$row3['rent']."tk</p>";
							echo"<p>".$row3['details']."</p>";
						echo"</div>";
					}
				echo"</div>";
			echo"</div>";
		echo"</div>";
	echo"</div>";
   ?>
   <br>
		<footer style=' border: 2px solid red;border-radius: 50px 20px;margin:10px;'>
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