<?=$this->extend('Dashboard');?>
<?=$this->section('content');?>
<h2>Data Siswa</h2>
<p>Berikut ini adalah data siswa yang sudah terdaftar dalam database.</p>

<?=session()->getFlashData('pesan');?>


<div class="card shadow mb-2">
    <div class="card-header py-3">
        <a href="/siswa/tambah" class="btn btn-primary btn-sm mb-2"><i class="fas fa-user-plus"></i> Tambah Siswa</a>
    </div>
    <div class="card-body">
    <table class="table table-sm table-striped">
        <thead class="bg-light">
            <tr>
                <th>No.</th>
                <th>NISN</th>
                <th>NIS</th>
                <th>Nama Lengkap</th>
                <th>Kelas</th>
                <th>Alamat</th>
                <th>No. Telp</th>
                <th>Tarif SPP</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $htmlData=null;
        $no=null;
        foreach($listSiswa as $row){
            $no++;
            $htmlData ='<tr>'; 
            $htmlData .='<td>'.$no.'</td>'; 
            $htmlData .='<td>'.$row['nisn'].'</td>'; 
            $htmlData .='<td>'.$row['nis'].'</td>'; 
            $htmlData .='<td>'.$row['nama'].'</td>'; 
            $htmlData .='<td>'.$row['nama_kelas'].'</td>'; 
            $htmlData .='<td>'.$row['alamat'].'</td>'; 
            $htmlData .='<td>'.$row['no_telp'].'</td>'; 
            $htmlData .='<td> Rp '.$row['nominal'].'</td>'; 
            $htmlData .='<td>';
            $htmlData .='<a href="/siswa/edit/'.$row['nisn'].'" class="mr-2"><i class="fas fa-edit text-success"></i></a>';
            $htmlData .='<a href="/siswa/hapus/'.$row['nisn'].'" data-confirm="Anda yakin akan menghapus data"><i class="fas fa-trash-alt text-danger"></i></a>';
            $htmlData .='</td>';
            $htmlData .='</tr>'; 
            echo $htmlData;
        }
        
        ?>
        </tbody>
    </table>
</div>

<?=$this->endSection();?>