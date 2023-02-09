<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?> </h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Detail Nilai Siswa
                </div>
                <div class="card-body">
                    <h2 class="card-title"><?= $nilai['nama']; ?></h2>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $nilai['nis']; ?></h6>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $nilai['semester']; ?></h6>
                    <div class="row">
                        <div class="col-md-4">Agama</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $nilai['agama']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Emosional</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $nilai['emosional']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Motorik</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $nilai['motorik']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Kognitif</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $nilai['kognitif']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Seni</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $nilai['seni']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Bahasa</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $nilai['bahasa']; ?></div>
                    </div>
                </div>
                <div class="card-footer justify-content-center">
                    <a href="<?= base_url('Nilai') ?>" class="btn btn-danger">Tutup</a>
                </div>
            </div>
        </div>
    </div>
</div>