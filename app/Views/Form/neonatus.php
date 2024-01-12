<?= $this->extend('Layout/template'); ?>

<?= $this->section('content'); ?>


<div class="container">

    <a class="btn btn-outline-dark" href="input" role="button">
    <i class="bi bi-arrow-left"> Back</i>
</a>

    <form action="<?= base_url('formulir/simpan') ?>" method="post" autocomplete="off" class="mt-3" style="font-family: 'Times New Roman';">
        <?= csrf_field(); ?>
        <input type="hidden" id="FORM" name="FORM" value="F1">
        <table class="table table-bordered mb-0" style="border: 1px; color: black;width: 100%;">
            <tbody>
                <tr>
                    <td style="width: 50%; text-align: center; vertical-align: middle;">
                        <h3><b>PENGKAJIAN AWAL KEPERAWATAN <br>DAN MEDIS PASIEN <br></b></h3>
                    </td>
                    <td style="width: 50%;">
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="NO_REGISTRATION">Nomor Rekam Medis</label>
                            </div>
                            <div class="col-md-8">
                                : <select name="NO_REGISTRATION" id="NO_REGISTRATION" style="width: 250px; height: 30PX;" required>
                                    <option value="" selected disabled>--Pilih Nomor Rekam Medis--</option>
                                    <?php foreach ($Biodata as $value) : ?>
                                        <option value="<?= $value['NO_REGISTRATION']; ?>"><?= $value['NO_REGISTRATION']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3">
                                <label for="THENAME">Nama Lengkap</label>
                                <br><label for="ALLOANAMNESIS_CONTACT">Nama Keluarga</label>
                            </div>
                            <div class="col-md-9">
                                : <input type="text" id="THENAME" name="THENAME" style="width: 150px;" readonly>,
                                <input type="text" id="ALLOANAMNESIS_CONTACT" name="ALLOANAMNESIS_CONTACT" style="width: 150px;" readonly>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3">
                                <label for="DATE_OF_BIRTH">Tanggal Lahir</label>
                            </div>
                            <div class="col-md-9">
                                : <input type="date" id="DATE_OF_BIRTH" name="DATE_OF_BIRTH" style="width: 100px;" readonly>,
                                <label for="GENDER">Jenis Kelamin : </label>
                                <input type="text" id="GENDER" name="GENDER" style="width: 150px;" readonly>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3">
                                <label for="CLASS_ROOM_ID">Ruangan</label>
                            </div>
                            <div class="col-md-7">
                                : <input type="text" id="CLASS_ROOM_ID" name="CLASS_ROOM_ID" style="width: 100px;" readonly>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="V_01">Tanggal Operasi</label>
                            </div>
                            <div class="col-md-7">
                                : <input type="date" id="V_01" name="V_01" style="width: 100px;">
                            </div>
                        </div>
                    </td>
                    <td rowspan="2" style="vertical-align: middle;">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="V_02">Dr. Anastesi <br>Yang Menerangkan</label>
                            </div>
                            <div class="col-md-6">
                                : <input type="text" id="V_02" name="V_02" style="width: 200px;">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="V_03">Diagnosa</label>
                            </div>
                            <div class="col-md-7">
                                : <input type="text" id="V_03" name="V_03" style="width: 200px;">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="V_04">R/Tindakan</label>
                            </div>
                            <div class="col-md-7">
                                : <input type="text" id="V_04" name="V_04" style="width: 200px;">
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="V_05">Dr. Operator</label>
                            </div>
                            <div class="col-md-6">
                                : <input type="text" id="V_05" name="V_05" style="width: 200px;">
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
       <table class="table table-bordered " style="border: 1px solid black;">
            <tbody>
                <tr>
                    <td rowspan="2">Catatan: Formulir digunakan untuk pasien neonatus dan harus diisi lengkap dalam waktu 24 jam pertama pasien masuk ruang awat inap.</td>
                </tr>

            </tbody>
        </table>


        <form>


            <div class="mb-3">
                <div class="row">
                    <div class="col-4">
                        <div class="col-md-12">
                            <label for="">Tanggal masuk ruangan</label>
                            : <input type="date" id="in_date" name="in_date" readonly>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="col-md-10">
                            <label for="">Pukul</label>
                            : <input type="time" id="in_date" name="in_date" readonly>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="col-md-12">
                            <label for="">Ruang Rawat</label>
                            : <input type="text" id="clinic_id" name="clinic_id" style="width: 30%" readonly>
                        </div>
                    </div>
                </div>
            </div>



            <div class="mb-5">
                <label class="col-2" for="">Sumber Data</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="t_01" id="t_01_pasien" value="0">
                    <label class="form-check-label" for="t_01_pasien">Pasien</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="t_01" id="t_01_keluarga" value="1">
                    <label class="form-check-label" for="t_01_keluarga">Keluarga</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="t_01" id="t_01_lainlain" value="2">
                    <label class="form-check-label" for="t_01_lainlain">Lain-lain</label>
                    <input type="text" id="v_01" name="v_01">
                </div>
            </div>


            <div class="mb-1">
                <label><b>IDENTITAS PENANGGUNG JAWAB (KELUARGA)</b></label>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label><b>Ibu</b></label>
                        </div>
                    </div>
                    <div class="row mb-3">
                                <div class="col-md-4">
                                  <label for="">Umur saat ini</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_02" name="v_02" style="width: 250px" autocomplete="off">
                                </div>
                            </div>
          <div class="row mb-3">
                                <div class="col-md-4">
                                  <label for="">Pekerjaan</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_03" name="v_03" style="width: 250px" autocomplete="off">
                                </div>
                            </div>
          <div class="row mb-3">
                                <div class="col-md-4">
                                  <label for="">Pendidikan</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_04" name="v_04" style="width: 250px" autocomplete="off">
                                </div>
                            </div>
          <div class="row mb-3">
                                <div class="col-md-4">
                                  <label for="">Alamat</label>
                                </div>
                                <div class="col-md-6">
                                  <textarea class="form-control" id="v_05" name="v_05" rows="5" cols="3" autocomplete="off"></textarea>
                                </div>
                            </div>
          <div class="row mb-3">
                                <div class="col-md-4">
                                  <label for="">No. Telepon</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_06" name="v_06" style="width: 250px" autocomplete="off">
                                </div>
                            </div>
          <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="">Penghasilan/bulan</label>
                                </div>
                                <div class="col-md-1">
                                <div class="input-group flex-nowrap" style="width: 250px">
                                    <span class="input-group-text" id="addon-wrapping">Rp</span>
                                    <input type="text" id="v_07" name="v_07" class="form-control" autocomplete="off">
                                  </div>
                                </div>
                                </div>
          <div class="row mb-5">
                                <div class="col-md-4">
                                  <label for="">Agama</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_08" name="v_08" style="width: 250px" autocomplete="off">
                                </div>
                            </div>
                </div>
                <div class="col-6">
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for=""><b>Ayah</b></label>
                        </div>
                    </div>
                    <div class="row mb-3">
                                <div class="col-md-4">
                                  <label for="">Umur saat ini</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_09" name="v_09" style="width: 250px" autocomplete="off">
                                </div>
                            </div>
          <div class="row mb-3">
                                <div class="col-md-4">
                                  <label for="">Pekerjaan</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_10" name="v_10" style="width: 250px" autocomplete="off">
                                </div>
                            </div>
          <div class="row mb-3">
                                <div class="col-md-4">
                                  <label for="">Pendidikan</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_11" name="v_11" style="width: 250px" autocomplete="off">
                                </div>
                            </div>
          <div class="row mb-3">
                                <div class="col-md-4">
                                  <label for="">Alamat</label>
                                </div>
                                <div class="col-md-6">
                                  <textarea class="form-control" id="v_12" name="v_12" rows="5" cols="3" autocomplete="off"></textarea>
                                </div>
                            </div>
          <div class="row mb-3">
                                <div class="col-md-4">
                                  <label for="">No. Telepon</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_13" name="v_13" style="width: 250px" autocomplete="off">
                                </div>
                            </div>
          <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="">Penghasilan/bulan</label>
                                </div>
                                <div class="col-md-1">
                                <div class="input-group flex-nowrap" style="width: 250px">
                                    <span class="input-group-text" id="addon-wrapping">Rp</span>
                                    <input type="text" id="v_14" name="v_14" class="form-control" autocomplete="off">
                                  </div>
                                </div>
                                </div>
          <div class="row mb-5">
                                <div class="col-md-4">
                                  <label for="">Agama</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_15" name="v_15" style="width: 250px" autocomplete="off">
                                </div>
                            </div>
                </div>
            </div>


            <div class="mb-3">
                <div class="row mb-3">
                    <div class="col-md-2">
                        <label for=""><b>KELUHAN UTAMA</b></label>
                    </div>
                    <div>
                        <textarea class="form-control" id="v_16" name="v_16" rows="5" cols="7"></textarea>
                    </div>
                </div>
            </div>




            <div class="mb-3">
                <div class="row mb-3">
                    <div class="col-md-5">
                        <label for=""><b>RIWAYAT PENYAKIT SEKARANG</b></label>
                    </div>
                    <div>
                        <textarea class="form-control" id="v_17" name="v_17" rows="5" cols="7"></textarea>
                    </div>
                </div>



                <div class="mb-1">
                    <label><b>RIWAYAT KESEHATAN YANG LALU:</b></label>
                </div>
                <div class="mb-3">
                    <div>
                        <label class="col-3" for="">a. Riwayat MRS sebelumnya ? </label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="t_02" id="t_02_tidak" value="0">
                            <label class="form-check-label" for="t_02_tidak">Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="t_02" id="t_02_ya" value="1">
                            <label class="form-check-label" for="t_02_ya">Ya, lamanya:</label>
                            <input type="text" id="v_18" name="v_18" style="width: 50px"> hr,
                            alasan: <input type="text" id="v_19" name="v_19" style="width: 200px">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div>
                        <label class="col-3" for="">b. Riwayat dioperasi ?</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="t_03" id="t_03_tidak" value="0">
                            <label class="form-check-label" for="t_03_tidak">Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="t_03" id="t_03_ya" value="1">
                            <label class="form-check-label" for="t_03_ya">Ya, jenisnya:</label>
                            <input type="text" id="v_20" name="v_20" style="width: 150px">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-3">
                            <label class="col-10" for="">c. Riwayat kelainan bawaan ?</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_04" id="t_04_tidak ada gangguan" value="0">
                                <label class="form-check-label" for="t_04_tidak ada gangguan">Tidak ada gangguan</label>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_04" id="t_04_ada,yaitu" value="1">
                                <label class="form-check-label" for="t_04_ada,yaitu">Ada, yaitu : </label>
                            </div>
                            <div class="mb-1 form-check">
                                <input type="checkbox" class="form-check-input" name="t_05" id="t_05_down syndrom">
                                <label class="form-check-label" for="t_05_down syndrom">Down syndrome, </label>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-1 form-check">
                                <input type="checkbox" class="form-check-input" name="t_06" id="t_06_cacat fisik">
                                <label class="form-check-label" for="t_06_cacat fisik">Cacat fisik, </label>
                            </div>
                            <div class="mb-1 form-check">
                                <input type="checkbox" class="form-check-input" name="t_07" id="t_07_autis">
                                <label class="form-check-label" for="t_07_autis">Autis, </label>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-1 form-check">
                                <input type="checkbox" class="form-check-input" name="t_08" id="t_08_hiperaktif">
                                <label class="form-check-label" for="t_08_hiperaktif">Hiperaktif, </label>
                            </div>
                            <div class="mb-1 form-check">
                                <input type="checkbox" class="form-check-input" name="t_09" id="t_09_dll">
                                <label class="form-check-label" for="t_09_dll">Dll </label>
                                <input type="text" id="v_21" name="v_21" style="width: 150px">
                            </div>
                        </div>
                    </div>
                </div>




                <div class="mb-1">
                    <label for="alasan" type="text"><b>RIWAYAT MINUM OBAT </b></label>
                    <label for="alasan" type="text">(termasuk obat yang masih digunakan saat ini) :</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="t_010" id="t_010_tidak" value="0">
                    <label class="form-check-label" for="t_010_tidak">Tidak ada</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="t_010" id="t_010_ada" value="1">
                    <label class="form-check-label" for="t_010_ada">Ada, nama obat dan dosis </label>
                    <input type="text" id="v_22" name="v_22" style="width: 300px">
                </div>




                <div class="mb-1">
                    <label for="alasan" type="text"><b>RIWAYAT ALERGI :</b></label>
                </div>
                <div class="mb-5">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="t_011" id="t_011_tidak" value="0">
                        <label class="form-check-label" for="t_011_tidak">Tidak ada</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="t_011" id="t_011_ada" value="1">
                        <label class="form-check-label" for="t_011_ada">Ada, sebutkan</label>
                        <input type="text" id="v_23" name="v_23" style="width: 300px">
                    </div>
                </div>





                <div class="mb-1">
                    <label for="alasan" type="text"><b>RIWAYAT EKONOMI, PSIKOSOSIAL DAN SPIRITUAL</b></label>
                </div>
                <div class="mb-1">
                    <label for="alasan" type="text"><b>Status Ekonomi</b></label>
                </div>
                <div class="mb-2">
                    <div>
                        <label class="col-3" for="">Jaminan kesehatan yang digunakan </label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="t_012" id="t_012_mandiri" value="0">
                            <label class="form-check-label" for="t_012_mandiri">Mandiri</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="t_012" id="t_012_bpjs" value="1">
                            <label class="form-check-label" for="t_012_bpjs">BPJS</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="t_012" id="t_012_lainnya" value="2">
                            <label class="form-check-label" for="t_012_lainnya">Lainnya</label>
                            <input type="text" id="v_24" name="v_24" style="width: 100px">
                        </div>
                    </div>
                </div>




                <div class="mb-1">
                    <label for="alasan" type="text"><b>Status Psikologis</b></label>
                </div>
                <div class="mb-2">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="t_013" id="t_013_tenang,kooperatif" value="0">
                        <label class="form-check-label" for="t_013_tenang,kooperatif">Tenang, kooperatif</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="t_013" id="t_013_gelisah,murung,cengeng" value="1">
                        <label class="form-check-label" for="t_013_gelisah,murung,cengeng">Gelisah, murung, cengeng </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="t_013" id="t_013_ketakutan,agresif,hiperaktif" value="1">
                        <label class="form-check-label" for="t_013_ketakutan,agresif,hiperaktif">Ketakutan, agresif, hiperaktif</label>
                    </div>
                </div>




                <div class="mb-1">
                    <label for="alasan" type="text"><b>Status Sosial</b></label>
                </div>
                <div class="mb-2">
                    <div>
                        <label class="col-2" for="">Tempat tinggal</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="t_014" id="t_014_rumah" value="0">
                            <label class="form-check-label" for="t_014_rumah">Rumah</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="t_014" id="t_014_panti" value="1">
                            <label class="form-check-label" for="t_014_panti">Panti</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="t_014" id="t_014_lainlain" value="2">
                            <label class="form-check-label" for="t_014_lainlain">Lain-lain, sebutkan</label>
                            <input type="text" id="v_25" name="v_25" style="width: 100px">
                        </div>
                    </div>
                </div>




                <div class="mb-2">
                    <div>
                        <label class="col-2" for="">Diasuh/dirawat oleh </label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="t_015" id="t_015_kandung" value="0">
                            <label class="form-check-label" for="t_015_kandung">Orangtua kandung</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="t_015" id="t_015_tiri" value="1">
                            <label class="form-check-label" for="t_015_tiri">Bapak/ibu tiri</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="t_015" id="t_015_anggotalain" value="2">
                            <label class="form-check-label" for="t_015_anggotalain">Anggota keluarga lain</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="t_015" id="t_015_lain" value="3">
                            <label class="form-check-label" for="t_015_lain">Lain-lain</label>
                            <input type="text" id="v_26" name="v_26" style="width: 100px">
                        </div>
                    </div>
                </div>



                <div class="mb-1">
                    <label for="alasan" type="text"><b>Spiritual</b></label>
                </div>
                <div class="mb-2">
                    <div>
                        <label class="col-2" for="">Perlu rohanian </label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="t_016" id="t_016_tidak" value="0">
                            <label class="form-check-label" for="t_016_tidak">Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="t_016" id="t_016_ya" value="1">
                            <label class="form-check-label" for="t_016_ya">Ya, Jelaskan </label>
                            <input type="text" id="v_27" name="v_27" style="width: 100px">
                        </div>
                    </div>
                </div>



                <div class="mb-1">
                    <label for="alasan" type="text"><b>Kultural</b></label>
                </div>
                <div class="row mb-3">
                                    <div class="col-md-10">
                              <div class="row text-align">
                                <div class="col-md-7">
                                  <label for="">Nilai-nilai kepercayaan/keyakinan tertentu terkait kondisi pasien</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_28" name="v_28" style="width: 500px" autocomplete="off">
                                </div>
                              </div>
                            </div>
                        </div>



                </tbody>
                </table>

        <div class="d-grid gap-2 mt-3 mb-3">
            <input class="btn btn-primary" type="submit" name="submit" value="Simpan">
        </div>
        <canvas id="signatureCanvas" width="200" height="100"></canvas>
        <input type="hidden" name="signature_data" id="signatureDataInput" required>
