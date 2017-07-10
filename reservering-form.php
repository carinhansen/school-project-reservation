<?php
	session_start();
	include 'database/dbh.php';

	$course_id = $_GET['id'];
	$user_id = $_SESSION['id'];
	
	$sql = "SELECT id, course, DATE_FORMAT(courses.datetime ,'%m-%d-%Y') AS 'date' , DATE_FORMAT(courses.datetime ,'%H:%i') AS 'time' FROM courses WHERE id='$course_id'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	
	include'head.php';
?>

	<body>
			<div class="container" style="padding: 50px 0px;">
				<div class="row">
					<div class="col-md-offset-1 col-md-10" style="text-align: center;">
						<h1>Reserveren</h1>
						<span style="font-size: 22px;">Vul onderstaand formulier in om je reservering te plaatsen</span>
					</div>
				</div>
			</div>		
				
				<?php	
				// if course is selected show course details
				if(isset($_GET['id'])){
				?>
					<div class="container">
						<div class="row" style="margin-bottom:30px;">
							<div class="col-md-3">
								<h3 class="res-title">Uw gekozen cursus</h3>
									<hr>
									<form action="submit-reservering.php?id=<?php echo $_GET['id'] ?>" method="POST">
									<?php
										echo '<span class="res-user">'.$row['course'].'</span><br/>';
										echo '<span class="res-user">'.$row['date'].'</span><br/>';
										echo '<span class="res-user">'.$row['time'].'</span><br/>';
									?>
							</div>
							<div class="col-md-5">
							<h3 class="res-title">Uw gegevens</h3>
								<hr>
								<?php 
									echo '<span class="res-user">'.$_SESSION['name'].'</span><br/>';
									echo '<span class="res-user">'.$_SESSION['email'].'</span><br/>';
									echo '<span class="res-user">'.'0'.$_SESSION['mobilenr'].'</span><br/>';
								?>
								<h4 style="margin-top:50px;">Adres</h4>
								<hr>
									<input type="text" class="form-control res-form" name="straatnaam" style="width:78%;" placeholder="Straatnaam" required>
									<input type="number" class="form-control res-form" name="huisnummer" style="width:20%;" placeholder="Huisnr." required>
									<input type="text" class="form-control res-form" name="postcode" style="width:29%;"placeholder="Postcode" required>
									<input type="text" class="form-control res-form" name="woonplaats" style="width:69%;"placeholder="Woonplaats" required>
								
							</div>
							<div class="col-md-4">
								<h3 class="res-title">Extra informatie</h3>
								<hr>
								
								<div class="checkbox">
								  <label>
								  	<input type="hidden" name="borrow" value="Nee">
								    <input type="checkbox" name="borrow" value="Ja">
								    Materialen lenen
								  </label>
								</div>
								
								<div class="checkbox">
								  <label>
								  	<input type="hidden" name="n_borrow" value="Nee">
								    <input type="checkbox" name="n_borrow" value="Ja">
								    Zelf materiaal meenemen
								    <input type="text" class="form-control res-form" name="bring" style="margin-top:5px;" placeholder="Wat neem je mee?">
								  </label>
								</div>
								
								<h4 style="margin-top:50px;">Hoe wilt u betalen?</h4>
								<hr>
								<div class="checkbox">
								  <label style="width:100%;">
								  	<input type="hidden" name="pay_method_cash" value="Nee">
								    <input type="checkbox" name="pay_method_cash" value="Ja">
								    Contant
								  </label>
								</div>
								
								<div class="checkbox">
								  <label style="width:100%;">
								  	<input type="hidden" name="pay_method_bank" value="Nee">
								    <input type="checkbox" name="pay_method_bank" value="Ja">
								    Bankoverboeking
									<input type="text" class="form-control res-form" name="iban" style="margin-top:5px;" placeholder="Vanaf welk IBAN nummer wordt het overgemaakt?">
								  </label>
								</div>
								
								<h4 style="margin-top:50px;">Opmerking</h4>
								<hr>
								<textarea class="form-control" name="message" rows="3"></textarea>
								<button class="btn btn-info btn-custom" style="margin-top:10px;" type="submit" name="submit" >RESERVERING PLAATSEN</button>	
															
								</form>
							</div>
						</div>
					</div>
				<?php
				} else {
					// Sends you back to course selection page when there is no course id selected
					echo header("Location: reservering.php");
				}
				?>
		<?php include("footer.php");?>
		
		