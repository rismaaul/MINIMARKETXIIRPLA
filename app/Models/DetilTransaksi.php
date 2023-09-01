<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetilTransaksi extends Model
{
    use HasFactory;
    protected $table = 'detil_transaksi';
    protected $primaryKey = 'id_detil_transaksi';
    protected $fillable = ['id_transaksi','id_barang','jumlah','total'];
}
