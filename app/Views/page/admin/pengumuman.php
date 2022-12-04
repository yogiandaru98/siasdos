<?= $this->extend('page/combine') ?>

<?= $this->section('content') ?>

<link rel="stylesheet" href="stisla/dist/assets/modules/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="stisla/dist/assets/modules/codemirror/lib/codemirror.css">
  <link rel="stylesheet" href="stisla/dist/assets/modules/codemirror/theme/duotone-dark.css">
  <link rel="stylesheet" href="stisla/dist/assets/modules/jquery-selectric/selectric.css">
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Buat Pengumuman</h4>
            </div>
            <div class="card-body">
                <form action="/pengumuman/store" method="post">
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" name="judul">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Isi</label>
                        <div class="col-sm-12 col-md-7">
                            <textarea name="isi" class="summernote-simple"></textarea>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <button class="btn btn-primary">Publish</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="stisla/dist/assets/modules/summernote/summernote-bs4.js"></script>
    <script src="stisla/dist/assets/modules/codemirror/lib/codemirror.js"></script>
    <script src="stisla/dist/assets/modules/codemirror/mode/javascript/javascript.js"></script>
    <script src="stisla/dist/assets/modules/jquery-selectric/jquery.selectric.min.js"></script>

<?= $this->endSection() ?>