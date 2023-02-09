<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?> </h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Ubah Data Kegiatan
                </div>
                <div class="card-body">
                    <form action="<?= base_url('Kegiatan/update'); ?>" method="POST">
                    <input type="hidden" name="id_kegiatan" value="<?= $kegiatan['id_kegiatan']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama Kegiatan</label>
                            <input type="text" name="kegiatan" value="<?= $kegiatan['kegiatan']; ?>" class="form-control" id="kegiatan" placeholder="Nama Kegiatan">
                        </div>
                        <div class="form-group">
                            <label for="nama">Pengeluaran</label>
                            <input type="number" name="pengeluaran" value="<?= $kegiatan['pengeluaran']; ?>" class="form-control" id="pengeluaran" placeholder="Jumlah Pengeluaran">
                        </div>
                        <a href="<?= base_url('Kegiatan') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Kegiatan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>