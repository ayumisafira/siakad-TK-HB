<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?> </h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Tambah Data Komentar
                </div>
                <div class="card-body">
                    <form action="<?= base_url('Komentar/upload'); ?>" method="POST">
                        <div class="form-group">
                            <label for="nama">Nama Siswa</label>
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Siswa">
                        </div>
                        <div class="form-group">
                            <label for="nama">NIS</label>
                            <input type="text" name="nis" class="form-control" id="nis" placeholder="NIS">
                        </div>
                        <div class="form-group">
                            <label for="nama">Komentar</label>
                            <input type="text area" name="komentar" class="form-control" id="komentar" placeholder="Komentar">
                        </div>
                        <div class="form-group">
                            <label for="nama">Semester</label>
                            <input type="text" name="semester" class="form-control" id="semester" placeholder="Semester">
                        </div>
                        <a href="<?= base_url('Komentar') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Komentar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>