<?php
	session_start();
	include 'database/dbh.php';
	include'head.php';
?>

	<body>
			<div class="container" style="padding: 50px 0px;">
				<div class="row">
					<div class="col-md-offset-1 col-md-10" style="text-align: center; margin-bottom:50px;">
						<h1>Gegevens wijzigen</h1>
						<span style="font-size: 22px;">Hieronder kan je je gegevens aanpassen</span>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-offset-4 col-md-4">
						<form action="klant-gegevens-wijzigen.php" method="POST">
						Naam:<br/>
						<input type="text" class="form-control res-form" name="name" placeholder="Voornaam en achternaam" value="<?php echo $_SESSION['name']?>" required>
						Email:<br/>
						<input type="text" class="form-control res-form" name="email" placeholder="Email" value="<?php echo $_SESSION['email'] ?>" required>
						Mobiel:<br/>
						<input type="number" class="form-control res-form" name="mobilenr" placeholder="Telefoonnummer" value="0<?php echo $_SESSION['mobilenr'] ?>" required>
						<button class="btn btn-info btn-custom" style="margin-top:10px;" type="submit" name="submit" >GEGEVENS WIJZIGEN</button>	
										
						</form>
					</div>
				</div>
			</div>		

		<?php include("footer.php");?>
		