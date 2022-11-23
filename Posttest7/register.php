<?php

require ('config.php');

error_reporting(0);

if (isset($_POST['register'])) {
	$username = $_POST['username'];
    $password = $_POST['password'];
    $cPassword = $_POST['confirm_password'];
    $nama = $_POST['nama'];

    //cek password sama dengan confirm password
    if($password === $cPassword){
        //merubah password
        $password = password_hash($password, PASSWORD_DEFAULT);
        
        // cek username
        $hasil = mysqli_query($db, "SELECT username FROM user WHERE username = '$username'");
        if(mysqli_fetch_assoc($hasil)){
            echo "<script> 
            alert('Username telah digunakan');
            document.location.href = 'register.php';
            </script>";
        }else{
            $push_data = mysqli_query($db, "INSERT INTO user (username, nama, password) VALUES ('$username', '$nama', '$password')");
            if(mysqli_affected_rows($db) > 0){
                echo "<script> 
                alert('Registrasi Berhasil');
                document.location.href = 'register.php';
                </script>";
            }else{
                echo "<script> 
                alert('Registrasi gagal');
                document.location.href = 'register.php';
                </script>";
            }
        }

    }else{
        echo "<script> 
        alert('Password yang anda masukkan berbeda');
        document.location.href = 'register.php';
        </script>";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">

	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Register Form </title>
</head>
<body  style="background-image: 2.jpg;">
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="form-floating mb-4">
				<input type="text" placeholder="Username" name="username" class="form-control" id="floatingInput" required>
                <label for="floatingInput">Email address</label>
			</div>
            <div class="form-floating mb-4">
				<input type="text" placeholder="Nama" name="nama" class="form-control" id="floatingInput" required>
                <label for="floatingInput">Nama</label>
			</div>
			<div class="form-floating mb-4">
				<input type="text" placeholder="Password" name="password" class="form-control" id="floatingInput" required>
                <label for="floatingInput">Password</label>
			</div>
			<div class="form-floating mb-4">
				<input type="text" placeholder="Confirm Password" name="confirm_password" class="form-control" id="floatingInput" required>
                <label for="floatingInput">Confirm Password</label>
			</div>
			<div class="input-group">
				<button name="register" class="btn">Register</button>
			</div>
			<p class="login-register-text">Mempunyai Akun? <a href="login.php">Login disini</a>.</p>
		</form>
	</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>