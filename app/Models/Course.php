<?php

namespace App\Models;

use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'course_id',
    ];


    public function courses()
    {
        return $this->hasMany(Course::class, 'course_id');
    }
    public function students(){
        return $this->belongsToMany(Student::class ,'course_student','course_id','student_id')->with('courses');
    }
}
