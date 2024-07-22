<?php
	require 'illustrations.php';
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" type="text/css" href="css/style.css">
    	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    	<link rel="icon" href="media/logo.png" type='image/png'>
    	<title>Home | Kelsey Damier</title>
</head>
<body id=b>
	<div class="container-fluid m-0 p-0">
	<header id=h class="container-fluid vh-100 m-0 p-0">
		<div class="phone"></div>
		<nav class="navbar navbar-expand-sm d-flex justify-content-center">
			<a class="navbar-brand vw-100" href=index.html>KELSEY DAMIER</a>
		</nav>
		<span id="intro" class="d-flex flex-column px-2">
		<p>Exploring design in digital space.</p>
			<p>Welcome aboard!</p>
			<a class="align-self-end" href=about.html><u>read more</u></a>
		</span>
	</header>
	<div id="work" class="container-fluid p-0">
		<center class="title">AT A GLANCE... 👀</center>
		<div class="row">
			<div class="col d-flex justify-content-end">
				<div class="img-container ">
				<img src="media/evolve.png">
				</div>
			</div>
			<div class="col line">
				<h4><i>infographic</i></h4>
				<h1>A.C.R.E.S's Acres of Successes </h1>
			</div>		
		</div>
		<div class="row">
			<div class="col d-flex justify-content-end">
				<div class="img-container ">
				<img src="media/qwocmap.gif" alt="">
				</div>
			</div>
			<div class="col line">
				<h4><i>infographic</i></h4>
				<h1>Mapping a Journey with QWOCMAP</h1>
			<p></p>
			</div>
		</div>
		<div class="row">
			<div class="col d-flex justify-content-end">
				<div class="img-container">
				<img src="media/ooa.gif" alt="">
				</div>
			</div>
			<div class="col line">
			<h4><i>social media</i></h4>
			<h1>Chilling with the Art Nerds</h1>
			<p></p>
			</div>		
		</div>
		<div class="row">
			<div class="col d-flex justify-content-end">
				<div class="img-container ">
				<img src="media/kensington.jpg" alt="">
				</div>
			</div>
			<div class="col line">
				<h4><i>logo</i></h4>
				<h1>GMO Free Farm Fresh Grass Fed Logo</h1>			
			<p></p>
			</div>
		</div>
	</div>
	<div id="illustrations" class="container-fluid vh-100 p-0">
		<center class="title"> KEEP LOOKING 🎨</center>
		<div class="row d-flex flex-row">
			<?php 
			    foreach ($media->data as $entry) {
				    echo "<div class=\"img-container m-5\"> 
                    <img src=\"{$entry->media_url}\"></div>";
			  }
			?>
		</div>
	</div>	
	<footer id=f class="container-fluid m-0">
			<p>LET'S CHAT !</p>
			<a href="mailto:kelseydamier@outlook.com"><img src="media/email.png"></a>
			<a href="https://www.linkedin.com/in/kelsey-damier/"><img src="media/linkedin.png"></a>
	</footer>
</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>
