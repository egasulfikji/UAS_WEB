<?php 
    require('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YourCoffe-Ega Sulfika</title>

    <!-- munculkan icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header class="header">
    <a href="#" class="logo">
        <img src="images/logo.png" alt="">
    </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#">add galery</a>
        <a href="#">edit galery</a>
        <a href="formulirkotak.php">data kotak dan saran</a>
        <a href="logout.php">logout</a>
    </nav>
</header>

<section class="home" id="home">
    <div class="content">
        <h3>DASHBOARD ADMIN</h3>
        <h2>Welcome</h2>
    </div>
</section>

<section class="footer">
    <div class="share">
        <a href="https://www.facebook.com/ega.eva.90" class="fab fa-facebook-f"></a>
        <a href="https://wa.me/qr/S6QPIR4Q6ENBI1" class="fab fa-whatsapp"></a>
        <a href="https://www.instagram.com/egaslfika._/" class="fab fa-instagram"></a>
    </div>

    <div class="links">
        <a href="#home">home</a>
        <a href="#gallery">gallery</a>
        <a href="#about">about</a>
        <a href="formulirkotak.php">kotak saran</a>
    </div>

</section>
<!-- <script src="javascript.js"></script> -->
</body>
</html>