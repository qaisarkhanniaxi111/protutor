<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    public $uploadsDir = '/group_lessons/images/';

    protected $fillable = ['image', 'image_type'];

    public const GROUP_LESSON_IMAGE = 1;

    public function getImageAttribute($value)
    {
        return $this->uploadsDir. $value;
    }

}
