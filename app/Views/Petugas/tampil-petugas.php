<?= $this->extend('Dashboard') ?>
<?= $this->section('content') ?>

<h2>Data Petugas</h2>
<p>Berikut ini daftar petugas pengelola aplikasi SPP yang sudah terdaftar dalam database.</p>

<?=session()->getFlashData('pesan');?>


<div class="card shadow mb-2">
    <div class="card-header py-3">
        <a href="/petugas/tambah" class="btn btn-primary btn-sm"><i class="fas fa-user-plus"></i> Tambah Petugas </a>
    </div>
    <div class="card-body">
    <table class="table table-sm table-striped table-hovered">
        <thead class="bg-light text-center">
            <tr>
                <th>No</th>
                <th>Nama Petugas</th>
                <th>Username</th>
                <th>Level User</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $htmlData=null;
            $nomor=null;
            foreach ($ListPetugas as $row){
            $nomor++;
            $htmlData ='<tr>';
            $htmlData .='<td>'.$nomor.'</td>';
            $htmlData .='<td>'.$row['nama_petugas'].'</td>';
            $htmlData .='<td>'.$row['username'].'</td>';
            $htmlData .='<td>'.$row['level'].'</td>';
            $htmlData .='<td class="text-center">';
            $htmlData .='<a href="/petugas/edit/'.$row['id_petugas'].'" class="mr-1"><i class="fas fa-edit text-success"></i></a>';
            $htmlData .='<a href="/petugas/hapus/'.$row['id_petugas'].'" data-confirm="Apakah anda yakin akan menghapus data ?"><i class="fas fa-trash-alt text-danger"></i></a>';
            $htmlData .='</td>';
            $htmlData .='</tr>';
            
            echo $htmlData;
            }
        ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>

