<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class matakuliah extends Model
{
    protected $table ='matakuliah';
    protected $fillable =['title','keterangan'];

     public function dosen_matakuliah(){
    	return $this->hasMany(dosen_matakuliah::class, 'matakuliah_id');
    }
    public function listMatakuliah(){
        $out = [];
        foreach ($this->all() as $matakuliah){
            $out[$matakuliah->id] = "{$matakuliah->title}";
        }
        return $out;
    }
}
