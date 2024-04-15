<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;

    protected $fillable = [
        'classroom_number',
        'capacity',
    ];

    /**
     * Relationships
     */

    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }
}
