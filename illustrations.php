<?php

/**
 * Instagram PHP API
 * Example for using the getUserMedia() method
 * 
 * @link https://github.com/cosenary/Instagram-PHP-API
 * @author Christian Metz
 * @since 31.01.2012
 */

require 'Instagram-PHP-API-master\src\Instagram.php';
use MetzWeb\Instagram\Instagram;

// Initialize class
$instagram = new Instagram(array(
  'apiKey'      => '4275119835920404',
  'apiSecret'   => '615662ee031ff6f7e1334e04dceb83b3',
  'apiCallback' => 'https://kelsey-d.github.io/'
));

// Receive OAuth code parameter
$code = $_GET['code'];

// Check whether the user has granted access
if (true === isset($code)) {

  // Receive OAuth token object
  $data = $instagram->getOAuthToken($code);

  // Store user access token
  $instagram->setAccessToken($data);

  // Now you can call all authenticated user methods
  // Get the most recent media published by a user
  $media = $instagram->getUserMedia();

  foreach ($media->data as $entry) {
    echo "<img src=\"{$entry->images->thumbnail->url}\">";
  }

}

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" type="text/css" href="css/style.css">
    	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    	<link rel="icon" href="media/logo.png" type='image/png'>
    	<title>Illustrations | Kelsey Damier</title>
</head>
<body id=b>
	<div class="container-fluid vh-100 d-flex flex-column m-0 p-0">
		<header id=h>
		<nav class="navbar navbar-expand-sm d-flex justify-content-center">
			<a class="navbar-brand" href=index.html>KELSEY DAMIER</a>
			<ul id="links" class="navbar-nav vw-100 d-flex justify-content-center d-none">
				<li class="nav-item">
					<a class="nav-link" href=#>About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href=#>Web</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href=#>Graphics</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href=#>Illustrations</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href=#>More</a>
				</li>
			</ul>
			 <button class="float-end kebab-icon" type="button" style="background-color: transparent;" onclick="toggleMenu()">
   		 </button>
		</nav>
	</header>
	<div class="row d-block align-middle m-0 p-5">
	<h1>About Me </h1>
	<div class="image"></div>
	<h4>Hello! My name is Kelsey. I'm a recent graduate from Hunter College with a BA in Emerging Media, minor in Computer Science. Graduating early during a pandemic left my portfolio looking a little bare huh? I'm currently searching for opportunities to develop my design skills and build a portfolio of compelling projects/products that grow with people. </h4>

	<h4>Besides my studies, I enjoy reading, crocheting, running and digital illustation! Feel free to ask me questions 🤗 </h4>

	</div>
	<footer id=f class="container-fluid m-0">
			<p>CONTACT ME !</p>
			<a href="mailto:kelseydamier@outlook.com"><img src="media/email.png"></a>
			<a href="https://www.linkedin.com/in/kelsey-damier/"><img src="media/linkedi

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		<script>
			//Menu function

			function toggleMenu(){
				var links = document.getElementById("links");
				var button =  document.getElementsByTagName("button")[0];

				links.classList.toggle("d-none");
				button.classList.toggle("kebab-icon");
				button.classList.toggle("exit-icon");
			}
		</script>
</body>
</html>	