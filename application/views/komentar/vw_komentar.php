<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
        <div class="row">
            <div class="col-md-6"><a href="<?= base_url(); ?>Komentar/tambah" class="btn btn-info mb-2">Tambah Komentar</a></div>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>NIS</td>
                            <td>Nama</td>
                            <td>Semester</td>
                            <td>Komentar</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($komentar as $us) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $us['nis'] ?></td>
                                <td><?= $us['nama'] ?></td>
                                <td><?= $us['semester'] ?></td>
                                <td><?= $us['komentar'] ?></td>
                                <td>
                                    <a href="<?= base_url('Komentar/hapus/') .$us['id_komentar']; ?>" class="badge badge-danger">Hapus</a>
                                    <a href="<?= base_url('Komentar/edit/') .$us['id_komentar']; ?>" class="badge badge-warning">Edit</a>
                                    <a href="<?= base_url('Komentar/detail/') .$us['id_komentar']; ?>" class="badge badge-info">Detail</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
