<?php
	
	 $mes="";

  //when submitted button is presed
  if(isset($_POST['upload'])){
	  $target= "images/";
	  $target=$target.basename($_FILES['image']['name']);
	  //connection
	 $db = mysqli_connect("localhost","root","","property");
	 
	 //$id=$_POST['id'];
	 $image=$_FILES['image']['name'];
	 $name=$_POST['name'];
	 $rent=$_POST['rent'];
	 $details=$_POST['text'];
	 
	 $sql = "INSERT INTO commercial_space(image,name,rent,details) VALUES ('$image','$name','$rent','$details')";
	 mysqli_query($db ,$sql);
	 
	 if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
		 $mes="image Upload successfully";
	 }else{
		 $mes="image Upload not successfully";
	 }
	  
  }
  
  
 $db = mysqli_connect("localhost","root","","property");
  
    function getData(){
	  $data=array();
	  $data[1]=$_FILES['image']['name'];
	  $data[2]=$_POST['name'];
	  $data[3]=$_POST['rent'];
	  $data[4]=$_POST['text'];
	  return $data;
  }
  
  
    $db = mysqli_connect("localhost","root","","property");
  if(isset($_POST['delete'])){
	  $info = getData();
	  $delete_query = "DELETE FROM commercial_space WHERE name = '$info[2]'";
	  try{
		  $delete_result = mysqli_query($db,$delete_query);
		  if($delete_result){
              if(mysqli_affected_rows($db)>0){
				  echo("data deleted");
			  }else{
                 echo("data not deleted");
                   }
		  }
	  }catch(Exception $ex){
          echo("error in delete");
           }
  }
  
  
  
  if(isset($_POST['update'])){
    $info1 = getData();
    $update_query="UPDATE commercial_space SET image='$info1[1]',rent='$info1[3]',details='$info1[4]' WHERE name = '$info1[2]'";
	          
	try{
	$update_result=mysqli_query($db,$update_query);
	if($update_result){
	  if(mysqli_affected_rows($db)>0){
	     echo("data updated");
	   }else{
	        echo("data not updated");
	      }
	     }
	}catch(Exception $ex){
	    echo("error in update".$ex->getMessage());
	   }
	 }
  

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin panal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">AdminPanal</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="admin.php">Apartment</a></li>
      <li ><a href="f_furnished.php">Full Furnished</a></li>
      <li class="active"><a href="c_space.php">Office space</a></li>
      <li><a href="o_space.php">commercial space</a></li>
    </ul>
		 <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>


<div>
	<h3 align="center">Office Space</h3>
</div>



<div class="container">
	<form method="post"  action="o_space.php" enctype="multipart/form-data">

	  <div class="form-group">
		image:
		<input type="file" name="image" class="form-control">
	  </div>
	   <div class="form-group">
		  name:
		<input type="text"  name="name" class="form-control">
	  </div>
	  <div class="form-group">
		rent:
		<input type="text" name="rent" class="form-control">
	  </div>
	  <div class="form-group">
	   details:
		<textarea class="form-control" name="text" placeholer="write details"></textarea>
	  </div>
	   <div>
		<input type="submit" name="upload" value="upload Image">
		<input type="submit" name="delete" value="Delete Add">
		<input type="submit" name="update" value="update Add">
	  </div>
	</form>
</div>
</body>
</html>
