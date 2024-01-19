<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>RM7.7 SURAT SERAH TERIMA BAYI PULANG</title>
  </head>
  <body>
    <form>
      <div class="container mt-3">

        <br><h5 style="text-align: right;"><b>RM 7.7</b></h5>

        <br>

      <div class="row">
        <div class="col-4">
        <div style="text-align: center;">
        <img src="<?= base_url('img/logo.png') ?>" alt="logo" width="120px">
        <div>
                <label>SEhat-aMANah <br>tanGGungjawab-Islami</label>
              </div>
      </div>
      </div>

      <div class="col-6">
        <h3 style="text-align: center;"><b>RS PKU MUHAMMADIYAH SAMPANGAN <br>SURAKARTA</b></h3>
              <h5 style="text-align: center;">Semanggi RT 002 / RW 020 Pasar Kliwon<br>0271-633894 Fax. : 0271-630229  S U R A K A R T A</h5>
      </div>
      </div>

      <hr style="border: 3px solid black;">

      <br>
      <h3 style="text-align: center;"><b>SURAT SERAH TERIMA BAYI PULANG</b></h3>


      <br><div class="mb-3">Pada hari ini :</div>
      <div class="mb-2">
        <div class="row align-items-center">
          <div class="col-md-2">
            <label>Tgl/bln/th</label>
          </div>
          <div class="col-md-9">
            <input class="form-control" type="date" name="date_of_birth" id="date_of_birth" style="width: 350px" autocomplete="off">
          </div>
          </div>
      </div>

      <div class="mb-2">
        <div class="row align-items-center">
          <div class="col-md-2">
            <label>Nama Bayi</label>
          </div>
          <div class="col-md-9">
            <input class="form-control" type="text" name="name_of_pasien" id="name_of_pasien" style="width: 350px" autocomplete="off">
          </div>
          </div>
      </div>

      <div class="mb-2">
        <div class="row align-items-center">
          <div class="col-md-2">
            <label>Jenis Kelamin</label>
          </div>
          <div class="col-md-9">
            <input class="form-control" type="text" name="gender" id="gender" style="width: 350px" autocomplete="off">
          </div>
          </div>
      </div>

      <div class="mb-4">
        <div class="row align-items-center">
          <div class="col-md-2">
            <label>Berat Badan Bayi</label>
          </div>
          <div class="col-md-9">
            <input class="form-control" type="text" name="weight" id="weight" style="width: 350px" autocomplete="off">
          </div>
          </div>
      </div>


      <div class="mb-3">Dari orang tua :</div>
      <div class="mb-2">
        <div class="row align-items-center">
          <div class="col-md-2">
            <label>Nama ibu </label>
          </div>
          <div class="col-md-9">
            <input class="form-control" type="text" name="mother" id="mother" style="width: 350px" autocomplete="off">
          </div>
          </div>
      </div>

      <div class="mb-2">
        <div class="row align-items-center">
          <div class="col-md-2">
            <label>Nama ayah</label>
          </div>
          <div class="col-md-9">
            <input class="form-control" type="text" name="father" id="father" style="width: 350px" autocomplete="off">
          </div>
          </div>
      </div>

      <div class="mb-4">
        <div class="row align-items-center">
          <div class="col-md-2">
            <label>Alamat</label>
          </div>
          <div class="col-md-9">
            <input class="form-control" type="text" name="contact_address" id="contact_address" style="width: 350px" autocomplete="off">
          </div>
          </div>
      </div>


      <div class="mb-3">
        Telah diserah bayi, oleh petugas RS PKU Muhammadiyah Sampangan.
      </div>

      <div class="mb-3" style="text-align: right;">
        Surakarta , <input type="date" id="v_01" name="v_01">
      </div>


       <div class="row">
              <div class="col-6">
                <div style="text-align: center;">Mengetahui<br>Petugas</div>

                  <div class="mb-1"  style="text-align: center;">
                    <canvas id="canvas" width="200" height="130" style="border:1px solid #000;"></canvas>
                    <input type="hidden" name="TTD" id="TTD">
                    <br>( <input type="text" name="petugas" id="petugas"> )
                </div>
              </div>


              <div class="col-6">
                <div style="text-align: center;">Penerima<br>Ibu Bayi</div>

                  <div class="mb-1"  style="text-align: center;">
                    <canvas id="canvas1" width="200" height="130" style="border:1px solid #000;"></canvas>
                    <input type="hidden" name="TTD_1" id="TTD_1">
                    <br>( <input type="text" name="mother" id="mother"> )
                </div>
              </div>
              </div>


        <div>
                <div style="text-align: center;">Saksi<br>Suami/Keluarga</div>

                  <div class="mb-1"  style="text-align: center;">
                    <canvas id="canvas2" width="200" height="130" style="border:1px solid #000;"></canvas>
                    <input type="hidden" name="TTD_2" id="TTD_2">
                    <br>( <input type="text" name="father" id="father"> )
                </div>
              </div>
        
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
<script>
    var canvas1 = document.getElementById('canvas1');
    const canvasDataInput1 = document.getElementById('TTD_1');
    var context1 = canvas1.getContext('2d');
    var drawing = false;

    canvas1.addEventListener('mousedown', startDrawing);
    canvas1.addEventListener('mousemove', draw);
    canvas1.addEventListener('mouseup', stopDrawing);
    canvas1.addEventListener('mouseout', stopDrawing);

    function startDrawing(e) {
        drawing = true;
        draw(e);
    }

    function draw(e) {
        if (!drawing) return;

        context1.lineWidth = 2;
        context1.lineCap = 'round';
        context1.strokeStyle = '#000';

        context1.lineTo(e.clientX - canvas1.getBoundingClientRect().left, e.clientY - canvas1.getBoundingClientRect().top);
        context1.stroke();
        context1.beginPath();
        context1.moveTo(e.clientX - canvas1.getBoundingClientRect().left, e.clientY - canvas1.getBoundingClientRect().top);
    }

    function stopDrawing() {
        drawing = false;
        context1.beginPath();
    }

    function saveSignatureData1() {
        const canvasData1 = canvas1.toDataURL('image/png');

        canvasDataInput1.value = canvasData1;
    }
</script>
<script>
    var canvas2 = document.getElementById('canvas2');
    const canvasDataInput2 = document.getElementById('TTD_2');
    var context2 = canvas2.getContext('2d');
    var drawing = false;

    canvas2.addEventListener('mousedown', startDrawing);
    canvas2.addEventListener('mousemove', draw);
    canvas2.addEventListener('mouseup', stopDrawing);
    canvas2.addEventListener('mouseout', stopDrawing);

    function startDrawing(e) {
        drawing = true;
        draw(e);
    }

    function draw(e) {
        if (!drawing) return;

        context2.lineWidth = 2;
        context2.lineCap = 'round';
        context2.strokeStyle = '#000';

        context2.lineTo(e.clientX - canvas2.getBoundingClientRect().left, e.clientY - canvas2.getBoundingClientRect().top);
        context2.stroke();
        context2.beginPath();
        context2.moveTo(e.clientX - canvas2.getBoundingClientRect().left, e.clientY - canvas2.getBoundingClientRect().top);
    }

    function stopDrawing() {
        drawing = false;
        context2.beginPath();
    }

    function saveSignatureData2() {
        const canvasData2 = canvas2.toDataURL('image/png');

        canvasDataInput2.value = canvasData2;
    }
</script>
  </body>
</html>