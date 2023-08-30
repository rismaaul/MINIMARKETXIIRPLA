<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabang extends Model
{
    use HasFactory;
    protected $table ='cabang';
    protected $primaryKey = 'id_cabang';
    public $timestamps = false;
    protected $fillable = ['id_perusahaan', 'nama_cabang', 'alamat'];
}
