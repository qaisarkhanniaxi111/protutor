<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $fillable = ['student_id', 'group_lesson_id', 'rating', 'review'];

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id', 'id');
    }
}
