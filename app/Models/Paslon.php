<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paslon extends Model
{
    use HasFactory;
    protected $table = 'paslons';
    public $timestamps = false;

     public $fillable = [
        'id',
        'nama',
        'image',
        'kategori',
        'daerah',
        'target_sasaran',
        'motivasi',
    ];
}
