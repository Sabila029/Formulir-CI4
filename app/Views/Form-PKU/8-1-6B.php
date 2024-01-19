<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>RM 8.1.6 B DOKUMENTASI PEMBERIN INFORMASI</title>
  </head>
  <body>
    <form>
      <div class="container mt-3">

        <br><h5 style="text-align: right;"><b>RM 8.1.6 B</b></h5>

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


          <tr>
            <td colspan="3" style="text-align: center;"><b>DOKUMENTASI PEMBERIAN INFORMASI</b></td>
          </tr>

          <tr>
            <td colspan="3"><h4><b>NAMA TINDAKAN : KOLESISTEKTOMI</b></h4></td>
          </tr>

          <tr>
            <td colspan="3">
              <div class="mb-2">
                <div class="row align-items-center">
                  <div class="col-md-3">
                    <label>Dokter Pelaksana Tindakan</label>
                  </div>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="v_01" id="v_01" style="width: 700px" autocomplete="off">
                  </div>
                  </div>
              </div>
            </td>
          </tr>

          <tr>
            <td colspan="3">
              <div class="mb-2">
                <div class="row align-items-center">
                  <div class="col-md-3">
                    <label>Pemberian Informasi</label>
                  </div>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="v_02" id="v_02" style="width: 700px" autocomplete="off">
                  </div>
                  </div>
              </div>
            </td>
          </tr>

          <tr>
            <td colspan="3">
              <div class="mb-2">
                <div class="row align-items-center">
                  <div class="col-md-3">
                    <label>Penerima Informasi<br>/Pemberi Persetujuan*</label>
                  </div>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="v_03" id="v_03" style="width: 700px" autocomplete="off">
                  </div>
                  </div>
              </div>
            </td>
          </tr>

          <tr>
            <td colspan="3">
              <div class="mb-2">
                <div class="row align-items-center">
                  <div class="col-md-3">
                    <label>Diberikan pada tanggal/jam</label>
                  </div>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="v_04" id="v_04" style="width: 700px" autocomplete="off">
                  </div>
                  </div>
              </div>
            </td>
          </tr>
        </tbody>
      </table>

      <table class="table table-bordered mb-0" style="border: 1px solid black;">
        <tbody>

          <tr>
            <td style="text-align: center;"><b>NO</b></td>
            <td style="text-align: center;"><b>JENIS INFORMASI</b></td>
            <td style="text-align: center;"><b>ISI INFORMASI</b></td>
            <td style="text-align: center;"><b>TANDA(✓)</b></td>
          </tr>

          <tr>
            <td>1</td>
            <td>Diagnosis (diagnosise kerja dan diagnosa banding)</td>
            <td>Kolelithiasis, Simptomatis</td>
            <td>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="t_01" id="t_01">
              </div>
            </td>
          </tr>

          <tr>
            <td>2</td>
            <td>Dasar diagnosis</td>
            <td>Anamnase, Pemeriksanaan Fisik, USG, Foto polos abdomen</td>
            <td>
              <div class="form-check" >
                <input class="form-check-input" type="checkbox" name="t_02" id="t_02">
              </div>
            </td>
          </tr>

          <tr>
            <td>3</td>
            <td>Tindakan Kedokteran</td>
            <td>Kolesistektomi</td>
            <td>
              <div class="form-check" >
                <input class="form-check-input" type="checkbox" name="t_03" id="t_03">
              </div>
            </td>
          </tr>

          <tr>
            <td>4</td>
            <td>Indikasi Tindakan</td>
            <td>
              <p>● Batu empedu, simptomatis <br>● Nyeri<br>● Tidak membaik dengan medika mentosa</p>
            </td>
            <td>
              <div class="form-check" >
                <input class="form-check-input" type="checkbox" name="t_04" id="t_04">
              </div>
            </td>
          </tr>

          <tr>
            <td>5</td>
            <td>Tata cara</td>
            <td>
              <p>● GA<br>● Insisi Subcosta, Midline, Identifikasi Ductus Systicus dan Artericystica, Kolesisitektomi</p>
            </td>
            <td>
              <div class="form-check" >
                <input class="form-check-input" type="checkbox" name="t_05" id="t_05">
              </div>
            </td>
          </tr>

          <tr>
            <td>6</td>
            <td>Tujuan</td>
            <td>Mengangkat kandung empedu dan batu</td>
            <td>
              <div class="form-check" >
                <input class="form-check-input" type="checkbox" name="t_06" id="t_06">
              </div>
            </td>
          </tr>

          <tr>
            <td>7</td>
            <td>Risiko</td>
            <td>
              <p>● Cidera duktus koledokusatau CBD<br>● Perdarahan<br>● Bahwa setelah tindakan operasi akan menimbulkan rasa nyeri, dokter akan melakukan penanganan untuk mengatasi gangguan nyeri</p>
            </td>
            <td>
              <div class="form-check" >
                <input class="form-check-input" type="checkbox" name="t_07" id="t_07">
              </div>
            </td>
          </tr>

          <tr>
            <td>8</td>
            <td>Komplikasi</td>
            <td>Infeksi</td>
            <td>
              <div class="form-check" >
                <input class="form-check-input" type="checkbox" name="t_08" id="t_08">
              </div>
            </td>
          </tr>

          <tr>
            <td>9</td>
            <td>Prognosis</td>
            <td>Dubiaadbonam</td>
            <td>
              <div class="form-check" >
                <input class="form-check-input" type="checkbox" name="t_09" id="t_09">
              </div>
            </td>
          </tr>

          <tr>
            <td>10</td>
            <td>Alternatif</td>
            <td>Laparoscopi</td>
            <td>
              <div class="form-check" >
                <input class="form-check-input" type="checkbox" name="t_010" id="t_010">
              </div>
            </td>
          </tr>

          <tr>
            <td>11</td>
            <td>Lain-lain</td>
            <td></td>
            <td>
               <div class="form-check" >
                <input  class="form-check-input" type="checkbox" name="t_011" id="t_011">
              </div>
            </td>
          </tr>

          <tr>
            <td colspan="3">
              Dengan ini menyatakan bahwa saya telah menerangkan hal-hal diatas secara benar dan jelas dan memberikan kesempatan untuk bertanya dan / berdiskusi
            </td>
            <td style="text-align: center;">
              <p>Tanda tangan Dokter</p>
              <canvas id="canvas" width="150" height="90" style="border:1px solid #000;"></canvas>
                    <input type="hidden" name="TTD" id="TTD">
            </td>1
          </tr>

           <tr>
            <td colspan="3">
              Dengan ini menyatakan bahwa saya telah menerima informasi sebagaimana diatas, dan telah memahaminya
            </td>
            <td style="text-align: center;">
              <p >Tanda tangan Penerima Informasi</p>
              <canvas id="canvas1" width="150" height="90" style="border:1px solid #000;"></canvas>
                    <input type="hidden" name="TTD_1" id="TTD_1">
            </td>
          </tr>

          <tr>
            <td colspan="4">
              Ket : Bila pasien tidak kompeten atau tidak mau menerima informasi, maka penerima informasi adalah wali atau keluarga terdekat
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
  </body>
</html>