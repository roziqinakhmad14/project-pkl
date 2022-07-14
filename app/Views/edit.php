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
                <a href="<?=site_url('Input')?>" class="nav-link ">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                        Input
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?=site_url('Search')?>" class="nav-link active">
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
    <?php
    function convert2html($str)
    {
        $date = explode("-",$str);
        return $date[0].'/'.$date[1].'/'.$date[2];
    }
    ?>
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
        <??>
        <section class="content">
            <div class="container-fluid">
                <!-- Main row -->
                <div class="card card-body has-validation">
                    <form action="/Input/save" class="row needs-validation" id="form" method="POST">
                        <?= csrf_field()?>
                        <div class="form-group col-md-6">
                            <label for="no_register">No. Register :</label>
                            <input type="text" class="form-control<?= ($validasi->hasError('NoRegis')) ?' is-invalid':'';?>" id="no_register" placeholder="No. Register"  name="NoRegis" autofocus value="<?=old('NoRegis');?>">
                            <div class="invalid-feedback">
                                <?= $validasi->getError('NoRegis');?>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Tanggal Register :</label>
                            <div class="input-group date" id="tanggal_register" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input<?= ($validasi->hasError('dateRegis')) ?' is-invalid':'';?>" data-target="#tanggal_register"  name="dateRegis" value="<?=old('dateRegis');?>">
                                <div class="invalid-feedback">
                                    <?= $validasi->getError('dateRegis')?>
                                </div>
                                <div class="input-group-append" data-target="#tanggal_register" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Nama Lengkap :</label>
                            <input type="text" class="form-control<?= ($validasi->hasError('fullname')) ?' is-invalid':'';?>" id="name" placeholder="Nama Lengkap"  name="fullname" value="<?=old('fullname');?>">
                            <div class="invalid-feedback">
                                <?= $validasi->getError('fullname')?>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone">No. Handphone</label>
                            <input type="phone" id="phone" class="form-control" placeholder="No. Handphone" name="phonenumber" value="<?=old('phonenumber');?>">
                        </div>
                        <div class="form-group col-12">
                            <label for="address">Alamat</label>
                            <input type="text" id="address" class="form-control<?= ($validasi->hasError('address')) ?' is-invalid':'';?>" placeholder="Alamat"  name="address" value="<?=old('address');?>">
                            <div class="invalid-feedback">
                                <?= $validasi->getError('address')?>
                            </div>
                        </div>
                        <div class="form-group col-12">
                            <label for="company">Nama Perusahaan</label>
                            <input type="text" id="company" class="form-control<?= ($validasi->hasError('comname')) ?' is-invalid':''?>" placeholder="Nama Perusahaan"  name="comname" value="<?=old('comname');?>">
                            <div class="invalid-feedback">
                                <?= $validasi->getError('comname')?>
                            </div>
                        </div>
                        <div class="form-group col-12">
                            <label for="company_address">Lokasi Usaha</label>
                            <input type="text" id="company_address" class="form-control<?= ($validasi->hasError('comaddress')) ?' is-invalid':'';?>" placeholder="Lokasi Usaha"  name="comaddress" value="<?=old('comaddress');?>">
                            <div class="invalid-feedback">
                                <?= $validasi->getError('comaddress')?>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="kecamatan">Kecamatan</label>
                            <select class="custom-select rounded-0<?= ($validasi->hasError('kecamatan')) ?' is-invalid':'';?>" id="kecamatan" name="kecamatan">
                                <option value="" class="disabled"><i>None</i></option>
                            <?php foreach($distric as $kecamatan) :?>
                                <option value="<?= $kecamatan['id']?>"><?= $kecamatan['Kecamatan']?></option>
                            <?php endforeach;?>
                            </select>
                            <div class="invalid-feedback">
                                <?= $validasi->getError('kecamatan')?>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="kelurahan">Kelurahan</label>
                            <select class="custom-select rounded-0<?= ($validasi->hasError('kelurahan')) ?' is-invalid':'';?>" id="kelurahan" name="kelurahan">
                                <option value="" class="disabled"><i>None</i></option>
                            </select>
                            <div class="invalid-feedback">
                                <?= $validasi->getError('kelurahan')?>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="no_izin">No. Izin :</label>
                            <input type="text" class="form-control<?= ($validasi->hasError('noIzin')) ?' is-invalid':'';?>" id="no_izin" placeholder="No. Izin"  name="noIzin" value="<?=old('noIzin');?>">
                            <div class="invalid-feedback">
                                <?= $validasi->getError('noIzin')?>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Tanggal Terbit :</label>
                            <div class="input-group date" id="tanggal_terbit" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input<?= ($validasi->hasError('publishdate')) ?' is-invalid':'';?>" data-target="#tanggal_terbit"  name="publishdate" value="<?=old('publishdate');?>">
                                <div class="invalid-feedback">
                                    <?= $validasi->getError('publishdate')?>
                                </div>
                                <div class="input-group-append" data-target="#tanggal_terbit" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="jenis_perizinan">Jenis Perizinan</label>
                            <select class="custom-select rounded-0<?= ($validasi->hasError('namaIzin')) ?' is-invalid':'';?>" id="jenis_perizinan"  name="namaIzin">
                            <option value="" class="disabled"><i>None</i></option>
                            <?php foreach($izin as $keyizin) :?>
                                <option value="<?= $keyizin['id_jenis_perizinan']?>"><?= $keyizin['nama_perizinan']?></option>
                            <?php endforeach;?>
                            </select>
                            <div class="invalid-feedback">
                                <?= $validasi->getError('namaIzin')?>
                            </div>
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
    <script type='text/javascript'>
        $(document).ready(function(){
            $("#kecamatan").change(function(){
                let ID_Kecamatan = $(this).val();

                // Menggunakan ajax untuk mengirim dan dan menerima data dari server
                $.ajax({
                    url : "<?= base_url();?>/index.php/Input/getKelurahan",
                    method : "post",
                    data : {ID_Kecamatan: ID_Kecamatan},
                    dataType : 'json',
                    success: function(response){
                        // Remove options 
                        $('#kelurahan').find('option').not(':first').remove();
                        // Add options
                        $.each(response,function(index,data){
                        $('#kelurahan').append('<option value="'+data['id']+'">'+data['Kelurahan']+'</option>');
                        })
                    }
                });
            });
        });
    </script>
<?= $this->endSection() ?>