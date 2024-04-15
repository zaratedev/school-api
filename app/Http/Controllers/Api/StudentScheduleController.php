<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SubjectResource;
use App\Models\Student;

class StudentScheduleController extends Controller
{
    public function index(string $number)
    {
        $student = Student::query()->where('number', $number)->first();

        if (!$student) {
            return response()->json(['error' => 'Student not found'], 404);
        }

        $subjects = $student->subjects()->with('classroom')->get();

        return SubjectResource::collection($subjects);
    }
}
