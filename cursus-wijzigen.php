<?php
	session_start();
	include 'database/dbh.php';
	
	$new_name = $_POST['name'];
	$new_datetime = $_POST['datetime'];
	$new_max_users = $_POST['max_users'];
	$course_id = $_GET['id'];
	
	if(isset($_POST['change'])){
		$sql = "UPDATE courses SET course='$new_name', datetime='$new_datetime', max_users='$new_max_users' WHERE id='$course_id'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
	}
	
	include'head.php';
?>
	
	<body>
		<div class="container" style="padding: 50px 0px;">
			<div class="row">
				<div class="col-md-offset-1 col-md-10" style="text-align: center;">
					<h1>Cursus gewijzigd</h1>
					<span style="font-size: 22px;">Lorem ipsum sample tekst</span>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12">
					<table class="table table-hover" style="margin-top: 50px;">
					    <thead>
					      <tr>
					        <th>Cursus</th>
					        <th>Datum en tijd</th>
					        <th>Maximum cursisten</th>
					      </tr>
					    </thead>
					    <tbody>
					      <tr>
							<?php
								echo '<td>'.$new_name.'</td>';
								echo '<td>'.$new_datetime.'</td>';
								echo '<td>'.$new_max_users.'</td></tr>';
								?>
						</tbody>
					</table>
					<a href="profiel.php"><button class="btn btn-info" style="margin-top:10px; float:right;" type="submit" name="submit" >NAAR JE PROFIEL</button></a>
				</div>
			</div>
		</div>
		
	<?php include("footer.php");?>

