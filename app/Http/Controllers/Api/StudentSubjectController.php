<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentSubjectRequest;
use App\Models\Student;
use App\Models\Subject;

class StudentSubjectController extends Controller
{
    /**
     * Store a newly created resource in storage.
     * 
     * @param  StudentSubjectRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentSubjectRequest $request)
    {
        $student = Student::query()->where('number', $request->student_number)->first();
        $subject = Subject::query()->where('code', $request->subject_code)->first();

        $student->subjects()->attach($subject);

        return response()->json(['message' => 'Student subscribed to subject']);
    }

    /**
     * Detach the specified resource from storage.
     * 
     * @param  StudentSubjectRequest $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentSubjectRequest $request)
    {
        $student = Student::query()->where('number', $request->student_number)->first();
        $subject = Subject::query()->where('code', $request->subject_code)->first();

        $student->subjects()->detach($subject);
        
        return response()->json(['message' => 'Student unsubscribed from subject']);
    }
}
