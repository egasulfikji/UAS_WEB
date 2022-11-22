<?php
    require('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir</title>
    <link rel="stylesheet" href="css/formulir.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <h1 class="heading text-center fs-1 text-uppercase bg-info bg-opacity-10 border border-info border-start rounded-start rounded-end"> Kotak dan Saran </h1>
    <form method="POST" action="tambah.php" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="nama" class="form-label" >Nama</label>
            <input name="nama" type="text" class="form-control border border-primary" id="nama" placeholder="Masukkan Nama">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label" >Alamat</label>
            <input name="alamat" type="text" class="form-control border border-primary" id="alamat" placeholder="Masukkan Alamat">
        </div>
        <div class="mb-3">
            <label for="telepon" class="form-label" >No Telepon</label>
            <input name="telepon" type="number" class="form-control border border-primary" id="telepon" placeholder="Masukkan No Telepon">
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelamin" value="Laki-Laki">
            <label class="form-check-label" for="jeniskelamin">
                Laki-Laki
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelamin" value="Perempuan">
            <label class="form-check-label" for="jeniskelamin">
                Perempuan
            </label>
        </div>
        <div class="input-group mb-3">
            <input type="file" class="form-control" id="foto" name="foto">
            <label class="input-group-text" for="foto">Upload</label>
        </div>
        <div class="mb-3">
            <label for="pesan" class="form-label">PESAN</label>
            <textarea name="pesan" class="form-control border border-primary" id="pesan" rows="3"></textarea>
        </div>
        <div>
            <button class="btn btn-primary" type="submit" name="submit" value="submit">KIRIM</button>
        </div>
        <!-- <table class="table" >
            <tr>
                <p">===========================================================================</p>
                <td">DATA DIRI</td>
            </tr>
            <tr>
                <td ">Jenis Pesan</td>
                <td "><select name="jenispesan" id="">
                    <option value="Kritik & Saran">Kritik & Saran</option>
                    <option value="Pesan Cinta">Pesan Cinta</option>
                </select></td>
            </tr>
            <tr>
                <td >Nama</td>
                <td ><input type="text" name="nama" placeholder="Masukkan nama anda"></td>
            </tr>
            <tr>
                <td >Alamat</td>
                <td><input type="text" name="alamat" placeholder="Masukkan alamat anda"></td>
            </tr>
            <tr>
                <td>No Telepon</td>
                <td><input type="number" name="telepon" placeholder="Masukkan no telepon"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><input type="radio" name="jeniskelamin" value="Laki-Laki" style="color: #ffff">Laki-Laki
                <input type="radio" name="jeniskelamin" value="Perempuan" style="color: #ffff" >Perempuan</td>
            </tr>
            <tr>
                <td><br></td>
            </tr>
            <tr>
                <td >KOTAK DAN SARAN</td>
            </tr>
            <tr>
                <td>Pesan</td>
                <td><p><input type="text" name="pesan" placeholder="Masukkan pesan anda"></p></td>
            </tr>
            <tr>
                <td>Jenis Coffe</td>
                <td><input type="file" name="foto"></td>
            </tr>
        </table>
        <br>
        <td><button type="submit" name="submit" value="submit">Kirim</button></td>
        <p >===========================================================================</p> -->
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>