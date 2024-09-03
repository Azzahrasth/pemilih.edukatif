<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kandidat extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'kandidats';
    public $timestamps = false;

    protected $fillable = [
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'latar_belakang',
        'pendidikan',
        'jejak_karir',
        'prestasi',
        'kontroversi',
        'organisasi',
        'paslon_id'
    ];

    public function Paslon()
    {
        return $this->belongsTo(Paslon::class, 'paslon_id', 'id');
    }
}
