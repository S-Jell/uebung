<?php 
include 'db.php';
include 'session.php'; 
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
	<input type="text" name="first" placeholder="First Name"> <br>
	<input type="text" name="last" placeholder="Last Name"> <br>
	<input type="text" name="uid" placeholder="Username"> <br>
	<input type="password" name="pwd" placeholder="Password"> <br>
	<input type="submit" name="register_submit">
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




if(isset($_POST['register_submit']))
{
	$first = $_POST['first'];
	$last = $_POST['last'];
	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];

	$sql = "INSERT INTO user (first,last,uid,pwd) VALUES ('$first','$last','$uid','$pwd')";
	$result = $db -> exec($sql);

	header("Location: index.php");
}
?>

</body>
</html>