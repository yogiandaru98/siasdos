<?= $this->extend('page/combine') ?>

<?= $this->section('content') ?>

<link rel="stylesheet" href="stisla/dist/assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Data Matakuliah</h4>
                
            </div>
            <div class="card-body">
                <a href="" class="btn btn-outline-primary mb-3"><i class="bi bi-plus-lg"></i> Tambah Mata Kuliah</a>
                <div class="table-responsive">
                    <table id="tabel1" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th class="text-center">
                                    No
                                </th>
                                <th>Mata Kuliah</th>
                                <th>Semester</th>
                                <th>Status</th>

                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-middle text-center">
                                    1
                                </td>
                                <td class="align-middle">RPL</td>
                                <td class="align-middle">
                                    3
                                </td>
                                <td>
                                    Dibuka
                                </td>
                                <td class="align-middle text-center">
                                    <form action=" " method="post">
                                        <?= csrf_field() ?>
                                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Detail" href="#" class="btn btn-icon btn-primary mr-5"><i class="fas fa-eye"></i></a>
                                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" href="#" class="btn btn-icon btn-warning mr-5 ml-3"><i class="fas fa-edit"></i></a>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" type="submit" class="btn btn-icon btn-danger mr-5 ml-3 fas fa-trash" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');"><i class="bi bi-trash"></i></button>
                                    </form>
                                </td>
                            </tr>

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