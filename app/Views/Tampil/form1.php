<?= $this->extend('Layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container my-1">
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-danger" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>


    <a href="data" class="btn btn-outline-dark"> ← Back</a>


    <div class="row mb-3" style="text-align:center">
        <div class="col">
            <h3>Pengkajian Awal Keperawatan dan Medis Pasien Neonatus</h3>
        </div>
    </div>
    <div class="row mb-1">
        <div class="col-md-6"></div>
        <div class="col-md-6">
            <form action="" method="post" autocomplete="off">
                <div class="input-group" style="width: 300px;">
                    <input type="text" class="form-control border-dark" placeholder="Masukkan Nama Pasien" name="keyword" style="width: ">
                    <button class="btn btn-dark" type="submit" name="submit">Cari</button>
                </div>
            </form>
        </div>
    </div>
    <table class="table table-bordered my-3" style="border: 1px; color: black; width: 100%; vertical-align:middle; text-align:center">
        <thead>
            <tr>
                <th>No</th>
                <th>Body ID</th>
                <th>Nomor Rekam Medis</th>
                <th>Nama Lengkap</th>
                <th>Nama Keluarga</th>
                <th>Jenis Kelamin</th>
                <th>Ruangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1 + (3 * ($currentPage - 1));
            foreach ($data as $data) : ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $data['BODY_ID']; ?></td>
                    <td><?= $data['NO_REGISTRATION']; ?></td>
                    <td><?= $data['THENAME']; ?></td>
                    <td><?= $data['ALLOANAMNESIS_CONTACT']; ?></td>
                    <td><?= $data['GENDER']; ?></td>
                    <td><?= $data['CLASS_ROOM_ID']; ?></td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <a class="btn btn-warning my-3" href="<?= site_url('formulir/detail1/') . $data['id']; ?>" role="button">Detail</a>
                            <a class="btn btn-info my-3" href="<?= site_url('formulir/update1/') . $data['id']; ?>" role="button">Update</i></a>
                            <a class="btn btn-danger my-3" href="<?= site_url('formulir/delete1/') . $data['id']; ?>" role="button" onclick="javascript: return confirm('Yakin akan menghapus data?')">Delete</a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?= $pager->links('assessment_info', 'pagination') ?>
</div>
<?= $this->endSection(); ?>