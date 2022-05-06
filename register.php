<?php 

$conn = mysqli_connect('localhost', 'root', 'password', 'sign_up_in');

if(isset($_POST['submit_r'])){
	$usernames = ($_POST['username']);
	$passwords = ($_POST['password']);

	$acc_reg = "INSERT INTO accounts (usernames, passwords) VALUES ('$usernames','$passwords')";
	


	if(mysqli_query($conn, $acc_reg)){
		echo "<h3>Register Success!</h3><br/>";
		
	} else {
		echo 'failed...';
	}
				

}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">

	<title>Register page</title>
</head>
<body>
	<dev class='container'>
		<form method="POST"  style="margin:auto; width:450px;">
			Username: <br>
			<input type="text" name="username" class="form-control" required>
			Password: <br>
			<input type="password" name="password" class="form-control" required>
			<br>
			<input type="submit" value="Register" name="submit_r" class="btn btn-dark" >
			<br>

			<br>
			<h5>If you have an account you can <a href="login.php">login here.</a></h5>
		</form>
	</dev>
</body>
</html>