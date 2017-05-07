<?php
include 'db.php';
include 'session.php'; 
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
	<input type="text" name="uid" placeholder="Username"> <br>
	<input type="password" name="pwd" placeholder="Password"> <br>
	<input type="submit" name="login_submit" value="Login">
</form>

<?php
if ($session_check==true) 
{
	echo "Id =".$_SESSION['id'];
	echo "<br>Session active";
}
else
{
	echo "You are not logged in";
}

if(isset($_POST['login_submit']))
{
	
	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];

	$sql = "SELECT * from user WHERE uid='$uid' AND pwd='$pwd'";
	$result = $db -> query($sql);
	$tmp = $result->fetchAll(PDO::FETCH_OBJ);

	if(!$tmp)
	{
		echo "Password or username is incorrect";
	}
	else
	{
		foreach ($tmp as $row)
		{
			
			$_SESSION['id'] = $row ->id;
			$_SESSION['uid'] = $row ->uid;
			echo "Succesfully logged in";
			header("Location: index.php");
		}
	}

	
}
?>
</body>
</html>