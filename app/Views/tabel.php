<!-- Theme style -->
<link rel="stylesheet" href="<?=base_url('assets/dist/css/adminlte.min.css')?>">
<!-- DataTables -->
<link rel="stylesheet" href="<?=base_url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')?>">
<link rel="stylesheet" href="<?=base_url('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')?>">
<link rel="stylesheet" href="<?=base_url('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')?>">

<div class="card">
    <!-- /.card-header -->
    <div class="card-body">
        <table id="tabel_data_perizinan" class="table table-bordered table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th class="text-center">No. Register</th>
                    <th class="text-center">Tanggal</th>
                    <th class="text-center">Nama Lengkap</th>
                    <th class="text-center">Alamat</th>
                    <th class="text-center">No. HP</th>
                    <th class="text-center">Nama Perusahaan</th>
                    <th class="text-center">Lokasi Usaha</th>
                    <th class="text-center">Kelurahan</th>
                    <th class="text-center">Kecamatan</th>
                    <th class="text-center">No. Izin</th>
                    <th class="text-center">Tanggal Terbit</th>
                    <th class="text-center">Jenis Perizinan</th>
                    <th class="text-center">Action</th>
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
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>
 <!-- jQuery -->
 <script src="<?= base_url('assets/plugins/jquery/jquery.min.js')?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url('assets/plugins/jquery-ui/jquery-ui.min.js')?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
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
<!-- AdminLTE App -->
<script src="<?= base_url('assets/dist/js/adminlte.js')?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets/dist/js/demo.js')?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url('assets/dist/js/pages/dashboard.js')?>"></script>
<script>
    $('#tabel_data_perizinan').DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["excel"]
    }).buttons().container().appendTo('#tabel_data_perizinan_wrapper .col-md-6:eq(0)');
</script>