<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
   
    public function index()
    {
        return view('notes.index', [
            'notes' => Note::latest()->get()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        Note::create($request->all());

        return back();
    }

    public function update(Request $request, Note $note)
    {
        $note->update($request->all());
        return back();
    }

    public function destroy(Note $note)
    {
        $note->delete();
        return back();
    }
    
    public function showNote()
    {
        return view('notes.showNote');
    }
    public function dashboard()
    {
   
    $notes = Note::latest()->get();
    
    return view('dashboard', compact('notes'));
    }

}


