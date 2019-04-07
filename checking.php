<?php
	session_start();
	function auth($email, $passwd)
	{
		if (!$email || !$passwd)
			return (FALSE);
		if (!file_exists("./private/users"))
			return (FALSE);
		$mass = unserialize(file_get_contents("./private/users"));
		foreach ($mass as $key => $value)
			if ($value['email'] == $email && $value['passwd'] == hash('whirlpool', $passwd))
				return (TRUE);
		return (FALSE);
	}
?>