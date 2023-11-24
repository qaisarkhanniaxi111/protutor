<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;
    protected $table = 'experiences';


    protected $fillable = ['userdetail_id','company_name','position','period_of_employment'];
}
