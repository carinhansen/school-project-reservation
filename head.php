<!DOCTYPE html>
	<head>
		 <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

		<title>Louis CVD</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700" rel="stylesheet">

	</head>
	
<div class="container-fluid header3">
		
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a href="index.php"><img src="img/logo.png" class="img-responsive" style="width:70px; height:auto; padding: 5px;"/> </a>
		    </div>
		
			<!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="index.php" class="active">Home</a></li>
		         <li><a href="over.php">Over ons</a></li>
		         <li><a href="cursus.php">Cursus</a></li>
		         <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Diensten <span class="caret"></span></a>
		          <ul class="dropdown-menu">
			        <li><a href="#">Evenementen registratie</a></li>
			        <li><a href="#">Trouwfilm</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="video-editing.php">Video editing</a></li>
		          </ul>
		        </li>
		        <li><a href="contact.php">Contact</a></li>
		        <?php
			        if(isset($_SESSION['id'])){ ?>
			        <li><a href="profiel.php">Mijn profiel</a></li>
				<?php     
			        } else { ?>
			        <li><a href="profiel.php">Inloggen</a></li>
				<?php        
			        }
			    ?>
				</ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
				
			<div class="row">
				<div class="col-md-12 head-title-2">
					<span>Creative Video Design</span>
				</div>
			</div>
		</div>