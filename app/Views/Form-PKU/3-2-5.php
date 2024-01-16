<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>RM 3.2.5 dx perawat - diagnosa intoleransi aktifitas</title>
  </head>
  <body>
    <form>
      <div class="container mt-3">

        <br><h5 style="text-align: right;"><b>RM 3.2.5</b></h5>

        <br><br>
        <table class="table table-bordered mb-0" style="border: 1px solid black;">
        <tbody>
          <tr>
            <td style="text-align: center;">
              <img src="<?= base_url('img/logo.png') ?>" alt="logo" width="100px">
              <div>
                <label>SEhat-aMANah <br>tanGGungjawab-Islami</label>
              </div></td>
            <td >
              <h3><b>RS PKU MUHAMMADIYAH SAMPANGAN</b></h3>
              <h5>Semanggi RT 002 / RW 020 Pasar Kliwon, Surakarta<br>Telp 0271-633894 Fax. : 0271-630229 <br>Jawa Tengah 57117</h5>
            </td>
            <td>
              <div class="container" style="height: 150px; border: 1px solid black; border-radius: 3px">
                <h5 style="text-align: center; margin-top: 60px">Label Identitas Pasien</h5>
                
              </div>
            </td>
          </tr>
        </tbody>
      </table>


      <br><h5 style="text-align: center;"><b>DIAGNOSA INTOLERANSI AKTIFITAS</b></h5>

      <div class="mb-2">
        <div class="row align-items-center">
          <div class="col-md-2">
            <label>DPJP</label>
          </div>
          <div class="col-md-9">
            <input class="form-control" type="text" name="v_05" id="v_05" style="width: 350px">
          </div>
          </div>
      </div>

      <div class="mb-2">
        <div class="row align-items-center">
          <div class="col-md-2">
            <label>PPJP</label>
          </div>
          <div class="col-md-9">
            <input class="form-control" type="text" name="v_05" id="v_05" style="width: 350px">
          </div>
          </div>
      </div>

      <div class="mb-2">
        <div class="row align-items-center">
          <div class="col-md-2">
            <label>RUANG</label>
          </div>
          <div class="col-md-9">
            <input class="form-control" type="text" name="v_05" id="v_05" style="width: 350px">
          </div>
          </div>
      </div>

      <div class="mb-2">
        <div class="row align-items-center">
          <div class="col-md-2">
            <label>KELAS</label>
          </div>
          <div class="col-md-9">
            <input class="form-control" type="text" name="v_05" id="v_05" style="width: 350px">
          </div>
          </div>
      </div>


      <br><br><table class="table table-bordered mb-0" style="border: 1px solid black;">
        <tbody>

          <tr>
            <td style="text-align: center;"><b>Tgl/Jam <br>No.Dx</b></td>
            <td style="text-align: center;"><b>Diagnosa<br>Keperawatan</b></td>
            <td style="text-align: center;"><b>NOC</b></td>
            <td style="text-align: center;"><b>NIC</b></td>
            <td style="text-align: center;"><b>Nama/<br>Ttd</b></td>
          </tr>

          <tr>
            <td>1. <input type="date" id="" name="" style="width: 110px"></td>
            <td>
              <div class="mb-1"><b>Intoleransi Aktifitas </b><br>berhubungan dengan :</div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault"> Tirah baring / Immobilisasi</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">  Nyeri Kronis</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked"> Kelemahan umum</label>
              </div>
              <div class="mb-2">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked"> Ketidakseimbangan suplai dan kebutuhan oksigen</label>
              </div>
              </div>
            </td>
            <td>
              <div class="mb-1">Kebutuhan aktifitas teratasi setelah dilakukan<br>tindakan perawatan dalam waktu <input type="text" id="" name="" style="width: 50px"> 24 jam.<br> Dengan kriteria hasil :</div>              
              <div class="mb-1"><b>Kondisi</b></div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">KU baik</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">  Aktifitas terpenuhi</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked"> Istirahat terpenuhi</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">   Peningkatan kekuatan otot</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">  Hemobglobin</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">Gula darah</label>
              </div>
              <div class="mb-3">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">Hematocrit</label>
              </div>
              </div>

              <div class="mb-1"><b>Konservasi </b></div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">  Monitor nutrisi</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">Monitoring aktivitas dan istirahat</label>
              </div>
              <div class="mb-3">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">  Pembatasan energy k/p</label>
              </div>
              </div>

              <div class="mb-1"><b>Toleransi terhadap aktivitas </b></div>
              <div class="mb-3">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">Obsevasi aktivitas pasien</label>
              </div>
              </div>

              <div class="mb-1"><b>Perawatan diri </b></div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">Makan</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">Berpakaian</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked"> Toileting</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">Mandi</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked"> Hygiene</label>
              </div>
              <div class="mb-3">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked"> Ambulansi</label>
              </div>
              </div>
            </td>
            <td>
               <div class="mb-1"><b>Therapi Aktifitas</b></div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_042" id="t_042_efektif">
                    <label class="form-check-label" for="t_042_efektif">Bantu pasien mengidentifikasi aktivitas yang mampu dilakukan</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_042" id="t_042_efektif">
                    <label class="form-check-label" for="t_042_efektif">Bantu mendapatkan alat bantu aktivitas seperti : kursi roda, kruk.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_042" id="t_042_tidak">
                    <label class="form-check-label" for="t_042_tidak">Identifikasi aktivitas yang disukai pasien</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_042" id="t_042_tidak">
                    <label class="form-check-label" for="t_042_tidak">Tentukan jadwal latihan</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_042" id="t_042_tidak">
                    <label class="form-check-label" for="t_042_tidak">Bantu pasien / keluarga mengidentifikasi kekurangan dalam aktivitas</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_042" id="t_042_tidak">
                    <label class="form-check-label" for="t_042_tidak">Beri penguatan yang positif. Monitor respon fisik, emosi, social dan spiritual</label>
                  </div>
                  <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_042" id="t_042_syok" >
                    <label class="form-check-label" for="t_042_syok">Kolaborasi dengan fisioterapi dalam mengembangkan dan melaksanakan program latihan.</label>
                  </div>
                </div>

                <div class="mb-1"><b>Manajemen Energi</b></div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_042" id="t_042_efektif">
                    <label class="form-check-label" for="t_042_efektif">Obeservasi adanya pembatasan klien dalam aktivitas kaji factor kelelahan.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_042" id="t_042_efektif">
                    <label class="form-check-label" for="t_042_efektif">Monitor nutrisi dan sumber energy tenaga yang adekuat.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_042" id="t_042_tidak">
                    <label class="form-check-label" for="t_042_tidak">Monitor adanya kelelahan fisik dan emosi secara berlebihan.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_042" id="t_042_tidak">
                    <label class="form-check-label" for="t_042_tidak">Therapy music : tentukan jenis music yang disukai pasien.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_042" id="t_042_tidak">
                    <label class="form-check-label" for="t_042_tidak">Therapy bermain : mensetting batasan terhadap sesi permainan terapetik.</label>
                  </div>
                  <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_042" id="t_042_syok" >
                    <label class="form-check-label" for="t_042_syok">Pendidikan : menentukan aktifitas sesuai kondisi pasien.</label>
                  </div>
                </div>
            </td>
            <td>
              <div class="mb-1" style="text-align: center;">
                    <canvas id="canvas" width="150" height="90" style="border:1px solid #000;"></canvas>
                    <input type="hidden" name="TTD" id="TTD">
                    <br><input type="text" name="v_68" id="v_68" style="width: 130px" placeholder="Nama">
                </div>
            </td>
          </tr>

        </tbody>
      </table>
        
    </div>
    </form>
    <script>
    var canvas = document.getElementById('canvas');
    const canvasDataInput = document.getElementById('TTD');
    var context = canvas.getContext('2d');
    var drawing = false;

    canvas.addEventListener('mousedown', startDrawing);
    canvas.addEventListener('mousemove', draw);
    canvas.addEventListener('mouseup', stopDrawing);
    canvas.addEventListener('mouseout', stopDrawing);

    function startDrawing(e) {
        drawing = true;
        draw(e);
    }

    function draw(e) {
        if (!drawing) return;

        context.lineWidth = 2;
        context.lineCap = 'round';
        context.strokeStyle = '#000';

        context.lineTo(e.clientX - canvas.getBoundingClientRect().left, e.clientY - canvas.getBoundingClientRect().top);
        context.stroke();
        context.beginPath();
        context.moveTo(e.clientX - canvas.getBoundingClientRect().left, e.clientY - canvas.getBoundingClientRect().top);
    }

    function stopDrawing() {
        drawing = false;
        context.beginPath();
    }

    function saveSignatureData() {
        const canvasData = canvas.toDataURL('image/png');

        canvasDataInput.value = canvasData;
    }
</script>
  </body>
</html>