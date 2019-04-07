<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Create account</title>
	<link rel="stylesheet" type="text/css" href="../../../../Downloads/rush2%202/templates/styles/create.css">
</head>
<body>
	<h1 style="text-align: center"><a href="auth.php" style="text-decoration: none;color: crimson">Create an account</a></h1>
	<form action="create.php" method="post" class="form_regist">
		First and last name:
		<br>
		<input class="form_input" type="text" 
		name="name" value="" placeholder="Ivan Ivanov">
		<br>
		Email:
		<br>
		<input class="form_input" type="text" name="email" value="" placeholder="example@gmail.com">
		<br>
		Mobile phone:
		<br>
		<input class="form_input" type="text" 
		name="mobile" value="" placeholder="+380681234567">
		<br>
		Password:
		<br>
		<input type="text" name="passwd" value="" placeholder="Password">
		<br>
		Confirm password:
		<br>
		<input type="text" name="conf_passwd" value="" placeholder="Confirm password">
		<br>
		<input type="submit" name="create" value="Create an account" style="margin-top: 1%;">
	</form>
</body>
</html>
<?php
	if ($_POST['name'] && $_POST['email'] &&
		$_POST['mobile'] && $_POST['passwd'] &&
		$_POST['conf_passwd'] && $_POST['create'] &&
		$_POST['create'] === 'Create an account')
	{
		if (!file_exists("./private"))
			mkdir("./private");
		if (!file_exists("./private/users"))
			file_put_contents('./private/users', '');
		$mass = unserialize(file_get_contents("./private/users"));
		$count_a = 0;
		foreach ($mass as $key => $value)
		{
			if ($value['email'] == $_POST['email'])
			{
				header('Location: create.php');
				exit();
			}
			else if ($value['type'] && $value['type'] == 'admin')
				$count_a++;
		}
		if ($count_a > 0)
			$data['type'] = 'user';
		else
			$data['type'] = 'admin';
		$data['name'] = $_POST['name'];
		$data['email'] = $_POST['email'];
		$data['mobile'] = $_POST['mobile'];
		$data['passwd'] = hash('whirlpool', $_POST['passwd']);
		$mass[] = $data;
		file_put_contents("./private/users", serialize($mass));
		header('Location: index.php');
	}
	else
		eader('Location: create.php');
?>