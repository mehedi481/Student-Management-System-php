<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
	<style type="text/css">
		h3{
			background-color: gray;
			padding: 10px;
		}
	</style>
</head>
<body>
	<center><br><br>
	<h3>Student Management System</h3><br>
	<marquee>Welcome to Student Management System</marquee><br>
	<form action="" method="POST">
		<input type="submit" name="admin_login" value="Admin Login" style="color: hotpink;" required>
		<input type="submit" name="student_login" value="Student Login" style="color: blue;" required>
	</form>
	<?php
		if(isset($_POST['admin_login'])){
			header("Location: admin_login.php");
		}
		if(isset($_POST['student_login'])){
			header("Location: student_login.php");
		}
	?>
	</center>
</body>
</html>