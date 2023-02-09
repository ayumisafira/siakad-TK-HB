<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
        <div class="row">
            <div class="col-md-6"><a href="<?= base_url(); ?>Spp/tambah" class="btn btn-info mb-2">Tambah Spp</a></div>
            <div class="col-md-12">
            <table class="table">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Nama</td>
                            <td>Bulan</td>
                            <td>Nominal</td>
                            <td>Keterangan</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($spp as $us) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $us['nama'] ?></td>
                                <td><?= $us['bulan'] ?></td>
                                <td><?= $us['nominal'] ?></td>
                                <td><?= $us['keterangan'] ?></td>
                                <td>
                                    <a href="<?= base_url('Spp/hapus/') .$us['id_spp']; ?>" class="badge badge-danger">Hapus</a>
                                    <a href="<?= base_url('Spp/edit/') .$us['id_spp']; ?>" class="badge badge-warning">Edit</a>
                                    <a href="<?= base_url('Spp/detail/') .$us['id_spp']; ?>" class="badge badge-info">Detail</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
