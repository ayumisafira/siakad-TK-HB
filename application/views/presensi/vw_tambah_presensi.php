<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?> </h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Tambah Data Presensi
                </div>
                <div class="card-body">
                    <form action="<?= base_url('Presensi/upload'); ?>" method="POST">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="nama">Hari</label>
                            <input type="text" name="nim" class="form-control" id="nim" placeholder="NIM">
                        </div>
                        <div class="form-group">
                            <label for="nama">Tanggal</label>
                            <input type="text" name="jenis_kelamin" class="form-control" id="jenis_kelamin" placeholder="Jenis Kelamin">
                        </div>
                        <div class="form-group">
                            <label for="nama">Keterangan</label>
                            <input type="text" name="email" class="form-control" id="email" placeholder="Email">
                        </div>
                        <a href="<?= base_url('Presensi') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Presensi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>