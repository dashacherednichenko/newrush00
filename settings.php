<?php
	session_start();
	if ($_POST['name'] && $_POST['mobile'] && $_POST['oldpw'] && $_POST['newpw'] &&
		$_POST['conf_pw'] && $_POST['change'] && $_POST['change'] == 'Change my settings')
	{
		if (!file_exists("./private/users"))
			exit("ERROR\n");
		$mass = unserialize(file_get_contents("./private/users"));
		$count = 0;
		foreach ($mass as $key => $value)
		{
			if ($value['email'] == $_SESSION['loggued_on_user'] && $value['passwd'] == hash('whirlpool', $_POST['oldpw']) && $_POST['newpw'] == $_POST['conf_pw'])
			{
				$count++;
				$mass[$key]['name'] = $_POST['name'];
				$mass[$key]['mobile'] = $_POST['mobile'];
				$mass[$key]['passwd'] = hash('whirlpool', $_POST['newpw']);
			}
		}
		file_put_contents("./private/users", serialize($mass));
		if ($count != 0)
			header('Location: auth.php');
		else
			header('Location: settings.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Settings</title>
	<link rel="stylesheet" type="text/css" href="templates/styles/create.css">
</head>
<body>
	<h1 class="title" style="text-align: center"><a href="auth.php" style="text-decoration: none;color: crimson">Settings</a></h1>
	<form action="settings.php" method="post" class="form_regist">
		First and last name:
		<br>
		<input class="form_input" type="text" 
		name="name" value="" placeholder="Ivan Ivanov">
		<br>
		Mobile phone:
		<br>
		<input class="form_input" type="text" 
		name="mobile" value="" placeholder="+380681234567">
		<br>
		Old Password:
		<br>
		<input type="text" name="oldpw" value="" placeholder="Password">
		<br>
		New Password:
		<br>
		<input type="text" name="newpw" value="" placeholder="Password">
		<br>
		Confirm password:
		<br>
		<input type="text" name="conf_pw" value="" placeholder="Confirm password">
		<br>
		<input type="submit" name="change" value="Change my settings" style="margin-top: 1%;">
	</form>
</body>
</html>