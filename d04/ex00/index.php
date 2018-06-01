
<?PHP
	session_start();
	$_SESSION['login'] = "";
	$_SESSION['passwd'] = "";
	foreach($_GET as $key=>$value)
	{
		if ($key == 'login')
			$_SESSION['login'] = $value;
		else if ($key == 'passwd')
			$_SESSION['passwd'] = $value;
	}
?>

<html><body>
<form action="welcome.php" method="post">
	Username: <input type="text" name="login" value="<?PHP echo $_SESSION['login'];?>"><br>
	Password: <input type="text" name="passwd" value="<?PHP echo $_SESSION['passwd'];?>"><br>
	<input type="submit" name="submit" value="OK">
</form>
</body></html>
