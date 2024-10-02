<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partai extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'partais';
    public $timestamps = false;
    protected $fillable = [
        'nama',
        'singkatan',
        'image',
        'tanggal_dibentuk',
        'deskripsi',
        'ketua_umum',
        'sejarah',
        'ideologi'
    ];

    public function Pengusung()
    {
        return $this->hasMany(Pengusung::class, 'partai_id', 'id');
    }
}

