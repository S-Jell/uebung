<?php

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	
</head>
<body>

	<?php 
		include 'nav.php';
	 ?>

	<!-- <form style="margin-top:30px" action="logout.php">
		<button>Log Out</button>
	</form> -->

	<?php 


	if($session_check==true)
	{
		echo "Id =".$_SESSION['id'];
		echo "<br>Session active";
	}
	else
	{
		echo "Youre not logged in";
	}
	?>









</body>
</html>