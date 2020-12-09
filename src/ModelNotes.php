<?php

namespace Chondal\ModelNotes;

class ModelNotes
{
    public function card($model = null)
    {
        if (is_null($model)) {
            return view('ModelNotes::error', [
                'message' => 'enviar modelo',
            ]);
        }
        return view('ModelNotes::card', [
            'model' => $model,
        ]);
    }

    // public function logoutForm()
    // {
    //     return new HtmlString(view('ModelNotes::logout'));
    // }

    // public function loginForm($user)
    // {
    //     return new HtmlString(view('ModelNotes::login', compact(
    //         'user'
    //     )));
    // }
}
