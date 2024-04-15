<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'last_name',
        'title',
    ];

    /**
     * Relationship
     */

     public function subjects() : BelongsToMany
     {
         return $this->belongsToMany(Subject::class, 'subject_teacher')->withTimestamps();
     }
}
