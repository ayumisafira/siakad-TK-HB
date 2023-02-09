<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?> </h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Tambah Data Kegiatan
                </div>
                <div class="card-body">
                    <form action="<?= base_url('Kegiatan/upload'); ?>" method="POST">
                        <div class="form-group">
                            <label for="kegiatan">Nama Kegiatan</label>
                            <input type="text" name="kegiatan" class="form-control" id="kegiatan" placeholder="Nama Kegiatan">
                        </div>
                        <div class="form-group">
                            <label for="pengeluaran">Pengeluaran</label>
                            <input type="number" name="pengeluaran" class="form-control" id="pengeluaran" placeholder="Nominal Pengeluaran">
                        </div>
                        <a href="<?= base_url('Kegiatan') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Kegiatan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>