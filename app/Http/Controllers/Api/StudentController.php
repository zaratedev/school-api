<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Retrieved a student.
     *
     * @param  string $number
     * @return \Illuminate\Http\Response
     */
    public function show(string $number)
    {
        $student = Student::query()->where('number', $number)->first();

        if (!$student) {
            return response()->json(['error' => 'Student not found'], 404);
        }

        return response()->json($student);
    }
}
