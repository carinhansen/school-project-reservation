<?php 
	session_start();
?>

<!DOCTYPE html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

		<title>Louis CVD</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700" rel="stylesheet">

	</head>

	<body>
		
	<div class="container-fluid header2">
		
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
		   <a href="carinhansen.nl/louis-new"><img src="img/logo.png" class="img-responsive" style="width:70px; height:auto; padding: 5px;"/> </a>
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
				<div class="col-md-12 head-title">
					<span>Creative Video Design</span>
					<!--<a href="#scroll-btn"><div style="width:30px; height:20px; background-color: red;">Click here</div></a>-->
				</div>
			</div>
			<a href="#scroll-btn"><div class="arrow bounce" ></div></a>
		</div>
		
		
		<div class="section-pad">
			<div class="container" id="scroll-btn">
				<div class="row">
					<div class="col-md-4">
						<h3 class="title">Hoogwaardige kwaliteit</h3>
						<p>Wij bieden professionele videoproducties van hoogwaardige kwaliteit. </p>
					</div>
					<div class="col-md-4">
						<h3 class="title">Lage prijs</h3>
						<p>Te veel betalen is nergens voor nodig. Wij leveren professioneel werk met budget prijzen. </p>
					</div>
					<div class="col-md-4">
						<h3 class="title">Service</h3>
						<p>Goede service staat voorop. Wij zijn pas tevreden als jij tevreden bent. </p>
					</div>
				</div>
			</div>
		</div>
		
		<div class="">
			<div class="container">
				<div class="row">
					<div class="col-md-12" style="text-align: center;">
						<h1>Lorem ipsum dolor</h1>
						<span style="font-size: 20px;">Dit is een sample tekst en hieronder ook</span>
					</div>
					<div class="col-md-12" style="padding-top: 30px; padding-bottom: 30px; text-align: center;">
						<p>Creative Video Design maakt videoproducties voor iedereen. Of het nu gaat om een bedrijfs- of promotiefilm, product- of instructiefilm, evenementen registratie of een specifieke webvideo Creative Video Design maakt het voor je.
Hierbij wordt de volledige videoproductie van concept, productie, video editing tot het gewenste eindresultaat ontwikkeld.
 </p>
					</div>
				</div>
			</div>
		</div> 
		
		<div class="vidhome-section">
			<div class="container">
				<div class="row">
					<div class="col-md-7">
					<iframe width="100%" height="350px" src="https://www.youtube.com/embed/AwWf1IfFTcU" frameborder="0" allowfullscreen></iframe>
					<!--<iframe width="100%" height="350px" src="https://www.youtube.com/embed/AtdnWYqbMwc" frameborder="0" allowfullscreen></iframe>-->
					</div>
					<div class="col-md-5">
						<h2 style="margin-bottom: 20px;">Trouwfilm</h2>
						<span>Klik op de video om de prachtige dag van Bas en Merijn te bekijken.</span>
						<br/><br/>
						<span>Gaan jullie ook binnenkort trouwen en willen jullie graag meer informatie? Klik dan op de button voor meer informatie.</span>
					<br/>
					<a href="#" class="btn btn-info " style="float:right;margin-top: 30px;">meer informatie <span class="glyphicon glyphicon-chevron-right"></span></a>
					</div>



					</div>
				</div>
			</div>
		</div>
		
		
		<div class="section-pad">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 style="margin-bottom: 30px;">Kies uit één van onze diensten</h2>
					</div>
				</div>


				<div class="row" style="margin-bottom: 30px;">
					<div class="col-md-4">
						<h4 class="title">Evenementen registratie</h4>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cras dapibus. </p>
					</div>
					
					<div class="col-md-4">
						<h4 class="title">Video editing</h4>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cras dapibus. </p>
					</div>
					
					<div class="col-md-4">
						<h4 class="title">Color grading</h4>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cras dapibus. </p>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-4">
						<h4 class="title">Evenementen registratie</h4>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cras dapibus. </p>
					</div>
					
					<div class="col-md-4">
						<h4 class="title">Evenementen registratie</h4>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cras dapibus. </p>
					</div>
					
					<div class="col-md-4">
						<h4 class="title">Evenementen registratie</h4>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cras dapibus. </p>
					</div>
				</div>
			</div>
		</div>
		
		<div class="container-fluid quote-back" style="margin: 30px 0px;">
			<div class="container">
		   		<div class="row">
			   		<div class="col-md-12">
			   			<span>Lorem ipsum dolor sit amet consectetuer adipiscing elit.</span>
			   		</div>
		   		</div>
		   </div>
		</div>
		
		<div class="section-pad">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 style="text-align: center;">Contact</h2>
						<h4 style="text-align: center; margin-bottom: 80px;">Heb je een vraag? Stel het hieronder</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cras dapibus. </span>
					</div>
					<div class="col-md-6">
						<form action="#" method="post">
						    <div class="form-group row">
						      <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
						      <div class="col-sm-10">
						        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
						      </div>
						    </div>
						    <div class="form-group row">
						      <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
						      <div class="col-sm-10">
						        <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
						      </div>
						    </div>
						    <div class="form-group row">
						      <label class="col-sm-2">Checkbox</label>
						      <div class="col-sm-10">
						        <div class="form-check">
						          <label class="form-check-label">
						            <input class="form-check-input" type="checkbox"> Check me out
						          </label>
						        </div>
						      </div>
						    </div>
						    <div class="form-group row">
						      <div class="offset-sm-2 col-sm-10">
						        <button type="submit" class="btn btn-primary">Sign in</button>
						      </div>
						    </div>
						  </form>
					</div>
				</div>
			</div>
		</div>
		
		<?php include("footer.php");?>
