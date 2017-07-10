<?php
	session_start();
	include 'database/dbh.php';

	$course_id = $_GET['id'];
	$user_id = $_SESSION['id'];
	
	$sql = "SELECT id, course, datetime FROM courses WHERE id='$course_id'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	
	$course_name['course'] = $row['course'];	
	$course_datetime['datetime'] = $row['datetime'];
	
	
	// if clicked on submit button insert user_id and course_id	in db
	if(isset($_POST['submit'])){
		$query = "INSERT INTO course_nr (users_id, courses_id) 
		VALUES ($user_id, $course_id)";
		$result_query = mysqli_query($conn, $query);
		
		// if form not empty send email
		if(!empty($_POST['straatnaam']) && !empty($_POST['huisnummer']) && !empty($_POST['postcode']) && !empty($_POST['woonplaats'])){
				// send email with information
				$to = "carinhansen95@gmail.com";
				$subject = "HTML email";
				$huisnummer = $_POST['huisnummer'];
				$straat = $_POST['straatnaam'];
				$bring = $_POST['bring'];
				$message = "
				<html>
				<head>
				<title>HTML email</title>
				</head>
				<body>
				<h3>Reservering: ".$course_name['course'].$course_datetime['datetime']."</h3>

				<p>Gegevens:</p>
				Naam: <strong>".$_SESSION['name']."</strong><br/>
				Straat en huisnummer: <strong>".$straat.' '.$huisnummer."</strong><br/>
				Postcode en woonplaats: <strong>".$_POST['postcode'].' '.$_POST['woonplaats']."</strong><br/>
				Email: <strong>".$_SESSION['email']."</strong><br/>
				Telefoonnummer: <strong>0".$_SESSION['mobilenr']."</strong><br/><br/>
				Materiaal lenen: <strong>".$_POST['borrow']."</strong><br/>
				Neemt materiaal mee: <strong>".$_POST['n_borrow']." Neemt mee: ".$_POST['bring']."</strong><br/>
				Betaalmethode contant: <strong>".$_POST['pay_method_cash']."</strong><br/>
				Betaalmethode bank: <strong>".$_POST['pay_method_bank']."</strong> IBAN: <strong>".$_POST['iban']."</strong><br/>
				
				Als u heeft gekozen voor contant betalen 
				</body>
				</html>
				";
				
				// Always set content-type when sending HTML email
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
				
				// More headers
				$headers .= 'From: <webmaster@example.com>' . "\r\n";
				$headers .= 'Cc: myboss@example.com' . "\r\n";
				
				mail($to,$subject,$message,$headers);
		}
		else{
			echo"niet alle velden ingevuld";
		}
	}
	
	include("head.php");
?>

	<body>	
		
		<div class="container" style="padding: 50px 0px;">
			<div class="row">
				<div class="col-md-offset-1 col-md-10" style="text-align: center;">
					<span style="font-size: 22px;">Je hebt je ingeschreven voor de cursus:</span>
					<h1><?php echo $course_name['course']." op ".$course_datetime['datetime'] ?></h1>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row" style="margin-bottom:50px;">
				<div class="col-md-12">
					<table  class="table table-hover" style="margin-top: 30px;">
						<tr>
						<th>Voornaam en achternaam</th>
						<th>Straat en huisnummer</th>
						<th>Postcode en woonplaats</th>
						<th>Email</th>
						<th>Mobiel</th>
					</tr>
					<tr>
						<td><?php echo $_SESSION['name'] ?></td>
						<td><?php echo $straat.' '.$huisnummer?></td>
						<td><?php echo $_POST['postcode'].' '.$_POST['woonplaats']?></td>
						<td><?php echo $_SESSION['email'] ?></td>
						<td>0<?php echo $_SESSION['mobilenr'] ?></td>
					</tr>
					</table>
				</div>
				<div class="col-md-12">
					<table  class="table table-hover" style="margin-top: 30px;">
						<tr>
							<th>Materiaal lenen</th>
							<th>Materiaal meenemen</th>
							<th>Betaling contant</th>
							<th>Betaling bankoverboeking</th>
							<th>Opmerking</th>
						</tr>
						<tr>
							<td><?php echo htmlspecialchars($_POST['borrow']) ?></td>
							<td><?php echo htmlspecialchars($_POST['n_borrow'])."<br/>"?>
								<?php echo "<strong>Neemt mee: </strong>".htmlspecialchars($_POST['bring']) ?></td>
							<td><?php echo htmlspecialchars($_POST['pay_method_cash']) ?></td>
							<td><?php echo htmlspecialchars($_POST['pay_method_bank'])."<br/>"?>
								<?php echo "<strong>IBAN nummer: </strong>".htmlspecialchars($_POST['iban']) ?></td>
							<td><?php echo htmlspecialchars($_POST['message']) ?></td>
						</tr>
					</table>
					<a href="profiel.php"><button class="btn btn-info" style="margin-top:10px; float:right;" type="submit" name="submit" >NAAR JE PROFIEL</button></a>
				</div>
			</div>
		</div>
		
	<?php include("footer.php");?>
