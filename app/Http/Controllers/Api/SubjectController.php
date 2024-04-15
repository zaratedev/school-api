<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SubjectResource;
use App\Models\Subject;

class SubjectController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show(string $code)
    {
        $subject = Subject::query()
            ->with('classroom', 'teachers')
            ->where('code', $code)
            ->first();

        if (!$subject) {
            return response()->json(['error' => 'Subject not found'], 404);
        }

        return new SubjectResource($subject);
    }
}
