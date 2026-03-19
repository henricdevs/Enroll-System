<?php

namespace App\Http\Controllers;

use App\Models\Level;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function index()
    {
        $levels = Level::all();
        return view('levels.index', compact('levels'));
    }

    public function create()
    {
        return view('levels.create');
    }

    public function store(Request $request)
    {
        Level::create($request->all());
        return redirect('/levels');
    }

    public function edit($id)
    {
        $level = Level::findOrFail($id);
        return view('levels.edit', compact('level'));
    }

    public function update(Request $request, $id)
    {
        $level = Level::findOrFail($id);
        $level->update($request->all());
        return redirect('/levels');
    }

    public function delete($id)
    {
        Level::destroy($id);
        return redirect('/levels');
    }
}