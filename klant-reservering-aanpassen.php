<?php
	session_start();
	include 'database/dbh.php';

	$course_id = $_GET['id'];
	$user_id = $_SESSION['id'];
	
	$sql = "SELECT * FROM courses WHERE id='$course_id'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	
	include'head.php';
?>
	
	<body>
		<div class="container" style="padding: 50px 0px;">
			<div class="row">
				<div class="col-md-offset-1 col-md-10" style="text-align: center;">
					<h1>Annuleer een cursus</h1>
					<span style="font-size: 22px;">Je staat op het punt je reservering voor <strong><?php echo $row['course']?></strong> te annuleren</span>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row" style="margin-bottom:50px;">
					<?php
						if(isset($_SESSION['id'])){	
					?>

					<div class="col-md-offset-3 col-md-6" style="text-align: center;">
						
						Door op de button te klikken annuleer je je reservering. Zodra je op de button klikt is de reservering definitief geannuleerd.
						<form action="klant-reservering-annuleren.php?id=<?php echo $_GET['id'];?>" method="POST">
							Door hieronder te klikken annuleer je definitief de cursus <strong><?php echo $row['course']?></strong>
							<button class="btn btn-info btn-custom" style="margin-top:10px;" type="submit" name="delete" >CURSUS ANNULEREN</button>	
						</form>
					</div>
					<?php } else { ?>
					<div class="col-md-offset-3 col-md-6" style="margin-bottom:50px;">
						<h2 style="border:1px solid red; text-align: center; padding:15px; color:red;">Je bent niet ingelogd als admin <br/><?php echo $_SESSION['name']?></h2>
						<a href="profiel.php"><button class="btn btn-info btn-custom" style="margin-top:10px;" type="submit" name="submit" >LOG IN PAGINA</button></a>
					</div>	
					<?php
						 }
						?>
				</div>
			</div>
		</div>
	<?php include("footer.php");?>

		