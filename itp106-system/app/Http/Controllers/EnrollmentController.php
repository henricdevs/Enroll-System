<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Subject;
use App\Models\StudentSubject;
use App\Services\EligibilityService;

class EnrollmentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        $subjects = Subject::all();

        return view('dashboard', compact('students', 'subjects'));
    }

    public function enroll($studentId, $subjectId)
    {
        $student = Student::findOrFail($studentId);
        $subject = Subject::findOrFail($subjectId);

        // Check prerequisite eligibility
        if (!EligibilityService::canEnroll($student, $subject)) {
            return response()->json([
                'message' => 'Student is NOT eligible. Prerequisites not completed.'
            ], 403);
        }

        // Prevent duplicate enrollment
        $existing = StudentSubject::where('student_id', $student->id)
            ->where('subject_id', $subject->id)
            ->exists();

        if ($existing) {
            return response()->json([
                'message' => 'Student already enrolled in this subject.'
            ], 409);
        }

        // Enroll student
        StudentSubject::create([
            'student_id' => $student->id,
            'subject_id' => $subject->id,
            'status' => 'ongoing'
        ]);

        return response()->json([
            'message' => 'Student enrolled successfully.'
        ]);
    }
}