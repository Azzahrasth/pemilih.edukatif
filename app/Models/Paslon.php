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
        'daerah',
    ];

    public function Pengusung()
    {
        return $this->belongsToMany(Partai::class, 'pengusungs', 'paslon_id', 'partai_id');
    }
   
    public function Kandidat()
    {
        return $this->hasMany(Kandidat::class, 'paslon_id', 'id');
    }

    public function Kategorisasi()
    {
        return $this->hasMany(Kategorisasi::class, 'paslon_id', 'id');
    }
}


