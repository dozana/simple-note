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
}