</div>
<script>
    $('#NO_REGISTRATION').on('change', (event) => {
        getBiodata(event.target.value).then(Biodata => {
            $('#THENAME').val(Biodata.THENAME);
            $('#ALLOANAMNESIS_CONTACT').val(Biodata.ALLOANAMNESIS_CONTACT);
            $('#DATE_OF_BIRTH').val(Biodata.DATE_OF_BIRTH);
            $('#GENDER').val(Biodata.GENDER);
            $('#CLASS_ROOM_ID').val(Biodata.CLASS_ROOM_ID);
            $('#date_of_birth').val(Biodata.DATE_OF_BIRTH);
            $('#No_Registration').val(Biodata.NO_REGISTRATION);
        });
    });

    async function getBiodata(BODY_ID) {
        let response = await fetch('/api/databiodata/show/' + BODY_ID)
        let data = await response.json();

        return data;
    }
</script>
<script>
    $(function() {
        fungsi1_disabled();
        $("#T_02_saya").click(fungsi1_disabled);
    });
    $(function() {
        fungsi1_enable();
        $("#T_02_input").click(fungsi1_enable);
    });

    function fungsi1_disabled() {
        if (this.click) {
            $("#V_09, #V_10").attr("disabled", true);
            $("#V_09, #V_10").val("");
        } else {
            $("#V_09, #V_10").removeAttr("disabled");
        }
    }

    function fungsi1_enable() {
        $("#V_09, #V_10").attr("disabled", true);
        if (this.click) {
            $("#V_09, #V_10").removeAttr("disabled");
            $("#V_09").focus();
        } else {
            $("#V_09, #V_10").attr("disabled", true);
        }
    }
