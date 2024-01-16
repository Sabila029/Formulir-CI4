<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>RM 3.2.6 dx perawat - diagnosa resiko infeksi</title>
  </head>
  <body>
    <form>
      <div class="container mt-3">

        <br><h5 style="text-align: right;"><b>RM 3.2.6</b></h5>

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


      <br><h5 style="text-align: center;"><b>DIAGNOSA RESIKO INFEKSI</b></h5>

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
               <div class="mb-1"><b>Risiko Infeksi</b><br>berhubungan dengan :</div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">Penyakit kronis.  Pertahanan tubuh primer tidak adekuat.</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">Tindakan invansif</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">Proseur pembedahan.</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">Ketuban pecah dini</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">Trauma jaringan</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">Pertahanan tubuh sekunder</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault"> Penuran hemoglobin</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">Penyakit immunosupresi</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">Vaksinasi tidak adekat</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">Wabah</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked"> Prosedur invasive</label>
              </div>
              <div class="mb-2">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">Ketidakadekuatan sistem kekebalan tubuh</label>
              </div>
              </div>
            </td>
            <td>
              <div class="mb-1">Kulit utuh / tidak ada kerusakan setelah dilakukan<br>tindakan keperawatan selama <input type="text" id="" name="" style="width: 50px"> 24 jam.</div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">Tidak ada luka</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">Perfusi jaringan baik</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">Kulit lembab</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">Kulit teraba hangat</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked"> Tidak ada warna merah pada kulit</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">Integritas kulit yang baik bisa ipertahankan</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">Tidak ada luka/lesi pada kulit</label>
              </div>
              <div class="mb-3">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">Perfusi jaringan baik</label>
              </div>
              </div>
            </td>
            <td>
              <div class="mb-1"><b>Therapi Aktifitas</b></div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_042" id="t_042_efektif">
                    <label class="form-check-label" for="t_042_efektif">Bersihkan ruangan setelah dipakai pasien</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_042" id="t_042_efektif">
                    <label class="form-check-label" for="t_042_efektif">Kaji adanya tanda – randa infeksi</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_042" id="t_042_tidak">
                    <label class="form-check-label" for="t_042_tidak">Pertahankan teknik isolasi</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_042" id="t_042_tidak">
                    <label class="form-check-label" for="t_042_tidak">Batasi pengunjung bila perlu</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_042" id="t_042_efektif">
                    <label class="form-check-label" for="t_042_efektif">Intruksikan pada pengunjung untuk menuci tangan saat berkunjung dan selah meninggalkan pasien</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_042" id="t_042_efektif">
                    <label class="form-check-label" for="t_042_efektif">Gunakan sabun antimikroba untuk cuci tangan</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_042" id="t_042_tidak">
                    <label class="form-check-label" for="t_042_tidak">Cuci tangan setiap sebelum dan sesudah tindakan keperawatan</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_042" id="t_042_tidak">
                    <label class="form-check-label" for="t_042_tidak">Gunakan baju, sarung tangan sebagai alat pelindung sesuai kebutuhan</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_042" id="t_042_efektif">
                    <label class="form-check-label" for="t_042_efektif">Pertahankan lingkungan aseptic selama pemasangan alat.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_042" id="t_042_efektif">
                    <label class="form-check-label" for="t_042_efektif">Ganti letak IV perifer dan line central sesuai petunjuk umum</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_042" id="t_042_tidak">
                    <label class="form-check-label" for="t_042_tidak">Lakukan teknik aseptic saat melakukan tindakan invasif.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_042" id="t_042_tidak">
                    <label class="form-check-label" for="t_042_tidak">Tingkatkan intake nutrisi</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_042" id="t_042_tidak">
                    <label class="form-check-label" for="t_042_tidak">Kolaborasi bila perlu</label>
                  </div>
                  <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_042" id="t_042_syok" >
                    <label class="form-check-label" for="t_042_syok">Laporkan hasil kultur</label>
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