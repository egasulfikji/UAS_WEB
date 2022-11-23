<?php 
    require 'config.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = mysqli_query($db, "SELECT * FROM kritik WHERE id = '$id' ");
        $row = mysqli_fetch_array($result);
    }

    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $telepon = $_POST['telepon'];
        $pesan = $_POST['pesan'];

        $update = mysqli_query($db, "UPDATE kritik SET nama='$nama', alamat='$alamat', telepon='$telepon', pesan='$pesan' WHERE id='$id'");

        if($update){
            echo "
            <script>
                alert('Data Anda berhasil diubah');
                document.location.href = 'formulirkotak.php';
            </script>  
            ";
        } else{
            echo "
            <script>
                alert('Data Anda gagal diubah');
                document.location.href = 'formulirkotak.php';
            </script>  
            ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir</title>
    <link rel="stylesheet" href="css/edit.css">
</head>
<body>
    <div class="container">
    <h1 class="heading"> Menu Edit <span> silahkan diisi </span></h1>
    <form method="POST" action="">
    <table class="table" >
            <tr>
                <p">===========================================================================</p>
                <td">DATA DIRI</td>
            </tr>
            <tr>
                <td >Nama</td>
                <td ><input type="text" name="nama" placeholder="Masukkan nama anda" value=<?=$row['nama'];?>></td>
            </tr>
            <tr>
                <td >Alamat</td>
                <td><input type="text" name="alamat" placeholder="Masukkan alamat anda" value=<?=$row['alamat'];?>></td>
            </tr>
            <tr>
                <td>No Telepon</td>
                <td><input type="number" name="telepon" placeholder="Masukkan no telepon" value=<?=$row['telepon'];?>></td>
            </tr>
            <tr>
                <td><br></td>
            </tr>
            <tr>
                <td >KOTAK DAN SARAN</td>
            </tr>
            <tr>
                <td>Pesan</td>
                <td><p><input type="text" name="pesan" placeholder="Masukkan pesan anda" value=<?=$row['pesan'];?>></p></td>
            </tr>
        </table>
        
        <br>
        <td><button type="submit" name="submit" value="submit">Kirim</button></td>
        <p >=============================================================================================================================</p>
    </form>
    </div>
</body>

</html>