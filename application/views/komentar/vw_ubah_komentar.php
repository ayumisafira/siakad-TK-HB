<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?> </h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Ubah Data Komentar
                </div>
                <div class="card-body">
                    <form action="<?= base_url('Komentar/update'); ?>" method="POST">
                    <input type="hidden" name="id" value="<?= $komentar['id_komentar']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" value="<?= $komentar['nama']; ?>" class="form-control" id="nama" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="nama">NIS</label>
                            <input type="text" name="nis" value="<?= $komentar['nis']; ?>" class="form-control" id="nis" placeholder="NIS">
                        </div>
                        <div class="form-group">
                            <label for="nama">Komentar</label>
                            <input type="text" name="Komentar" value="<?= $komentar['komentar']; ?>" class="form-control" id="komentar" placeholder="Komentar">
                        </div>
                        <div class="form-group">
                            <label for="nama">Semester</label>
                            <input type="text" name="semester"  value="<?= $komentar['semester']; ?>" class="form-control" id="semester" placeholder="Semester">
                        </div>
                        <a href="<?= base_url('Komentar') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Komentar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>