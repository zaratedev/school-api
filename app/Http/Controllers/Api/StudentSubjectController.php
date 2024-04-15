<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;

class StudentSubjectController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'student_number' => 'required|exists:students,number',
            'subject_code' => 'required|exists:subjects,code',
        ]);

        $student = Student::query()->where('number', $request->student_number)->first();
        $subject = Subject::query()->where('code', $request->subject_code)->first();

        $student->subjects()->attach($subject);

        return response()->json(['message' => 'Student subscribed to subject']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $request->validate([
            'student_number' => 'required|exists:students,number',
            'subject_code' => 'required|exists:subjects,code',
        ]);

        $student = Student::query()->where('number', $request->student_number)->first();
        $subject = Subject::query()->where('code', $request->subject_code)->first();

        $student->subjects()->detach($subject);
        
        return response()->json(['message' => 'Student unsubscribed from subject']);
    }
}
