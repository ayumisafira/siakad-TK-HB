<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?> </h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Detail Guru
                </div>
                <div class="card-body">
                    <h2 class="card-title"><?= $guru['nama']; ?></h2>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $guru['email']; ?></h6>
                    <div class="row">
                        <div class="col-md-4">Username</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $guru['username']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Jenis Kelamin</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $guru['jenis_kelamin']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Agama</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $guru['agama']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Tempat Lahir</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $guru['tempat_lahir']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Tanggal Lahir</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $guru['tanggal_lahir']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Pendidikan</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $guru['pendidikan']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Alamat</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $guru['alamat']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">No HP</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $guru['no_hp']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Foto</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $guru['foto']; ?></div>
                    </div>
                </div>
                <div class="card-footer justify-content-center">
                    <a href="<?= base_url('Guru') ?>" class="btn btn-danger">Tutup</a>
                </div>
            </div>
        </div>
    </div>
</div>