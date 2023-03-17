<?php

namespace App\Controllers;

use App\Controllers\BaseController;

// inheritance dari BaseController
class Spp extends BaseController
{
	
	public function index()
	{
		if(session()->get('level')!='admin'){
			return redirect()->to('/petugas/dashboard');
			exit;		
		}
		
		$data['ListTarifSPP'] = $this->spp->orderBy('tahun','desc')->findAll();
		return view('Spp/tampil',$data);
	}
	
	public function tambahSpp(){
		if(session()->get('level')!='admin'){
			return redirect()->to('/petugas/dashboard');
			exit;		
		}

		return view('Spp/tambah');
	}

	public function simpanSpp(){
		if(session()->get('level')!='admin'){
			return redirect()->to('/petugas/dashboard');
			exit;		
		}
		
		//terima data
		$data=[
			'tahun' => $this->request->getPost('txtThnAngkatan'),
			'nominal' => $this->request->getPost('txtInputNominal')
		];
		
		//cek keadaan data
		$cekSpp = $this->spp->where('tahun', $data['tahun'])->findAll();

		if(count($cekSpp) == 1){ //jika sudah ada
			return redirect()->to('/spp')->with('pesan','<div class="alert alert-danger">Gagal ! Spp pada tahun tersebut sudah ada</div>');

		}else{ ///jika belum ada
			$this->spp->save($data);

		}
		return redirect()->to('/spp')->with('pesan','<div class="alert alert-success">Data spp baru berhasil di tambahkan</div>');
	}

	public function hapusSPP($idSPP){
		if(session()->get('level')!='admin'){
			return redirect()->to('/petugas/dashboard');
			exit;		
		}
		
		if(tarifInSiswa($idSPP)==0){		
			$this->spp->where('id_spp',$idSPP)->delete();
			return redirect()->to('/spp');
		} else {
			return redirect()->to('/spp')->with('pesan','<div class="alert alert-danger">Gagal Hapus ! Tarif SPP sudah digunakan </div>');
		}
	}

	public function editSpp($idSPP){
		if(session()->get('level')!='admin'){
			return redirect()->to('/petugas/dashboard');
			exit;		
		}
		
		$data['detailTarifSPP'] = $this->spp->where('id_spp',$idSPP)->findAll();
		return view('Spp/edit',$data);
	}

	public function updateSpp(){
		if(session()->get('level')!='admin'){
			return redirect()->to('/petugas/dashboard');
			exit;		
		}
		
		$datanya=[
			'tahun'=>$this->request->getPost('txtThnAngkatan'),
			'nominal'=>$this->request->getPost('txtInputNominal')
		];
		$this->spp->update($this->request->getPost('txtIdSpp'),$datanya);
		return redirect()->to('/spp')->with('pesan','<div class="alert alert-success">Data spp berhasil di update</div>');;
	}

	public function testCekBayar(){
		echo jmlBayarSiswa('001','3','2021');

	}


}
