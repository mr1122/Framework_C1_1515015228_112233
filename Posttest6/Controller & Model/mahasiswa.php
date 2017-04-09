<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $table ='mahasiswa';
    protected $fillable =['nama','nim','alamat','pengguna_id'];
    protected $guarded = ['id'];

    public function pengguna(){
    	return $this->belongsTo(pengguna::class);
    }
    public function jadwal_matakuliah(){
    	return $this->hasMany(jadwal_matakuliah::class, 'mahasiswa_id');
    }
    public function getUsernameAttribute(){
    	return $this->pengguna->username;
    }
    public function listMahasiswaDanNim(){
        $out = [];
        foreach ($this->all() as $mahasiswa){
            $out[$mahasiswa->id] = "{$mahasiswa->nama} ({$mahasiswa->nim})";
        }
        return $out;
    }
}
