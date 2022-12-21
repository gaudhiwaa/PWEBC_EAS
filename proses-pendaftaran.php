<?php
include("config.php");

if (isset($_POST['daftar'])) {
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $kualifikasi_pendidikan = $_POST['jenis_kelamin'];
    $formasi_jabatan = $_POST['formasi_jabatan'];
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];

    // Rename nama fotonya dengan menambahkan tanggal dan jam upload
    $fotobaru = date('dmYHis').$foto;
    // Set path folder tempat menyimpan fotonya
    $path = "img/".$fotobaru;

    move_uploaded_file($tmp, $path);

    $sql = "Insert into berkas (nik, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, kualifikasi_pendidikan, formasi_jabatan, foto) value ('$nik', '$nama', '$jenis_kelamin', '$tempat_lahir', '$tanggal_lahir', '$kualifikasi_pendidikan', '$formasi_jabatan', '$fotobaru')";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }
}
else{
    die("Akses dilarang...");
}