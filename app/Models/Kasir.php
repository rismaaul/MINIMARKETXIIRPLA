<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasir extends Model
{
    use HasFactory;
    protected $table = 'kasir';
    protected $primaryKey = 'id_kasir';
    public $timestamps = false;
    protected $fillable = ['id_cabang','id_akun',
                            'nama_lengkap','tanggal_lahir','jenis_kelamin',
                            'alamat'
                        ];
}
