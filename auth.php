<?php
	include "checking.php";
	session_start();
	if ($_POST['email'])
	{
		if (!file_exists("./private/users"))
			file_put_contents('./private/users', '');
		$mass = unserialize(file_get_contents("./private/users"));
		foreach ($mass as $value)
		{
			if ($value['email'] == $_POST['email'] || $value['email'] == $_SESSION['loggued_on_user'])
				$type = $value['type'];
		}
	}
//	var_dump($_SESSION['loggued_on_user']);
	if ($_POST['submit'] && $_POST['submit'] == "LOG OUT")
	{
		$_SESSION['loggued_on_user'] = "";
		header('Location: auth.php');
	}
	if (($_POST['email'] && $_POST['passwd'] && $_POST['submit']
		&& $_POST['submit'] == 'LOG IN') || ($_SESSION['loggued_on_user']))
	{
		if ((auth($_POST['email'], $_POST['passwd']) && $type != 'admin') || ($_SESSION['loggued_on_user'] && $type != 'admin'))
		{
			if ($_SESSION['loggued_on_user'] == "")
				$_SESSION['loggued_on_user'] = $_POST['email'];
?>
			<!DOCTYPE html>
			<html>
			<head>
				<meta charset="utf-8">
				<title>SHOP</title>
				<link rel="stylesheet" type="text/css" href="templates/images/auth.css">
			</head>
			<body>
				<h1 style="text-align: center">Welcome to SHOP</h1>
				<form action="auth.php" method="POST" class="login">
					Welcome: <?php echo $_SESSION['loggued_on_user'];?>
					<br>
					<a href="settings.php" style="color: black">Settings</a><input type="submit" name="submit" value="LOG OUT" style="margin-left: 3%;">
				</form>
			</body>
			</html>
<?php
		}
		else if ($type == 'admin')
		{
			$_SESSION['loggued_on_user'] = $_POST['email'];
			header('Location: admin.php');
		}
		else
		{
			$_SESSION['loggued_on_user'] = "";
			header('Location: auth.php');
		}
	}
	else
	{
?>
		<!DOCTYPE html>
		<html>
		<head>
			<meta charset="utf-8">
			<title>SHOP</title>
			<link rel="stylesheet" type="text/css" href="auth.css">
		</head>
		<body>
			<h1 style="text-align: center">Welcome to SHOP</h1>
			<form action="auth.php" method="POST" class="login">
				Email Address: <input type="text" name="email" value="" placeholder="example@gmail.com">
				<br>
				Password: <input type="password" name="passwd" value="" placeholder="Password">
				<br>
				<input type="submit" name="submit" value="LOG IN">
				<br />
				<a href="create.php" style="color: black">Create an account</a>
			</form>
		</body>
		</html>
<?php
	}
?>