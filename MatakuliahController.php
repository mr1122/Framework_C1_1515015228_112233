<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\matakuliah;

class MatakuliahController extends Controller
{
    public function awal()
	{
		return "Hello dari MatakuliahController";
	}
	public function tambah()
	{
		return $this->simpan();
	}	
    public function simpan()
	{
		$matakuliah = new matakuliah();
		$matakuliah->title = 'Pemrograman Framework';
		$matakuliah->keterangan = 'Laravel5';
		$matakuliah->save();
		return "DATA MATA KULIAH 
						<br><br> ID : {$matakuliah->id} 
						<br> Title : {$matakuliah->title} 
						<br> keterangan : {$matakuliah->keterangan}  
						<br><br> Telah Di Simpan.";

	}
}
