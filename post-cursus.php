<?php
	session_start();
	include 'database/dbh.php';
	if(!empty($_POST['course']) && !empty($_POST['date']) && !empty($_POST['time']) && !empty($_POST['max_users'])){
				$course = $_POST['course'];
				$date = $_POST['date'];
				$time =  $_POST['time'];
				$max_users = $_POST['max_users'];
				$dateTime = $date.' '.$time.':00';
						
				$sql = "INSERT INTO courses (course, datetime, max_users) 
				VALUES ('$course', '$dateTime', '$max_users')";
				$result = mysqli_query($conn, $sql);	
	} else {
		echo "Er ging iets fout!";
	}	
	
	include 'head.php';
?>
		
	<body>
		
		<div class="container" style="padding: 50px 0px 0px 0px;">
			<div class="row">
				<div class="col-md-offset-1 col-md-10" style="text-align: center;">
					<h1>De cursus is toegevoegd</h1>
					<span style="font-size: 22px;">Hieronder zie je de door jou ingevulde informatie</span>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row" style="margin-top:50px">
				<div class="col-md-12">
				<?php	
				if(isset($_SESSION['id'])){
					if($_SESSION['id'] == 7){
				?>	
					<table class="table table-hover" style="margin-bottom:50px">
					    <thead>
					      <tr>
					        <th>Cursus naam</th>
					        <th>Datum</th>
					        <th>Tijd</th>
					        <th>Maximum cursisten</th>
					      </tr>
					    </thead>
					    <tbody>
					      <tr>
							<?php
								echo '<td>'.$_POST['course'].'</td>';
								echo '<td>'.$_POST['date'].'</td>';
								echo '<td>'.$_POST['time'].'</td>';
								echo '<td>'.$_POST['max_users'].'</td></tr>';
							?>
						</tbody>
					</table>
					<a href="nieuwe-cursus.php"><button type="button" class="btn btn-info">NIEUWE CURSUS PLAATSEN</button></a>
					<!--<a href="profiel.php"><button type="button" class="btn btn-info" style="float:right;">NAAR JE PROFIEL</button></a>-->
				<?php } else { ?>
				<div class="col-md-offset-3 col-md-6" style="margin-bottom:50px;">
				<h2 style="border:1px solid red; text-align: center; padding:15px; color:red;">Je bent niet ingelogd als admin <br/><?php echo $_SESSION['name']?></h2>
				<a href="profiel.php"><button class="btn btn-info btn-custom" style="margin-top:10px;" type="submit" name="submit" >LOG IN PAGINA</button></a>	
				</div>					
				<?php } 
				} else { ?>
				<div class="col-md-offset-3 col-md-6" style="margin-bottom:50px;">		
				<h2 style="border:1px solid red; text-align: center; padding:15px; color:red;">Je moet je eerst aanmelden als admin</h2>
				<a href="profiel.php"><button class="btn btn-info btn-custom" style="margin-top:10px;" type="submit" name="submit" >LOG IN PAGINA</button></a>
				</div>	
				<?php } ?>
				</div>
			</div>
		</div>

<?php include("footer.php");?>
		

