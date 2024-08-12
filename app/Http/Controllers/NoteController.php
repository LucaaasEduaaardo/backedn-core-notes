<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Http\Resources\NoteResource;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index()
    {
        return NoteResource::collection(Note::orderBy('favorite', 'desc')->get());
    }

    public function store(Request $request)
    {
        $note = Note::create($request->all());

        return new NoteResource($note);
    }

    public function show($id)
    {
        return new NoteResource(Note::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $note = Note::findOrFail($id);
        $note->update($request->all());

        return new NoteResource($note);
    }

    public function destroy($id)
    {
        $note = Note::findOrFail($id);
        $note->delete();

        return response()->json(null, 204);
    }
}
