<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'komentars';
    public $timestamps = false;

    public $fillable = [
        'id',
        'komentar',
        'user_id',
        'berita_id',
    ];

     public function Berita()
    {
        return $this->belongsTo(Berita::class, 'berita_id', 'id');
    }
     public function User()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
