<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?> </h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Ubah Data Nilai Siswa
                </div>
                <div class="card-body">
                    <form action="<?= base_url('Nilai/update'); ?>" method="POST">
                    <input type="hidden" name="id" value="<?= $nilai['id_nilai']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" value="<?= $nilai['nama']; ?>" class="form-control" id="nama" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="nama">NIS</label>
                            <input type="text" name="nim" value="<?= $nilai['nis']; ?>" class="form-control" id="nim" placeholder="NIM">
                        </div>
                        <div class="form-group">
                            <label for="nama">Semester</label>
                            <input type="text" name="semester" value="<?= $nilai['semester']; ?>" class="form-control" id="jenis_kelamin" placeholder="Jenis Kelamin">
                        </div>
                        <div class="form-group">
                            <label for="nama">Agama</label>
                            <input type="text" name="email"  value="<?= $nilai['agama']; ?>" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="nama">Emosional</label>
                            <input type="text" name="prodi" value="<?= $nilai['emosional']; ?>" class="form-control" id="prodi" placeholder="Prodi">
                        </div>
                        <div class="form-group">
                            <label for="nama">Motorik</label>
                            <input type="text" name="asal_sekolah" value="<?= $nilai['motorik']; ?>" class="form-control" id="asal_sekolah" placeholder="Asal Sekolah">
                        </div>
                        <div class="form-group">
                            <label for="nama">Kognitif</label>
                            <input type="text" name="asal_sekolah" value="<?= $nilai['kognitif']; ?>" class="form-control" id="asal_sekolah" placeholder="Asal Sekolah">
                        </div>
                        <div class="form-group">
                            <label for="nama">Seni</label>
                            <input type="text" name="asal_sekolah" value="<?= $nilai['seni']; ?>" class="form-control" id="asal_sekolah" placeholder="Asal Sekolah">
                        </div>
                        <div class="form-group">
                            <label for="nama">Bahasa</label>
                            <input type="text" name="asal_sekolah" value="<?= $nilai['bahasa']; ?>" class="form-control" id="asal_sekolah" placeholder="Asal Sekolah">
                        </div>
                        <a href="<?= base_url('Nilai') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Nilai</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>