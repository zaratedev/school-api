<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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

    public function subjects() : BelongsToMany
    {
        return $this->belongsToMany(Subject::class, 'student_subject')->withTimestamps();
    }
}
