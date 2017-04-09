<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    protected $table = 'dosen';
	protected $fillable = ['nama','nip','alamat','pengguna_id'];
	protected $guarded = ['id'];

	public function pengguna(){
		return $this->belongsTo(pengguna::class);
	}
	public function dosen_matakuliah(){
		return $this->hasMany(dosen_matakuliah::class, 'dosen_id');
	}
	public function getUsernameAttribute(){
    	return $this->pengguna->username;
    }
    public function listDosenDanNip(){
        $out = [];
        foreach ($this->all() as $dosen){
            $out[$dosen->id] = "{$dosen->nama} ({$dosen->nip})";
        }
        return $out;
    }
}
