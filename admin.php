<?php
	session_start();
	if (!$_SESSION['loggued_on_user'])
        header('Location: index.php');
	if (($_POST['user'] && $_POST['submit'] &&
		$_POST['submit'] === 'Choose') || $_SESSION['loggued_on_user'])
	{
		if (!file_exists("./private/users"))
			file_put_contents('./private/users', '');
		$mass = unserialize(file_get_contents("./private/users"));
		foreach ($mass as $value)
		{
			if ($value['email'] == $_SESSION['loggued_on_user'])
				if ($value['type'] != 'admin')
					header('Location: index.php');
			if ($value['email'] == $_POST['user'])
			{
				$_SESSION['name'] = $value['name'];
				$_SESSION['email'] = $value['email'];
				$_SESSION['mobile'] = $value['mobile'];
				$_SESSION['pass'] = $value['passwd'];
				$_SESSION['type'] = $value['type'];
			}
		}
	}
	if ($_POST['submit'] && $_POST['submit'] == "LOG OUT")
	{
		$_SESSION['loggued_on_user'] = "";
		header('Location: index.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="../../../../Downloads/rush2%202/templates/styles/create.css">
</head>
<body>
	<h1 style="text-align: center"><a href="admin.php" style="text-decoration: none;color: crimson">Welcome Mark Zuckerberg!</a></h1>
	<form action="admin.php" method="post" class="form_regist">
		Choose users:
		<select name="user">
			<?php
				if (!file_exists("./private/users"))
					exit("ERROR\n");
				$mass = unserialize(file_get_contents("./private/users"));
				for ($i = 0; $i <= count($mass); $i++)
				{
					if ($mass[$i]['email'] && $mass[$i]['email'] != $_SESSION['loggued_on_user'])
					{
			?>
			<option value=<?php echo $mass[$i]['email']?>><?php echo $mass[$i]['email']?></option>
		<?php }}?>
		</select>
		<input type="submit" name="submit" value="Choose">
		<br>
		User name: <input type="text" name="name" value=<?php echo $_SESSION['name'];?>>
		<br>
		User mobile: <input type="text" name="mobile" value=<?php echo $_SESSION['mobile'];?>>
		<br>
		User password: <input type="text" name="passwd" value="">
		<br>
		User type: <input type="text" name="type" value=<?php echo $_SESSION['type'];?>>
		<br>
		<input type="submit" name="submit" value="Change">
		<input type="submit" name="del" value="Delete this user">
		<input type="submit" name="submit" value="LOG OUT">
	</form>
</body>
</html>
<?php
	if ($_POST['del'] && $_POST['del'] == 'Delete this user')
	{
		if (!file_exists("./private/users"))
			exit("ERROR\n");
		$mass = unserialize(file_get_contents("./private/users"));
		$count = 0;
		foreach ($mass as $key => $value)
		{
			if ($_POST['del'] == "Delete this user" && $value['email'] == $_SESSION['email'])
			{
				$count++;
				unset($mass[$key]);
			}
		}
		file_put_contents("./private/users", serialize($mass));
		if ($count = 1)
			header('Location: admin.php');
		else
			header('Location: index.php');
	}
	else if ($_POST['name'] && $_POST['mobile'] && $_POST['passwd'] && $_POST['type'] && $_POST['submit'] && $_POST['submit'] == 'Change')
	{
		if (!file_exists("./private/users"))
			exit("ERROR\n");
		$mass = unserialize(file_get_contents("./private/users"));
		$count = 0;
		foreach ($mass as $key => $value)
		{
			if ($_POST['del'] == "Delete this user" && $value['email'] == $_SESSION['email'])
			{
				unset($value);
				header('Location: admin.php');
			}
			if ($value['email'] == $_SESSION['email'] && $value['passwd'] == $_SESSION['pass'] && ($_POST['type'] == 'admin' || $_POST['type'] == 'user'))
			{
				$count++;
				$mass[$key]['name'] = $_POST['name'];
				$mass[$key]['mobile'] = $_POST['mobile'];
				$mass[$key]['passwd'] = hash('whirlpool', $_POST['passwd']);
				$mass[$key]['type'] = $_POST['type'];
			}
		}
		file_put_contents("./private/users", serialize($mass));
		if ($count != 0)
			header('Location: index.php');
	}
?>