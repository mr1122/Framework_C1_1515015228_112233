<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen_matakuliah extends Model
{
    protected $table ='dosenmatakuliah';
    protected $fillable =['dosen_id','matakuliah_id'];
}
