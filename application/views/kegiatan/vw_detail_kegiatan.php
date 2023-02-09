<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?> </h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Detail Kegiata
                </div>
                <div class="card-body">
                    <h2 class="card-title"><?= $kegiatan['kegiatan']; ?></h2>
                    <div class="row">
                        <div class="col-md-4">Nama Kegiatan</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $kegiatan['kegiatan']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Pengeluaran</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $kegiatan['pengeluaran']; ?></div>
                    </div>
                    
                </div>
                <div class="card-footer justify-content-center">
                    <a href="<?= base_url('Kegiatan') ?>" class="btn btn-danger">Tutup</a>
                </div>
            </div>
        </div>
    </div>
</div>