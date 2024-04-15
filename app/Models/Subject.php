<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'description',
    ];

    /**
     * Relationship
     */

    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }

    public function students()
    {
        return $this->belongsToMany(Student::class, 'student_subject');
    }

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class);
    }
}
