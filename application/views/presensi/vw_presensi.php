<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
        <div class="row">
            <div class="col-md-6"><a href="<?= base_url(); ?>Presensi/tambah" class="btn btn-info mb-2">Tambah Presensi</a></div>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>NIS</td>
                            <td>Nama</td>
                            <td>Hari</td>
                            <td>Tanggal</td>
                            <td>Keterangan</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($presensi as $us) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $us['nis'] ?></td>
                                <td><?= $us['nama'] ?></td>
                                <td><?= $us['hari'] ?></td>
                                <td><?= $us['tanggal'] ?></td>
                                <td><?= $us['keterangan'] ?></td>
                                <td>
                                    <a href="<?= base_url('Presensi/hapus/') .$us['id_presensi']; ?>" class="badge badge-danger">Hapus</a>
                                    <a href="<?= base_url('Presensi/edit/') .$us['id_presensi']; ?>" class="badge badge-warning">Edit</a>
                                    <a href="<?= base_url('Presensi/detail/') .$us['id_presensi']; ?>" class="badge badge-info">Detail</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
