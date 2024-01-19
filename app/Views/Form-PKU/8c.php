<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>RM 8.c FAKTOR RESIKO INFEKSI SELAMA DIRAWAT 27092019</title>
  </head>
  <body>
    <form>
      <div class="container mt-3">

        <br><h5 style="text-align: right;"><b>RM 8c</b></h5>

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

      <br><h4><b>FAKTOR RESIKO INFEKSI SELAMA DIRAWAT</b></h4>
      <div class="row">
        <div class="col-6">
                                   <label class="col-4" for=""><b>A.  INFUS : </b></label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_01" id="t_01_tahu" value="0">
                                        <label class="form-check-label" for="t_01_tahu"><b>YA</b></label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_01" id="t_01_tidak" value="1">
                                        <label class="form-check-label" for="t_01_tidak"><b>TIDAK</b></label>
                                    </div>
        </div>
        <div class="col-6" style="text-align: right;">
          <label>RAWAT INAP</label>
        </div>
      </div>

      <br><table class="table table-bordered mb-0" style="border: 1px solid black;">
        <tbody>

          <tr>
            <td style="text-align: center;">No</td>
            <td style="text-align: center;">Tanggal Pemasangan Infus</td>
            <td style="text-align: center;">Tempat/Ruang Pemasangan Infus</td>
            <td style="text-align: center;">Tanggal Lepas/Aff Infus</td>
            <td style="text-align: center;">Lama Hari Pemasangan Infus</td>
            <td style="text-align: center;">Keterangan</td>
          </tr>


           <tr>
            <td style="text-align: center;">1</td>
            <td style="text-align: center;"><input type="date" class="form-control" id="v_01" name="v_01"></td>
            <td style="text-align: center;"><input type="text" class="form-control" id="v_02" name="v_02"></td>
            <td style="text-align: center;"><input type="date" class="form-control" id="v_03" name="v_03"></td>
            <td style="text-align: center;"><input type="text" class="form-control" id="v_04" name="v_04"></td>
            <td style="text-align: center;"><input type="text" class="form-control" id="v_05" name="v_05"></td>
          </tr>

          <tr>
            <td style="text-align: center;">2</td>
            <td style="text-align: center;"><input type="date" class="form-control" id="v_06" name="v_06"></td>
            <td style="text-align: center;"><input type="text" class="form-control" id="v_07" name="v_07"></td>
            <td style="text-align: center;"><input type="date" class="form-control" id="v_08" name="v_08"></td>
            <td style="text-align: center;"><input type="text" class="form-control" id="v_09" name="v_09"></td>
            <td style="text-align: center;"><input type="text" class="form-control" id="v_10" name="v_10"></td>
          </tr>

          <tr>
            <td style="text-align: center;">3</td>
            <td style="text-align: center;"><input type="date" class="form-control" id="v_11" name="v_11"></td>
            <td style="text-align: center;"><input type="text" class="form-control" id="v_12" name="v_12"></td>
            <td style="text-align: center;"><input type="date" class="form-control" id="v_13" name="v_13"></td>
            <td style="text-align: center;"><input type="text" class="form-control" id="v_14" name="v_14"></td>
            <td style="text-align: center;"><input type="text" class="form-control" id="v_15" name="v_15"></td>
          </tr>

          <tr>
            <td style="text-align: center;">4</td>
            <td style="text-align: center;"><input type="date" class="form-control" id="v_16" name="v_16"></td>
            <td style="text-align: center;"><input type="text" class="form-control" id="v_17" name="v_17"></td>
            <td style="text-align: center;"><input type="date" class="form-control" id="v_18" name="v_18"></td>
            <td style="text-align: center;"><input type="text" class="form-control" id="v_19" name="v_19"></td>
            <td style="text-align: center;"><input type="text" class="form-control" id="v_20" name="v_20"></td>
          </tr>

          <tr>
            <td style="text-align: center;">5</td>
            <td style="text-align: center;"><input type="date" class="form-control" id="v_21" name="v_21"></td>
            <td style="text-align: center;"><input type="text" class="form-control" id="v_23" name="v_23"></td>
            <td style="text-align: center;"><input type="date" class="form-control" id="v_24" name="v_24"></td>
            <td style="text-align: center;"><input type="text" class="form-control" id="v_25" name="v_25"></td>
            <td style="text-align: center;"><input type="text" class="form-control" id="v_26" name="v_26"></td>
          </tr>

          <tr>
            <td colspan="4" style="text-align: center;">Total Hari Pemasangan</td>
            <td style="text-align: center;"><input type="text" class="form-control" id="v_27" name="v_27"></td>
            <td style="text-align: center;"><input type="text" class="form-control" id="v_28" name="v_28"></td>
          </tr>
          
        </tbody>
      </table>

      <br>
       <div class="mb-3">
                                   <label class="col-4" for=""><b>Terjadi Plebitis/Infeksi Luka Infus (ILI) : </b></label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_02" id="t_02_tahu" value="0">
                                        <label class="form-check-label" for="t_02_tahu"><b>YA</b></label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_02" id="t_02_tidak" value="1">
                                        <label class="form-check-label" for="t_02_tidak"><b>TIDAK</b></label>
                                    </div>
                                </div>

      <table class="table table-bordered mb-3" style="border: 1px solid black;">
        <tbody>

          <tr>
            <td style="text-align: center;">No</td>
            <td style="text-align: center;">Tanda – tanda Plebitis</td>
            <td style="text-align: center;">Waktu Terjadi Plebitis (diisi tanggal)</td>
          </tr>

          <tr>
            <td style="text-align: center;">1</td>
            <td>Kemerahan</td>
            <td><input type="date" class="form-control" id="v_29" name="v_29"></td>
          </tr>

          <tr>
            <td style="text-align: center;">2</td>
            <td>Sakit/Nyeri gerak</td>
            <td><input type="date" class="form-control" id="v_30" name="v_30"></td>
          </tr>

          <tr>
            <td style="text-align: center;">3</td>
            <td>Bengkak</td>
            <td><input type="date" class="form-control" id="v_31" name="v_31"></td>
          </tr>

          <tr>
            <td style="text-align: center;">4</td>
            <td>Panas Lokasi Infus</td>
            <td><input type="date" class="form-control" id="v_32" name="v_32"></td>
          </tr>
          
        </tbody>
      </table>

      <div class="mb-3">
                                   <label class="col-4" for=""><b> B.   KATERISASI URINE :</b></label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_03" id="t_03_tahu" value="0">
                                        <label class="form-check-label" for="t_03_tahu"><b>YA</b></label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_03" id="t_03_tidak" value="1">
                                        <label class="form-check-label" for="t_03_tidak"><b>TIDAK</b></label>
                                    </div>
                                </div>
      <table class="table table-bordered mb-3" style="border: 1px solid black;">
        <tbody>

          <tr>
            <td style="text-align: center;">No</td>
            <td style="text-align: center;">Tanggal Pemasangan Infus</td>
            <td style="text-align: center;">Tempat/Ruang Pemasangan Infus</td>
            <td style="text-align: center;">Tanggal Lepas/Aff Infus</td>
            <td style="text-align: center;">Lama Hari Pemasangan Infus</td>
            <td style="text-align: center;">Keterangan</td>
          </tr>


           <tr>
            <td style="text-align: center;">1</td>
            <td style="text-align: center;"><input type="date" class="form-control" id="v_33" name="v_33"></td>
            <td style="text-align: center;"><input type="text" class="form-control" id="v_34" name="v_34"></td>
            <td style="text-align: center;"><input type="date" class="form-control" id="v_35" name="v_35"></td>
            <td style="text-align: center;"><input type="text" class="form-control" id="v_36" name="v_36"></td>
            <td style="text-align: center;"><input type="text" class="form-control" id="v_37" name="v_37"></td>
          </tr>

          <tr>
            <td style="text-align: center;">2</td>
            <td style="text-align: center;"><input type="date" class="form-control" id="v_38" name="v_38"></td>
            <td style="text-align: center;"><input type="text" class="form-control" id="v_39" name="v_39"></td>
            <td style="text-align: center;"><input type="date" class="form-control" id="v_40" name="v_40"></td>
            <td style="text-align: center;"><input type="text" class="form-control" id="v_41" name="v_41"></td>
            <td style="text-align: center;"><input type="text" class="form-control" id="v_42" name="v_42"></td>
          </tr>

          <tr>
            <td style="text-align: center;">3</td>
            <td style="text-align: center;"><input type="date" class="form-control" id="v_43" name="v_43"></td>
            <td style="text-align: center;"><input type="text" class="form-control" id="v_44" name="v_44"></td>
            <td style="text-align: center;"><input type="date" class="form-control" id="v_45" name="v_45"></td>
            <td style="text-align: center;"><input type="text" class="form-control" id="v_46" name="v_46"></td>
            <td style="text-align: center;"><input type="text" class="form-control" id="v_47" name="v_47"></td>
          </tr>

          <tr>
            <td colspan="4" style="text-align: center;">Total Hari Pemasangan</td>
            <td style="text-align: center;"><input type="text" class="form-control" id="v_48" name="v_48"></td>
            <td style="text-align: center;"><input type="text" class="form-control" id="v_49" name="v_49"></td>
          </tr>
          
        </tbody>
      </table>

      <div class="mb-3">
                                   <label class="col-4" for=""><b>Terjadi Infeksi Saluran Kencing (ISK) :</b></label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_04" id="t_04_tahu" value="0">
                                        <label class="form-check-label" for="t_04_tahu"><b>YA</b></label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_04" id="t_04_tidak" value="1">
                                        <label class="form-check-label" for="t_04_tidak"><b>TIDAK</b></label>
                                    </div>
                                </div>
      <table class="table table-bordered mb-5" style="border: 1px solid black;">
        <tbody>

          <tr>
            <td style="text-align: center;">No</td>
            <td style="text-align: center;">Tanda – tanda ISK</td>
            <td style="text-align: center;">Waktu Terjadi ISK (diisi Tanggal)</td>
            <td style="text-align: center;">Dilakukan Kultur Urine</td>
          </tr>

          <tr>
            <td style="text-align: center;">1</td>
            <td>Demam (temp > 36° C)</td>
            <td><input type="date" class="form-control" id="v_50" name="v_50"></td>
            <td rowspan="4">
              <br><br><br><div style="text-align: center;">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_05" id="t_05_baik" value="option1">
                                        <label class="form-check-label" for="t_05_baik">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_05" id="t_05_sedang" value="option2">
                                        <label class="form-check-label" for="t_05_sedang">Tidak</label>
                                    </div>
              </div>
            </td>
          </tr>

          <tr>
            <td style="text-align: center;">2</td>
            <td>Nokturia (anyang-anyangan)</td>
            <td><input type="date" class="form-control" id="v_51" name="v_51"></td>
          </tr>

          <tr>
            <td style="text-align: center;">3</td>
            <td>Dysuria (nyeri sewaktu BAK)</td>
            <td><input type="date" class="form-control" id="v_52" name="v_52"></td>
          </tr>

          <tr>
            <td style="text-align: center;">4</td>
            <td>Nyeri Supra Publik</td>
            <td><input type="date" class="form-control" id="v_53" name="v_53"></td>
          </tr>
          
        </tbody>
      </table>

      <div class="row">
        <div class="col-3"><p>Pindah Ruang :</p></div>
        <div class="col-3">
          <div class="mb-2">
              <div class="col-md-10">
                  <div class="row text-align">
                    <div class="col-md-5">
                      <label for="">dari Ruang</label>
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" id="v_54" name="v_54" style="width: 130px" autocomplete="off">
                    </div>
                  </div>
                </div>
              </div>
        <div class="mb-2">
              <div class="col-md-10">
                  <div class="row text-align">
                    <div class="col-md-5">
                      <label for="">dari Ruang</label>
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" id="v_55" name="v_55" style="width: 130px" autocomplete="off">
                    </div>
                  </div>
                </div>
              </div>
        </div>
        <div class="col-3">
          <div class="mb-2">
              <div class="col-md-10">
                  <div class="row text-align">
                    <div class="col-md-5">
                      <label for="">ke Ruang</label>
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" id="v_56" name="v_56" style="width: 130px" autocomplete="off">
                    </div>
                  </div>
                </div>
              </div>
          <div class="mb-2">
              <div class="col-md-10">
                  <div class="row text-align">
                    <div class="col-md-5">
                      <label for="">ke Ruang</label>
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" id="v_57" name="v_57" style="width: 130px" autocomplete="off">
                    </div>
                  </div>
                </div>
              </div>
        </div>
        <div class="col-3">
          <div class="mb-2">
              <div class="col-md-10">
                  <div class="row text-align">
                    <div class="col-md-5">
                      <label for="">Tanggal</label>
                    </div>
                    <div class="col-md-6">
                      <input type="date" class="form-control" id="v_58" name="v_58" style="width: 130px" autocomplete="off">
                    </div>
                  </div>
                </div>
              </div>
          <div class="mb-2">
              <div class="col-md-10">
                  <div class="row text-align">
                    <div class="col-md-5">
                      <label for="">Tanggal</label>
                    </div>
                    <div class="col-md-6">
                      <input type="date" class="form-control" id="v_59" name="v_59" style="width: 130px" autocomplete="off">
                    </div>
                  </div>
                </div>
              </div>
        </div>
      </div>

      <br><br><div style="text-align: right;">
                <div class="mb-1">
                  <label for="diagnosa">Surakarta, </label>
                  <input type="date" id="v_60" name="v_60">
                </div>
               <div class="mb-3">
                  <label>Petugas Ruangan</label>
                </div>
                  <div class="mb-1" >
                    <canvas id="canvas3" width="200" height="150" style="border:1px solid #000;"></canvas>
                    <input type="hidden" name="TTD_3" id="TTD_3">
                  <br>
                  ( <input type="text" id="v_61" name="v_61"> )
                </div>
              </div>
          




        
      </div>
    </form>
    <script>
    var canvas3 = document.getElementById('canvas3');
    const canvasDataInput3 = document.getElementById('TTD_3');
    var context3 = canvas3.getContext('2d');
    var drawing = false;

    canvas3.addEventListener('mousedown', startDrawing);
    canvas3.addEventListener('mousemove', draw);
    canvas3.addEventListener('mouseup', stopDrawing);
    canvas3.addEventListener('mouseout', stopDrawing);

    function startDrawing(e) {
        drawing = true;
        draw(e);
    }

    function draw(e) {
        if (!drawing) return;

        context3.lineWidth = 2;
        context3.lineCap = 'round';
        context3.strokeStyle = '#000';

        context3.lineTo(e.clientX - canvas3.getBoundingClientRect().left, e.clientY - canvas3.getBoundingClientRect().top);
        context3.stroke();
        context3.beginPath();
        context3.moveTo(e.clientX - canvas3.getBoundingClientRect().left, e.clientY - canvas3.getBoundingClientRect().top);
    }

    function stopDrawing() {
        drawing = false;
        context3.beginPath();
    }

    function saveSignatureData3() {
        const canvasData3 = canvas3.toDataURL('image/png');

        canvasDataInput3.value = canvasData3;
    }
</script>
  </body>
</html>