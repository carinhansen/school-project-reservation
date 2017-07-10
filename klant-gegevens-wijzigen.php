<?php
	session_start();
	include 'database/dbh.php';
	
	// new user data
	$new_name = $_POST['name'];
	$new_email = $_POST['email'];
	$new_mobilenr = $_POST['mobilenr'];
	$user_id = $_SESSION['id'];
	
	// if submit isset update user data in database 
	if(isset($_POST['submit'])){
		$query = "UPDATE users SET name='$new_name', email='$new_email', mobilenr='$new_mobilenr' WHERE id='$user_id'";
		$result_query = mysqli_query($conn, $query);
		$row = mysqli_fetch_assoc($result_query);
	}
	
	include'head.php';
?>

	<body>
		<div class="container" style="padding: 50px 0px;">
			<div class="row">
				<div class="col-md-offset-1 col-md-10" style="text-align: center;">
					<h1>Uw gegevens zijn gewijzigd</h1>
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-offset-3 col-md-6" style="text-align: center;">
				<a href="profiel.php"><button class="btn btn-info btn-custom" style="margin-top:10px; float:right;" type="submit" name="submit" >TERUG NAAR JE PROFIEL</button></a>
				</div>
			</div>
		</div>
		
		
	<?php include("footer.php");?>

		