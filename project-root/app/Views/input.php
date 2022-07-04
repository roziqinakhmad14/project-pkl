<?= $this->extend('layout/page_layout') ?>
<?= $this->section('sidebar_menu')?>
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="<?=site_url('Home/index')?>" class="nav-link ">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="<?=site_url('Home/input')?>" class="nav-link active">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                        Input
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?=site_url('Home/search')?>" class="nav-link">
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
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Input</h1>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
                            <li class="breadcrumb-item active">Input</li>
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
                <!-- Main row -->
                <div class="card card-body">
                    <form action="" class="row" id="form">
                        <div class="form-group col-md-6">
                            <label for="no_register">No. Register :</label>
                            <input type="text" class="form-control" id="no_register" placeholder="No. Register" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Tanggal Register :</label>
                            <div class="input-group date" id="tanggal_register" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" data-target="#tanggal_register" required>
                                <div class="input-group-append" data-target="#tanggal_register" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Nama Lengkap :</label>
                            <input type="text" class="form-control" id="name" placeholder="Nama Lengkap" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone">No. Handphone</label>
                            <input type="phone" id="phone" class="form-control" placeholder="No. Handphone">
                        </div>
                        <div class="form-group col-12">
                            <label for="address">Alamat</label>
                            <input type="text" id="address" class="form-control" placeholder="Alamat" required>
                        </div>
                        <div class="form-group col-12">
                            <label for="company">Nama Perusahaan</label>
                            <input type="text" id="company" class="form-control" placeholder="Nama Perusahaan" required>
                        </div>
                        <div class="form-group col-12">
                            <label for="company_address">Lokasi Usaha</label>
                            <input type="text" id="company_address" class="form-control" placeholder="Lokasi Usaha" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="kecamatan">Kecamatan</label>
                            <select class="custom-select rounded-0" id="kecamatan">
                                <option>Value 1</option>
                                <option>Value 2</option>
                                <option>Value 3</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="kelurahan">Kelurahan</label>
                            <select class="custom-select rounded-0" id="kelurahan">
                                <option>Value 1</option>
                                <option>Value 2</option>
                                <option>Value 3</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="no_izin">No. Izin :</label>
                            <input type="text" class="form-control" id="no_izin" placeholder="No. Izin" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Tanggal Terbit :</label>
                            <div class="input-group date" id="tanggal_terbit" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" data-target="#tanggal_terbit" required>
                                <div class="input-group-append" data-target="#tanggal_terbit" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="jenis_perizinan">Jenis Perizinan</label>
                            <select class="custom-select rounded-0" id="jenis_perizinan" required>
                            <?php foreach($izin as $keyizin) :?>
                                <option value="<?= $keyizin['id_jenis_perizinan']?>"><?= $keyizin['nama_perizinan']?></option>
                            <?php endforeach;?>
                            </select>
                        </div>
                        <div class="form-group col">
                            <input type="submit" class="btn btn-primary" value="Masukkan Data">
                        </div>
                    </form>
                </div>
                <!-- /.row (main row) -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
<?= $this->endSection() ?>
<?= $this->section('date_script') ?>
    <script>
        $(function () {      
          //Datemask dd/mm/yyyy
          $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
          //Datemask2 mm/dd/yyyy
          $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
          //Money Euro
          $('[data-mask]').inputmask()
      
          //Date picker
          $('#tanggal_register').datetimepicker({
              format: 'L'
          });
          $('#tanggal_terbit').datetimepicker({
              format: 'L'
          });
      
          //Date and time picker
          $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });
      
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
          $('#daterange-btn').daterangepicker(
            {
              ranges   : {
                'Today'       : [moment(), moment()],
                'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month'  : [moment().startOf('month'), moment().endOf('month')],
                'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
              },
              startDate: moment().subtract(29, 'days'),
              endDate  : moment()
            },
            function (start, end) {
              $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
            }
          )
      
          //Timepicker
          $('#timepicker').datetimepicker({
            format: 'LT'
          })      
        })
        // BS-Stepper Init
        document.addEventListener('DOMContentLoaded', function () {
          window.stepper = new Stepper(document.querySelector('.bs-stepper'))
        })
    </script>
<?= $this->endSection() ?>