<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Note;
use App\Card;

class NotesController extends Controller
{
    public function store(Request $resquest, Card $card)
    {
    	// $note = new Note;
    	
    	// $note->body = $resquest->body;
    	
    	// $card->notes()->save($note);

    	$card->addNote(
    		new Note($resquest->all())
    	);

    	return back();
    }

    public function edit(Note $note)
    {
        return view('notes.edit', compact('note'));
    }

    public function update(Request $request, Note $note)
    {
        $note->update($request->all());

        return redirect("/cards/{$note->card_id}");
    }
}
