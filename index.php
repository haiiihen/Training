<?php
session_start(); // Start session nya

// Kita cek apakah user sudah login atau belum
// Cek nya dengan cara cek apakah terdapat session username atau tidak
if(isset($_SESSION['email'])){ // Jika session username ada berarti dia sudah login
	header("location: welcome.php"); // Kita Redirect ke halaman welcome.php
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login Page</title>
    <link rel="stylesheet" href="themes/style1.css">
</head>
<body>
<ul class="topnav">
        <li><a href="#">Logo</a></li>
        <li style="float:right"><a href="index.php">Team Member</a></li>
    </ul>

    <div class="login-form">
    <form action="/examples/actions/confirmation.php" method="post">
        <p class="text-center">USER LOGIN</p>       
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Email" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Log in</button>
        </div>
            
    </form>
   
</div>

</body>

</html>