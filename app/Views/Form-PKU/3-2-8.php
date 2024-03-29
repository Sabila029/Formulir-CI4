<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>RM 3.2.8 dx perawat - diagnosa gangguan kerusakan integritas kulit</title>
  </head>
  <body>
    <form>
      <div class="container mt-3">

        <br><h5 style="text-align: right;"><b>RM 3.2.1</b></h5>

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


      <br><h5 style="text-align: center;"><b>DIAGNOSA GANGGUAN KERUSAKAN INTEGRITAS KULIT</b></h5>

      <div class="mb-2">
        <div class="row align-items-center">
          <div class="col-md-2">
            <label>DPJP</label>
          </div>
          <div class="col-md-9">
            <input class="form-control" type="text" name="v_01" id="v_01" style="width: 350px" autocomplete="off">
          </div>
          </div>
      </div>

      <div class="mb-2">
        <div class="row align-items-center">
          <div class="col-md-2">
            <label>PPJP</label>
          </div>
          <div class="col-md-9">
            <input class="form-control" type="text" name="v_02" id="v_02" style="width: 350px" autocomplete="off">
          </div>
          </div>
      </div>

      <div class="mb-2">
        <div class="row align-items-center">
          <div class="col-md-2">
            <label>RUANG</label>
          </div>
          <div class="col-md-9">
            <input class="form-control" type="text" name="v_03" id="v_03" style="width: 350px" autocomplete="off">
          </div>
          </div>
      </div>

      <div class="mb-2">
        <div class="row align-items-center">
          <div class="col-md-2">
            <label>KELAS</label>
          </div>
          <div class="col-md-9">
            <input class="form-control" type="text" name="v_04" id="v_04" style="width: 350px" autocomplete="off">
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
            <td>1. <input type="date" id="v_05" name="v_05" style="width: 110px"></td>
            <td>
              <div class="mb-1"><b>Resiko / Gangguan Kerusakan Integritas Kulit </b><br>berhubungan dengan :</div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="t_01">
                <label class="form-check-label" for="t_01">Imobilisasi</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="t_02">
                <label class="form-check-label" for="t_02">Oedema</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="t_03">
                <label class="form-check-label" for="t_03">Status Nutrisi</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="t_04">
                <label class="form-check-label" for="t_04">Trauma</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="t_05">
                <label class="form-check-label" for="t_05">Jaundice / radiasi</label>
              </div>
              <div class="mb-2">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="t_06">
                <label class="form-check-label" for="t_06">Ekresi  / BAB sering</label>
              </div>
              </div>
            </td>
            <td>
               <div class="mb-1">Kulit utuh / tidak ada kerusakan setelah dilakukan<br>tindakan keperawatan selama <input type="text" id="v_06" name="v_06" style="width: 50px"> 24 jam.</div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="t_07">
                <label class="form-check-label" for="t_07">Tidak ada luka</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="t_08">
                <label class="form-check-label" for="t_08">Perfusi jaringan baik</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="t_09">
                <label class="form-check-label" for="t_09">Kulit lembab</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="t_010">
                <label class="form-check-label" for="t_010">Kulit teraba hangat</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="t_011">
                <label class="form-check-label" for="t_011"> Tidak ada warna merah pada kulit</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="t_012">
                <label class="form-check-label" for="t_012">Integritas kulit yang baik bisa ipertahankan</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="t_013">
                <label class="form-check-label" for="t_013">Tidak ada luka/lesi pada kulit</label>
              </div>
              <div class="mb-3">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="t_014">
                <label class="form-check-label" for="t_014">Perfusi jaringan baik</label>
              </div>
              </div>
            </td>
            <td>
               <div class="mb-1"><b>Manajemen Perawatan Kulit</b></div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_015" id="t_015_efektif">
                    <label class="form-check-label" for="t_015_efektif">Kaji kelainan pada kulit</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_016" id="t_016_efektif">
                    <label class="form-check-label" for="t_016_efektif">Observasi keadaan kulit</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_017" id="t_017_tidak">
                    <label class="form-check-label" for="t_017_tidak">Kaji lokasi, kulit bermasalah</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_018" id="t_018_tidak">
                    <label class="form-check-label" for="t_018_tidak">Monitor kulit adanya kemerahan</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_019" id="t_019_efektif">
                    <label class="form-check-label" for="t_019_efektif">Atur posisi sesuai degan kondisi pasien</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_020" id="t_020_efektif">
                    <label class="form-check-label" for="t_020_efektif">Anjurkan menggunakan pakaian yang longgar</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_021" id="t_021_tidak">
                    <label class="form-check-label" for="t_021_tidak">Rapikan tempat tidur pasien</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_022" id="t_022_tidak">
                    <label class="form-check-label" for="t_022_tidak">Jaga kebersihan kulit tetap bersih dan kering</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_023" id="t_023_efektif">
                    <label class="form-check-label" for="t_023_efektif">Oleskan body lotion / minyak / baby oil pada kulit yang tertekan</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_024" id="t_024_efektif">
                    <label class="form-check-label" for="t_024_efektif">Monitor aktivitas dan mobilitas pasien</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_025" id="t_025_tidak">
                    <label class="form-check-label" for="t_025_tidak">Lakukan perawatan luka</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_026" id="t_026_tidak">
                    <label class="form-check-label" for="t_026_tidak">Mobilisasi pasien setiap 2 jam sekali</label>
                  </div>
                  <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_027" id="t_027_syok" >
                    <label class="form-check-label" for="t_027_syok">Monitor kulit akan adanya kemerahan</label>
                  </div>
                </div>

                <div class="mb-1"><b>Pendidikan Kesehatan tentang Integritas Kulis</b></div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_028" id="t_028_efektif">
                    <label class="form-check-label" for="t_028_efektif">Definisi integritas kulit</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_029" id="t_029_efektif">
                    <label class="form-check-label" for="t_029_efektif">Penyebab integritas kulit</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_030" id="t_030_tidak">
                    <label class="form-check-label" for="t_030_tidak">Tanda gejala kerusakan kulit</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_031" id="t_031_tidak">
                    <label class="form-check-label" for="t_031_tidak">Penanganan bila terjadi kerusakan kulit</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_032" id="t_032_efektif">
                    <label class="form-check-label" for="t_032_efektif">Pengobatan pada jaga kebersihan kulit</label>
                  </div>
            </td>
            <td>
              <div class="mb-1" style="text-align: center;">
                    <canvas id="canvas" width="150" height="90" style="border:1px solid #000;"></canvas>
                    <input type="hidden" name="TTD" id="TTD">
                    <br><input type="text" name="v_07" id="v_07" style="width: 130px" placeholder="Nama">
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