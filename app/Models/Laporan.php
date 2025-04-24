<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table = 'laporan';

    // protected $fillable = 
    // [
    //     'id_user', 'judul_laporan', 'tanggal_laporan', 'jenis', 'dokumentasi', 'detail_laporan', 'status'
    // ];

    protected $guarded;

}
