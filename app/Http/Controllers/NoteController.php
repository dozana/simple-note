<?php

namespace App\Http\Controllers;

use App\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index() {
        $notes = Note::all();
        return view('notes.index')->with('notes', $notes);
    }

    public function show($todoId) {
        $note = Note::find($todoId);
        return view('notes.show')->with('note', $note);
    }

    public function create() {
        return view('notes.create');
    }

    public function store() {

        $this->validate(\request(), [
            'title' => 'required|min:6|max:12',
            'description' => 'required',
        ]);

        $data = \request()->all();

        $note = new Note();
        $note->title = $data['title'];
        $note->description = $data['description'];
        $note->completed = $data['completed'];
        $note->save();

        return redirect('/notes');
    }
}
