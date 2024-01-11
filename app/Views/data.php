<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <title>Halaman Dashboard</title>
    
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <img src="<?= base_url('img/logors.png') ?>" alt="logo" width="50px" height="70px">
    <a class="navbar-brand" href="#"><b>RSUD Dr. YUNUS BENGKULU</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="rumah">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="input">Formulir</a>        
        <li class="nav-item">
          <a class="nav-link" href="data">Data</a>
        </li>
        </li>
      </ul>
    </div>
  </div>
</nav>




    <div class="container">
       
        <div class="row mt-1 mb-3" style="text-align:center">
            <div class="col">
                <?php if (session()->getFlashdata('pesan')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('pesan'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>



        <br><div style="text-align: center;">
    <img src="<?= base_url('img/data.png') ?>" alt="logo" width="100px" height="100px" >
  </div>

        <div class="row mb-3">
            <div class="col-md-4">
                <div class="card mt-5" style="width: 18rem;" align="center">
                    <div class="card-body">
                        <h5 class="card-title">Pengkajian Awal Keperawatan dan Medis Pasien Neonatus</h5>
                        <br>
                        <a href="form1" class="btn btn-outline-info">Lihat Data</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mt-5" style="width: 18rem;" align="center">
                    <div class="card-body">
                        <h5 class="card-title">Pengkajian Awal Keperawatan dan Medis Pasien Neonatus 2</h5>
                        <br>
                        <a href="form2" class="btn btn-outline-info">Lihat Data</a>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="card mt-5" style="width: 18rem;" align="center">
                    <div class="card-body">
                        <h5 class="card-title">Pengkajian Awal Keperawatan dan Medis Pasien Neonatus 3</h5>
                        <br>
                        <a href="form3" class="btn btn-outline-info">Lihat Data</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card mt-5" style="width: 18rem;" align="center">
                    <div class="card-body">
                        <h5 class="card-title">Penundaan/Pembatalan Tindakan Operasi</h5>
                        <br>
                        <a href="form4" class="btn btn-outline-info">Lihat Data</a>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="card mt-5" style="width: 18rem;" align="center">
                    <div class="card-body">
                        <h5 class="card-title">Pre Operasi dan Post Operasi</h5>
                        <br>
                        <a href="form5" class="btn btn-outline-info">Lihat Data</a>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="card mt-5" style="width: 18rem;" align="center">
                    <div class="card-body">
                        <h5 class="card-title">Pengkajian Awal Keperawatan/Kebidanan Bayi Baru Lahir</h5>
                        <br>
                        <a href="form6" class="btn btn-outline-info">Lihat Data</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br><br><nav class="navbar navbar-light bg-primary" style="text-align: center;">
  <div style="text-align: center;">Copyright © RSUD M. Yunus Bengkulu - Prov Bengkulu</div>
</nav>





</body>

</html>