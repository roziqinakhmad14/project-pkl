<?= $this->extend('layout/page_layout') ?>
<?= $this->section('sidebar_menu')?>
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="<?=site_url('Home/index')?>" class="nav-link active">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="<?=site_url('Home/input')?>" class="nav-link">
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
                    <div class="row pt-3">
                        <div class="col">
                            <div class="card card-body">
                                <table class="table table-striped table-bordered">
                                    <thead class="table-dark">
                                        <tr class="text-center">
                                            <th colspan="2">Rangkuman Perizinan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($izin as $keyizin) :?>
                                        <tr>
                                            <td><?= $keyizin['id_jenis_perizinan']; ?></td>
                                            
                                            <?php 
                                            
                                            $jenis_perizinan = $keyizin['id_jenis_perizinan'];
                                            
                                            $db = db_connect();

                                            $query = "SELECT * FROM tabel_perizinan WHERE `JENIS_PERIZINAN` = '$jenis_perizinan'";

                                            $total = $db->query($query)->getNumRows();
                                            ?>

                                            <td><?= 
                                            $total; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Main row -->
                    <div class="row">
                    </div>
                    <!-- /.row (main row) -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
<?= $this->endSection() ?>