<?php 

$db = db_connect();
$query = $db->query('SELECT * FROM tabel_perizinan');

?>
<table>
    <?php foreach ($query->getResult() as $row): ?>
        <tr><td><?= $row->ALAMAT; ?></td></tr>
    <?php endforeach; ?>
</table>