<!DOCTYPE html>
<html>
<head>
	<title>Les messages</title>
</head>
<body>
	<?php
		$dsn 				=	 "mysql:host=127.0.0.1; dbname=cyber-pink";
		$username 			=	 "root";
		$password 			=	 "root";
		$databaseConnection = 	new PDO($dsn, $username, $password);
		$selectQuery 		=	"SELECT * FROM messages";
		$messages 			=	$databaseConnection->query($selectQuery)->fetchAll();
	?>
	<? foreach($messages AS $message): ?>
		<li>
			<? echo $message["message"]; ?> par <? echo $message["email"]; ?>. 
			<small>
				<? echo $message["date"]; ?>
			</small>
		</li>
	<? endforeach; ?>
</body>
</html>