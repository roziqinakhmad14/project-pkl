<?= $this->extend('layout/page_layout') ?>
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
                <div class="card card-body card-primary">
                    <form class="row">
                        <div class="form-group col-md-6">
                            <label for="perizinan">Jenis Perizinan</label>
                            <select class="custom-select rounded-0" id="perizinan">
                                <option>Value 1</option>
                                <option>Value 2</option>
                                <option>Value 3</option>
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
                            <input type="submit" class="btn btn-primary mr-1" value="Proses">
                            <input type="submit" class="btn btn-danger" value="Cetak">
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
                <!-- Tabel -->
                <div class="card card-body card-primary">
                    <div class="row">
                        <div class="form-group col-12">
                            <div class="input-group">
                                <input class="form-control" type="search" placeholder="Search"></input>
                                <div class="input-group-append">
                                    <div class="input-group-text"><i class="fas fa-search"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <table id="example2" class="table table-bordered table-hover dataTable dtr-inline table-responsive" aria-describedby="example2_info">
                                    <thead>
                                        <tr>
                                            <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">No. Registrasi</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Tanggal</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Nama Lengkap</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Alamat</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">No. Handphone</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Nama Perusahaan</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Lokasi Usaha</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Kelurahan</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Kecamatan</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">No. Izin</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Tanggal Terbit</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Jenis Perizinan</th>                 
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd">
                                            <td>UKL/003/PERIJ/I/2021</td>
                                            <td>04-01-2021</td>
                                            <td>MARIO ARDINATA</td>
                                            <td>JL. TELAGA BODAS Y-I/9 KOTA MALANG</td>
                                            <td></td>
                                            <td>PEMBANGUNAN PERUM. RIVERFONT URBAN RESORT " PT. BUMI ARTHA MAKMOER "</td>
                                            <td>JL. RAYA KI AGENG GRIBIG KOTA MALANG</td>
                                            <td>MADYOPURO</td>
                                            <td>KEDUNGKANDANG</td>
                                            <td>660.1/0019/35.73.406/2021</td>
                                            <td>04-30-2021</td>
                                            <td>UKL-UPL</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th rowspan="1" colspan="1">No. Registrasi</th>
                                            <th rowspan="1" colspan="1">Tanggal</th>
                                            <th rowspan="1" colspan="1">Nama Lengkap</th>
                                            <th rowspan="1" colspan="1">Alamat</th>
                                            <th rowspan="1" colspan="1">No. HP</th>
                                            <th rowspan="1" colspan="1">Nama Perusahaan</th>
                                            <th rowspan="1" colspan="1">Lokasi Usaha</th>
                                            <th rowspan="1" colspan="1">Kelurahan</th>
                                            <th rowspan="1" colspan="1">Kecamatan</th>
                                            <th rowspan="1" colspan="1">No. Izin</th>
                                            <th rowspan="1" colspan="1">Tanggal Terbit</th>
                                            <th rowspan="1" colspan="1">Jenis Perizinan</th>
                                        </tr>
                                    </tfoot>
                                </table>
                                <div class="row">
                                    <div class="col-sm-12 col-md-9">
                                        <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 
                                            <span>
                                                <select class="" id="perizinan">
                                                    <option >5</option>
                                                    <option selected>10</option>
                                                    <option>25</option>
                                                    <option>50</option>
                                                </select>
                                            </span> of 57 entries
                                        </div>
                                    </div>
                                        <div class="col-sm-12 col-md-3">
                                            <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button page-item previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                                    <li class="paginate_button page-item active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                                    <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                                    <li class="paginate_button page-item next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /.container-fluid -->
        </section>
    <!-- /.content -->
    </div>
<?= $this->endSection() ?>