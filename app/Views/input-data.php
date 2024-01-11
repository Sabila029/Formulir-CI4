<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Halaman Utama Formulir</title>
    <style>
        body {
            background-image: url(<?php echo base_url("/img/background.jpg"); ?>);
            background-size: cover;
        }
    </style>
</head>

<body>
    <div class="row" style="text-align:center">
        <div class="col">
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <!-- <div class="container" style="margin-top:7%; width: 700px; background-color: #102C57; opacity:90%; border-radius:15px;"> -->
        <form action="">
            <div class="row" style="text-align:center; color:white;">
                <div class="col mt-3 mb-3">
                    <h5>Input Data:</h5>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col">
                    <ul class="list-group">
                        <a href="/Formulir/satu" class="list-group-item list-group-item-action">1. Pengkajian Awal Keperawatan dan Medis Pasien Neonatus</a>
                        <a href="/Formulir/dua" class="list-group-item list-group-item-action">2. Pengkajian Awal Keperawatan dan Medis Pasien Neonatus 2</a>
                        <a href="/Formulir/tiga" class="list-group-item list-group-item-action">3. Pengkajian Awal Keperawatan dan Medis Pasien Neonatus 3</a>
                        <a href="/Formulir/empat" class="list-group-item list-group-item-action">4. >Penundaan/Pembatalan Tindakan Operasi</a>
                        <a href="/Formulir/lima" class="list-group-item list-group-item-action">5. Pre Operasi dan Post Operasi</a>
                        <a href="/Formulir/enam" class="list-group-item list-group-item-action">6. Pengkajian Awal Keperawatan/Kebidanan Bayi Baru Lahir</a>
                    </ul>
                </div>
            </div>
            <div class="d-grid gap-2">
                <a class="btn btn-light my-3" href="index" role="button">Kembali</a>
            </div>



            <div class="col-md-4">
                <div class="card mt-5" style="width: 18rem;" align="center">
                    <img src="<?= base_url('assets/form.png') ?>" class="card-img-top" width="50px">
                    <div class="card-body">
                        <h5 class="card-title">Pengkajian Awal Keperawatan dan Medis Pasien Neonatus</h5>
                        <br>
                        <a href="/Formulir/form1" class="btn btn-outline-info">Isi Formulir</a>
                    </div>
                </div>
            </div>




        </form>
    <!-- </div> -->
</body>

</html>