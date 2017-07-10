<?php
	session_start();
	include 'database/dbh.php';


	if (isset($_POST['submit'])) 
	{
		$email 		= mysqli_real_escape_string($conn, $_POST['email']) ;
		$password 	= mysqli_real_escape_string($conn, $_POST['password']);
			
		$sql = "SELECT id, name, email, mobilenr FROM users WHERE email='$email' AND password='$password'";
		$result = mysqli_query($conn, $sql);

		if(!$row = mysqli_fetch_assoc($result)){
			$error = "Je bent gebruikersnaam of wachtwoord is onjuist";
		}	else {
			$_SESSION['id'] = $row['id'];
			$_SESSION['name'] = $row['name'];
			$_SESSION['email'] = $row['email'];
			$_SESSION['mobilenr'] = $row['mobilenr'];
		}
	}
	
	
	// if the register btn is clicked do the following
	if (isset($_POST['register'])) 
	{
		$validate = true;
		
		// validate the input fields
		// Check if the name input contains anything other than lower and uppercase letters
		if (!preg_match("/^[a-zA-Z ]*$/",$_POST['name'])){
			$error_name = "Dit veld mag alleen letters bevatten";
			$validate = false;
		} 
		
		// Check if the email input is not a valid emailadress
		if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
		{
			$error_email = "Vul een geldig email adres in";
			$validate = false;
		}
		
		// Check if mmobilenumber input contains anything other than numbers
		if (!preg_match("/^[0-9]/",$_POST['mobilenr'])) 
		{
			$error_mobilenr = "Alleen cijfers";
			$validate = false;
		} 
		
		// Check if the two password input fields have a different input
		if($_POST['password']  != $_POST['password-confirm']) 
		{
			$validate = false;
			$error_match_pass = "De ingevoerde wachtwoorden komen niet overeen";
		}
		
		// if all $validate variables are true do an insert in db
		if($validate) 
		{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobilenr = $_POST['mobilenr'];
		$password = $_POST['password'];
			
		// insert new user in db
		$sql = "INSERT INTO users (name, email, mobilenr, password) 
		VALUES ('$name', '$email', '$mobilenr', '$password')";
		mysqli_query($conn, $sql);
		
		$succes_register = "Je bent geregistreerd";
		} else {
			$error_register = "Niet alle velden zijn juist ingevoerd!";
		}
	}

	include'head.php';
