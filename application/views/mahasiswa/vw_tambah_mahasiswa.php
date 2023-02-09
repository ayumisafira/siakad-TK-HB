<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?> </h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Tambah Data Mahasiswa
                </div>
                <div class="card-body">
                    <form action="<?= base_url('Mahasiswa/upload'); ?>" method="POST">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="nama">NIM</label>
                            <input type="text" name="nim" class="form-control" id="nim" placeholder="NIM">
                        </div>
                        <div class="form-group">
                            <label for="nama">Jenis Kelamin</label>
                            <input type="text" name="jenis_kelamin" class="form-control" id="jenis_kelamin" placeholder="Jenis Kelamin">
                        </div>
                        <div class="form-group">
                            <label for="nama">Email</label>
                            <input type="text" name="email" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="nama">Prodi</label>
                            <input type="text" name="prodi" class="form-control" id="prodi" placeholder="Prodi">
                        </div>
                        <div class="form-group">
                            <label for="nama">Asal Sekolah</label>
                            <input type="text" name="asal_sekolah" class="form-control" id="asal_sekolah" placeholder="Asal Sekolah">
                        </div>
                        <div class="form-group">
                            <label for="nama">No HP</label>
                            <input type="text" name="no_hp" class="form-control" id="no_hp" placeholder="No HP">
                        </div>
                        <div class="form-group">
                            <label for="nama">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat">
                        </div>
                        <a href="<?= base_url('Mahasiswa') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Mahasiswa</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
