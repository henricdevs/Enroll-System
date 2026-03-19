<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Level;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::with('level')->get();
        return view('subjects.index', compact('subjects'));
    }

    public function create()
    {
        $levels = Level::all();
        return view('subjects.create', compact('levels'));
    }

    public function store(Request $request)
    {
        Subject::create($request->all());
        return redirect('/subjects');
    }

    public function edit($id)
    {
        $subject = Subject::findOrFail($id);
        $levels = Level::all();
        return view('subjects.edit', compact('subject','levels'));
    }

    public function update(Request $request, $id)
    {
        $subject = Subject::findOrFail($id);
        $subject->update($request->all());
        return redirect('/subjects');
    }

    public function delete($id)
    {
        Subject::destroy($id);
        return redirect('/subjects');
    }
}