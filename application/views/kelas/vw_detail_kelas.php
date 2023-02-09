<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?> </h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Detail Kelas
                </div>
                <div class="card-body">
                    <h2 class="card-title"><?= $kelas['nama_kelas']; ?></h2>
                    <div class="row">
                        <div class="col-md-4">Guru Pengampu</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $kelas['nama']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Semester</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $kelas['semester']; ?></div>
                    </div>
                </div>
                <div class="card-footer justify-content-center">
                    <a href="<?= base_url('Kelas') ?>" class="btn btn-danger">Tutup</a>
                </div>
            </div>
        </div>
    </div>
</div>