<?= $this->extend('page/combine') ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-12 col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4>DATA PENDAFTAR</h4>
            </div>
            <div class="card-body">

                <form action="/matakuliah/update" method="post">
                    <div class="form-group">
                        <label>Nama Mata Kuliah</label>
                        <input type="text" class="form-control" value="<?= $mata_kuliah['nama_mk'] ?>" name="nama_mk">
                    </div>

                    <div class="form-group">
                        <label>Semester</label>
                        <input type="number" class="form-control" value="<?= $mata_kuliah['semester'] ?>" name="semester">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status">
                            <option value="1">Dibuka</option>
                            <option value="0">Ditutup</option>
                        </select>
                    </div>
                    <input type="hidden" name="id_mk" value="<?= $mata_kuliah['id_mk'] ?>">
                    <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                </form>
            </div>
        </div>

    </div>

</div>

<?= $this->endSection() ?>