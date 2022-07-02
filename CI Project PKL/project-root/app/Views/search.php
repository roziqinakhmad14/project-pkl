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
                            <div>
                                <table class="table table-striped table-bordered table-hover table-responsive">
                                    <thead class="table-dark">
                                        <tr>
                                            <th class="text-nowrap text-center" rowspan="1" colspan="1">No. Registrasi</th>
                                            <th class="text-nowrap text-center" rowspan="1" colspan="1">Tanggal</th>
                                            <th class="text-nowrap text-center" rowspan="1" colspan="1">Nama Lengkap</th>
                                            <th class="text-nowrap text-center" rowspan="1" colspan="1">Alamat</th>
                                            <th class="text-nowrap text-center" rowspan="1" colspan="1">No. Handphone</th>
                                            <th class="text-nowrap text-center" rowspan="1" colspan="1">Nama Perusahaan</th>
                                            <th class="text-nowrap text-center" rowspan="1" colspan="1">Lokasi Usaha</th>
                                            <th class="text-nowrap text-center" rowspan="1" colspan="1">Kelurahan</th>
                                            <th class="text-nowrap text-center" rowspan="1" colspan="1">Kecamatan</th>
                                            <th class="text-nowrap text-center" rowspan="1" colspan="1">No. Izin</th>
                                            <th class="text-nowrap text-center" rowspan="1" colspan="1">Tanggal Terbit</th>
                                            <th class="text-nowrap text-center" rowspan="1" colspan="1">Jenis Perizinan</th>
                                            <th class="text-nowrap text-center" rowspan="1" colspan="1">&nbsp;Action&nbsp;</th>                 
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
                                            <style>
                                                i.text-hover:hover {
                                                    opacity: 80%;
                                                }
                                            </style>
                                            <td class="h5" style="line-height: 20pt;"><a href="">
                                                <i class="text-hover text-primary fas fa-pen"></i></a> | <a href=""><i class="text-hover text-danger  fas fa-trash"></a></i></td>
                                        </tr>
                                        <tr class="even">
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
                                            <style>
                                                i.text-hover:hover {
                                                    opacity: 80%;
                                                }
                                            </style>
                                            <td class="h5" style="line-height: 20pt;"><a href="">
                                                <i class="text-hover text-primary fas fa-pen"></i></a> | <a href=""><i class="text-hover text-danger  fas fa-trash"></a></i></td>
                                        </tr>
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
                                            <style>
                                                i.text-hover:hover {
                                                    opacity: 80%;
                                                }
                                            </style>
                                            <td class="h5" style="line-height: 20pt;"><a href="">
                                                <i class="text-hover text-primary fas fa-pen"></i></a> | <a href=""><i class="text-hover text-danger  fas fa-trash"></a></i></td>
                                        </tr>
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
                                        <div class="dataTables_paginate paging_simple_numbers">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled" id="previous"><a href="#" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                                <li class="paginate_button page-item active"><a href="#" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                                <li class="paginate_button page-item next" id="next"><a href="#" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
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