<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>RM 3.2.7 dx perawat - diagnosa gangguan nyeri</title>
  </head>
  <body>
    <form>
      <div class="container mt-3">

        <br><h5 style="text-align: right;"><b>RM 3.2.7</b></h5>

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


      <br><h5 style="text-align: center;"><b>DIAGNOSA GANGGUAN NYERI</b></h5>

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
               <div class="mb-1"><b>Nyeri Akut / Kronis </b><br>berhubungan dengan kelemahan fisik</div>
               <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked"> Fisik</label>
                  <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                  <label class="form-check-label" for="flexCheckChecked">Obstruksi</label>
                </div>
                  <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                  <label class="form-check-label" for="flexCheckChecked">Peradangan</label>
                </div>
                  <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                  <label class="form-check-label" for="flexCheckChecked">Trauma</label>
                </div>
                  <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                  <label class="form-check-label" for="flexCheckChecked">Luka </label>
                </div>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">Biologi</label>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                  <label class="form-check-label" for="flexCheckChecked">Infeksi</label>
                  <input type="text" id="" name="" style="width: 100px">
                </div>
                  <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                  <label class="form-check-label" for="flexCheckChecked">Sengatan / gigitan binatang</label>
                  <input type="text" id="" name="" style="width: 100px">
                </div>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">Psikoilogis</label>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                  <label class="form-check-label" for="flexCheckChecked">Piskosomatis</label>
                </div>
              </div>
              <div class="mb-2">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">Kimia</label>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                  <label class="form-check-label" for="flexCheckChecked">Zat Kimia</label>
                  <input type="text" id="" name="" style="width: 100px">
                </div>
              </div>
              </div>
            </td>
            <td>
               <div class="mb-1">Pasien tidak mengeluh nyeri setelah dilakukan<br>tindakan keperawatan selama <input type="text" id="" name="" style="width: 50px"> 24 jam.</div>

                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">Mengungkapkan rasa nyeri berkurang sampai dengan tidak ada nyeri</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">Skala nyeri 1 – 3</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">Tekanan darah dalam rentang normal dewasa : (sistol 110 – 130 dan diastole 70 – 90 mmHg) Anak : (sistol 90 -110 dan diastol 50 -70 mmHg)</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked"> Nadi dalam rentang normal Dewasa : (55 – 90 x/menit) Anak : (70- 150 x/menit)</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">  Neonates : (100 – 180 x/menit)</label>
              </div>
               <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked"> Respirasi rentang normal Dewasa : (16 – 20 x/menit)   Anak : (20 – 40 x/menit) Neonates : (30 – 40 x/menit) </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">Mengenali datangnya nyeri</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">Mengenali penyebab nyeri</label>
              </div>
               <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">Mengenali tanda – tanda nyeri</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">Dapat melakukan hubungan interpersonal</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">Dapat melakukan / menangani nyeri dengan disktraksi maupun relaksasi</label>
              </div>
              <div class="mb-3">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">Otot rilex (tidak tegang)</label>
              </div>
              </div>
            </td>
            <td>
              <div class="mb-1"><b>Manajemen Nyeri</b></div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_042" id="t_042_efektif">
                    <label class="form-check-label" for="t_042_efektif">Kaji respon klien terhadap nyeri.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_042" id="t_042_tidak">
                    <label class="form-check-label" for="t_042_tidak">Observasi tanda – tanda vital tiap 4 jam</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_042" id="t_042_tidak">
                    <label class="form-check-label" for="t_042_tidak">Kaji lokasi, nyeri, karakteristik dan tipe sakit
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_042" id="t_042_tidak">
                    <label class="form-check-label" for="t_042_tidak">Atur posisi sesuai dengan kondisi pasien</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_042" id="t_042_tidak">
                    <label class="form-check-label" for="t_042_tidak">Atasi nyeri sesuai skala nyeri</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_042" id="t_042_tidak">
                    <label class="form-check-label" for="t_042_tidak">Ciptakan lingkungan yang nyaman</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_042" id="t_042_tidak">
                    <label class="form-check-label" for="t_042_tidak">Batasi aktifitas pasien untuk mengurangi nyeri</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_042" id="t_042_tidak">
                    <label class="form-check-label" for="t_042_tidak">Laporkan dokter bila mengatasi nyeri tidak berhasil</label>
                  </div>
                  <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_042" id="t_042_syok" >
                    <label class="form-check-label" for="t_042_syok">Kolaborasi dengan keluarga untuk mengatasi nyeri</label>
                  </div>
                </div>

                <div class="mb-1"><b>Pendidikan Kesehatan tentang Nyeri</b></div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_042" id="t_042_tidak">
                    <label class="form-check-label" for="t_042_tidak">Definisi nyeri</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_042" id="t_042_tidak">
                    <label class="form-check-label" for="t_042_tidak">Penyebab nyeri</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_042" id="t_042_tidak">
                    <label class="form-check-label" for="t_042_tidak">Tanda gejala nyeri</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_042" id="t_042_tidak">
                    <label class="form-check-label" for="t_042_tidak"> Penanganan nyeri dengan non farmakologi</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_042" id="t_042_tidak">
                    <label class="form-check-label" for="t_042_tidak">Penangangan nyeri dengan obat / farmakologi</label>
                  </div>
                  <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="t_042" id="t_042_syok" >
                    <label class="form-check-label" for="t_042_syok">Komplikasi nyeri</label>
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