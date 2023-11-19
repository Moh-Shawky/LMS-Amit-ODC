<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function Course()
    {
        return $this->belongsTo(User::class);
    }
    protected $fillable = [
        'course_name',
        'course_about',
        'rating',
        'price',
        'user_ID',
        'assignment_ID',
    ];

}
