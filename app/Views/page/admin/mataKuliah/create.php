<?= $this->extend('page/combine') ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-12 col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4>DATA PENDAFTAR</h4>
            </div>
            <div class="card-body">

                <form action="" method="post">
                    <div class="form-group">
                        <label>Nama Mata Kuliah</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Semester</label>
                        <input type="number" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control">
                            <option selected value="1">Dibuka</option>
                            <option value="0">Ditutup</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                </form>
            </div>
        </div>

    </div>

</div>

<?= $this->endSection() ?>