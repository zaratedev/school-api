<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
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
     * Accessor
     */

    protected function classroomNumber(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => strtoupper($value),
        );
    }

    /**
     * Relationships
     */

    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }
}
