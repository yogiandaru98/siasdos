<?= $this->extend('page/combine') ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-12 col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4>DATA PENDAFTAR</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" value="<?= $pendaftar[0]['nama'] ?>" disabled>
                </div>
                <div class="form-group">
                    <label>NPM</label>
                    <input type="number" class="form-control" value="<?= $pendaftar[0]['NPM'] ?>" disabled>
                </div>
                <div class="form-group">
                    <label>Kelas</label>
                    <input type="text" class="form-control" value="<?= $pendaftar[0]['kelas'] ?>" disabled>
                </div>
                <div class="form-group">
                    <label>IPK</label>
                    <input type="number" class="form-control" step="0.1" value="<?= $pendaftar[0]['IPK'] ?>" disabled>
                </div>
                <div class="form-group">
                    <label>Semester</label>
                    <input type="number" class="form-control" value="<?= $pendaftar[0]['semester'] ?>" disabled>
                </div>
                <div class="form-group">
                    <label>Pilihan 1</label>
                    <input type="text" class="form-control" value="<?= $pendaftar[0]['nama_mk'] ?>" disabled>
                </div>
                <div class="form-group">
                    <label>Pilihan 2</label>
                    <input type="text" class="form-control" value="<?= $pendaftar[1]['nama_mk'] ?>" disabled>
                </div>
                <div class="form-group">
                    <label>PIlihan 3</label>
                    <input type="text" class="form-control" value="<?= $pendaftar[2]['nama_mk'] ?>" disabled>
                </div>
                <div class="form-group">
                    <label>Transkrip</label>
                    <br>
                    <a href="<?= $pendaftar[0]['transkrip'] ?>"><i class="fa fa-file-download"></i> Download</a>
                </div>

                <div class="form-group">
                    <label>Status</label>
                    <select class="form-control"  disabled>
                        <option <?= ($pendaftar[0]['status'] == 'diproses') ? 'selected':''  ?>>Diproses</option>
                        <option>Diterima</option>
                        <option>Diterima</option>
                        <option>Diterima</option>
                        <option <?= ($pendaftar[2]['status'] == 'ditolak') ? 'selected':''  ?>>Ditolak</option>
                    </select>
                </div>
            </div>
        </div>

    </div>

</div>

<?= $this->endSection() ?>
