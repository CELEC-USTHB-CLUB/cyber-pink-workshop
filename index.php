<?php
$isMessageSaved = false;

if (isset($_POST["message"]) AND isset($_POST["email"])) {
	$message 			= 	$_POST["message"];
	$email 				= 	$_POST["email"];
	$dsn 				=	 "mysql:host=127.0.0.1; dbname=cyber-pink";
	$username 			=	 "root";
	$password 			=	 "root";
	$databaseConnection = 	new PDO($dsn, $username, $password);
	$currentDate		=	date("Y-m-d");
	$insertQuery 		=	"INSERT INTO 
							messages (message, email, date) 
							VALUES ('".$message."', '".$email."', '".$currentDate."')";
	$execute 			=	$databaseConnection->prepare($insertQuery)->execute();
	if($execute == true) {
		$isMessageSaved = true;
	}
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="workshop.css">
	<title>Portfolio</title>
</head>
<body>
	
<!--left section-->
<div class="left">
	
	<img src="photo_person.png">
	<ul>
		<li><p href="#">NAME <span>surname</span> </p></li>
		<li><a href="#"><img style="width: 25px; height: 25px;" src="facebook.png"> </a></li>
		<li><a href="#"><img style="width: 25px; height: 25px;" src="instagram.png"></a></li>

	</ul>
</div>


<!--right section-->
<div class="right">
	<!--about-->
	<h1>About Me</h1>
	<h3>20 years / designer <br> <br> </h3>
	<p>Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise rem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise </p><br>

<!--competance-->
	<h1>Compétance</h1>
	<ul>
		<li> <img style="width:20px; height:20px;" src="web_dev.svg"> <p>Web développement</p></li>
		<li><img style="width:20px; height:20px; margin-left:10%;" src="security.svg"> <p>Data base</p></li><br>

	</ul>
	<br>

	<ul>
		<li> <img style="width:20px; height:20px;" src="design.svg"> <p>Graphic Design</p></li>
		<li><img style="width:20px; height:20px; margin-left:15%;" src="php.svg"> <p>PHP</p></li>
	</ul>

<br><br>
<!--contact-->
	<h1>Contact me</h1>
	<? if($isMessageSaved == true): ?>
		<h2 style="color: #54c782;"><? echo "merci pour votre contact"; ?></h2>
		<br/>
	<? endif; ?>
	<form method="POST" action="">
		<input type="text" name="message" placeholder="message">
		<input type="text" name="email" placeholder="Email">
		<button type="submit">Envoyer</button>
	</form>
</div>

<!--projets-->
<div class="projet">
	<h1>Project</h1>
	<ul>
		<li><img src="image1.jpg"></li>
		<li><img src="image2.jpg"></li>
		<li><img src="image3.jpg"></li>
		<li><img src="image1.jpg"></li>
		<li><img src="image2.jpg"></li>
		<li><img src="image3.jpg"></li>
		<li><img src="image2.jpg"></li>
		<li><img src="image3.jpg"></li>
	</ul>
	

</div>



</body>



</html>