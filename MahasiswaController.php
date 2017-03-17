<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\mahasiswa;

class MahasiswaController extends Controller
{
    public function awal(){
    	return "Hello dari MahasiswaController";
    }
    public function tambah()
	{
		return $this->simpan();
	}	
    public function simpan()
	{
		$mahasiswa = new mahasiswa();
		$mahasiswa->nama = 'Rizwan Fahrony';
		$mahasiswa->nim = '1515015228';
		$mahasiswa->alamat = 'Jl. Penghulu Mas';
		$mahasiswa->pengguna_id ='3';
		$mahasiswa->save();
		return "DATA MAHASISWA 
						<br><br> ID : {$mahasiswa->id} 
						<br> Nama : {$mahasiswa->nama} 
						<br> NIM : {$mahasiswa->nim} 
						<br> Alamat : {$mahasiswa->alamat} 
						<br><br> Telah Di Simpan.";

	}
}
