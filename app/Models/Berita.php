<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'beritas';
    public $timestamps = false;

    public $fillable = [
        'id',
        'judul',
        'berita',
        'sumber',
        'tanggal_berita'
    ];
}
