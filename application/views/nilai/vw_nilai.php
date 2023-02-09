<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
        <div class="row">
            <div class="col-md-6"><a href="<?= base_url(); ?>Mahasiswa/tambah" class="btn btn-info mb-2">Tambah Mahasiswa</a></div>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>NIS</td>
                            <td>Nama</td>
                            <td>Semester</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($nilai as $us) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $us['nis'] ?></td>
                                <td><?= $us['nama'] ?></td>
                                <td><?= $us['semester'] ?></td>
                                <td>
                                    <a href="<?= base_url('Nilai/hapus/') .$us['id_nilai']; ?>" class="badge badge-danger">Hapus</a>
                                    <a href="<?= base_url('Nilai/edit/') .$us['id_nilai']; ?>" class="badge badge-warning">Edit</a>
                                    <a href="<?= base_url('Nilai/detail/') .$us['id_nilai']; ?>" class="badge badge-info">Detail</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
