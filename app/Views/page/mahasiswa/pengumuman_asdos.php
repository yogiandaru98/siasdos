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
                                <th>Semester</th>
                                <th>Status</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-middle text-center">
                                    1
                                </td>
                                <td class="align-middle">Create a mobile app</td>
                                <td class="align-middle">
                                    2017051062
                                </td>
                                <td class="align-middle">
                                    3
                                </td>
                                <td>
                                    Asdos Matematika
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