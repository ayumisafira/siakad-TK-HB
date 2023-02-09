<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
        <div class="row">
            <div class="col-md-6"><a href="<?= base_url(); ?>Mapel/tambah" class="btn btn-info mb-2">Tambah Mata Pelajaran</a></div>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Mata Pelajaran</td>
                            <td>Semester</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($mapel as $us) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $us['mapel'] ?></td>
                                <td><?= $us['semester'] ?></td>
                                <td>
                                    <a href="<?= base_url('Mapel/hapus/') .$us['id_mapel']; ?>" class="badge badge-danger">Hapus</a>
                                    <a href="<?= base_url('Mapel/edit/') .$us['id_mapel']; ?>" class="badge badge-warning">Edit</a>
                                    <a href="<?= base_url('Mapel/detail/') .$us['id_mapel']; ?>" class="badge badge-info">Detail</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
