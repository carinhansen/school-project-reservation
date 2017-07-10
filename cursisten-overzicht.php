<?php
	session_start();
	include 'database/dbh.php';

	$course_id = $_GET['id'];
    
    include'head.php';?>
			
		
	<body>
		<div class="container" style="padding: 50px 0px;">
			<div class="row">
				<div class="col-md-offset-1 col-md-10" style="text-align: center;margin-bottom:50px;">
					<h1>Cursisten</h1>
					<span style="font-size: 22px;">Lorem ipsum sample text</span>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12" style="margin-bottom:50px;">
			<?php
				if(isset($_SESSION['id'])){	
					if($_SESSION['id'] == 7){	
			?>
			
					<table class="table table-hover">
						<thead>
							<tr>
							    <th>Naam cursist</th>
							    <th>Email</th>
								<th>Mobiel</th>
							</tr>
						</thead>
						<tbody>
							<tr>
							<?php
								$sql = "SELECT users.* FROM course_nr INNER JOIN users ON course_nr.users_id=users.id WHERE course_nr.courses_id='$course_id'";
									  
								$result = mysqli_query($conn, $sql);
								if (mysqli_num_rows($result) > 0) {
									// output data from each row
									while($row = mysqli_fetch_assoc($result)) {
										echo '<td>'.$row['name'].'</a></td>';
										echo '<td>'.$row['email'].'</td>';  
										echo '<td>0'.$row['mobilenr'].'</td></tr>';
									}
								} else {
									echo "0 results";
								}
								?>	
						</tbody>
					</table>
			
					<!--<a href="profiel.php"><button class="btn btn-info" style="margin-top:10px;float:left;" type="submit" name="submit" >TERUG NAAR PROFIEL PAGINA</button></a>-->
		
			<?php 
				} else {?>
			<div class="col-md-offset-3 col-md-6" style="margin-bottom:50px;">
				<h2 style="border:1px solid red; text-align: center; padding:15px; color:red;">Je bent niet ingelogd als admin <br/><?php echo $_SESSION['name']?></h2>
				<a href="profiel.php"><button class="btn btn-info btn-custom" style="margin-top:10px;" type="submit" name="submit" >LOG IN PAGINA</button></a>
			</div>	
			<?php }
				} else { ?>
			<div class="col-md-offset-3 col-md-6" style="margin-bottom:50px;">
				<h2 style="border:1px solid red; text-align: center; padding:15px; color:red;">Je bent niet ingelogd als admin <br/><?php echo $_SESSION['name']?></h2>
				<a href="profiel.php"><button class="btn btn-info btn-custom" style="margin-top:10px;" type="submit" name="submit" >LOG IN PAGINA</button></a>
			</div>	
			<?php }
			?>
				</div>
			</div>
		</div>		

		<?php include("footer.php");?>
	

		