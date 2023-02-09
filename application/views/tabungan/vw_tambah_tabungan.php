<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?> </h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Tambah Data Tabungan
                </div>
                <div class="card-body">
                    <form action="<?= base_url('Tabungan/upload'); ?>" method="POST">
                        <div class="form-group">
                            <label for="nama">Nama Siswa</label>
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Siswa">
                        </div>
                        <div class="form-group">
                            <label for="nama">Bulan</label>
                            <input type="text" name="bulan" class="form-control" id="nim" placeholder="Bulan">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nominal</label>
                            <input type="number" name="nominal" class="form-control" id="nominal" placeholder="Nominal">
                        </div>
                        <div class="form-group">
                            <label for="nama">Keterangan</label>
                            <input type="text" name="keterangan" class="form-control" id="keterangan" placeholder="Jenis Kelamin">
                        </div>
                        <a href="<?= base_url('Tabungan') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Tabungan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>