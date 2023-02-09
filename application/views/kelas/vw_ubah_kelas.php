<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?> </h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Ubah Data Kelas
                </div>
                <div class="card-body">
                    <form action="<?= base_url('Kelas/update'); ?>" method="POST">
                    <input type="hidden" name="id_kelas" value="<?= $kelas['id_kelas']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama Kelas</label>
                            <input type="text" name="nama_kelas" value="<?= $kelas['nama_kelas']; ?>" class="form-control" id="nama_kelas" placeholder="Nama Kelas">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Guru</label>
                            <?php foreach ($data as $p) : ?>
								<option value="<?= $p['id_guru']; ?>"><?= $p['nama']; ?></option>
							<?php endforeach; ?>
                        </div>
                        <div class="form-group">
                            <label for="nama">Semester</label>
                            <select name="id_semester" id="id_semester" class="form-control">
								<option value="1">Ganjil</option>
                                <option value="2">Genap</option>
							</select>
                        </div>
                        <a href="<?= base_url('Kelas') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Kelas</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>