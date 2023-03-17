<?= $this->extend('Dashboard') ?>
<?= $this->section('content') ?>

<h2>Daftar Tarif SPP</h2>
<p>Berikut ini daftar tarif SPP yang sudah terdaftar dalam database.</p>

<?=session()->getFlashData('pesan');?>


<div class="card shadow mb-2">
    <div class="card-header py-3">
         <a href="/spp/tambah" class="btn btn-primary btn-sm"><i class="fas fa-plus-circle"></i> Tambah Tarif SPP</a>
    </div>
    <div class="card-body">
    <table class="table table-sm table-striped table-hovered">
        <thead class="bg-light text-center">
            <tr>
                <th>No</th>
                <th>Tahun Angkatan</th>
                <th>Tarif SPP</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $htmlData=null;
            $nomor=null;
            if(isset($ListTarifSPP)){
            foreach ($ListTarifSPP as $row){
            $nomor++;
            $htmlData ='<tr>';
            $htmlData .='<td class="text-center">'.$nomor.'</td>';
            $htmlData .='<td class="text-center">'.$row['tahun'].'</td>';
            $htmlData .='<td class="text-right">Rp. '.number_format($row['nominal'],0,',','.').'</td>';
            $htmlData .='<td class="text-center">';
            $htmlData .='<a href="/spp/edit/'.$row['id_spp'].'" class="mr-1"><i class="fas fa-edit text-success"></i></a>';
            $htmlData .='<a href="/spp/hapus/'.$row['id_spp'].'" data-confirm="Anda yakin akan menghapus data"><i class="fas fa-trash-alt text-danger"></i></a>';
            $htmlData .='</td>';
            $htmlData .='</tr>';
            
            echo $htmlData;
            }
        }
        ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>

