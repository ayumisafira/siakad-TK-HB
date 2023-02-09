
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?> </h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Tambah Data Guru
					</div>
                <div class="card-body">
                    <form action="<?= base_url('Guru/upload'); ?>" method="POST">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="nama">Username</label>
                            <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="nama">Jenis Kelamin</label>
                            <input type="text" name="jenis_kelamin" class="form-control" id="jenis_kelamin" placeholder="Jenis Kelamin">
                        </div>
                        <div class="form-group">
                            <label for="nama">Agama</label>
                            <input type="text" name="agama" class="form-control" id="agama" placeholder="Agama">
                        </div>
                        <div class="form-group">
                            <label for="nama">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir">
                        </div>
                        <div class="form-group">
                            <label for="nama">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" placeholder="Tanggal Lahir">
                        </div>
                        <div class="form-group">
                            <label for="nama">Pendidikan</label>
                            <input type="text" name="pendidikan" class="form-control" id="pendidikan" placeholder="Pendidikan">
                        </div>
                        <div class="form-group">
                            <label for="nama">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat">
                        </div>
                        <div class="form-group">
                            <label for="nama">No HP</label>
                            <input type="text" name="no_hp" class="form-control" id="no_hp" placeholder="No HP">
                        </div>
                        <div class="form-group">
                            <label for="nama">Email</label>
                            <input type="text" name="email" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="nama">Foto</label>
                            <input type="text" name="foto" class="form-control" id="foto" placeholder="Foto">
                        </div>
                        <a href="<?= base_url('Guru') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Guru</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
