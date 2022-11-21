<?php
session_start();
require('config.php');

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    

    $hasil = mysqli_query($db, "SELECT username, password FROM user WHERE username = '$username'");

    if(mysqli_num_rows($hasil) == 1){
        $row = mysqli_fetch_assoc($hasil);

        if(password_verify($password, $row['password'])){
            $_SESSION['login'] = $row;
            header("Location: landing.php");
            exit;
        }
        else{
            $erorr_pass = true;

        }
    }else{
        $error_username = true;
    }
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Login</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" required>
			</div>
			<div class="input-group">
				<button name="login" class="btn">Login</button>
			</div>
			<p class="login-register-text">Tidak Mempunyai Akun? <a href="register.php">Registrasi disini</a>.</p>

            <?php 
            if (isset($erorr_pass)) {
                echo "<p> Password anda salah</p>";
            } 
            ?>
            <?php 
                if (isset($erorr_pass)) {
                    echo "<p> Akun tidak ditemukan</p>";
                } 
            ?>
        </form>
	</div>
</body>
</html>