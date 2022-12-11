<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<ul>
	<li><a href="session.php">Home</a></li>
	<li><a href="contact.php">Contact</a></li>
</ul>
<?php
$_SESSION['username']="rashed072@gmail.com";
echo $_SESSION['username'];


if (!isset($_SESSION['username'])) {
	echo "Error login";
}
else
{
	echo "<br>Login Successful";
}
?>


</body>
</html>