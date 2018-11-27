<?php
	if(isset($_POST['upload'])){
		$target="img/" .basename($_FILE['image']['name']);
		
		$db = mysqli_connect("localhost","root","","property");
		
		$image=$_FILE['image']['name'];
		$name=$_POST['text'];
		$rent=$_POST['text'];
		$details=$_POST['text'];
		
		$sql="INSERT INTO img(image,text,text,text) VALUES($image,$name,$rent,$details)";
		
		if(move_uploaded_file($_FILE['image']['tmp_name'],$target)){
			$meg="The image upload is successfully";
		}else{
			$meg="The image upload is not successfully";
		}
	}
?>



<!DOCTYPE html>
<html>
	<head>
		<title>This is upload file</title>
	</head>
	
	<body>
		<div class="content">
			<form method="post" action="upload.php" enctype="multipart/form-date">
				<input type="hidden" name="size" value="1000">
				<div>
					<input type="file" name="image">
				</div>
				<div>
					<input type="text" name="name">
				</div>
				<div>
					<input type="text" name="rent">
				</div>
				
				<div>
					<textarea name="text" cols="40" rows="4" placeholder="say about your property"></textarea>
				</div>
				<div>
					<input type="submit" name="upload" value="upload all">
				</div>
				
			</form>
		</div>
	</body>
</html>