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

                <form action="" method="post">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" value="udin">
                    </div>
                    <div class="form-group">
                        <label>NPM</label>
                        <input type="number" class="form-control" value="20185130">
                    </div>
                    <div class="form-group">
                        <label>Kelas</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>IPK</label>
                        <input type="number" class="form-control" step="0.1">
                    </div>
                    <div class="form-group">
                        <label>Semester</label>
                        <input type="number" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Pilihan 1</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Pilihan 2</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>PIlihan 3</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Transkrip</label>
                        <input type="file" name="transkrip" id="transkrip">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                </form>
            </div>
        </div>

    </div>

</div>

<?= $this->endSection() ?>