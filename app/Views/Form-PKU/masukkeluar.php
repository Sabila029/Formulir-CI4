<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>

     <style>
      .box1{
        width: 450px;
        height: 80px;
        background: transparent;
      }
      .box2{
        width: 300px;
        height: 80px;
        background: transparent;
      }

      .kbw-signature { width: 250px; height: 200px; }
    </style>


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="js/jquery.signature.js"></script>


  </head>
  <body>
    <div class="container-fluid">

      <br><h5 style="text-align: right;"><b>RM 1</b></h5>


      <table class="table table-bordered mb-0" style="border: 1px solid black;">
        <tbody>
          <tr>
            <td style="text-align: center;"><img src="<?= base_url('img/logo.png') ?>" alt="logo" width="100px"></td>
            <td >
              <h3><b>RS PKU MUHAMMADIYAH SAMPANGAN<br>SURAKARTA<br></b></h3>
              <h5><b>Semanggi RT 002 / RW 020 Pasar Kliwon <br>Telp 0271-633894 Fax. : 0271-630229Surakarta</b></h5>
            </td>
            <td rowspan="2" >
              <br><br><br><h3 style="text-align: center;">LABEL IDENTITAS PASIEN</h3>
            </td>
          </tr>


          <tr>
            <td colspan="2">
              <h3 style="text-align: center;"><b>RINGKASAN MASUK DAN KELUAR</b></h3>
            </td>
          </tr>


          <tr>
            <td colspan="3">
              <h5>Petunjuk pengisian : berilah tanda centang (√) pada tanda □ yang sesuai <br>Untuk yang Meninggal : Sebab kematian Harus diisi di Halaman Sebaliknya</h5>
            </td>
          </tr>
          
        </tbody>
      </table>

      <table class="table table-bordered mb-0" style="border: 1px solid black;">
        <tbody>

              <tr>
                <td colspan="4">
                  <div class="col-md-10">
                  <div class="row text-align">
                    <div class="col-md-5">
                      <label for="">Dirawat yang ke :</label>
                    </div>
                    <div class="col-md-6">
                      <input type="number" class="form-control" id="" name="" style="width: 100px" autofocus>
                    </div>
                  </div>
                </div>
                </td>
                <td colspan="2" style="text-align: center;"> Gol Darah</td>
                <td colspan="3" style="text-align: center;">Tanggal Lahir</td>
                <td style="text-align: center;">Umur</td>
              </tr>




              <tr>
                <td rowspan="2">
                  <div class="col-md-10">
                  <div class="row text-align">
                    <div class="col-md-3">
                      <label for="">Ruang</label>
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" id="no_Registration" name="no_Registration" style="width: 200px">
                    </div>
                  </div>
                </div>
                </td>
                <td colspan="3" style="text-align: center;">Jenis Kelamin</td>
                <td colspan="2" rowspan="2" style="text-align: center;">
                  <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_01" value="option1">
                                        <label class="form-check-label" for="t_01">A</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">B</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">AB</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">O</label>
                                    </div>
                </td>
                <td rowspan="2">
                  <div class="input-group mb-3" style="width: 80px">
                    <span class="input-group-text" id="basic-addon1">H</span>
                    <input type="text" class="form-control" >
                  </div></td>
                <td rowspan="2">
                  <div class="input-group mb-3" style="width: 80px">
                    <span class="input-group-text" id="basic-addon1">B</span>
                    <input type="text" class="form-control" >
                  </div></td>
                <td rowspan="2">
                  <div class="input-group mb-3" style="width: 100px">
                    <span class="input-group-text" id="basic-addon1">T</span>
                    <input type="text" class="form-control" >
                  </div>
                </td>
                <td rowspan="2">
                  <div class="col-md-6">
                      <input type="number" class="form-control" id="" name="" style="width: 100px;" >
                    </div>
                </td>
              </tr>




              <tr>
                <td colspan="3" style="text-align: center;">
                  <div class="col-md-13">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_01" value="option1">
                                            <label class="form-check-label" for="t_01">LK</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_02" value="option2">
                                            <label class="form-check-label" for="t_02">PR</label>
                                        </div>
                                      </div>
                </td>
              </tr>




               <tr>
                <td rowspan="2">
                  <div class="col-md-10">
                  <div class="row text-align">
                    <div class="col-md-3">
                      <label for="">Alamat</label>
                    </div>
                    <div class="col-md-9">
                                  <textarea class="form-control" id="v_12" name="v_12" rows="4" cols="8" autocomplete="off"></textarea>
                                </div>
                  </div>
                </div>
                </td>
                <td colspan="3" style="text-align: center;">Bangsa</td>
                <td colspan="5" style="text-align: center;">Agama</td>
                <td style="text-align: center;">Status Perk</td>
              </tr>




          <tr>
            <td colspan="3">
              <div class="col-md-10">
                          <div class="form-check-inline">
                            <input type="radio" class="form-check-input" name="t_05" value="t_05">
                            <label>Indonesia</label>
                          </div>
                          <div class="form-check-inline">
                            <input type="radio" class="form-check-input" name="t_05" value="t_05">
                            <label>Asing</label>
                          </div>
                        </div>
            </td>
            <td colspan="5">
                                <div class="row">
                                  <div class="col-6">
                                    <div class="col-md-4">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_01" value="option1">
                                        <label class="form-check-label" for="t_01">Islam</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Protestan</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Katolik</label>
                                    </div>
                                  </div>
                                  </div>
                                  <div class="col-6">
                                    <div class="col-md-8">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_01" value="option1">
                                        <label class="form-check-label" for="t_01">Hindu</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Budha</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Lain-lain</label>
                                    </div>
                                  </div>
                                  </div>
                                </div>
            </td>
            <td>
                         <div class="col-md-8">
                          <div class="form-check-inline">
                            <input type="radio" class="form-check-input" name="t_05" value="t_05">
                            <label>Kawin</label>
                          </div>
                          <div class="form-check-inline">
                            <input type="radio" class="form-check-input" name="t_05" value="t_05">
                            <label>Tidak Kawin</label>
                          </div>
                          <div class="form-check-inline">
                            <input type="radio" class="form-check-input" name="t_05" value="t_05">
                            <label>Duda</label>
                          </div>
                          <div class="form-check-inline">
                            <input type="radio" class="form-check-input" name="t_05" value="t_05">
                            <label>Janda</label>
                          </div>
                        </div>
            </td>
          </tr>

          <tr>
            <td colspan="4" rowspan="2">
                                  <label>Pendidikan Terakhir</label>
                                   <div class="row">
                                   <div class="col-4">
                                    <div class="col-md-7">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_01" value="option1">
                                        <label class="form-check-label" for="t_01">Belum/Tidak tamat SD</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">SD</label>
                                    </div>
                                  </div>
                                  </div>
                                  <div class="col-4">
                                    <div class="col-md-4">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">SMP</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_01" value="option1">
                                        <label class="form-check-label" for="t_01">SMA</label>
                                    </div>
                                  </div>
                                  </div>
                                  <div class="col-4">
                                    <div class="col-md-4">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Akademi</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Universitas</label>
                                    </div>
                                  </div>
                                  </div>
                                </div>
            </td>
            <td colspan="6" style="text-align: center;"> Cara masuk RS/Rujukan</td>
          </tr>


          <tr>
            <td colspan="6">
              <div class="row">
                                   <div class="col-4">
                                    <div class="col-md-7">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_01" value="option1">
                                        <label class="form-check-label" for="t_01">RS/RB</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Puskesmas</label>
                                    </div>
                                  </div>
                                  </div>
                                  <div class="col-4">
                                    <div class="col-md-4">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Dokter</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_01" value="option1">
                                        <label class="form-check-label" for="t_01">Paramedis</label>
                                    </div>
                                  </div>
                                  </div>
                                  <div class="col-4">
                                    <div class="col-md-4">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Sendiri</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Polisi</label>
                                    </div>
                                  </div>
                                  </div>
                                </div>
            </td>
          </tr>


          <tr>
            <td>
              <div class="col-md-10">
                  <div class="row text-align">
                    <div class="col-md-3">
                      <label for="">Pekerjaan</label>
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" id="no_Registration" name="no_Registration" style="width: 250px">
                    </div>
                  </div>
                </div>
            </td>
            <td colspan="9" rowspan="2"> 
                                <label>Jenis Pelayanan</label>
                                   <div class="row">
                                   <div class="col-3">
                                    <div class="col-md-7">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_01" value="option1">
                                        <label class="form-check-label" for="t_01">Internis</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Bedah</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Kes. Anak </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">ICU </label>
                                    </div>
                                  </div>
                                  </div>
                                  <div class="col-3">
                                    <div class="col-md-4">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Kebidanan</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_01" value="option1">
                                        <label class="form-check-label" for="t_01">Kandungan</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_01" value="option1">
                                        <label class="form-check-label" for="t_01">Bedah</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Bayi</label>
                                    </div>
                                  </div>
                                  </div>
                                  <div class="col-3">
                                    <div class="col-md-4">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Saraf</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">THT</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Paru</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_02" value="option2">
                                        <input type="text" class="form-control" id="" name="" style="width: 150px">
                                    </div>
                                  </div>
                                  </div>
                                  <div class="col-3">
                                    <div class="col-md-4">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Kulit</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Stroke</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">IMC</label>
                                    </div>
                                  </div>
                                  </div>
                                </div>
                              </td>
          </tr>



          <tr>
            <td>
              <div class="col-md-10">
                  <div class="row text-align">
                    <div class="col-md-6">
                      <label for="">Nama Orangtua / Keluarga Terdekat</label>
                    </div>
                    <div class="col-md-4">
                      <input type="text" class="form-control" id="no_Registration" name="no_Registration" style="width: 180px">
                    </div>
                  </div>
                </div>
                <div class="col-md-10">
                  <div class="row text-align">
                    <div class="col-md-6">
                      <label for="">Pekerjaan</label>
                    </div>
                    <div class="col-md-4">
                      <input type="text" class="form-control" id="no_Registration" name="no_Registration" style="width: 180px">
                    </div>
                  </div>
                </div>
            </td>
          </tr>



          <tr>
            <td rowspan="3">
                    <div class="col-md-9">
                      <label for="">Nama pengirim pasien</label>
                    </div>
                    <div class="col-md-4">
                      <input type="text" class="form-control" id="no_Registration" name="no_Registration" style="width: 200px">
                    </div>
                    <div class="col-md-6">
                      <label for="">No. Telp</label>
                    </div>
                    <div class="col-md-4">
                      <input type="text" class="form-control" id="no_Registration" name="no_Registration" style="width: 200px">
                    </div>
            </td>
            <td colspan="3">Tanggal Masuk</td>
            <td colspan="3">Tanggal Keluar</td>
            <td colspan="3">Lama Dirawat</td>
          </tr>


          <tr>
            <td>
              <input type="" name="" style="width: 50px">
            </td>
            <td>
              <input type="" name="" style="width: 50px">
            </td>
            <td>
              <input type="" name="" style="width: 50px">
            </td>
            <td>
              <input type="" name="" style="width: 50px">
            </td>
            <td>
              <input type="" name="" style="width: 50px">
            </td>
            <td>
              <input type="" name="" style="width: 50px">
            </td>
            <td colspan="3" rowspan="2">
              <div class="col-md-9">
                <textarea class="form-control" id="v_12" name="v_12" rows="4" cols="8" autocomplete="off"></textarea>
                </div>
            </td>
          </tr>


          <tr>
            <td colspan="3">
              <div class="col-md-10">
                  <div class="row text-align">
                    <div class="col-md-4">
                      <label for="">Jam</label>
                    </div>
                    <div class="col-md-4">
                      <input type="time" class="form-control" id="" name="" style="width: 100px">
                    </div>
                  </div>
                </div>
            </td>
            <td colspan="3">
              <div class="col-md-10">
                  <div class="row text-align">
                    <div class="col-md-4">
                      <label for="">Jam</label>
                    </div>
                    <div class="col-md-4">
                      <input type="time" class="form-control" id="" name="" style="width: 100px">
                    </div>
                  </div>
                </div>
            </td>
          </tr>





          <tr>
            <td>
              <label>Diagnosis Sementara</label>
              <div class="col-md-9">
                <textarea class="form-control" id="v_12" name="v_12" rows="4" cols="8" autocomplete="off"></textarea>
                </div>
            </td>
            <td colspan="6">
              <label>Dokter Jaga/Poliklinik <br><br>
                 <canvas id="canvas" width="150" height="90" style="border:1px solid #000;"></canvas>
                    <input type="hidden" name="TTD" id="TTD">
                <br>Td Tangan</label>
              <br><br><div class="col-md-10">
                  <div class="row text-align">
                    <div class="col-md-2">
                      <label for="">Nama</label>
                    </div>
                    <div class="col-md-4">
                      <input type="text" class="form-control" id="" name="" style="width: 250px">
                    </div>
                  </div>
                </div>
            </td>
            <td colspan="3">
                               <label >Asuransi</label>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_01" value="option1">
                                        <label class="form-check-label" for="t_01">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Tidak</label>
                                    </div>
                                </div>
                                <br><label>Nama Asuransi</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="" name="" style="width: 250px">
                                  </div>

            </td>
          </tr>



          <tr>
            <td colspan="7">
              <label>Diagnosis Utama :</label>
              <div class="col-md-9">
                <textarea class="form-control" id="v_12" name="v_12" rows="2" cols="8" autocomplete="off"></textarea>
                </div>
              <label>(diagnosis harus ditulis dengan huruf cetak dan tidak boleh disingkat)</label>
            </td>
            <td colspan="3">
              <label>Kode ICD</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="" name="" style="width: 250px">
                                  </div>
            </td>
          </tr>


            <tr>
            <td colspan="7">
              <label>Diagnose Sekunder :</label>
              <div class="col-md-9">
                <textarea class="form-control" id="v_12" name="v_12" rows="2" cols="8" autocomplete="off"></textarea>
                </div>
            </td>
            <td colspan="3">
              <label>Kode ICD</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="" name="" style="width: 250px">
                                  </div>
            </td>
          </tr>



            <tr>
            <td colspan="7">
              <label>Komplikasi :</label>
              <div class="col-md-9">
                <textarea class="form-control" id="v_12" name="v_12" rows="2" cols="8" autocomplete="off"></textarea>
                </div>
            </td>
            <td colspan="3">
              <label>Kode ICD</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="" name="" style="width: 250px">
                                  </div>
            </td>
          </tr>



            <tr>
            <td colspan="7">
              <label>Penyebab luar cidera & keracunan :</label>
              <div class="col-md-9">
                <textarea class="form-control" id="v_12" name="v_12" rows="2" cols="8" autocomplete="off"></textarea>
                </div>
            </td>
            <td colspan="3">
              <label>Kode ICD</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="" name="" style="width: 250px">
                                  </div>
            </td>
          </tr>



          <tr>
            <td colspan="7">
              <label>Operasi / tindakan :</label>
              <div class="col-md-9">
                <textarea class="form-control" id="v_12" name="v_12" rows="2" cols="8" autocomplete="off"></textarea>
                </div>
            </td>
            <td colspan="3">
              <label>Kode ICD</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="" name="" style="width: 250px">
                                  </div>
            </td>
          </tr>



          <tr>
            <td colspan="7">
              <label>Catatan :</label>
              <div class="col-md-9">
                <textarea class="form-control" id="v_12" name="v_12" rows="4" cols="8" autocomplete="off"></textarea>
                </div>
            </td>
            <td colspan="3"></td>
          </tr>



          <tr>
            <td colspan="10">
              <div>
                                   <label class="col-2" for="">Keadaan Luar :</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_01" value="option1">
                                        <label class="form-check-label" for="t_01">Sembuh</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Perbaikan</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Belum Sembuh</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Meninggal < 48 jam</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Meninggal > 48 jam</label>
                                    </div>
                                </div>
            </td>
          </tr>



          <tr>
            <td colspan="10">
              <div>
                                   <label class="col-2" for="">Izin Keluar :</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_01" value="option1">
                                        <label class="form-check-label" for="t_01">Atas Persetujuan</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Dirujuk</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Pulang paksa</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Melarikan diri</label>
                                    </div>
                                </div>
            </td>
          </tr>



          <tr>
            <td colspan="5">
              <div class="col-md-10">
                  <div class="row text-align">
                    <div class="col-md-4">
                      <label for="">Infeksi Nosokomial :</label>
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" id="" name="" style="width: 300px">
                    </div>
                  </div>
                </div>
            </td>
            <td colspan="5">
              <div class="col-md-10">
                  <div class="row text-align">
                    <div class="col-md-6">
                      <label for="">Penyebab Infeksi Nosokomial :</label>
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" id="" name="" style="width: 300px">
                    </div>
                  </div>
                </div>
            </td>
          </tr>



          <tr>
            <td colspan="10">
              <div>
                                   <label class="col-2" for="">Sejarah Imunisasi :</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_01" value="option1">
                                        <label class="form-check-label" for="t_01">BCG</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">D.P.T</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Poliomielitis</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Tetanus formal toxoid</label>
                                    </div>                                  
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">D.T</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Campak</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Hepatitis B</label>
                                    </div>
                                </div>
            </td>
          </tr>




          <tr>
            <td colspan="5" style="text-align: center;">
              <div>
               <div class="mb-3">
                  <label for="alasan" type="text">Dokter Yang Merawat ( DPJP )</label>
                </div>
                  <div class="mb-1" >
                    <canvas id="canvas1" width="150" height="90" style="border:1px solid #000;"></canvas>
                    <input type="hidden" name="TTD_1" id="TTD_1">
                    <br><label >Tanda Tangan</label>
                  <div class="col-md-10">
                  <div class="row text-align">
                    <div class="col-md-3">
                      <label for="">Nama Terang</label>
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" id="" name="" style="width: 300px">
                    </div>
                  </div>
                </div>
                </div>
              </div>

            </td>
            <td colspan="5" style="text-align: center;">
              <div>
               <div class="mb-3">
                  <label for="alasan" type="text">Dokter Konsulen ( Jika Ada )</label>
                </div>
                  <div class="mb-1" >
                    <canvas id="canvas2" width="150" height="90" style="border:1px solid #000;"></canvas>
                    <input type="hidden" name="TTD_2" id="TTD_2">
                    <br><label >Tanda Tangan</label>
                  <div class="col-md-10">
                  <div class="row text-align">
                    <div class="col-md-3">
                      <label for="">Nama Terang</label>
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" id="" name="" style="width: 300px">
                    </div>
                  </div>
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
            <td colspan="4" style="text-align: center;"><b>SEBAB KEMATIAN</b></td>
          </tr>


          <tr>
            <td>
              <label>a. Penyakit atau keadaan yang langsung mengakibatkan kematian</label>
              <br><br><br>
              <label>b. Penyakit-penyakit ( bila ada ) yang menjadi lantaran timbulnya sebab kematian tersebut pada a, dengan menyebut penyakit yang menjadi pokok pangkal terakhir</label>
            </td>
            <td>
              <div class="col-md-10">
                  <div class="row text-align">
                    <div class="col-md-1">
                      <label for="">a.</label>
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" id="no_Registration" name="no_Registration" style="width: 250px">
                    </div>
                    <label>Penyakit tersebut dalam ruang a disebabkan oleh (atau akibat dari):</label>
                  </div>
                </div>


              <br><br><div class="col-md-10">
                  <div class="row text-align">
                    <div class="col-md-1">
                      <label for="">b.</label>
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" id="no_Registration" name="no_Registration" style="width: 250px">
                    </div>
                    <label>Penyakit tersebut dalam ruang b disebabkan oleh (atau akibat dari):</label>
                  </div>
                </div>


              <br><br><div class="col-md-10">
                  <div class="row text-align">
                    <div class="col-md-1">
                      <label for="">c.</label>
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" id="no_Registration" name="no_Registration" style="width: 250px">
                    </div>
                  </div>
                </div>


              </td>
            <td>
              <label>Kode ICD</label>
              <input type="text" class="form-control" id="no_Registration" name="no_Registration" style="width: 100px">
              <br><br><br>
              <input type="text" class="form-control" id="no_Registration" name="no_Registration" style="width: 100px">
              <br><br><br>
              <input type="text" class="form-control" id="no_Registration" name="no_Registration" style="width: 100px">
            </td>
            <td>
              <label>Lamanya ( kira-kira ) mulai sakit hingga meninggal dunia</label>
              <div class="col-md-9">
                 <textarea class="form-control" id="v_12" name="v_12" rows="4" cols="9" autocomplete="off"></textarea>
              </div>
              <br><br><br><br><input type="text" class="form-control" id="no_Registration" name="no_Registration" style="width: 250px">
            </td>
          </tr>



          <tr>
            <td style="text-align: center;"><br>Penyakit-penyakit lain yang berarti dan mempengaruhi pula kematian itu, tetapi tidak ada hubungannya dengan penyakit-penyakit tersebut dalam I a,b,c</td>
            <td colspan="2">
              <label>Disamping penyakit-penyakit  tersebut diatas terdapat pula penyakit :</label>
              <div class="col-md-9">
                 <textarea class="form-control" id="v_12" name="v_12" rows="4" cols="9" autocomplete="off"></textarea>
              </div>
            </td>
            <td>
              <textarea class="form-control" id="v_12" name="v_12" rows="4" cols="9" autocomplete="off"></textarea>
            </td>
          </tr>


          <tr>
            <td colspan="4">
              <div class="col-md-10">
                  <div class="row text-align">
                    <div class="col-md-3">
                      <label for="">Keterangan Khusus untuk :</label>
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" id="no_Registration" name="no_Registration" style="width: 1000px">
                    </div>
                  </div>
                </div>
            </td>
          </tr>


          <tr>
            <td colspan="1">
              <label>I. MATI KARENA RUDA PAKSA ( violent death )
                        <br>a.  Macam rudapaksa
                        <br>b.  Cara kejadian rudapaksa
                        <br>c.  Sifat Jelas (kerusakan tubuh)</label>
            </td>
            <td colspan="3">
              <div>
                                   <label class="col-1" for="">a.</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_01" value="option1">
                                        <label class="form-check-label" for="t_01">Bunuh Diri</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Pembunuhan</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Kecelakaan</label>
                                    </div>
                                </div>
              <div class="col-md-10">
                  <div class="row text-align">
                    <div class="col-md-1">
                      <label for="">b.</label>
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" id="no_Registration" name="no_Registration" style="width: 400px">
                    </div>
                  </div>
                </div>
              <div class="col-md-10">
                  <div class="row text-align">
                    <div class="col-md-1">
                      <label for="">c.</label>
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" id="no_Registration" name="no_Registration" style="width: 400px">
                    </div>
                  </div>
                </div>
            </td>
          </tr>



           <tr>
            <td colspan="1">
              <label>II.  KELAHIRAN MATI ( Stillbirtd )
                        <br>a.  Apakah ini janin lahir mati
                        <br>b.  Sebab kelahiran mati</label>
            </td>
            <td colspan="3">
              <div class="col-md-10">
                  <div class="row text-align">
                    <div class="col-md-1">
                      <label for="">a.</label>
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" id="no_Registration" name="no_Registration" style="width: 400px">
                    </div>
                  </div>
                </div>
              <div class="col-md-10">
                  <div class="row text-align">
                    <div class="col-md-1">
                      <label for="">b.</label>
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" id="no_Registration" name="no_Registration" style="width: 400px">
                    </div>
                  </div>
                </div>
            </td>
          </tr>


           <tr>
            <td colspan="1">
              <label>III. PERSALINAN KEHAMILAN
                        <br>a.  Apakah ini peristiwa persalinan
                        <br>b.  Apakah ini peristiwa kehamilan</label>
            </td>
            <td colspan="3">
              <div class="col-md-10">
                  <div class="row text-align">
                    <div class="col-md-1">
                      <label for="">a.</label>
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" id="no_Registration" name="no_Registration" style="width: 400px">
                    </div>
                  </div>
                </div>
              <div class="col-md-10">
                  <div class="row text-align">
                    <div class="col-md-1">
                      <label for="">b.</label>
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" id="no_Registration" name="no_Registration" style="width: 400px">
                    </div>
                  </div>
                </div>
            </td>
          </tr>


          <tr>
            <td colspan="1">
              <label>IV.  OPERASI
                        <br>a.  Apakah disini dilakukan operasi
                        <br>b.  Jenis Operasi</label>
            </td>
            <td colspan="3">
              <div class="col-md-10">
                  <div class="row text-align">
                    <div class="col-md-1">
                      <label for="">a.</label>
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" id="no_Registration" name="no_Registration" style="width: 400px">
                    </div>
                  </div>
                </div>
              <div class="col-md-10">
                  <div class="row text-align">
                    <div class="col-md-1">
                      <label for="">b.</label>
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" id="no_Registration" name="no_Registration" style="width: 400px">
                    </div>
                  </div>
                </div>
            </td>
          </tr>


          <tr>
            <td colspan="4" >
              <div style="text-align: right;">
                <div class="mb-1">
                  <label for="diagnosa">Surakarta, </label>
                  <input type="date">
                </div>
               <div class="mb-3">
                  <label>Yang memberi keterangan sebab kematian</label>
                </div>
                  <div class="mb-1" >
                    <canvas id="canvas" width="150" height="90" style="border:1px solid #000;"></canvas>
                    <input type="hidden" name="TTD" id="TTD">
                  <br><label>Nama Terang</label>
                  <input type="text">
                </div>
              </div>
            </td>
          </tr>
          






        </tbody>
      </table>

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


    </div>

  </body>
</html>