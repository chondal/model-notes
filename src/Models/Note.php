<?php

namespace Chondal\ModelNotes\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{

    protected $guarded = [];

    protected $appends = ['created', 'authorName'];

    public function notable()
    {
        return $this->morphTo();
    }
    public function user()
    {
        return $this->belongsTo(config('notes.user_model'), 'author_id');
    }

    /**
     * The author relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author()
    {
        return $this->belongsTo(config('notes.authors.model'));
    }

    public function getAuthorNameAttribute()
    {
        return $this->author->name . ' | ' . $this->author->email;
    }

    public function getCreatedAttribute()
    {
        if (config('notes.date_show_humans')) {
            return $this->created_at->diffForHumans();
        } else {
            return $this->created_at;
        }
    }

}
