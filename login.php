<?php 

$conn = mysqli_connect('localhost', 'root', 'password', 'sign_up_in');

	session_start();

if(isset($_POST['submit_l'])){
	$username = ($_POST['username']);
	$password = ($_POST['password']);

	$query = "SELECT * FROM accounts WHERE usernames='$username' AND passwords='$password'";

	$result = mysqli_query($conn, $query);

	$acc_exist = mysqli_num_rows($result);
	
	
	
	if ($acc_exist == 1){
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: loggedin.php");
        } else {
            echo "<h3>Incorrect Username/password.</h3><br/>";
            
        }
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">

	<title>Login page</title>
</head>
<body>
	<dev class='container'>
		<form method="POST"  style="margin:auto; width:450px;">
			Username: <br>
			<input type="text" name="username" class="form-control" required>
			Password: <br>
			<input type="password" name="password" class="form-control" required>
			<br>
			<input type="submit" name="submit_l" value="login" class="btn btn-dark" >
			<br>

			<br>
			<h5>If you don't have an account you can <a href="register.php">register here.</a></h5>
		</form>
	</dev>
</body>
</html>