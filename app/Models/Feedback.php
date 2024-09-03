<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    protected $table = 'feedbacks';
     public $fillable = [
        'id',
        'jenis',
        'feedback',
        'rating',
        'user_id'
    ];
}
