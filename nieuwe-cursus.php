<?php
	session_start();
	include 'database/dbh.php';
	include'head.php';
?>
	
	<body>
			<div class="container" style="padding: 50px 0px;">
				<div class="row">
					<div class="col-md-offset-1 col-md-10" style="text-align: center;">
						<h1>Een nieuwe cursus toevoegen</h1>
						<span style="font-size: 22px;">Vul onderstaand formulier in om een nieuwe cursus toe te voegen</span>
					</div>
				</div>
			</div>
		
	
		<div class="container">
			<div class="row">
				<div class="col-md-offset-3 col-md-6" style="margin-bottom:50px;">
				<?php	
				if(isset($_SESSION['id'])){
					if($_SESSION['id'] == 7){
				?>		
				<form action="post-cursus.php" method="POST">
					<input class="new-course" type="text" name="course" placeholder="Cursusnaam" required><br>
					<input class="new-course" type="date" name="date" required><br>
					<input class="new-course" type="time" name="time" required><br>
					<input class="new-course" type="text" name="max_users" placeholder="Aantal cursisten" required><br>

					<button type="submit" class="btn btn-info btn-custom">VERZENDEN</button>
				</form>	
				<!--<a href="profiel.php"><button type="button" class="btn btn-info btn-custom" style="margin-top: 10px;float:right;"> TERUG NAAR JE PROFIEL</button></a>-->
				<?php } else { ?>
				<h2 style="border:1px solid red; text-align: center; padding:15px; color:red;">Je bent niet ingelogd als admin <br/><?php echo $_SESSION['name']?></h2>
				<a href="profiel.php"><button class="btn btn-info btn-custom" style="margin-top:10px;" type="submit" name="submit" >LOG IN PAGINA</button></a>	
									
				<?php } 
				} else { ?>		
				<h2 style="border:1px solid red; text-align: center; padding:15px; color:red;">Je moet je eerst aanmelden als admin</h2>
				<a href="profiel.php"><button class="btn btn-info btn-custom" style="margin-top:10px;" type="submit" name="submit" >LOG IN PAGINA</button></a>	
				<?php } ?>
				</div>
			</div>
		</div>
		<?php include("footer.php");?>

		