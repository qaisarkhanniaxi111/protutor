<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupLesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject_id', 'teacher_level_id', 'title', 'participants', 'price',
        'registration_start_date', 'registration_end_date', 'class_start_date',
        'class_end_date', 'is_completed', 'tutor_id'
    ];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function teachLevel()
    {
        return $this->belongsTo(Teaches_level::class);
    }

    public function tutor()
    {
        return $this->belongsTo(User::class, 'tutor_id', 'id');
    }

    public function gallery()
    {
        return $this->hasOne(Gallery::class, 'group_lesson_id', 'id');
    }

}
