<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    use HasFactory;

    protected $fillable = [
        'kategori',
        'elemen',
        'no_urut',
        'nama_dokumen',
        'tautan_dokumen',
    ];
}
