<?= $this->extend('layout/page_layout') ?>

<?= $this->section('css'); ?>
    <!-- DataTables -->
    <link rel="stylesheet" href="<?=base_url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')?>">
<?= $this->endSection(); ?>

<?= $this->section('sidebar_menu')?>
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="<?=site_url('Home')?>" class="nav-link active">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="<?=site_url('Input')?>" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>Input</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?=site_url('Search')?>" class="nav-link">
                    <i class="nav-icon fas fa-search"></i>
                    <p>Pencarian</p>
                </a>
            </li>
        </ul>
    </nav>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= site_url('Home/index'); ?>">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
            
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered table-striped" id="tabel_data_perizinan">
                            <thead class="table-dark">
                                <tr>
                                    <th>Jenis Perizinan</th>
                                    <th>Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i=0; $i<count($izin); $i++):?>
                                <tr>
                                    <td><?= $izin[$i]['nama_perizinan']." (".$izin[$i]['id_jenis_perizinan'].")"; ?></td>
                                    <td><?= $total[$i]; ?></td>
                                </tr>
                                <?php endfor; ?>
                            </tbody>
                            <tfoot class="table-dark">
                                <tr>
                                    <th>Jenis Perizinan</th>
                                    <th>Jumlah</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
<?= $this->endSection() ?>

<?= $this->section('script'); ?>
    <!-- DataTables  & Plugins -->
    <script src="<?= base_url('assets/plugins/datatables/jquery.dataTables.min.js')?>"></script>
    <script src="<?= base_url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')?>"></script>
    <script src="<?= base_url('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')?>"></script>
    <script src="<?= base_url('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')?>"></script>
    <script src="<?= base_url('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')?>"></script>
    <script src="<?= base_url('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')?>"></script>
    <script src="<?= base_url('assets/plugins/jszip/jszip.min.js')?>"></script>
    <script src="<?= base_url('assets/plugins/pdfmake/pdfmake.min.js')?>"></script>
    <script src="<?= base_url('assets/plugins/pdfmake/vfs_fonts.js')?>"></script>
    <script src="<?= base_url('assets/plugins/datatables-buttons/js/buttons.html5.min.js')?>"></script>
    <script src="<?= base_url('assets/plugins/datatables-buttons/js/buttons.print.min.js')?>"></script>
    <script src="<?= base_url('assets/plugins/datatables-buttons/js/buttons.colVis.min.js')?>"></script>
    <script>
        $(function () {
            $("#tabel_data_perizinan").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false
            }).buttons().container().appendTo('#tabel_data_perizinan_wrapper .col-md-6:eq(0)');
        })
    </script>
<?= $this->endSection(); ?>