<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\dosen;

class DosenController extends Controller
{
    public function awal(){
    	return "Hello dari DosenController";
    }
	public function tambah()
	{
		return $this->simpan();
	}	
    public function simpan()
	{
		$dosen = new dosen();
		$dosen->nama = 'Rizwan Fahrony';
		$dosen->nip = '1515015228';
		$dosen->alamat = 'Jl. Mas Penghulu';
		$dosen->pengguna_id ='2';
		$dosen->save();
		return "DATA DOSEN 
						<br><br> ID : {$dosen->id} 
						<br> Nama : {$dosen->nama} 
						<br> NIP : {$dosen->nip} 
						<br> Alamat : {$dosen->alamat} 
						<br><br> Telah Di Simpan.";

	}
}
