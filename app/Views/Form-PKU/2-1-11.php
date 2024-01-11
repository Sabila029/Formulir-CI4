<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title> 2.1.11 ASESMEN AWAL KEPERAWATAN PASIEN KRITIS</title>
  </head>
  <body>
    <form>
      <div class="container mt-3">
      


        <br><h3 style="text-align: right;"><b>RM 2.1.11</b></h3>



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
              <h5><b>Semanggi RT 002 / RW 020 Pasar Kliwon, Surakarta<br>Telp 0271-633894 Fax. : 0271-630229 <br>Jawa Tengah 57117</b></h5>
            </td>
            <td>
              <div class="container" style="height: 150px; border: 1px solid black; border-radius: 8px">
                <h5 style="text-align: center; margin-top: 60px">Label Identitas Pasien</h5>
                
              </div>
            </td>
          </tr>
          
        </tbody>
      </table>


      <table class="table table-bordered mb-0" style="border: 1px solid black;">
        <tbody>

          <tr>
            <td style="text-align: center;"><h4><b>ASESMEN AWAL KEPERAWATAN KRITIS </b></h4></td>
          </tr>


          <tr>
            <td>
              <div>
                                   <label class="col-2" for="">Alergi</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_023" id="t_023_tidak" value="0">
                                        <label class="form-check-label" for="t_023_tidak">Tidak</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_023" id="t_023_ada" value="1">
                                        <label class="form-check-label" for="t_023_ada">Ya, bila ya jelaskan :</label>
                                        <input type="text" id="v_21" name="v_21" style="width: 250px">
                                    </div>
                                    </div>
              
            </td>
          </tr>



          <tr>
            <td>
                       <div class="row">
                            <label for="V_0" class="col-sm-3 col-form-label">Masuk rawat inap tanggal  :</label>
                            <div class="col-sm-4">
                                <input type="date" class="form-control" id="V_0" style="width: 150px">
                            </div>
                            <label for="V_0" class="col-sm-1 col-form-label">Jam :</label>
                            <div class="col-sm-4">
                                <input type="time" class="form-control" id="V_0" style="width: 150px">
                            </div>
                        </div>
            </td>
          </tr>



          <tr>
            <td>
              <h6><b>I. PENGKAJIAN KEPERAWATAN </b></h6>
              <div class="mb-2">
              <div class="col-md-10">
                  <div class="row text-align">
                    <div class="col-md-4">
                      <label for=""><b>1. Keluhan Utama :</b></label>
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" id="no_Registration" name="no_Registration" style="width: 700px">
                    </div>
                  </div>
                </div>
              </div>
              <div class="mb-2">
              <div class="col-md-10">
                  <div class="row text-align">
                    <div class="col-md-4">
                      <label for=""><b>Riwayat Penyakit Sekarang :</b></label>
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" id="no_Registration" name="no_Registration" style="width: 700px">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-10">
                  <div class="row text-align">
                    <div class="col-md-4">
                      <label for=""><b>Riwayat Penyakit Dahulu :</b></label>
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" id="no_Registration" name="no_Registration" style="width: 700px">
                    </div>
                  </div>
                </div>
            </td>
          </tr>



          <tr>
            <td>
              <h6><b>2. Keadaan Umum :</b></h6>
              <div class="row">
                <div class="col-3">
              <div class="input-group mb-3" style="width: 200px">
                <span class="input-group-text">TD</span>
                <input type="text" class="form-control">
                <span class="input-group-text">mmHg</span>
              </div>
            </div>
            <div class="col-3">
              <div class="input-group mb-3" style="width: 200px">
                <span class="input-group-text">N</span>
                <input type="text" class="form-control">
                <span class="input-group-text">x/menit</span>
              </div>
            </div>
            <div class="col-3">
              <div class="input-group mb-3" style="width: 200px">
                <span class="input-group-text">R</span>
                <input type="text" class="form-control">
                <span class="input-group-text">x/menit</span>
              </div>
            </div>
            <div class="col-3">
              <div class="input-group mb-3" style="width: 150px">
                <span class="input-group-text">S</span>
                <input type="text" class="form-control">
                <span class="input-group-text">oC </span>
              </div>
            </div>
              </div>
            </td>
          </tr>



          <tr>
            <td>
              <h6><b>3. Skrining Nyeri :</b></h6>
              <div class="row">
                <div class="col-6">
                                <div class="row mb-2">                       
                                <div>
                                   <label class="col-md-2">Nyeri</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="gender_Laki" value="0" readonly>
                                        <label class="form-check-label" for="gender_Laki">Tidak</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="gender_Perempuan" value="1" readonly>
                                        <label class="form-check-label" for="gender_Perempuan">Ya</label>
                                    </div>
                                </div>
                            </div>
                        </div>
              <div class="col-6">
                                <div class="row mb-2">                       
                                <div>
                                   <label class="col-md-2">Onset</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="gender_Laki" value="0" readonly>
                                        <label class="form-check-label" for="gender_Laki">Akut</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="gender_Perempuan" value="1" readonly>
                                        <label class="form-check-label" for="gender_Perempuan">Kronik</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <h6>Asesmen Nyeri dengan :</h6>
                <div class="row">
                    <div class="col-3">
                  <div class="input-group mb-3" style="width: 200px">
                    <span class="input-group-text">P</span>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-3">
                  <div class="input-group mb-3" style="width: 200px">
                    <span class="input-group-text">Q</span>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-3">
                  <div class="input-group mb-3" style="width: 200px">
                    <span class="input-group-text">R</span>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-3">
                  <div class="input-group mb-3" style="width: 150px">
                    <span class="input-group-text">T</span>
                    <input type="text" class="form-control">
                  </div>
                </div>
              </div>
            </td>
          </tr>



          <tr>
            <td>
              <h6><b>4. Pengkajian Per Sistem :</b></h6>
              <h6><b>a. Sistem Respirasi</b></h6>
              <div class="mb-2">
                                <div>
                                   <label class="col-2" for="">Jalan napas</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_compos" value="0">
                                        <label class="form-check-label" for="t_022_compos">Paten</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Tidak</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_somnolen" value="2">
                                        <label class="form-check-label" for="t_022_somnolen">Snoring</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_sopor" value="3">
                                        <label class="form-check-label" for="t_022_sopor">Gurling</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_coma" value="4">
                                        <label class="form-check-label" for="t_022_coma">Stidor</label>
                                    </div>
                                </div>
                              </div>
                <div class="mb-2">
                                <div>
                                   <label class="col-2" for="">Endotracheal tube</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_compos" value="0">
                                        <label class="form-check-label" for="t_022_compos">Tidak</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_somnolen" value="2">
                                        <label class="form-check-label" for="t_022_somnolen">Ukuran ETT</label> 

                                        <label>Tgl Pasang :</label>
                                        <input type="date" name="">
                                    </div>
                                </div>
                              </div>
                <div class="mb-2">
                                <div>
                                   <label class="col-2" for="">Tracheostomy tube</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_compos" value="0">
                                        <label class="form-check-label" for="t_022_compos">Tidak</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_somnolen" value="2">
                                        <label class="form-check-label" for="t_022_somnolen">Ukuran TT</label> 

                                        <label>Tgl Pasang :</label>
                                        <input type="date" name="">
                                    </div>
                                </div>
                              </div>
                <div class="mb-2">
                                <div>
                                   <label class="col-2" for="">Pola napas </label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_compos" value="0">
                                        <label class="form-check-label" for="t_022_compos">Apneu </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Spontan </label>
                                        <label>Tgl Pasang :</label>
                                        <input type="date" name="">
                                    </div>
                                </div>
                              </div>
                <div class="mb-2">
                                <div>
                                   <label class="col-2" for="">Irama</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_compos" value="0">
                                        <label class="form-check-label" for="t_022_compos">Teratur</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Tidak teratur </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_somnolen" value="2">
                                        <label class="form-check-label" for="t_022_somnolen">Frekuensi napas </label>
                                        <input type="text" name="" style="width: 100px"> x/menit
                                    </div>
                                </div>
                              </div>
                <div class="mb-2">
                                <div>
                                   <label class="col-2" for="">Ekspansi dada </label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_compos" value="0">
                                        <label class="form-check-label" for="t_022_compos">Simetris  </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Asimetris  </label>
                                    </div>
                                </div>
                              </div>
                <div class="mb-2">
                                <div>
                                   <label class="col-2" for="">Otot bantu napas </label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_023" id="t_023_tidak" value="0">
                                        <label class="form-check-label" for="t_023_tidak">Tidak ada</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_023" id="t_023_ada" value="1">
                                        <label class="form-check-label" for="t_023_ada">Ada, sebutkan</label>
                                        <input type="text" id="v_21" name="v_21" style="width: 150px">
                                    </div>
                                    </div>
                                </div>
                <div class="mb-2">
                                <div>
                                   <label class="col-2" for="">Suara paru </label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_compos" value="0">
                                        <label class="form-check-label" for="t_022_compos">Vesikuler </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Ronchi </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_somnolen" value="2">
                                        <label class="form-check-label" for="t_022_somnolen">Wheezing </label> 
                                    </div>
                                </div>
                              </div>
                <div class="mb-2">
                                   <label class="col-2" for="">Reflek batuk </label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_compos" value="0">
                                        <label class="form-check-label" for="t_022_compos">Spontan  </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Tidak Spontan  </label>
                                    </div>
                              </div>
                <div class="mb-2">
                                <div>
                                   <label class="col-2" for="">Posisi trachea </label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_compos" value="0">
                                        <label class="form-check-label" for="t_022_compos">Midline  </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Deviasi  </label>
                                    </div>
                                </div>
                              </div>
                <div class="mb-2">
                                <div>
                                   <label class="col-2" for="">Retraksi dinding dada </label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_compos" value="0">
                                        <label class="form-check-label" for="t_022_compos">Tidak ada</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Ada</label>
                                    </div>
                                </div>
                              </div>
                <div class="mb-2">
                                <div>
                                   <label class="col-2" for="">Mukosa mulut & bibir </label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_compos" value="0">
                                        <label class="form-check-label" for="t_022_compos">Kering  </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Lembab  </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_somnolen" value="2">
                                        <label class="form-check-label" for="t_022_somnolen">Cyanosisn </label> 
                                    </div>
                                </div>
                              </div>
                  <div class="col-md-10">
                    <div class="row text-align">
                      <div class="col-md-2">
                        <label for="">Lain-lain</label>
                      </div>
                      <div class="col-md-6">
                        <input type="text" class="form-control" id="no_Registration" name="no_Registration" style="width: 700px">
                      </div>
                    </div>
                  </div>
            </td>
          </tr>



          <tr>
            <td>
              <h6><b>b. Sistem kardiovaskular</b></h6>
              <div class="row">
                <div class="col-6">
              <div class="mb-2">
                                <div>
                                   <label class="col-3" for="">Nadi</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_023" id="t_023_tidak" value="0">
                                        <label class="form-check-label" for="t_023_tidak">Tidak ada</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_023" id="t_023_ada" value="1">
                                        <label class="form-check-label" for="t_023_ada">Ada</label>
                                    </div>
                                    </div>
                                </div>
              <div class="mb-2">
                                <div>
                                   <label class="col-3" for="">Irama jantung</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_023" id="t_023_tidak" value="0">
                                        <label class="form-check-label" for="t_023_tidak">Teratur</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_023" id="t_023_ada" value="1">
                                        <label class="form-check-label" for="t_023_ada">Tidak Teratur</label>
                                    </div>
                                    </div>
                                </div>
              <div class="col-md-10">
                    <div class="row text-align">
                      <div class="col-md-3">
                        <label for="">Tekanan darah</label>
                      </div>
                      <div class="col-md-6">
                        <input type="text" id="no_Registration" name="no_Registration" style="width: 100px">Mmhg
                      </div>
                    </div>
                  </div>
              <div class="mb-2">
                                <div>
                                   <label class="col-3" for="">Arteri line</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_023" id="t_023_tidak" value="0">
                                        <label class="form-check-label" for="t_023_tidak">Tidak ada</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_023" id="t_023_ada" value="1">
                                        <label class="form-check-label" for="t_023_ada">Ada</label>
                                    </div>
                                    </div>
                                </div>
              <div class="mb-2">
                                <div>
                                   <label class="col-3" for="">IV Line</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_023" id="t_023_tidak" value="0">
                                        <label class="form-check-label" for="t_023_tidak">Tidak ada</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_023" id="t_023_ada" value="1">
                                        <label class="form-check-label" for="t_023_ada">Ada</label>
                                    </div>
                                    </div>
                                </div>
              <div class="mb-2">
                                <div>
                                   <label class="col-3" for="">CVC</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_023" id="t_023_tidak" value="0">
                                        <label class="form-check-label" for="t_023_tidak">Tidak ada</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_023" id="t_023_ada" value="1">
                                        <label class="form-check-label" for="t_023_ada">Ada</label>
                                    </div>
                                    </div>
                                </div>
              <div class="col-md-10">
                    <div class="row text-align">
                      <div class="col-md-3">
                        <label for="">Saturasi Oksigen</label>
                      </div>
                      <div class="col-md-6">
                        <input type="text" id="no_Registration" name="no_Registration" style="width: 100px">%
                      </div>
                    </div>
                  </div>
              <div class="mb-2">
                                <div>
                                   <label class="col-3" for="">Kuli</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_023" id="t_023_tidak" value="0">
                                        <label class="form-check-label" for="t_023_tidak">Cyanosis</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_023" id="t_023_ada" value="1">
                                        <label class="form-check-label" for="t_023_ada">Tidak Cyanosis</label>
                                    </div>
                                    </div>
                                </div>
              <div class="mb-2">
                                <div>
                                   <label class="col-3" for="">Oedema</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_023" id="t_023_tidak" value="0">
                                        <label class="form-check-label" for="t_023_tidak">Tidak</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_023" id="t_023_ada" value="1">
                                        <label class="form-check-label" for="t_023_ada">Ya</label>
                                    </div>
                                    </div>
                                </div>
              <div class="mb-2">
                                <div>
                                   <label class="col-3" for="">Perdarahan</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_023" id="t_023_tidak" value="0">
                                        <label class="form-check-label" for="t_023_tidak">Tidak</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_023" id="t_023_ada" value="1">
                                        <label class="form-check-label" for="t_023_ada">Ya</label>
                                    </div>
                                    </div>
                                </div>
                        </div>
              <div class="col-6">
              <div class="mb-2">
              <div class="col-md-10">
                    <div class="row text-align">
                      <div class="col-md-4">
                        <label for="">Hearth Rate</label>
                      </div>
                      <div class="col-md-6">
                        <input type="text" id="no_Registration" name="no_Registration" style="width: 100px">x/Menit
                      </div>
                    </div>
                  </div>
                </div>
              <div class="mb-2">
              <div class="col-md-10">
                    <div class="row text-align">
                      <div class="col-md-4">
                        <label for="">Gambaran ECG</label>
                      </div>
                      <div class="col-md-6">
                        <input type="text" id="no_Registration" name="no_Registration" style="width: 100px">
                      </div>
                    </div>
                  </div>
                </div>
              <div class="mb-2">
              <div class="col-md-10">
                    <div class="row text-align">
                      <div class="col-md-4">
                        <label for="">MAP Presure </label>
                      </div>
                      <div class="col-md-6">
                        <input type="text" id="no_Registration" name="no_Registration" style="width: 100px">Mmhg
                      </div>
                    </div>
                  </div>
                </div>
              <div class="mb-2">
              <div class="col-md-10">
                    <div class="row text-align">
                      <div class="col-md-4">
                        <label for="">Tanggal Pasang</label>
                      </div>
                      <div class="col-md-6">
                        <input type="date" id="no_Registration" name="no_Registration" style="width: 130px">
                      </div>
                    </div>
                  </div>
                </div>
              <div class="mb-2">
              <div class="col-md-10">
                    <div class="row text-align">
                      <div class="col-md-4">
                        <label for="">Tanggal Pasang</label>
                      </div>
                      <div class="col-md-8">
                        <input type="date" id="no_Registration" name="no_Registration" style="width: 130px">
                        <label>PIVAS</label>
                        <input type="text" name="" style="width: 100px">
                      </div>
                    </div>
                  </div>
                </div>
              <div class="mb-2">
              <div class="col-md-10">
                    <div class="row text-align">
                      <div class="col-md-4">
                        <label for="">Tanggal Pasang</label>
                      </div>
                      <div class="col-md-8">
                        <input type="date" id="no_Registration" name="no_Registration" style="width: 130px">
                        <label>CVP</label>
                        <input type="text" name="" style="width: 100px">
                      </div>
                    </div>
                  </div>
                </div>
              <div class="mb-2">
              <div class="col-md-10">
                    <div class="row text-align">
                      <div class="col-md-4">
                        <label for="">Capilarry reftil time </label>
                      </div>
                      <div class="col-md-6">
                        <input type="date" id="no_Registration" name="no_Registration" style="width: 100px">detik
                      </div>
                    </div>
                  </div>
                </div>
              <div class="mb-2">
                                <div>
                                   <label class="col-4" for="">Akral</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_compos" value="0">
                                        <label class="form-check-label" for="t_022_compos">Hangat</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Dingin</label>
                                    </div>
                                </div>
                              </div>
              <div class="mb-2">
              <div class="col-md-10">
                    <div class="row text-align">
                      <div class="col-md-4">
                        <label for="">Lokasi</label>
                      </div>
                      <div class="col-md-6">
                        <input type="text" id="no_Registration" name="no_Registration" style="width: 200px">
                      </div>
                    </div>
                  </div>
                </div>
              <div class="mb-2">
              <div class="col-md-10">
                    <div class="row text-align">
                      <div class="col-md-4">
                        <label for="">Melalui</label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" id="no_Registration" name="no_Registration" style="width: 130px">
                        <label>Vol.</label>
                        <input type="text" name="" style="width: 100px">ml
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </div>
              <div class="col-md-10">
                    <div class="row text-align">
                      <div class="col-md-2">
                        <label for="">Lain-lain</label>
                      </div>
                      <div class="col-md-6">
                        <input type="text" class="form-control" id="no_Registration" name="no_Registration" style="width: 700px">
                      </div>
                    </div>
                  </div>

             
            </td>
          </tr>



          <tr>
            <td>
              <h6><b>c. Sistem Persarafan</b></h6>
               <div class="mb-2">
                              <div>
                                   <label class="col-2" for="">Tingkat Kesadaran</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_030" id="t_030_normal" value="0">
                                        <label class="form-check-label" for="t_030_normal">composmentis</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_030" id="t_030_cair" value="1">
                                        <label class="form-check-label" for="t_030_cair">soporcoma</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_030" id="t_030_hijau" value="2">
                                        <label class="form-check-label" for="t_030_hijau">apatis</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_030" id="t_030_dempul" value="3">
                                        <label class="form-check-label" for="t_030_dempul">somnolen</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_030" id="t_030_terdapatdarah" value="4">
                                        <label class="form-check-label" for="t_030_terdapatdarah">coma</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_030" id="t_030_lainlain" value="5">
                                        <label class="form-check-label" for="t_030_lainlain">soporn</label>
                                    </div>
                                </div>
                              </div>
                <div class="col-md-10">
                    <div class="row text-align">
                      <div class="col-md-2">
                        <label for="">GCS</label>
                      </div>
                      <div class="row">
                          <div class="col-3">
                        <div class="input-group mb-3" style="width: 100px">
                          <span class="input-group-text">P</span>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="input-group mb-3" style="width: 100px">
                          <span class="input-group-text">Q</span>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="input-group mb-3" style="width: 100px">
                          <span class="input-group-text">R</span>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="input-group mb-3" style="width: 100px">
                          <span class="input-group-text">T</span>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                          </div>
                        </div>


                <div class="mb-2">
                              <div>
                                   <label class="col-2" for="">Pupil</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_030" id="t_030_normal" value="0">
                                        <label class="form-check-label" for="t_030_normal">isokor</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_030" id="t_030_cair" value="1">
                                        <label class="form-check-label" for="t_030_cair">anisokor</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_030" id="t_030_hijau" value="2">
                                        <label class="form-check-label" for="t_030_hijau">miosis</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_030" id="t_030_dempul" value="3">
                                        <label class="form-check-label" for="t_030_dempul">medriasis</label>
                                    </div>
                                </div>
                              </div>

                <div class="mb-2">
                              <div>
                                   <label class="col-2" for="">Reflek Cahaya</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_030" id="t_030_normal" value="0">
                                        <label class="form-check-label" for="t_030_normal">kanan</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_030" id="t_030_cair" value="1">
                                        <label class="form-check-label" for="t_030_cair">kiri</label>
                                    </div>
                                </div>
                              </div>

                <div class="mb-2">
                              <div>
                                   <label class="col-2" for="">Ukuran pupil</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_030" id="t_030_normal" value="0">
                                        <label class="form-check-label" for="t_030_normal">kanan</label>
                                        <input type="text" name="" style="width: 80px"> mm
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_030" id="t_030_cair" value="1">
                                        <label class="form-check-label" for="t_030_cair">kiri </label>
                                        <input type="text" name="" style="width: 80px"> mm
                                    </div>
                                </div>
                              </div>
                <div class="col-md-10">
                    <div class="row text-align">
                      <div class="col-md-2">
                        <label for="">Lain-lain</label>
                      </div>
                      <div class="col-md-6">
                        <input type="text" class="form-control" id="no_Registration" name="no_Registration" style="width: 700px">
                      </div>
                    </div>
                  </div>
                </td>
              </tr>



              <tr>
                <td>
                   <h6><b>d.  Sistem gastrointestinals</b></h6>
                   <div class="mb-2">
                                <div>
                                   <label class="col-2" for="">Bibir</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_compos" value="0">
                                        <label class="form-check-label" for="t_022_compos">Lembab</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Kering</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_somnolen" value="2">
                                        <label class="form-check-label" for="t_022_somnolen">Stomatitis</label> 
                                    </div>
                                </div>
                              </div>
                  <div class="mb-2">
                                <div>
                                   <label class="col-2" for="">Tenggorokan</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_compos" value="0">
                                        <label class="form-check-label" for="t_022_compos">Sulit menelan</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Sakit menelan</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_somnolen" value="2">
                                        <label class="form-check-label" for="t_022_somnolen">Normal</label>
                                    </div>
                                </div>
                              </div>
                  <div class="mb-2">
                                <div>
                                   <label class="col-2" for="">Abdomen</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_compos" value="0">
                                        <label class="form-check-label" for="t_022_compos">Kembung</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Acites</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_somnolen" value="2">
                                        <label class="form-check-label" for="t_022_somnolen">Tegang</label> 
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_somnolen" value="2">
                                        <label class="form-check-label" for="t_022_somnolen">Normal</label> 
                                    </div>
                                </div>
                              </div>
                  <div class="mb-2">
                                <div>
                                   <label class="col-2" for="">Nafsu makan</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_compos" value="0">
                                        <label class="form-check-label" for="t_022_compos">Menurun</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Normal, frekuensi</label>
                                        <input type="text" name="" style="width: 100px">x/Hari
                                    </div>
                                </div>
                              </div>
                  <div class="mb-2">
                                <div>
                                   <label class="col-2" for="">Porsi makan</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_compos" value="0">
                                        <label class="form-check-label" for="t_022_compos">Cukup</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Kurang, jumlah</label>
                                        <input type="text" name="" style="width: 100px">Ml/Hari
                                    </div>
                                </div>
                              </div>
                  <div class="mb-2">
                                <div>
                                   <label class="col-2" for="">Minum</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_compos" value="0">
                                        <label class="form-check-label" for="t_022_compos">Cukup</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Kurang</label>
                                    </div>
                                </div>
                              </div>
                  <div class="mb-2">
                                <div>
                                   <label class="col-2" for="">Keluhan</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_compos" value="0">
                                        <label class="form-check-label" for="t_022_compos">Anorexia</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Mual</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Muntah</label>
                                    </div>
                                </div>
                              </div>

                  <div class="mb-2">Riwayat Diet :</div>
                  <div class="mb-2">
                                <div>
                                   <label class="col-2" for="">Terpasang NGT</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_compos" value="0">
                                        <label class="form-check-label" for="t_022_compos">Tidak</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Ya, Ukuran :</label>
                                        <input type="text" name="" style="width: 100px"> Terpasang hari ke :
                                        <input type="text" name="" style="width: 100px">
                                    </div>
                                </div>
                              </div>
                  <div class="mb-2">
                                <div>
                                   <label class="col-2" for="">Tujuan NGT</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_compos" value="0">
                                        <label class="form-check-label" for="t_022_compos">Cuci lambung</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Pemenuhan nutrisi</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Pengosongan lambung</label>
                                    </div>
                                </div>
                              </div>
                  <div class="mb-2">
                                <div>
                                   <label class="col-2" for="">Colostomy</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_compos" value="0">
                                        <label class="form-check-label" for="t_022_compos">Ada</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Tidak, Produksi</label>
                                        <input type="text" name="">
                                    </div>
                                </div>
                              </div>
                  <div class="col-md-10">
                    <div class="row text-align">
                      <div class="col-md-2">
                        <label for="">Lain-lain</label>
                      </div>
                      <div class="col-md-6">
                        <input type="text" class="form-control" id="no_Registration" name="no_Registration" style="width: 700px">
                      </div>
                    </div>
                  </div>

                </td>
              </tr>



              <tr>
                <td>
                  <h6><b>e. Sistem Genetalia dan Eliminasi</b></h6>
                  <div class="mb-2">
                                <div>
                                  <label class="col-2" >BAB</label>
                                  <input type="text" name="" style="width: 100px">x/hari , 
                                   <label class="col-1">Konsistensi</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_compos" value="0">
                                        <label class="form-check-label" for="t_022_compos">Lunak</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Keras</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Cair</label>
                                    </div>
                                </div>
                              </div>
                    <div class="mb-2">
                                <div>
                                   <label class="col-2" for="">Warna</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_compos" value="0">
                                        <label class="form-check-label" for="t_022_compos">Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Hitam</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Merah</label>
                                    </div>
                                </div>
                              </div>
                    <div class="mb-2">
                                <div>
                                   <label class="col-2" for="">Keluhan</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_compos" value="0">
                                        <label class="form-check-label" for="t_022_compos">Kembung</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Sebah</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Konstipasi</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Diare</label>
                                    </div>
                                </div>
                              </div>
                     <div class="mb-2">
                                <div>
                                  <label class="col-2" >Peristaltik usus</label>
                                  <input type="text" name="" style="width: 100px">x/menit ,  
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_compos" value="0">
                                        <label class="form-check-label" for="t_022_compos">Flatus</label>
                                    </div>
                                </div>
                              </div>
                     <div class="mb-2">
                                <div>
                                  <label class="col-2" >BAK</label>
                                  <input type="text" name="" style="width: 100px">x/hari , 
                                   <label class="col-1">Warna</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_compos" value="0">
                                        <label class="form-check-label" for="t_022_compos">Jernih</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Merah</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Kekuningan</label>
                                    </div>
                                </div>
                              </div>
                    <div class="mb-2">
                                <div>
                                   <label class="col-2" for="">Gangguan</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_compos" value="0">
                                        <label class="form-check-label" for="t_022_compos">Incontinentia</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Retensi Urine</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Disuria</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Oliguria</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Nokturia</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Anuria</label>
                                    </div>
                                </div>
                              </div>
                    <div class="mb-2">
                                <div>
                                   <label class="col-2" for="">Kateter Urine</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_compos" value="0">
                                        <label class="form-check-label" for="t_022_compos">Tidak</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Ya, Tanggal pasang :</label>
                                        <input type="date" name="">
                                    </div>
                                </div>
                              </div>
                    <div class="mb-2">
                                <div>
                                   <label class="col-2" for="">Produk Urine</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_compos" value="0">
                                        <label class="form-check-label" for="t_022_compos">Jernih</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Merah</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Keruh</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Kekuningan</label>
                                    </div>
                                </div>
                              </div>
                    <div class="mb-2">
                                <div>
                                   <label class="col-2" for="">Perdarahan uretra</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_compos" value="0">
                                        <label class="form-check-label" for="t_022_compos">Tidak</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Ya</label>
                                    </div>
                                </div>
                              </div>
                    <div class="mb-2">
                                <div>
                                   <label class="col-2" for="">Perdarahan vagina</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_compos" value="0">
                                        <label class="form-check-label" for="t_022_compos">Tidak</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Ya</label>
                                    </div>
                                </div>
                              </div>
                    <div class="col-md-10">
                    <div class="row text-align">
                      <div class="col-md-2">
                        <label for="">Lain-lain</label>
                      </div>
                      <div class="col-md-6">
                        <input type="text" class="form-control" id="no_Registration" name="no_Registration" style="width: 700px">
                      </div>
                    </div>
                  </div>

                </td>
              </tr>



              <tr>
                <td>
                  <h6><b>f. Sistem Integumen dan Maskuloskeletal</b></h6>
                  <div class="mb-2">
                                <div>
                                   <label class="col-3" for="">Kemampuan gerak sendi</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_compos" value="0">
                                        <label class="form-check-label" for="t_022_compos">Bebas</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Terbatas</label>
                                    </div>
                                </div>
                              </div>
                  <div class="mb-2">
                                <div>
                                   <label class="col-3" for="">Kulit</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_compos" value="0">
                                        <label class="form-check-label" for="t_022_compos">Tidak ada luka</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Ada luka, Lokasi :</label>
                                        <input type="text" name="" style="width: 100px"> Kondisi luka :
                                        <input type="text" name="" style="width: 100px">
                                    </div>
                                </div>
                              </div>
                  <div class="mb-2">
                                <div>
                                   <label class="col-3" for="">Patah Tulang</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_compos" value="0">
                                        <label class="form-check-label" for="t_022_compos">Tidak</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Ada, Lokasi :</label>
                                        <input type="text" name="" style="width: 200px">
                                    </div>
                                </div>
                              </div>
                  <div class="mb-2">
                                <div>
                                   <label class="col-3" for="">Deformity</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_compos" value="0">
                                        <label class="form-check-label" for="t_022_compos">Tidak</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Ada, Lokasi :</label>
                                        <input type="text" name="" style="width: 200px">
                                    </div>
                                </div>
                              </div>
                  <div class="mb-2">
                                <div>
                                   <label class="col-3" for="">Tulang Belakang</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_compos" value="0">
                                        <label class="form-check-label" for="t_022_compos">Tidak Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Scoliosis</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Kiposis</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Lordosis</label>
                                    </div>
                                </div>
                              </div>

                    <div class="mb-2">Kekuatan otot :</div>
                    <div class="mb-2">
                                <div>
                                   <label class="col-3" for="">Luka</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_compos" value="0">
                                        <label class="form-check-label" for="t_022_compos">Operasi</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">WSD</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Ulkus</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Dekubitus</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">CAPD</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Double Lumen</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">AV Shunt</label>
                                    </div>
                                </div>
                              </div>
                    <div class="mb-2">
                                   <label class="col-3" for="">Tanda Rahang</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_compos" value="0">
                                        <label class="form-check-label" for="t_022_compos">Kemerahan</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Panas</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Bengkak</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Nyeri</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Fungsiola</label>
                                    </div>
                              </div>
                    <div class="col-md-10">
                    <div class="row text-align">
                      <div class="col-md-2">
                        <label for="">Lain-lain</label>
                      </div>
                      <div class="col-md-6">
                        <input type="text" class="form-control" id="no_Registration" name="no_Registration" style="width: 700px">
                      </div>
                    </div>
                  </div>

                </td>
              </tr>



              <tr>
                <td>
                  <h5><b>II.  MASALAH KEPERAWATAN</b></h5>
                </td>
              </tr>



              <tr>
                <td>
                  <div class="row">
                    <div class="col-6">
                  <div class="mb-1"><b>1.  Respirasi</b></div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">Bersihkan jalan nafas tidak efektif</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">Gangguan pertukaran gas</label>
                  </div>
                  <div class="mb-2">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">Pola nafas tidak efektif</label>
                  </div>
                </div>


                <div class="mb-1"><b>2. Nutrisi & Cairan</b></div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">Hipovolemia</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">Hypervolemia</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">Risiko defisit nutrisi</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">Risiko ketidak seimbangan cairan & elektrolit</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">Diare</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">Menyusui tidak efektif</label>
                  </div>
                  <div class="mb-2">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">Risiko Syok</label>
                  </div>
                </div>


                 <div class="mb-1"><b>3.  Eliminasi</b></div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">Konstipasi</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">Gangguan eliminasi Urine</label>
                  </div>
                  <div class="mb-2">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">Retensi Urine</label>
                  </div>
                </div>


                <div class="mb-1"><b>4. Aktifitas dan istirahat</b></div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">Intoleransi aktifitas</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">Gangguan mobilitas fisik</label>
                  </div>
                  <div class="mb-2">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">Gangguan pola tidur</label>
                  </div>
                </div>


                <div class="mb-1"><b>5. Nyeri dan Kenyamanan</b></div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">Nyeri Akut</label>
                  </div>
                  <div class="mb-2">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">Nyeri Kronis</label>
                  </div>
                </div>
              </div>


                 <div class="col-6">
                 <div class="mb-1"><b>6.  Sirkulasi</b></div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">Penurunan curah jantung</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">Perfusi miocard tidak efektif</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">Perfusi perifer tidak efektif</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">Risiko perfusi cerebral tidak efektif</label>
                  </div>
                  <div class="mb-2">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">Risiko Perdarahan</label>
                  </div>
                </div>


                <div class="mb-1"><b>7. Integritass ego</b></div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">Berduka</label>
                  </div>
                  <div class="mb-2">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">Ancietas</label>
                  </div>
                </div>


                <div class="mb-1"><b>8. Pertumbuhan dan Perkembangan</b></div>
                  <div class="mb-2">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">Gangguan Tumbuh Kembang</label>
                  </div>
                </div>


                <div class="mb-1"><b>9. Kebersihan Diri</b></div>
                  <div class="mb-2">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">Defisit Perawatan Diri</label>
                  </div>
                </div>


                <div class="mb-1"><b>10. Penyuluhan dan Pembelajaran</b></div>
                  <div class="mb-2">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">Defisit Pengetahuan</label>
                  </div>
                </div>


                <div class="mb-1"><b>11. Interaksi Sosial</b></div>
                  <div class="mb-2">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">Komunikasi verbal</label>
                  </div>
                </div>


                <div class="mb-1"><b>12. Keamanan dan Proteksi</b></div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">Risiko cidera</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">Risiko infeksi</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">Gangguan integritas kulit / jaringan</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">Hypotermia</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">Hypertemia</label>
                  </div>
                  <div class="mb-2">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">Lain-lain : </label>
                    <input type="text" name="">
                  </div>
                </div>

              </div>
                </div>


                </td>
              </tr>



              <tr>
                <td><b>Perencanaan pemulangan pasien rumit / Disharge Planning <br>Kriteria pasien yang memerlukan  Disharge Planning</b>
                  <div class="mb-2">
                                <div>
                                   <label class="col-4" for="">Umur > 65 Tahun dengan dimensia</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_compos" value="0">
                                        <label class="form-check-label" for="t_022_compos">Tidak</label>
                                    </div>
                                    
                                </div>
                              </div>
                  <div class="mb-2">
                                   <label class="col-4" for="">Keterbatasan Mobilitas </label>
                                    
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_compos" value="0">
                                        <label class="form-check-label" for="t_022_compos">Tidak</label>
                                    </div>
                              </div>
                  <div class="mb-2">
                                   <label class="col-4" for="">Perawatan atau pengobatan lanjutan </label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_compos" value="0">
                                        <label class="form-check-label" for="t_022_compos">Tidak</label>
                                    </div>
                                    
                              </div>
                  <div class="mb-2">
                                <div>
                                   <label class="col-4" for="">Bantuan untuk melakukan aktifitas sehari-hari </label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_compos" value="0">
                                        <label class="form-check-label" for="t_022_compos">Tidak</label>
                                    </div>
                                    
                                </div>
                              </div>
                  <div class="mb-5">
                                <div>
                                   <label class="col-4" for="">Bantuan pelayanan psikososial </label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_compos" value="0">
                                        <label class="form-check-label" for="t_022_compos">Tidak</label>
                                    </div>
                                    
                                </div>
                              </div>


                  <h6><b>Jika ada salah satu atau lebih jawaban pada yang diatassa maka termasuk pemulangan rumit, maka <br>akan dilanjutkan dengan perencanaan pulang sebagai berikut: </b></h6>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">Perawatan diri / personal higiene </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">Pemantauan pemberian obat </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">Pemantauan Diit </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">Latihan fisik lanjutan </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">Pendampingan tenaga khusus di rumah ( home care )</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">1 Bantuan untuk melakukan aktifitas fisik ( kursi roda, alat bantu jalan )</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">Perawatan luka </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">Lain-lain :</label>
                    <input type="text" name="">
                  </div>

                </td>
              </tr>



              <tr>
                <td>
                  <h5><b>III. RENCANA KEPERAWATAN INTERDISIPLIN </b></h5>
                  <div class="mb-2">
                                   <label class="col-4" for="">Diet dan Nutrisi</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_compos" value="0">
                                        <label class="form-check-label" for="t_022_compos">Tidak</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Ya ,</label>
                                        <input type="text" name="">
                                    </div>
                              </div>
                  <div class="mb-2">
                                   <label class="col-4" for="">Rehabilitasi Medik </label>                      
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_compos" value="0">
                                        <label class="form-check-label" for="t_022_compos">Tidak</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Ya ,</label>
                                        <input type="text" name="">
                                    </div>
                                    
                              </div>
                  <div class="mb-2">
                                   <label class="col-4" for="">Farmasi</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_compos" value="0">
                                        <label class="form-check-label" for="t_022_compos">Tidak</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Ya ,</label>
                                        <input type="text" name="">
                                    </div>
                              </div>
                  <div class="mb-2">
                                   <label class="col-4" for="">Kerohanian</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_compos" value="0">
                                        <label class="form-check-label" for="t_022_compos">Tidak</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Ya ,</label>
                                        <input type="text" name="">
                                    </div>
                              </div>
                  <div class="mb-2">
                                   <label class="col-4" for="">Psikologi</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_compos" value="0">
                                        <label class="form-check-label" for="t_022_compos">Tidak</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Ya ,</label>
                                        <input type="text" name="">
                                    </div>
                              </div>
                  <div class="mb-2">
                                   <label class="col-4" for="">Lain-lain </label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_compos" value="0">
                                        <label class="form-check-label" for="t_022_compos">Tidak</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Ya ,</label>
                                        <input type="text" name="">
                                    </div>
                              </div>
                  <div class="mb-2">
                                   <label class="col-4" for="">Diet dan Nutrisi</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_compos" value="0">
                                        <label class="form-check-label" for="t_022_compos">Tidak</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Ya ,</label>
                                        <input type="text" name="">
                                    </div>
                              </div>
                </td>
              </tr>
          
        </tbody>
      </table>


      <br><br><div style="text-align: right;">
               <div class="mb-3">
                  <label for="alasan" type="text">Surakarta , </label>
                  <input type="date" name="">
                </div>
                <div>Perawat yang mengkaji,</div>

                  <div class="mb-1" >
                    <canvas id="canvas" width="150" height="90" style="border:1px solid #000;"></canvas>
                    <input type="hidden" name="TTD" id="TTD">
                    <br><input type="text" name="">
                      <br><label for="">Ttd & Nama Terang</label>
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
    
  </body>
</html>