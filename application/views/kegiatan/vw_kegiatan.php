<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
        <div class="row">
            <div class="col-md-6"><a href="<?= base_url(); ?>Kegiatan/tambah" class="btn btn-info mb-2">Tambah Kegiatan</a></div>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Kegiatan</td>
                            <td>Pengeluaran</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($kegiatan as $us) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $us['kegiatan'] ?></td>
                                <td><?= $us['pengeluaran'] ?></td>
                                <td>
                                    <a href="<?= base_url('Kegiatan/hapus/') .$us['id_kegiatan']; ?>" class="badge badge-danger">Hapus</a>
                                    <a href="<?= base_url('Kegiatan/edit/') .$us['id_kegiatan']; ?>" class="badge badge-warning">Edit</a>
                                    <a href="<?= base_url('Kegiatan/detail/') .$us['id_kegiatan']; ?>" class="badge badge-info">Detail</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
