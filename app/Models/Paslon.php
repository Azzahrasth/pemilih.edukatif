<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paslon extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'paslons';
    public $timestamps = false;
    protected $fillable = [
        'nama',
        'image',
        'kategori',
        'daerah',
        'target_sasaran',
        'motivasi'
    ];

    public function Pengusung()
    {
        return $this->hasMany(Pengusung::class, 'paslon_id', 'id');
    }
    public function Kandidat()
    {
        return $this->hasMany(Kandidat::class, 'paslon_id', 'id');
    }
}

/////// ini cuman buat nyoba tabel kandidat soalnya ada foreign key, nanti ganti
