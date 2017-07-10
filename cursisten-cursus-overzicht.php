<?php
	session_start();
	include 'database/dbh.php';
	include 'head.php';
?>

		
	<body>
		<div class="container" style="padding: 50px 0px;">
			<div class="row">
				<div class="col-md-offset-1 col-md-10" style="text-align: center;">
					<h1>Kies een cursus</h1>
					<span style="font-size: 22px;">Klik hieronder op de cursus om een overzicht van de cursisten te zien</span>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row" style="margin-bottom:50px;">
				<div class="col-md-12">
					<?php
						if(isset($_SESSION['id'])){		
					?>
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
								        echo '<td><a href="cursisten-overzicht.php?id='.$row['id'].'">'.$row['course'].'</a></td>';
								        echo '<td>'.$row['date'].'</td>';  
								        echo '<td>'.$row['time'].'</td></tr>'; 
								    }
								} else {
								    echo "0 results";
								}
								?>	
					    </tbody>
					  </table>
					  
					  <?php } else {
						  echo "Je moet eerst inloggen";
						  }
					  ?>
					  <!--<a href="profiel.php"><button class="btn btn-info" style="margin-top:10px;float:left;" type="submit" name="submit" >TERUG NAAR PROFIEL PAGINA</button></a>-->
				</div>

			</div>
		</div>
		<?php include("footer.php");?>

		