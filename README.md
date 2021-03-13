# Requirements
Code editor Or IDE And local server.
## Setup the local server
### For windows users
Download and setup XAMPP: https://www.apachefriends.org/index.html
### For mac os users:
Download and setup MAMP: https://www.mamp.info/en/mac/
### For Linux(Ubuntu > 16.04) users:
-Setup the LAMP stack: https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-ubuntu-18-04
-Install PHPMYADMIN: https://www.digitalocean.com/community/tutorials/how-to-install-and-secure-phpmyadmin-on-ubuntu-18-04 

# Definitions :closed_book:
### 1- What is back-end 
[![FRONTEND-BACKEND](https://media.geeksforgeeks.org/wp-content/uploads/20190712131938/front-end-vs-back-end.png "FRONTEND-BACKEND")](https://media.geeksforgeeks.org/wp-content/uploads/20190712131938/front-end-vs-back-end.png "FRONTEND-BACKEND")

In the computer world, the "backend" refers to any part of a website or software program that users do not see. It contrasts with the frontend, which refers to a program's or website's user interface. In programming terminology, the backend is the "data access layer," while the frontend is the "presentation layer."

### 2- What is a server :computer:
A web server is a computer that runs websites. It's a computer program that distributes web pages as they are requisitioned. The basic objective of the web server is to store, process and deliver web pages to the users. This intercommunication is done using Hypertext Transfer Protocol (HTTP).
[![A web server](https://media.geeksforgeeks.org/wp-content/uploads/20190927155217/webserver.png "A web server")](https://media.geeksforgeeks.org/wp-content/uploads/20190927155217/webserver.png "A web server")

### 3- What is php 
**PHP** is a general-purpose scripting language especially suited to web development.
PHP is an amazing and popular language!
It is powerful enough to be at the core of the biggest blogging system on the web (WordPress)!
It is deep enough to run the largest social network (Facebook)!
It is also easy enough to be a beginner's first server side language!
# Start coding :memo:
## Learn PHP syntax by examples
> ALL PHP FILES MUST HAVE .php EXTENSION

### Example 01 (Start and end PHP file)
```php
<?php
// PHP code goes here
?> 
```
### Example 02 (Define a variables
> A variable starts with the $ sign, followed by the name of the variable. A variable name must start with a letter or the underscore character. A variable name cannot start with a number. A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )

```php
 <?php
$txt = "PHP";
$age = 20;
echo "I love $txt!";
echo "I love ".$txt."!";
?> 
```
### Example 04 (Write PHP code inside a HTML code)
```php
 <!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
echo "Hello World!";
?>

</body>
</html> 
```

### Example 05 (simple PHP datatypes)
```php
 <?php
 // string
$txt = "Hello world!";
// Integer
$x = 5;
// float
$y = 10.5;
// boolean
$bool = true;
// Array
$colors = ["red", "blue", "green"];
// Key value array
$ages = ["Peter"=>35, "Ben"=>37, "Joe"=> 43];
$cars = ["Volvo", "BMW", "Toyota"];
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?> 
```
### Example 06 (PHP conditions)

```php
$a = 2;
if ($a >  1) {
  	echo "Hello";
} else {
	echo  "Bye";
} 
$b = 0;
if ($a > $b) {
  	echo "a is bigger than b";
}elseif($a == $b) {
	echo "a equal b";
}else {
	echo "b is bigger than a";
}
?>
```
### Example 07 (Loop over array)

```php
 <?php
$colors = ["red", "green", "blue", "yellow"];

foreach ($colors as $value) {
  echo "$value <br>";
}
$ages = ["Peter"=>"35", "Ben"=>"37", "Joe"=>"43"];
foreach($ages  as  $name => $age) {
  echo "$name = $age<br>";
}
?> 
```

# Database :floppy_disk:

## What is a database 
A database is an organized collection of structured information, or data, typically stored electronically in a computer system. A database is usually controlled by a database management system (DBMS). Together, the data and the DBMS, along with the applications that are associated with them, are referred to as a database system, often shortened to just database.

Data within the most common types of databases in operation today is typically modeled in rows and columns in a series of tables to make processing and data querying efficient. The data can then be easily accessed, managed, modified, updated, controlled, and organized. Most databases use structured query language (SQL) for writing and querying data.

## What is sql 
SQL is a programming language used by nearly all relational databases to query, manipulate, and define data, and to provide access control.
## What is php myadmin
phpMyAdmin is a free and open source administration tool for MySQL and MariaDB. .
Example of administration tools: mysql workbench, DBeaver ...

# You first SQL code :wrench:
> 1. Create the mysql database in phpmyadmin
2. import users.sql

## Select data

```sql
SELECT name FROM users;
```

```sql
SELECT * FROM users;
```
```sql
SELECT * FROM users WHERE age > 18;
```

```sql
SELECT * FROM users WHERE age = 20;
```

```sql
SELECT * FROM users WHERE age >= 18 AND age <  25;
```
## Update data
```sql
UPDATE users SET age = 20
```
```sql
UPDATE users SET age = 18 WHERE age = 20
```
## Insert data
```sql
INSERT INTO users (name, age) VALUES ('oussama', 25)
```
## Delete data
```sql
DELETE FROM users WHERE name = "oussama"
```
## Using SQL through PHP
### Create a connection 

First of all, we need to establish a connection between PHP and our database (MariaDB in this examples)
```php
$dsn	=	 "mysql:host=127.0.0.1; dbname=cyber-pink";
$username	=	 "root";
$password	=	 "root";
$databaseConnection	= 	new PDO($dsn, $username, $password);
```
![PHP PDO](https://user.oc-static.com/files/219001_220000/219973.png)

### Example of executing The SELECT SQL command
```php
<?php
$dsn	=	 "mysql:host=127.0.0.1; dbname=cyber-pink-test";
$username	=	 "root";
$password	=	 "root";
$databaseConnection = 	new PDO($dsn, $username, $password);
$sql = "SELECT * FROM users";
$users = $databaseConnection->query($sql)->fetchAll();
foreach($users as $result) {
	echo $result["name"]."<br/>";
}
```
# Build the contact form :rocket:
##### 1- Change the name file from index.html to index.php
When a given file contains PHP code, it must have a PHP extension. In most cases this is .php
##### 2 - Add the form tag to the template and change inputs names :
```php
<form method="POST" action="">
	<input type="text" name="message" placeholder="message">
	<input type="text" name="email" placeholder="Email">
	<button type="submit">Envoyer</button>
</form>
```
##### 3-  Write the PHP code to insert the message 
> Add this at the top of the template

````php
<?php
$isMessageSaved = false;

if (isset($_POST["message"]) AND isset($_POST["email"])) {
	$message	= 	$_POST["message"];
	$email 		= 	$_POST["email"];
	$dsn 		=	 "mysql:host=127.0.0.1; dbname=cyber-pink";
	$username 	=	 "root";
	$password 	=	 "root";
	$databaseConnection = 	new PDO($dsn, $username, $password);
	$currentDate	=	date("Y-m-d");
	$insertQuery 	=	"INSERT INTO  messages (message, email, date) 
							VALUES ('".$message."', '".$email."', '".$currentDate."')";
							
	$execute	=	$databaseConnection->prepare($insertQuery)->execute();
	if($execute == true) {
		$isMessageSaved = true;
	}
}
?>
````
##### 4 - Understand the code 
- The isset() function

> THE ISSET() FUNCTION CHECKS WHETHER A VARIABLE IS SET, WHICH MEANS THAT IT HAS TO BE DECLARED AND IS NOT NULL. THIS FUNCTION RETURNS TRUE IF THE VARIABLE EXISTS AND IS NOT NULL, OTHERWISE IT RETURNS FALSE.

- The $_POST Array

> PHP $_POST IS A PHP SUPER GLOBAL VARIABLE WHICH IS USED TO COLLECT FORM DATA AFTER SUBMITTING AN HTML FORM WITH METHOD="POST". $_POST IS ALSO WIDELY USED TO PASS VARIABLES.

- The date function

> Returns A Formatted Date String

- The prepare function

[![PHP prepare](https://cms-assets.tutsplus.com/uploads/users/413/posts/36125/image/prepare-bind-execute.png "PHP prepare")](https://cms-assets.tutsplus.com/uploads/users/413/posts/36125/image/prepare-bind-execute.png "PHP prepare")

# Building The messages page
```php
<!DOCTYPE html>
<html>
<head>
	<title>Les messages</title>
</head>
<body>
<?php
    $dsn	=  "mysql:host=127.0.0.1; dbname=cyber-pink";
    $username	=  "root";
    $password	=  "root";
    $databaseConnection	=    new PDO($dsn, $username, $password);
    $selectQuery 	=    "SELECT * FROM messages";
    $messages 		=    $databaseConnection->query($selectQuery)->fetchAll();
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
```


# Resources
- https://www.php.net/
- https://www.php.net/manual/en/language.operators.comparison.php
- https://www.php.net/manual/en/control-structures.foreach.php
- https://www.php.net/manual/en/control-structures.foreach.php
- https://www.oracle.com/database/what-is-database/
- https://www.mariadbtutorial.com/mariadb-basics/
- https://code.tutsplus.com/tutorials/why-you-should-be-using-phps-pdo-for-database--access--net-12059
- https://www.php.net/manual/en/function.isset.php
- https://www.php.net/manual/en/pdo.prepare.php
- https://www.w3schools.com/php/php_superglobals_post.asp