</script>
<!-- Tambahkan JavaScript untuk menghandle tanda tangan di canvas -->
<script>
    // Mengambil elemen canvas dan konteksnya
    var canvas = document.getElementById("signatureCanvas");
    var ctx = canvas.getContext("2d");

    // Variabel untuk menandai apakah pengguna sedang menggambar
    var drawing = false;

    // Mengatur warna dan ketebalan garis
    ctx.strokeStyle = "#000"; // warna hitam
    ctx.lineWidth = 2;

    // Fungsi untuk memulai gambar saat tombol mouse ditekan
    function startDrawing(e) {
        drawing = true;
        draw(e);
    }

    // Fungsi untuk menggambar pada canvas
    function draw(e) {
        if (!drawing) return;

        // Mendapatkan posisi mouse relatif terhadap elemen canvas
        var x = e.clientX - canvas.offsetLeft;
        var y = e.clientY - canvas.offsetTop;

        // Memulai path atau melanjutkan path yang ada
        ctx.beginPath();

        // Pindahkan pena ke posisi saat ini
        ctx.moveTo(x, y);

        // Atur garis ke posisi baru
        ctx.lineTo(x, y);

        // Gambar garis
        ctx.stroke();
    }

    // Fungsi untuk mengakhiri gambar saat tombol mouse dilepas
    function stopDrawing() {
        drawing = false;
        // Setelah tanda tangan selesai, Anda dapat mengambil data gambar
        // menggunakan canvas.toDataURL() dan menyimpannya atau mengirimkannya ke server.
    }

    // Menambahkan event listener untuk memulai dan menghentikan gambar
    canvas.addEventListener("mousedown", startDrawing);
    canvas.addEventListener("mousemove", draw);
    canvas.addEventListener("mouseup", stopDrawing);
    canvas.addEventListener("mouseout", stopDrawing);
