<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengusung extends Model
{
    use HasFactory;
    protected $table = 'pengusungs';
    public $timestamps = false;

     public $fillable = [
        'id',
        'partai_id',
        'paslon_id',
    ];
}
