<?php

namespace App\Models;


use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'email'
    ];

    public function courses(){
        return $this->belongsToMany(Course::class, 'course_student', 'student_id','course_id');
    }


}
