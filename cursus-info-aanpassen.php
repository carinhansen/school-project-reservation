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
					<h1>Cursus wijzigen of annuleren</h1>
					<span style="font-size: 22px;">Je kunt een cursus wijzigen of annuleren</span>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row" style="margin-bottom:50px;">
					<?php
						if(isset($_SESSION['id'])){	
							if($_SESSION['id'] == 7){	
					?>
					<div class="col-md-offset-1 col-md-5">
						<h3 style="text-align: center;">Wijzigen</h3>
						<hr>
						<form action="cursus-wijzigen.php?id=<?php echo $_GET['id'];?>" method="POST">
						Cursus naam:<br/>
						<input type="text" class="form-control res-form" name="name" placeholder="Origineel: <?php echo $row['course']?>" value="<?php echo $row['course']?>" required>
						Datum en tijd:<br/>
						<input type="text" class="form-control res-form" name="datetime" placeholder="Origineel: <?php echo $row['datetime'] ?>" value="<?php echo $row['datetime'] ?>" required>
						Maximum aantal cursisten:<br/>
						<input type="text" class="form-control res-form" name="max_users" placeholder="Origineel: <?php echo $row['max_users']?>" value="<?php echo $row['max_users']?>" required>
						<button class="btn btn-info btn-custom" style="margin-top:10px;" type="submit" name="change" >CURSUS WIJZIGEN</button>			
						</form>
					</div>
					
					<div class="col-md-5">
						<h3 style="text-align: center;">Annuleren</h3>
						<hr>
						<p>Annuleer de cursus: <strong><br/><?php echo $row['course']?></strong></p>
						<form action="cursus-annuleren.php?id=<?php echo $_GET['id'];?>" method="POST">
							<button class="btn btn-danger btn-custom" style="margin-top:10px; width:100%;" type="submit" name="delete" >CURSUS ANNULEREN</button>
						</form>
						<p style="margin-top:10px; font-size: 12px; color:#c3322e;">Door op de button te klikken annuleer je definitief de cursus.</p>
								
					</div>
					<?php } else { ?>
					<div class="col-md-offset-3 col-md-6" style="margin-bottom:50px;">
						<h2 style="border:1px solid red; text-align: center; padding:15px; color:red;">Je bent niet ingelogd als admin <br/><?php echo $_SESSION['name']?></h2>
						<a href="profiel.php"><button class="btn btn-info btn-custom" style="margin-top:10px;" type="submit" name="submit" >LOG IN PAGINA</button></a>
					</div>	
					<?php
						 }
						 } else { ?>
					<div class="col-md-offset-3 col-md-6" style="margin-bottom:50px;">
						<h2 style="border:1px solid red; text-align: center; padding:15px; color:red;">Je moet je eerst aanmelden als admin</h2>
						<a href="profiel.php"><button class="btn btn-info btn-custom" style="margin-top:10px;" type="submit" name="submit" >LOG IN PAGINA</button></a>	
					</div>
						<?php 
						}
					  ?>
				</div>
			</div>
		</div>
	<?php include("footer.php");?>

		