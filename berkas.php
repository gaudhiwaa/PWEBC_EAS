<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleksi Kementrian Kelautan dan Perikanan</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

    <!-- START NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white p-3 shadow" style="width:100%">
            
        <a class="navbar-brand" href="h">
            <img src="images/logo-kkp.png" width="90" height="90" alt="logokkp">
            <!-- <span class="align-middle">Kementrian Kelautan dan Perikanan</span> -->
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index-user.php">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="dashboard-user.php">Pendaftaran</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="berkas.php">Berkas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Log Out</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- END NAVBAR -->

<body>
    <div class=" formContainer" style="margin-top: auto; margin-bottom: auto;">
        <p align="center">
        <img src="images/data-diri.png" width="700">
        <h3> Status Pendaftaran : Lolos Verifikasi</h3>
        <a href="kartu-peserta.php" class="btn btn-info" role="button" style="margin-left: 340px;">Cetak Kartu Peserta</a>
    </div>

</body>
</html>