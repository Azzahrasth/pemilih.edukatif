<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategorisasi extends Model
{
    use HasFactory;
    protected $table = 'kategorisasis';
    public $timestamps = false;

     public $fillable = [
        'id',
        'visi_misi',
        'kategori_isu',
        'paslon_id',
    ];
}
