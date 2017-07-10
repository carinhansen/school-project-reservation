<?php
	session_start();
	include 'database/dbh.php';
	include'head.php';
	?>

	<body>
		<div class="container" style="padding: 50px 0px;">
			<div class="row">
				<div class="col-md-offset-1 col-md-10" style="text-align: center;">
					<h1>Kies een cursus</h1>
					<span style="font-size: 22px;">Klik hieronder op een cursus om te wijzigen of annuleren</span>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row" style="margin-bottom:50px;">
				
					<?php
						if(isset($_SESSION['id'])){	
							if($_SESSION['id'] == 7){	
					?>
					<div class="col-md-12">
					<table class="table table-hover">
					    <thead>
					      <tr>
					        <th>Cursus</th>
					        <th>Datum</th>
					        <th>Tijd</th>
					      </tr>
					    </thead>
					    <tbody>
					      <tr>
						      <?php
								$sql = "SELECT id, course, DATE_FORMAT(courses.datetime ,'%m-%d-%Y') AS 'date' , DATE_FORMAT(courses.datetime ,'%H:%i') AS 'time' FROM courses ORDER by `datetime` ASC";
								$result = mysqli_query($conn, $sql);
								
								if (mysqli_num_rows($result) > 0) {
								    // output data of each row
								    while($row = mysqli_fetch_assoc($result)) {
								        echo '<td><a href="cursus-info-aanpassen.php?id='.$row['id'].'">'.$row['course'].'</a></td>';
								        echo '<td>'.$row['date'].'</td>'; 
								        echo '<td>'.$row['time'].'</td></tr>';  
								    }
								} else {
								    echo "0 results";
								}
								?>	
					    </tbody>
					  </table>
					  <!--<a href="profiel.php"><button class="btn btn-info" style="margin-top:10px; float:left;" type="submit" name="submit" >TERUG NAAR JE PROFIEL</button></a>-->
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
		<?php include("footer.php");?>
		