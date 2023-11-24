<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    protected $table = 'educations';


    protected $fillable = ['userdetail_id','university_name','degree_name','degree_type','specialization','year_of_study','degree_verification_pic'];
}
