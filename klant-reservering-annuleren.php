<?php
	session_start();
	include 'database/dbh.php';
	
	$user_id	=	$_SESSION['id'];
	$course_id	=	$_GET['id'];

	if(isset($_POST['delete'])){

		$query = "DELETE FROM course_nr WHERE users_id=$user_id AND courses_id=$course_id";
		$result_query = mysqli_query($conn, $query);
		
	} else {
		echo "Er ging iets fout";
	}
	
	header('Location: reservering.php');
	include'head.php';
?>

	<body>
		<div class="container" style="padding: 50px 0px;">
			<div class="row">
				<div class="col-md-offset-1 col-md-10" style="text-align: center;">
					<h1>Reservering geannuleerd</h1>
					<span style="font-size: 22px;">Lorem ipsum sample tekst</span>
				</div>
			</div>
		</div>
	<?php include("footer.php");?>


		