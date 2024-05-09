<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterDokumen extends Model
{
    use HasFactory;

    protected $fillable = [
        'kategori',
        'sub_kategori',
        'nama_dokumen',
        'tautan',        
    ];
}
