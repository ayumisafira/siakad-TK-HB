<div class="container-fluid">
<h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
        <div class="row">
            <div class="col-md-6"><a href="<?= base_url(); ?>Guru/tambah" class="btn btn-info mb-2">Tambah Guru</a></div>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Foto</td> 
                            <td>Nama</td>
                            <td>Jenis Kelamin</td>
                            <!-- <td>Agama</td> -->
                            <td>Tempat Lahir</td>
                            <td>Tanggal Lahir</td>
                            <td>Pendidikan</td>
                            <!-- <td>Alamat</td> -->
                            <td>No Hp</td>
                            <td>Email</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($guru as $us) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><img src="<?= base_url('assets/img/guru/') . $us['foto']; ?>" style="width:100px" class="img-thumbnail"></td>
                                <td><?= $us['nama'] ?></td>
                                <td><?= $us['jenis_kelamin'] ?></td>
                                <!-- <td><?= $us['agama'] ?></td> -->
                                <td><?= $us['tempat_lahir'] ?></td>
                                <td><?= $us['tanggal_lahir'] ?></td>
                                <td><?= $us['pendidikan'] ?></td>
                                <!-- <td><?= $us['alamat'] ?></td> -->
                                <td><?= $us['no_hp'] ?></td>
                                <td><?= $us['email'] ?></td>
                                <td>
                                    <a href="<?= base_url('Guru/hapus/') .$us['id_guru']; ?>" class="badge badge-danger">Hapus</a>
                                    <a href="<?= base_url('Guru/edit/') .$us['id_guru']; ?>" class="badge badge-warning">Edit</a>
                                    <a href="<?= base_url('Guru/detail/') .$us['id_guru']; ?>" class="badge badge-info">Detail</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
