<?= $this->extend('layout/page_layout') ?>
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
                    <p>
                        Input
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?=site_url('Search')?>" class="nav-link">
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
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
            
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card card-body">
                    <form action="Home/search" class="form-group">
                        <div class="input-group">
                            <input class="form-control" type="search" placeholder="Search" name="keyword">
                            <input type="submit" class="d-none">
                            <div class="input-group-append">
                                <div class="input-group-text"><i class="fas fa-search"></i></div>
                            </div>
                        </div>
                    </form>
                    <table class="table table-striped table-bordered">
                        <thead class="table-dark">
                            <tr class="text-center">
                                <th colspan="2">Rangkuman Perizinan</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($izin as $keyizin) :?>
                            <tr>
                                <td><?= $keyizin['nama_perizinan']." (".$keyizin['id_jenis_perizinan'].")"; ?></td>
                                
                                <?php 
                                $jenis_perizinan = $keyizin['id_jenis_perizinan'];
                                $db = db_connect();
                                $builder = $db->table('tabel_perizinan');
                                $query = $builder->getWhere(['JENIS_PERIZINAN'=> $jenis_perizinan]);
                                $total = $query->resultID->num_rows;
                                ?>

                                <td><?= $total; ?></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- Script untuk pencarian -->
    <script>
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
                        });
                    }
                });
            });
        });
    </script>
<?= $this->endSection() ?>