<?= $this->extend('Layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container my-1">
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-danger" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>


    <a class="btn btn-outline-dark" href="data" role="button">
    <i class="bi bi-arrow-left" style=" width:30; height:30"> Back</i>
</a>



    <div class="row mb-3" style="text-align:center">
        <div class="col">
            <h3>Pengkajian Awal Keperawatan dan Medis Pasien Neonatus 2</h3>
        </div>
    </div>
    <div class="row mb-1">
        <div class="col-md-6"></div>
        <div class="col-md-6">
            <form action="" method="post" autocomplete="off">
                <div class="input-group" style="width: 300px;">
                    <input type="text" class="form-control border-dark" placeholder="Masukkan Nama Pasien" name="keyword">
                    <button class="btn btn-dark" type="submit" name="submit">Cari</button>
                </div>
            </form>
        </div>
    </div>
    <table class="table table-bordered my-3" style="border: 1px; color: black; width: 100%;">
        <thead>
            <tr style="text-align:center">
                <th scope="col">No</th>
                <th scope="col">Body ID</th>
                <th scope="col">Register</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Ruang Rawat</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1 + (3 * ($currentPage - 1));
            foreach ($data as $data) : ?>
                <tr style="vertical-align:middle; text-align:center">
                    <td><?= $i++; ?></td>
                    <td><?= $data['BODY_ID']; ?></td>
                    <td><?= $data['NO_REGISTRATION']; ?></td>
                    <td><?= $data['THENAME']; ?></td>
                    <td><?= $data['GENDER']; ?></td>
                    <td><?= $data['CLASS_ROOM_ID']; ?></td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <a class="btn btn-warning my-3" href="<?= site_url('formulir/detail2/') . $data['id']; ?>" role="button">Detail</a>

                            <a class="btn btn-info my-3" href="<?= site_url('formulir/update2/') . $data['id']; ?>" role="button">Update</a>

                            <a class="btn btn-danger my-3" href="<?= site_url('formulir/delete2/') . $data['id']; ?>" role="button" onclick="javascript: return confirm('Yakin akan menghapus data?')">Delete</a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?= $pager->links('assessment_info', 'pagination') ?>
</div>
<?= $this->endSection(); ?>