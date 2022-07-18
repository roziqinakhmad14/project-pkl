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
                    <td><?= $perizinan['PERUSAHAAN']; ?></td>
                    <td><?= $perizinan['LOKASI_USAHA'] ?></td>
                    <td><?= $perizinan['Kelurahan'] ?></td>
                    <td><?= $perizinan['Kecamatan'] ?></td>
                    <td><?= $perizinan['NO_IZIN'] ?></td>
                    <td><?= $perizinan['TANGGAL_TERBIT'] ?></td>
                    <td><?= $perizinan['nama_perizinan'].' ('.$perizinan['id_jenis_perizinan'].')' ?></td>
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
</div>


<script>
    $(function () { 
        $('#tabel_data_perizinan').DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["excel"]
        }).buttons().container().appendTo('#tabel_data_perizinan_wrapper .col-md-6:eq(0)');
        })
</script>