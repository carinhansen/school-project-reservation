<?php
	session_start();
	include 'database/dbh.php';

	$user_id = $_SESSION['id'];
	include'head.php';
?>
		
	<body>
		<div class="container" style="padding: 50px 0px;">
			<div class="row">
				<div class="col-md-offset-1 col-md-10" style="text-align: center;margin-bottom:50px;">
					<h1>Jouw reserveringen</h1>
					<span style="font-size: 22px;">Hieronder zie je voor welke cursussen je bent ingeschreven</span>
				</div>
			</div>
			
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
							  $sql = "SELECT courses.id, courses.course, DATE_FORMAT(courses.datetime ,'%m-%d-%Y') AS 'date' , DATE_FORMAT(courses.datetime ,'%H:%i') AS 'time' FROM course_nr INNER JOIN courses ON course_nr.courses_id=courses.id WHERE course_nr.users_id='$user_id'";
							  
								$result = mysqli_query($conn, $sql);
								if (mysqli_num_rows($result) > 0) {
								    // output data of each row
								    while($row = mysqli_fetch_assoc($result)) {
								        echo '<td><a href="klant-reservering-aanpassen.php?id='.$row['id'].'">'.$row['course'].'</a></td>';
								        echo '<td>'.$row['date'].'</td>';  
								        echo '<td>'.$row['time'].'</td></tr>';
								    }
								} else {
								    echo "0 results";
								}
								?>	
					    </tbody>
					  </table>			
		</div>		
<?php include("footer.php");?>
	