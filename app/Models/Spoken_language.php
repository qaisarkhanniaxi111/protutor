<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spoken_language extends Model
{
    use HasFactory;
    protected $fillable = [
        'spoken_language','user_status','created_at', 'updated_at',
    ];
}
