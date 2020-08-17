<?php

namespace Chondal\ModelNotes\Traits;

trait HasNotes
{

    public function createNote()
    {
        return 'nada';
    }

    public function notes()
    {
        return $this->morphMany(\Chondal\ModelNotes\Models\Note::class, 'notable');
    }

    public function noteModel()
    {
        return [
            'model' => get_class($this),
            'id' => $this->id,
        ];
    }

}
