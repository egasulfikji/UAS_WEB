<?php 

require 'config.php';

if(isset($_POST['submit'])){
    $jenispesan = $_POST['jenispesan'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $pesan = $_POST['pesan'];

    $format_file = $_FILES['foto']['name'];
    $tmp_name = $_FILES['foto']['tmp_name'];
    $size = $_FILES['foto']['size'];
    $tipe = explode('.',$format_file);
    $tipe2 = $tipe[1];

    $rename = time() . '.' . $tipe2;
    $format_yang_diizinkan = array('jpg','png','jpeg');
    $max_size = 1000000;

    if(in_array($tipe2, $format_yang_diizinkan) === true){
        if($size < $max_size){
            move_uploaded_file($tmp_name, './file-foto/' . $rename);

            $kirim = mysqli_query($db, "INSERT INTO kritik VALUES(
                null,
                '".$jenispesan."',
                '".$nama."',
                '".$alamat."',
                '".$telepon."',
                '".$jeniskelamin."',
                '".$pesan."',
                '".$rename."'
            )");

            if($kirim){
                // echo "<script> alert('Data Berhasil Dikirim');</script>";
                header("Location:formulirkotak.php");
            }else {
                echo "gagal mengirim";
            }
        }
    }
}

?>