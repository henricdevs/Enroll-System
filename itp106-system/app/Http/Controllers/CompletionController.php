<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Completion;

class CompletionController extends Controller
{
    public function index()
    {
        $students = Student::all();
        $subjects = Subject::all();
        $completions = Completion::all();

        return view('completions.index', compact('students','subjects','completions'));
    }

    public function store(Request $request)
    {
        Completion::create([
            'student_id' => $request->student_id,
            'subject_id' => $request->subject_id
        ]);

        return redirect('/completions');
    }
}