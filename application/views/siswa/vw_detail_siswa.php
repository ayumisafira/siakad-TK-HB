<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?> </h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Detail Siswa
                </div>
                <div class="card-body">
                    <h2 class="card-title"><?= $siswa['nama']; ?></h2>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $siswa['nis']; ?></h6>
                    <div class="row">
                        <div class="col-md-4">NIS</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $siswa['nis']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Username</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $siswa['username']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Kelas</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $siswa['id_kelas']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Nama</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $siswa['nama']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Jenis Kelamin</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $siswa['jenis_kelamin']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Agama</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $siswa['agama']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Tempat Lahir</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $siswa['tempat_lahir']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Tanggal Lahir</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $siswa['tanggal_lahir']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Alamat</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $siswa['alamat']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Nama Ayah</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $siswa['nama_ayah']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Nama Ibu</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $siswa['nama_ibu']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">No HP</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $siswa['no_hp']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Foto</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $siswa['foto']; ?></div>
                    </div>
                </div>
                <div class="card-footer justify-content-center">
                    <a href="<?= base_url('Siswa') ?>" class="btn btn-danger">Tutup</a>
                </div>
            </div>
        </div>
    </div>
</div>