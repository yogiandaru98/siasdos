<?= $this->extend('page/combine') ?>

<?= $this->section('content') ?>

<link rel="stylesheet" href="stisla/dist/assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Data Pendaftar</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="tabel1" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th class="text-center">
                                    No
                                </th>
                                <th>Nama</th>
                                <th>NPM</th>

                                <th>Status</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $index = 1;
                            foreach ($pendaftar as $item) : ?>
                                <tr>
                                    <td><?= $index; ?></td>
                                    <td><?= $item['nama']; ?></td>
                                    <td><?= $item['NPM'] ?></td>
                                    <td><?= $item['status'] ?></td>
                                    <td class="align-middle text-center">
                                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Detail" href="/data_pendaftar/view/<?= $item['id_user'] ?>" class="btn btn-icon btn-primary mr-5"><i class="fas fa-eye"></i></a>
                                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" href="/data_pendaftar/edit/<?= $item['id_user'] ?>" class="btn btn-icon btn-warning mr-5 ml-3"><i class="fas fa-edit"></i></a>
                                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" href="/data_pendaftar/delete/<?= $item['id_user'] ?>" class="btn btn-icon btn-danger mr-5 ml-3"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            <?php $index++;
                            endforeach; ?>

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- JS Libraies -->


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.colVis.min.js"></script>
<!-- Page Specific JS File -->
<script>
    $(document).ready(function() {
        $('#tabel1').DataTable({
            dom: 'Bfrtip',
            buttons: [{
                    extend: 'print',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                'colvis'
            ],
            columnDefs: [{
                targets: -5,
                visible: true
            }]
        });
    });
</script>

<!-- Template JS File -->
<script src="stisla/dist/assets/js/scripts.js"></script>
<script src="stisla/dist/assets/js/custom.js"></script>
<?= $this->endSection() ?>