</script>
<script>
    // Contoh sederhana, gunakan library khusus untuk implementasi yang lebih canggih
    const canvas = document.getElementById('signatureCanvas');
    const ctx = canvas.getContext('2d');
    const signatureDataInput = document.getElementById('signatureDataInput');

    // Implementasi logika tanda tangan di sini
    // Misalnya, menggunakan event mouse untuk menggambar pada canvas

    // Setelah menggambar, simpan data tanda tangan ke input tersembunyi
    signatureDataInput.value = canvas.toDataURL();
</script>
<script>
    $(function() {
        var sig = $('#TTD').signature();
        $('#disable').click(function() {
            var disable = $(this).text() === 'Disable';
            $(this).text(disable ? 'Enable' : 'Disable');
            sig.signature(disable ? 'disable' : 'enable');
        });
        $('#clear').click(function() {
            sig.signature('clear');
        });
        $('#json').click(function() {
            alert(sig.signature('toJSON'));
        });
        $('#svg').click(function() {
            alert(sig.signature('toSVG'));
        });
    });
</script>
<script>
    $(function() {
        var sig = $('#TTD_1').signature();
        $('#disable').click(function() {
            var disable = $(this).text() === 'Disable';
            $(this).text(disable ? 'Enable' : 'Disable');
            sig.signature(disable ? 'disable' : 'enable');
        });
        $('#clear').click(function() {
            sig.signature('clear');
        });
        $('#json').click(function() {
            alert(sig.signature('toJSON'));
        });
        $('#svg').click(function() {
            alert(sig.signature('toSVG'));
        });
    });
</script>
<script>
    $(function() {
        var sig = $('#TTD_2').signature();
        $('#disable').click(function() {
            var disable = $(this).text() === 'Disable';
            $(this).text(disable ? 'Enable' : 'Disable');
            sig.signature(disable ? 'disable' : 'enable');
        });
        $('#clear').click(function() {
            sig.signature('clear');
        });
        $('#json').click(function() {
            alert(sig.signature('toJSON'));
        });
        $('#svg').click(function() {
            alert(sig.signature('toSVG'));
        });
    });
</script>
<script>
    $(function() {
        var sig = $('#TTD_3').signature();
        $('#disable').click(function() {
            var disable = $(this).text() === 'Disable';
            $(this).text(disable ? 'Enable' : 'Disable');
            sig.signature(disable ? 'disable' : 'enable');
        });
        $('#clear').click(function() {
            sig.signature('clear');
        });
        $('#json').click(function() {
            alert(sig.signature('toJSON'));
        });
        $('#svg').click(function() {
            alert(sig.signature('toSVG'));
        });
    });
</script>
<?= $this->endSection(); ?>