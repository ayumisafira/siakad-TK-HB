<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?> </h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Tambah Data Mata Pelajaran
                </div>
                <div class="card-body">
                    <form action="<?= base_url('Mapel/upload'); ?>" method="POST">
                        <div class="form-group">
                            <label for="nama">Nama Mata Pelajaran</label>
                            <input type="text" name="mapel" class="form-control" id="mapel" placeholder="Nama Mata Pelajaran">
                        </div>
                        <div class="form-group">
                            <label for="semester">Semester</label>
                            <select name="id_semester" id="id_semester" class="form-control">
								<option value="1">Ganjil</option>
                                <option value="2">Genap</option>
							</select>
                        </div>
                        <a href="<?= base_url('Mapel') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Mata Pelajaran</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>