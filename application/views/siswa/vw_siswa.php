<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
        <div class="row">
            <div class="col-md-6"><a href="<?= base_url(); ?>Siswa/tambah" class="btn btn-info mb-2">Tambah Siswa</a></div> 
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Nama</td>
                            <td>NIS</td>
                            <td>Kelas</td>
                            <td>Jenis Kelamin</td>
                            <td>Agama</td>
                            <td>Tempat Lahir</td>
                            <td>Tanggal Lahir</td>
                            <td>Alamat</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($siswa as $us) : ?>
                            <tr>
                                 <td><?= $i; ?></td>
                                <td><?= $us['nama'] ?></td>
                                <td><?= $us['nis'] ?></td>
                                <td><?= $us['id_kelas'] ?></td>
                                <td><?= $us['jenis_kelamin'] ?></td>
                                <td><?= $us['agama'] ?></td>
                                <td><?= $us['tempat_lahir'] ?></td>
                                <td><?= $us['tanggal_lahir'] ?></td>
                                <td><?= $us['alamat'] ?></td>

                                <td>
                                    <a href="<?= base_url('Siswa/hapus/') .$us['nis']; ?>" class="badge badge-danger">Hapus</a>
                                    <a href="<?= base_url('Siswa/edit/') .$us['nis']; ?>" class="badge badge-warning">Edit</a>
                                    <a href="<?= base_url('Siswa/detail/') .$us['nis']; ?>" class="badge badge-info">Detail</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
