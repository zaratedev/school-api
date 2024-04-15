<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'name',
        'last_name',
        'year_old',
    ];

    /**
     * Relationships
     */

    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'student_subject');
    }
}