?>
		

	<body>
			<div class="container" style="padding: 50px 0px;">
				<div class="row">
					<div class="col-md-offset-1 col-md-10" style="text-align: center;">
						<?php
							// Check if someone is logged in - check if session started
							if(isset($_SESSION['id'])){
								// if someone is logged in show welcome text with name of the logged in user
								echo '<h1>Welkom '.$_SESSION['name'].'</h1>';
							} else {
								// If nobody is logged in show login and register text title
								echo '<h1>Inloggen en registreren</h1><br/>
								<span style="font-size: 22px;">Log in of maak een account aan om een reservering te kunnen plaatsen</span>';
							}
						?>
					</div>
				</div>
			</div>

		<div class="container">
			<div class="row" style="margin-bottom:30px;">
				<div class="col-md-offset-2 col-md-4">
					  
							<?php 
								if(isset($_SESSION['id'])){
									echo $_SESSION['name'].'<br/>';
									echo $_SESSION['email'].'<br/>';
									echo '0'.$_SESSION['mobilenr'].'<br/>';
									
								} else {
								?>
									<h4>Registreren</h4>
									<form action="" method="POST">
										<input type="name" name="name" placeholder="Voornaam en achternaam" class="login-form" required><br>
										<?php 
											if (isset($error_name)) { ?>
											<div class="alert alert-danger" role="alert"><?= $error_name ?></div>
										<?php } ?>
										<input type="text" name="email" placeholder="Email" class="login-form" ><br>
										<?php 
											if (isset($error_email)) { ?>
											<div class="alert alert-danger" role="alert"><?= $error_email ?></div>
										<?php } ?>
										<input type="text" name="mobilenr" placeholder="Telefoonnummer" class="login-form" required><br>
										<?php 
											if (isset($error_mobilenr)) { ?>
											<div class="alert alert-danger" role="alert"><?= $error_mobilenr ?></div>
										<?php } ?>
										<input type="password" name="password" placeholder="Wachtwoord" class="login-form" required><br>
										<input type="password" name="password-confirm" placeholder="Wachtwoord herhalen" class="login-form" required><br>
										<?php 
											if (isset($error_pass)) { ?>
											<div class="alert alert-danger" role="alert"><?= $error_pass ?></div>
										<?php } ?>
										<?php 
											if (isset($error_match_pass)) { ?>
											<div class="alert alert-danger" role="alert"><?= $error_match_pass ?></div>
										<?php } ?>
										<button class="btn btn-info btn-custom" type="register" name="register">REGISTREREN</button>
										<?php 
											if (isset($succes_register)) { ?>
											<div class="alert alert-success" role="alert"><?= $succes_register ?></div>
										<?php } ?>
										<?php 
											if (isset($error_register)) { ?>
											<div class="alert alert-danger" role="alert"><?= $error_register ?></div>
										<?php } ?>
									</form>	
								<?php } ?>	
				</div>
				<div class="col-md-4">
					<?php	
					if(isset($_SESSION['id'])){
						if($_SESSION['id'] == 7){
					?>	
					<form action="nieuwe-cursus.php">
						<button class="btn btn-info btn-custom" style="margin-bottom:10px;" type="submit">EEN NIEUWE CURSUS TOEVOEGEN</button><br/>
					</form> 	
					<form action="cursus-info.php">
						<button class="btn btn-info btn-custom" style="margin-bottom:10px;" type="submit">CURSUS WIJZIGEN OF ANNULEREN</button><br/>
					</form> 	
					<form action="cursisten-cursus-overzicht.php">				
						<button class="btn btn-info btn-custom" style="margin-bottom:10px;"  type="submit">CURSISTEN PER CURSUS</button><br/>
					</form>
					<form action="database/logout.php">
						<button class="btn btn-danger btn-custom" type="submit" style="width:100%">LOG UIT</button>
					</form>
					
						<h3>Taken lijst</h3>
						
						<form id="new-todo-form" method="post">
						    <label for="todo-input">Taak</label>
						    <input type="text" id="todo-input"/>
						    <input type="submit" id="sbm-button" value="Toevoegen"/>
						</form>
						<ul id="todo" style="margin-top:20px;">
						    <li>Nieuwe cursus toevoegen</li>
						    <li>Camera ophalen</li>
						    <li>Mail checken</li>
						</ul>

					<?php } else { ?>
					<form action="reservering.php">
						<button class="btn btn-info btn-custom" style="margin-bottom:10px;" type="submit">EEN NIEUWE RESERVERING PLAATSEN</button><br/>
					</form> 	
					<form action="jouw-reserveringen.php">
						<button class="btn btn-info btn-custom" style="margin-bottom:10px;" type="submit">JOUW RESERVERINGEN BEKIJKEN</button><br/>
					</form> 
					<form action="klant-gegevens.php">				
						<button class="btn btn-info btn-custom" style="margin-bottom:10px;"  type="submit">PERSOONSGEGEVENS WIJZIGEN</button><br/>
					</form>
					<form action="database/logout.php">
						<button class="btn btn-danger btn-custom" type="submit" style="width:100%">LOG UIT</button>
					</form>
					<?php } 
						} else { ?>
							<h4>Inloggen</h4>
						<form action="" method="POST">
							<input type="email" name="email" placeholder="Email" class="login-form" required><br>
							<input type="password" name="password" placeholder="Wachtwoord" class="login-form" required><br>
							<button class="btn btn-info btn-custom" type="submit" name="submit">INLOGGEN</button>
							<?php 
								if (isset($error)) { ?>
								<div class="alert alert-danger" role="alert"><?= $error ?></div>
							<?php } ?>
							<a href="#" style="font-size:12px; margin-top: 20px;">Wachtwoord vergeten?</a>
						</form>
						
					<?php
						}
						?>
				</div>
			</div>
		</div>
		
		

		<?php include("footer.php");?>
		
