<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?> </h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Detail Komentar Siswa
                </div>
                <div class="card-body">
                    <h2 class="card-title"><?= $komentar['nama']; ?></h2>
                    <div class="row">
                        <div class="col-md-4">NIS</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $komentar['nis']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Semester</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $komentar['semester']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Komentar</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $komentar['komentar']; ?></div>
                    </div>
                </div>
                <div class="card-footer justify-content-center">
                    <a href="<?= base_url('Mahasiswa') ?>" class="btn btn-danger">Tutup</a>
                </div>
            </div>
        </div>
    </div>
</div>