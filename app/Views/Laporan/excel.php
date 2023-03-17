<?php

header("Content-type: application/vnc-ms-excel");
header("Content-Disposition: attachment; filename=$title.xls");
header("Pragma: no-cache");
header("Expire: 0");

?>

<table class="table" border="1">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nisn</th>
            <th scope="col">Nama Siswa</th>
            <th scope="col">Kelas</th>
            <th scope="col">Jumlah Bayar</th>

        </tr>
    </thead>
    <tbody>
        <?php $no=1;
        foreach ($listLaporan as $row){ ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['nisn']; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['nama_kelas']; ?></td>
            <td><?= $row['jumlah_bayar']; ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
<!-- number_format($row['jumlah_bayar'],0,',','.') -->