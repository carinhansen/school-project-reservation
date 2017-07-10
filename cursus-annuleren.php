<?php
	session_start();
	include 'database/dbh.php';
	
	$course_id = $_GET['id'];

	if(isset($_POST['delete'])){

		$query = "DELETE FROM course_nr WHERE courses_id=$course_id";
		$result_query = mysqli_query($conn, $query);
		
		$sql = "DELETE FROM courses WHERE id=$course_id";
		$result = mysqli_query($conn, $sql);
		
	} else {
		echo "Er ging iets fout";
	}

 include'head.php';
 
 ?>

	<body>
		<div class="container" style="padding: 50px 0px;">
			<div class="row">
				<div class="col-md-offset-1 col-md-10" style="text-align: center;  margin-bottom:50px;">
					<h1>Cursus geannuleerd</h1>
					<span style="font-size: 22px;">De cursus is succesvol geannuleerd</span>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-offset-2 col-md-4">
					<p>De cursus is succesvol geannuleerd. Als je dit ongedaan wil maken kan je een nieuwe cursus toevoegen.</p>
				</div>
				<div class="col-md-4">
					<a href="cursus-info.php"><button class="btn btn-info btn-custom" style="margin-top:10px; float:right;" type="submit" name="submit" >NOG EEN CURSUS WIJZIGEN OF ANNULEREN</button></a>
					<a href="profiel.php"><button class="btn btn-info btn-custom" style="margin-top:10px; float:right;" type="submit" name="submit" >TERUG NAAR JE PROFIEL</button></a>
				</div>
			</div>
		</div>
		
<?php include("footer.php");?>



		