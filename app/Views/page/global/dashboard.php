<?= $this->extend('page/combine') ?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-12 col-md-6 col-lg-6">
        <?php foreach ($pengumuman as $item):?>
            <div class="card">
            <div class="card-body">
                <h2><?= $item['judul'] ?></h2>
                <?= $item['isi'] ?>
            </div>
        </div>
        <?php endforeach;?>
    </div>

</div>
</div>
<?= $this->endSection() ?>