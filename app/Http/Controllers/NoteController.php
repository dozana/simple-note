<?php

namespace App\Http\Controllers;

use App\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::all();
        return view('notes.index')->with('notes', $notes);
    }

    public function show(Note $note)
    {
        return view('notes.show')->with('note', $note);
    }

    public function create()
    {
        return view('notes.create');
    }

    public function store()
    {
        $this->validate(\request(), [
            'title' => 'required|min:6',
            'description' => 'required',
        ]);

        $data = \request()->all();

        $note = new Note();
        $note->title = $data['title'];
        $note->description = $data['description'];
        $note->completed = false;
        $note->save();

        session()->flash('success', 'Note created successfully.');

        return redirect('/notes');
    }

    public function edit(Note $note)
    {
        return view('notes.edit')->with('note', $note);
    }

    public function update(Note $note)
    {
        $this->validate(\request(), [
            'title' => 'required|min:6',
            'description' => 'required',
        ]);

        $data = \request()->all();

        $note->title = $data['title'];
        $note->description = $data['description'];
        $note->save();

        session()->flash('success', 'Note updated successfully.');

        return redirect('/notes');
    }

    public function destroy(Note $note)
    {
        $note->delete();

        session()->flash('success', 'Note deleted successfully.');

        return redirect('/notes');
    }
}
