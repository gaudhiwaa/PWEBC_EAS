<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<html>
<body>
    <div class=" formContainer" style="margin-top: 80px; margin-bottom: 80px">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;800;900&family=Roboto:wght@100&family=Secular+One&display=swap" rel="stylesheet">
        <h1 style="margin-bottom: 40px;">Formulir Pendaftaran</h1>
        <div class="container">
            <form id="formMahasiswa" autocomplete="off" action="proses-pendaftaran.php" method="POST">
            <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="text" name="nik" placeholder="Masukkan Nomor Induk Kependudukan" class="form-control" minlength="3" maxlength="40">
                </div>
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Masukkan Nama Lengkap" class="form-control" minlength="3" maxlength="40">
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label><br>
                    <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki<br>
                    <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br>
                </div>
                <div class="form-group">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" placeholder="Masukkan Tempat Lahir" class="form-control" minlength="1">
                </div>
                <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir"  class="form-control" minlength="1">
                </div>
                <div class="form-group">
                    <label for="kualifikasi_pendidikan">Kualifikasi Pendidikan</label>
                    <input type="text" name="kualifikasi_pendidikan" placeholder="Masukkan Kualifikasi Pendidikan" class="form-control" minlength="1">
                </div>
                <div class="form-group">
                    <label for="formasi_jabatan">Formasi Jabatan</label>
                    <input type="text" name="formasi_jabatan" placeholder="Masukkan Formasi Jabatan" class="form-control" minlength="1">
                </div>
                <div>
                <label for="foto">Foto</label><br>
                    <td><input type="file" name="foto"></td>
                </div>
                <button name="daftar" type="submit" class="btn btn-primary" style="margin-top: 20px;">Daftar</button>
            </form>
        </div>
        <a href="index-user.php" button name="daftar" type="submit" class="btn btn-primary" style="margin-top: 20px; margin-left: 380px;">Kembali</a></button>
    </div>
</body>
</html>