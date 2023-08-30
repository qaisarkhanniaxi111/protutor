<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Cashier\Billable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,Billable;

    public $uploadsDir = '/images/';
    /**
     * The attributes that are mass assignable
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAvatarAttribute($value)
    {
        return $this->uploadsDir. $value;
    }

    public function getFullNameAttribute()
    {
        return "{$this->first_name } {$this->last_name}";
    }

    public function getNameAttribute()
    {
        return "{$this->first_name } {$this->last_name}";
    }

    public function teacherPayments()
    {
        return $this->hasMany(Payment::class, 'tutor_id', 'id');
    }

    public function studentPayments()
    {
        return $this->belongsToMany(Payment::class, 'payment_student', 'student_id', 'payment_id')->notFetchInActivePayments();
    }

    public function studentEnrolledLessons()
    {
        return $this->belongsToMany(GroupLesson::class, 'group_lesson_student', 'student_id', 'group_lesson_id');
    }

    public function rating()
    {
        return $this->hasOne(Rating::class, 'student_id', 'id');
    }
}