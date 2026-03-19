<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Subject; 
use Illuminate\Http\Request;


class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        Student::create($request->all());
        return redirect('/students');
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $student->update($request->all());
        return redirect('/students');
    }

    public function delete($id)
    {
        Student::destroy($id);
        return redirect('/students');
    }








    public function progress($id)
{
    $student = Student::findOrFail($id);

    $completed = $student->subjects()
        ->wherePivot('status', 'completed')
        ->get();

    $ongoing = $student->subjects()
        ->wherePivot('status', 'ongoing')
        ->get();

    $eligible = [];

    $subjects = Subject::all();

    foreach ($subjects as $subject) {

        if (\App\Services\EligibilityService::canEnroll($student, $subject)) {

            $alreadyTaken = $student->subjects()
                ->where('subject_id', $subject->id)
                ->exists();

            if (!$alreadyTaken) {
                $eligible[] = $subject;
            }

        }
    }

    return view('students.progress', compact(
        'student',
        'completed',
        'ongoing',
        'eligible'
    ));
}
}