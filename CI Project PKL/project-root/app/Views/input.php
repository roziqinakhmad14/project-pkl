<?= $this->extend('layout/page_layout') ?>
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
                                <option>Value 1</option>
                                <option>Value 2</option>
                                <option>Value 3</option>
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