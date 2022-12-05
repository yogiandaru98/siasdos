<?= $this->extend('page/combine') ?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-12 col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4>Pendaftaran</h4>
            </div>
            <div class="card-body">
                <!-- jika sudah terdaftar maka form tidak muncul -->
                <?php if ($pendaftaran > 0) : ?>
                    <div class="col-12 mb-4">
                        <div class="hero align-items-center bg-success text-white">
                            <div class="hero-inner text-center">
                                <h2>Anda Sudah terdaftar</h2>
                                <p class="lead">Jalani proses seleksi dengan maksimal</p>
                                <div class="mt-4">
                                    <a href="#" class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="far fa-file-alt"></i> Pengumuman Asdos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php else : ?>
                    <form action="/pendaftaran/store" method="post" enctype="multipart/form-data"'>
                        <div class="form-group">
                            <label>Kelas</label>
                            <input type="text" class="form-control" name="kelas">
                        </div>
                        <div class="form-group">
                            <label>IPK</label>
                            <input type="number" class="form-control" step="0.1" name="ipk">
                        </div>
                        <div class="form-group">
                            <label>Semester</label>
                            <input type="number" class="form-control" name="semester">
                        </div>
                        <div class="form-group">
                            <label>Pilihan 1</label>
                            <select class="form-control select2" name="pilihan1">
                                <?php foreach ($mata_kuliah as $item): ?>
                                    <option value="<?= $item['id_mk'] ?>"><?= $item['nama_mk'] ?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Pilihan 2</label>
                            <select class="form-control select2" name="pilihan2">
                                <?php foreach ($mata_kuliah as $item): ?>
                                    <option value="<?= $item['id_mk'] ?>"><?= $item['nama_mk'] ?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Pilihan 3</label>
                            <select class="form-control select2" name="pilihan3">
                                <?php foreach ($mata_kuliah as $item): ?>
                                    <option value="<?= $item['id_mk'] ?>"><?= $item['nama_mk'] ?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file"  class="custom-file-input" id="site-logo" name="file">
                                <label class="custom-file-label">Upload Transkrip</label>


                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                    </form>
                <?php endif; ?>
            </div>
        </div>

    </div>

</div>

<!-- General JS Scripts -->

<?= $this->endSection() ?>