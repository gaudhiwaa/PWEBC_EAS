<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <style>
        .custab {
            border: 1px solid #ccc;
            padding: 5px;

            transition: 0.5s;
        }

        .custab:hover {
            box-shadow: 3px 3px 0px transparent;
            transition: 0.5s;
        }
    </style>
</head>

<body>
    <div class="dashboardContainer" style="margin-top:10px; margin-bottom: 10px">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;800;900&family=Roboto:wght@100&family=Secular+One&display=swap" rel="stylesheet">
            <!-- <p style="text-align: right; margin:15px">
                <a href=" form-daftar.php" class="btn btn-primary btn-xs col-md-3">[+] Tambah Baru</a>
                <a href= "unduh-pdf.php" class="btn btn-primary btn-xs col-md-3">+ Unduh PDF</a>
            </p> -->
            <h1>List Daftar Calon Pegawai</h1>
             <br> 
            <div class="col-md-12 col-md-offset-2 custyle">
                <table class="table table-striped custab">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NIK</th>
                            <th>Nama Lengkap</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat Lahir </th>
                            <th>Tanggal Lahir </th>
                            <th>Kualifikasi Pendidikan</th>
                            <th>Formasi Jabatan</th>
                            <th>Foto</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        include "config.php";
                        
                    $sql = "Select * From berkas";
                    $query = mysqli_query($conn, $sql);

                        //$sql = $pdo->prepare("SELECT * FROM tambah_foto");
                        //$sql->execute(); // Eksekusi querynya

                        while ($pegawai = mysqli_fetch_array($query)) {
                            echo "<tr>";

                            echo "<td>" . $pegawai['id_berkas'] . "</td>";
                            echo "<td>" . $pegawai['nik'] . "</td>";
                            echo "<td>" . $pegawai['nama'] . "</td>";
                            echo "<td>" . $pegawai['jenis_kelamin'] . "</td>";
                            echo "<td>" . $pegawai['tempat_lahir'] . "</td>";
                            echo "<td>" . $pegawai['tanggal_lahir'] . "</td>";
                            echo "<td>" . $pegawai['kualifikasi_pendidikan'] . "</td>";
                            echo "<td>" . $pegawai['formasi_jabatan'] . "</td>";
                            echo "<td><img src='images/".$pegawai['foto']."' width='100' height='100'></td>";


                            // echo "<td class='text-center'>";
                            // echo "<a class='btn btn-info btn-xs' href='form-edit.php?id=" . $pegawai['id'] . "' ><span class='glyphicon glyphicon-edit'></span>Edit</a> | ";
                            // echo "<a  class='btn btn-danger btn-xs' href='hapus.php?id=" . $pegawai['id'] . "'><span class='glyphicon glyphicon-remove'></span>Hapus</a>";
                            // echo "</td>";
                            
                            // kurang form buat nyatain dia menunggu verif, diterima, atau ditolak
                            echo "<td class='text-center'>";
                            echo "<a class='btn btn-success' href='form-edit.php?id=" . $pegawai['id_berkas'] . "' ><span class='glyphicon glyphicon-edit'></span>Terima</a>";
                            echo "</td>";
                            echo "<td class='text-center'>";
                            echo "<a class='btn btn-danger' href='form-hapus.php?id=" . $pegawai['id_berkas'] . "'><span class='glyphicon glyphicon-remove'></span>Tolak</a>";
                            echo "</td>";

                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
                <p style="font-weight : bolder">Total : <?php echo mysqli_num_rows($query) ?></p>
                <a href="berhasil-login-admin.php" button name="kembali" type="submit" class="btn btn-primary" style="margin-top: 20px; margin-left: 540px;">Kembali</a></button>
            </div>
            </div>
    </div>
            </div>
</body>

</html>