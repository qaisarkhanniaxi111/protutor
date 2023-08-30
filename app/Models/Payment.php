<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getAmountAttribute($value)
    {
        return $value / 100;
    }

    public function setAmountAttribute($value)
    {
        $this->attributes["amount"] = $value * 100;
    }

    public function tutor()
    {
        return $this->belongsTo(User::class, 'tutor_id', 'id');
    }

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id', 'id');
    }

    public function students()
    {
        return $this->belongsToMany(User::class, 'payment_student', 'payment_id', 'student_id');
    }

    public function studentPayments()
    {
        return $this->belongsToMany(User::class, 'payment_student', 'payment_id', 'student_id');
    }

    public function groupLesson()
    {
        return $this->belongsTo(GroupLesson::class, 'group_lesson_id', 'id');
    }

    public function scopeNotFetchInActivePayments(Builder $builder)
    {
        return $builder->where('status', '!=', 'in-active');
    }
}
