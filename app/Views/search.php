<?= $this->extend('layout/page_layout') ?>
<?= $this->section('sidebar_menu') ?>
<style>
    i.text-hover:hover {
        opacity: 80%;
    }
</style>
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
                <p>
                    Input
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?= site_url('Search') ?>" class="nav-link active">
                <i class="nav-icon fas fa-search"></i>
                <p>
                    Pencarian
                </p>
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
                        <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
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
            <form action="/Search/search" class="card card-body card-primary">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="jenis_perizinan">Jenis Perizinan</label>
                        <select name="jenisperizinan" class="custom-select rounded-0" id="jenis_perizinan">
                            <option value="">None</option>
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
                            <input type="text" class="form-control float-right" id="reservation">
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                    <div class="col">
                        <input id="search" type="submit" class="btn btn-primary" value="Proses">
                    </div>
                </div>
            </form>
            <!-- /.card-body -->
            <!-- Tabel -->
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="tabel_data_perizinan" class="table table-bordered table-striped table-responsive">
                        <thead class="table-dark">
                            <tr>
                                <th class="text-center" rowspan="1" colspan="1">No. Register</th>
                                <th class="text-center" rowspan="1" colspan="1">Tanggal</th>
                                <th class="text-center" rowspan="1" colspan="1">Nama Lengkap</th>
                                <th class="text-center" rowspan="1" colspan="1">Alamat</th>
                                <th class="text-center" rowspan="1" colspan="1">No. HP</th>
                                <th class="text-center" rowspan="1" colspan="1">Nama Perusahaan</th>
                                <th class="text-center" rowspan="1" colspan="1">Lokasi Usaha</th>
                                <th class="text-center" rowspan="1" colspan="1">Kelurahan</th>
                                <th class="text-center" rowspan="1" colspan="1">Kecamatan</th>
                                <th class="text-center" rowspan="1" colspan="1">No. Izin</th>
                                <th class="text-center" rowspan="1" colspan="1">Tanggal Terbit</th>
                                <th class="text-center" rowspan="1" colspan="1">Jenis Perizinan</th>
                                <th class="text-center" rowspan="1" colspan="1">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($dataperizinan as $perizinan) : ?>
                                <tr>
                                    <td><?= $perizinan['NO_REGISTER'] ?></td>
                                    <td><?= $perizinan['TANGGAL'] ?></td>
                                    <td><?= $perizinan['NAMA'] ?></td>
                                    <td><?= $perizinan['ALAMAT'] ?></td>
                                    <td><?= $perizinan['NO_HP'] ?></td>
                                    <td><?= $perizinan['PERUSAHAAN'] ?></td>
                                    <td><?= $perizinan['LOKASI_USAHA'] ?></td>
                                    <td><?= $perizinan['Kelurahan'] ?></td>
                                    <td><?= $perizinan['Kecamatan'] ?></td>
                                    <td><?= $perizinan['NO_IZIN'] ?></td>
                                    <td><?= $perizinan['TANGGAL_TERBIT'] ?></td>
                                    <td><?= $perizinan['nama_perizinan'] ?></td>
                                    <td class="h5" style="line-height: 20pt;">
                                        <a href="/Search/edit/<?= base64_encode($perizinan['NO_REGISTER']); ?>" )>
                                            <i class="text-hover text-primary fas fa-pen"></i>
                                        </a> |
                                        <a href="/Search/delete/<?= base64_encode($perizinan['NO_REGISTER']); ?>" onclick="confirm('Apakah Anda yakin ingin menghapus data perizinan dengan No. Register <?= $perizinan['NO_REGISTER']; ?>')">
                                            <i class="text-hover text-danger  fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th class="text-center" rowspan="1" colspan="1">No. Registrasi</th>
                                <th class="text-center" rowspan="1" colspan="1">Tanggal</th>
                                <th class="text-center" rowspan="1" colspan="1">Nama Lengkap</th>
                                <th class="text-center" rowspan="1" colspan="1">Alamat</th>
                                <th class="text-center" rowspan="1" colspan="1">No. HP</th>
                                <th class="text-center" rowspan="1" colspan="1">Nama Perusahaan</th>
                                <th class="text-center" rowspan="1" colspan="1">Lokasi Usaha</th>
                                <th class="text-center" rowspan="1" colspan="1">Kelurahan</th>
                                <th class="text-center" rowspan="1" colspan="1">Kecamatan</th>
                                <th class="text-center" rowspan="1" colspan="1">No. Izin</th>
                                <th class="text-center" rowspan="1" colspan="1">Tanggal Terbit</th>
                                <th class="text-center" rowspan="1" colspan="1">Jenis Perizinan</th>
                                <th class="text-center" rowspan="1" colspan="1">Action</th>
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
<?= $this->section('script') ?>
<script>
    $(function() {
        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', {
            'placeholder': 'dd/mm/yyyy'
        })
        //Datemask2 mm/dd/yyyy
        $('#datemask2').inputmask('mm/dd/yyyy', {
            'placeholder': 'mm/dd/yyyy'
        })
        //Money Euro
        $('[data-mask]').inputmask()

        //Date and time picker
        $('#reservationdatetime').datetimepicker({
            icons: {
                time: 'far fa-clock'
            }
        });

        //Date range picker
        $('#reservation').daterangepicker()
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({
            timePicker: true,
            timePickerIncrement: 30,
            locale: {
                format: 'MM/DD/YYYY hh:mm A'
            }
        })
        //Date range as a button
        $('#daterange-btn').daterangepicker({
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                startDate: moment().subtract(29, 'days'),
                endDate: moment()
            },
            function(start, end) {
                $('#reportrange span').html(start.format('YYYY D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
            }
        )

        //Timepicker
        $('#timepicker').datetimepicker({
            format: 'LT'
        })

        // Function untuk inisialisasi DataTable
        let initializeDataTable = function(id) {
            $(`#${id}`).DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["excel"]
            }).buttons().container().appendTo(`#${id}_wrapper .col-md-6:eq(0)`);
        }

        initializeDataTable('tabel_data_perizinan');
    })
</script>
<?= $this->endSection() ?>