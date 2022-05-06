<?php
    session_start();
    
    $username = $_SESSION['username'];

    if(isset($_POST['submit_o'])){
        session_destroy();
        header("Location: login.php");

    }
 
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <title>GGs!!</title>
</head>
<body>
    <h1>GGs, <?php echo $username; ?> You're logged in!</h1>
    <div class="container">
        <form method="POST" style="margin:auto; width:450px;">
            <input type="submit" name="submit_o" value="logOut" class="btn btn-dark" >
        </form>
    </div>
</body>
</html>
