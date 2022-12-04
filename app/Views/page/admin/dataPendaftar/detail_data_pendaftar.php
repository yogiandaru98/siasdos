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
                    <input type="text" class="form-control" value="udin" disabled>
                </div>
                <div class="form-group">
                    <label>NPM</label>
                    <input type="number" class="form-control" value="20185130" disabled>
                </div>
                <div class="form-group">
                    <label>Kelas</label>
                    <input type="text" class="form-control" value="B" disabled>
                </div>
                <div class="form-group">
                    <label>IPK</label>
                    <input type="number" class="form-control" step="0.1" value="3.3" disabled>
                </div>
                <div class="form-group">
                    <label>Semester</label>
                    <input type="number" class="form-control" value="3" disabled>
                </div>
                <div class="form-group">
                    <label>Pilihan 1</label>
                    <input type="text" class="form-control" value="RPL" disabled>
                </div>
                <div class="form-group">
                    <label>Pilihan 2</label>
                    <input type="text" class="form-control" value="Web Lanjut" disabled>
                </div>
                <div class="form-group">
                    <label>PIlihan 3</label>
                    <input type="text" class="form-control" value="Diskrit" disabled>
                </div>
                <div class="form-group">
                    <label>Transkrip</label>
                    <br>
                    <a href="pdf#"><i class="fa fa-file-download"></i> Download</a>
                </div>

                <div class="form-group">
                    <label>Status</label>
                    <select class="form-control"  disabled>
                        <option selected>Diproses</option>
                        <option>Diterima di RPL</option>
                        <option>Diterima di RPL</option>
                        <option>Diterima di RPL</option>
                        <option>Ditolak</option>
                    </select>
                </div>
            </div>
        </div>

    </div>

</div>

<?= $this->endSection() ?>
