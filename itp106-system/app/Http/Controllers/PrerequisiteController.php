<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Prerequisite;

class PrerequisiteController extends Controller
{
    public function index()
    {
        $subjects = Subject::all();
        $prerequisites = Prerequisite::all();

        return view('prerequisites.index', compact('subjects','prerequisites'));
    }

    public function store(Request $request)
    {
        Prerequisite::create([
        'subject_id' => $request->subject_id,
        'prerequisite_subject_id' => $request->prerequisite_id
    ]);

        return redirect('/prerequisites');
    }
}