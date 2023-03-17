<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboardpetugas extends BaseController
{
	public function index()
	{
		//mengambil nominal spp pada tahun ini
		$ambilSpp=$this->spp->where('tahun',date('Y'))->findAll();
	
		//mengambil jumlah pendapatan hari
		$sumBayar = $this->bayar->where('tgl_bayar', date('Y-m-d'))->select('sum(jumlah_bayar) as total')->first();


		//membuat data array untuk panel
		$dataPanel=[
			'jumlahSiswa' => $this->siswa->findAll(),
			'nominalSpp' => $ambilSpp[0]['nominal'],
			'jumlahTransaksi' => $this->bayar->where('tgl_bayar', date('Y-m-d'))->findAll(),
			'pendapatan' => $sumBayar['total']
		]; 

		// SELECT sum(jumlah_bayar) as jumlahnya from pembayaran where tgl_bayar='2023-03-12';
		


		$data['intro']='<div class="jumbotron mt-5 bg-primary text-light text-center">
		<h1>Hallo, '.session()->get('nama_petugas').'</h1>
		<p>Selamat Datang di Aplikasi Pembayaran SPP</p>
		<p>Tanggal Login : '.date('d M Y').'</p>
		  </div>';
		return view('Dashboard',$dataPanel);
	}
}
// bg-primary text-light text-center