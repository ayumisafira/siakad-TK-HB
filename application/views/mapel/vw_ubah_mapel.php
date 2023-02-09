<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?> </h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Ubah Data Mata Pelajaran
                </div>
                <div class="card-body">
                    <form action="<?= base_url('Mapel/update'); ?>" method="POST">
                    <input type="hidden" name="id" value="<?= $mapel['id_mapel']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama Mata Pelajaran</label>
                            <input type="text" name="nama" value="<?= $mapel['mapel']; ?>" class="form-control" id="mapel" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="nama">Semester</label>
                            <select name="id_semester" id="id_semester" class="form-control">
								<option value="1">Ganjil</option>
                                <option value="2">Genap</option>
							</select>
                        </div>
                        <a href="<?= base_url('Mapel') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Mata Pelajaran</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>