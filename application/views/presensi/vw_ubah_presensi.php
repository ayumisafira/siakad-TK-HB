<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?> </h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Ubah Data Presensi
                </div>
                <div class="card-body">
                    <form action="<?= base_url('Presensi/update'); ?>" method="POST">
                    <input type="hidden" name="id" value="<?= $presensi['id_presensi']; ?>">
                    <div class="form-group">
                            <label for="nama">NIS</label>
                            <input type="text" name="nis" value="<?= $presensi['nis']; ?>" class="form-control" id="nis" placeholder="NIS">
                        </div>
                        <!-- <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" value="<?= $presensi['nama']; ?>" class="form-control" id="nama" placeholder="Nama">
                        </div> -->
                        <div class="form-group">
                            <label for="nama">Hari</label>
                            <input type="text" name="hari" value="<?= $presensi['hari']; ?>" class="form-control" id="hari" placeholder="Hari">
                        </div>
                        <div class="form-group">
                            <label for="nama">Tanggal</label>
                            <input type="date" name="tanggal" value="<?= $presensi['tanggal']; ?>" class="form-control" id="tanggal" placeholder="Tanggal">
                        </div>
                        <div class="form-group">
                            <label for="nama">Keterangan</label>
                            <input type="text" name="keterangan" value="<?= $presensi['keterangan']; ?>" class="form-control" id="keterangan" placeholder="Keterangan">
                        </div>
                        
                        <a href="<?= base_url('Presensi') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Presensi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>