<?php

namespace Chondal\ModelNotes\Http\Controllers;

use App\Http\Controllers\Controller;
use Chondal\ModelNotes\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{

    public function store(Request $request, $model, $id)
    {
        $request->validate([
            'body' => 'required|min:10|max:' . config('notes.maxlength'),
        ]);

        $obj = $model::findOrFail($id);
        $obj->notes()->create([
            'body' => $request->body,
            'author_id' => Auth::user()->id,
        ]);

        flash("Nota guardada correctamente")
            ->success()->important();

        return back();
    }

    public function destroy(Note $note)
    {
        try {

            if ($note->author_id != Auth::user()->id) {
                flash("No podes borrar una nota que no esta creada por vos.")
                    ->error()->important();
                return back();
            }

            $note->delete();

            flash("Eliminaste tu nota correctamente.")
                ->success()->important();

            return back();
        } catch (\Exception $ex) {
            flash("Error: {ex->getMessage()}")->error()->important();
            return back();
        }
    }

}
