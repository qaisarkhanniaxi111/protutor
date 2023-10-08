<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_Registered_Quiz extends Model
{
    use HasFactory;
    protected $fillable=['status'];
    public $timestamps = false;
    protected $table="students_registered_courses";
    protected $primaryKey='id';
}
