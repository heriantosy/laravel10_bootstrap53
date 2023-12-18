<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;
    protected $table ="jadwal";
    protected $primaryKey ="id";

public function guru(){
    return $this->belongsTo(Guru::class, 'id_guru'); //id guru fk
}
    
public function pelajaran(){
    return $this->belongsTo(Pelajaran_model::class, 'id_pelajaran');
}

}
