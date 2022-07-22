<?= $this->extend('layout/page_layout') ?>

<?= $this->section('css'); ?>
    <!-- DataTables -->
    <link rel="stylesheet" href="<?=base_url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')?>">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?=base_url('assets/plugins/daterangepicker/daterangepicker.css')?>">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?=base_url('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')?>">

    <style>
        i.text-hover:hover {
            opacity: 80%;
        }
    </style>
<?= $this->endSection(); ?>

<?= $this->section('sidebar_menu') ?>
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="<?= site_url('Home') ?>" class="nav-link ">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="<?= site_url('Input') ?>" class="nav-link ">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>Input</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= site_url('Search') ?>" class="nav-link active">
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
                        <h1 class="m-0">Pencarian Data</h1>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Pencarian</li>
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
                <!-- general form elements -->
                <div class="card card-body card-primary">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="jenis_perizinan">Jenis Perizinan</label>
                            <select name="jenisperizinan" class="custom-select rounded-0" id="jenis_perizinan">
                                <option value="none">None</option>
                                <?php foreach ($izin as $keyizin) : ?>
                                    <option value="<?= $keyizin['id_jenis_perizinan'] ?>"><?= $keyizin['nama_perizinan'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <!-- Date range -->
                        <div class="form-group col-md-6">
                            <label>Rentang Tanggal:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                    <i class="far fa-calendar-alt"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control float-right" id="daterange" name="daterange" pattern="[0-9]{4}/[0-9]{2}/[0-9]{2} - [0-9]{4}/[0-9]{2}/[0-9]{2}" placeholder="yyyy/mm/dd - yyyy/mm/dd">
                            </div>
                        </div>
                        <!-- /.input group -->
                        <div class="col">
                            <button id="search-button" class="btn btn-primary">Proses <span class="spinner-border spinner-border-sm text-light ml-1 d-none" id="spinner"></span></button>
                        </div>
                    </div>
                    <!-- /.form group -->
                </div>
                <!-- /.card-body -->
                <!-- Tabel -->
                <div id="tabelout"></div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
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
    <!-- daterangepicker -->
    <script src="<?= base_url('assets/plugins/moment/moment.min.js'); ?>"></script>
    <script src="<?= base_url('assets/plugins/daterangepicker/daterangepicker.js'); ?>"></script>
    <!-- InputMask -->
    <script src="<?= base_url('assets/plugins/inputmask/jquery.inputmask.min.js'); ?>"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?= base_url('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')?>"></script>

    <script>
        // load DataTable
        let tabel = "<?= site_url('Search/getData/none');?>";
        $('#tabelout').load(tabel);
        $(function () {
            //Date range picker
            $('#daterange').daterangepicker({
                autoUpdateInput: false,
                locale: {
                    CancelLabel: 'Clear',
                    format: 'YYYY/MM/DD'
                }
            })
            $('#daterange').on('apply.daterangepicker', function(ev, picker) {
                $(this).val(picker.startDate.format('YYYY/MM/DD') + ' - ' + picker.endDate.format('YYYY/MM/DD'));
            });

            $('#daterange').on('cancel.daterangepicker', function(ev, picker) {
                $(this).val('');
            });
            // load DataTable
            $("#search-button").click(function (){
                $('#spinner').removeClass('d-none');
                jenis = $('#jenis_perizinan').val();
                tanggal = $('#daterange').val();
                let tabel = "<?= site_url('Search/getData');?>/"+jenis+'/'+btoa(tanggal);
                $('#tabelout').load(tabel, function() {
                    $('#spinner').addClass('d-none');
                });
            });
        })
    </script>
<?= $this->endSection() ?>