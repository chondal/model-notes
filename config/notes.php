<?php

return [
    'user_model' => \App\User::class,
    'date_show_humans' => true,
    'maxlength' => 400,

    'authors' => [
        'table' => 'users',
        'model' => \App\User::class,
    ],
    'display' => [
        'scrolleable' => true,
    ],
];
