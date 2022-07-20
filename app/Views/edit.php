<?= $this->extend('layout/page_layout') ?>

<?= $this->section('css'); ?>
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?=base_url('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')?>">
<?= $this->endSection(); ?>

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
                        <h1 class="m-0">Edit</h1>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Edit</li>
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
                <div class="card card-body has-validation">
                    <form action="<?=site_url()?>/Search/update/<?=base64_encode($dataperizinan['NO_REGISTER']);?>" class="row needs-validation" id="form" method="POST">
                        <?= csrf_field()?>
                        <div class="form-group col-md-6">
                            <label for="no_register">No. Register :</label>
                            <input type="text" class="form-control<?= ($validasi->hasError('NoRegis')) ?' is-invalid':'';?>" id="no_register" placeholder="No. Register"  name="NoRegis" autofocus value="<?=(!session())? old('NoRegis'):$dataperizinan['NO_REGISTER'];?>" disabled>
                            <div class="invalid-feedback">
                                <?= $validasi->getError('NoRegis');?>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Tanggal Register :</label>
                            <div class="input-group date" id="tanggal_register" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input<?= ($validasi->hasError('dateRegis')) ?' is-invalid':'';?>" data-target="#tanggal_register"  name="dateRegis" value="<?=(!session())? old('dateRegis'):$dataperizinan['TANGGAL'];?>" placeholder="yyyy/mm/dd">
                                <div class="input-group-append" data-target="#tanggal_register" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                                <div class="invalid-feedback">
                                    <?= $validasi->getError('dateRegis')?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Nama Lengkap :</label>
                            <input type="text" class="form-control<?= ($validasi->hasError('fullname')) ?' is-invalid':'';?>" id="name" placeholder="Nama Lengkap"  name="fullname" value="<?=(!session())? old('fullname'):$dataperizinan['NAMA'];?>">
                            <div class="invalid-feedback">
                                <?= $validasi->getError('fullname')?>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="number">No. Handphone</label>
                            <input type="number" id="number" class="form-control" placeholder="No. Handphone" name="phonenumber" value="<?=(!session())? old('phonenumber'):$dataperizinan['NO_HP'];?>">
                        </div>
                        <div class="form-group col-12">
                            <label for="address">Alamat</label>
                            <input type="text" id="address" class="form-control<?= ($validasi->hasError('address')) ?' is-invalid':'';?>" placeholder="Alamat"  name="address" value="<?=(!session())? old('address'):$dataperizinan['ALAMAT'];?>">
                            <div class="invalid-feedback">
                                <?= $validasi->getError('address')?>
                            </div>
                        </div>
                        <div class="form-group col-12">
                            <label for="company">Nama Perusahaan</label>
                            <input type="text" id="company" class="form-control<?= ($validasi->hasError('comname')) ?' is-invalid':''?>" placeholder="Nama Perusahaan"  name="comname" value="<?=(!session())? old('comname'):$dataperizinan['PERUSAHAAN'];?>">
                            <div class="invalid-feedback">
                                <?= $validasi->getError('comname')?>
                            </div>
                        </div>
                        <div class="form-group col-12">
                            <label for="company_address">Lokasi Usaha</label>
                            <input type="text" id="company_address" class="form-control<?= ($validasi->hasError('comaddress')) ?' is-invalid':'';?>" placeholder="Lokasi Usaha"  name="comaddress" value="<?=(!session())? old('comaddress'):$dataperizinan['LOKASI_USAHA'];?>">
                            <div class="invalid-feedback">
                                <?= $validasi->getError('comaddress')?>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="kecamatan">Kecamatan</label>
                            <select class="custom-select rounded-0<?= ($validasi->hasError('kecamatan')) ?' is-invalid':'';?>" id="kecamatan" name="kecamatan">
                                <option value="" class="disabled"><i>None</i></option>
                                <?php foreach ($distric as $kecamatan) :?>
                                    <?php if ($kecamatan['id'] == $dataperizinan['KECAMATAN']): ?>
                                        <option value="<?= $kecamatan['id']?>" selected><?= $kecamatan['Kecamatan']?></option>
                                    <?php else: ?>
                                        <option value="<?= $kecamatan['id']?>"><?= $kecamatan['Kecamatan']?></option>
                                    <?php endif; ?>
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
                            <input type="text" class="form-control<?= ($validasi->hasError('noIzin')) ?' is-invalid':'';?>" id="no_izin" placeholder="No. Izin"  name="noIzin" value="<?=(!session())? old('noIzin'):$dataperizinan['NO_IZIN'];?>" disabled>
                            <div class="invalid-feedback">
                                <?= $validasi->getError('noIzin')?>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Tanggal Terbit :</label>
                            <div class="input-group date" id="tanggal_terbit" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input<?= ($validasi->hasError('publishdate')) ?' is-invalid':'';?>" data-target="#tanggal_terbit"  name="publishdate" value="<?=(!session())? old('publishdate'):$dataperizinan['TANGGAL_TERBIT'];?>" placeholder="yyyy/mm/dd">
                                <div class="input-group-append" data-target="#tanggal_terbit" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                                <div class="invalid-feedback">
                                    <?= $validasi->getError('publishdate')?>
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

<?= $this->section('script') ?>
    <!-- MomentJS -->
    <script src="<?= base_url('assets/plugins/moment/moment.min.js')?>"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?= base_url('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')?>"></script>

    <script>
        $(function () {      
            // Date picker
            $('#tanggal_register').datetimepicker({
                format: 'YYYY/MM/DD'
            });
            $('#tanggal_terbit').datetimepicker({
                format: 'YYYY/MM/DD'
            });     
            // Load kelurahan berdasarkan kecamatan
            $("#kecamatan").change(function (){
                let kelurahan = "<?= site_url('RegionSelect/getKelurahan');?>/"+$(this).val();
                $('#kelurahan').load(kelurahan);
                return false;
            })
        })
    </script>
<?= $this->endSection() ?>