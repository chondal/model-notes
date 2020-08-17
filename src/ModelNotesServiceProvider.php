<?php

namespace Chondal\ModelNotes;

use Illuminate\Support\ServiceProvider;

class ModelNotesServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views/', 'ModelNotes');
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        $this->publishes([
            __DIR__ . '/../database/migrations' => database_path('migrations'),
        ], 'model-notes-migrations');

        $this->publishes([
            __DIR__ . '/../resources/views/' => resource_path('views/vendor/ModelNotes'),
        ], 'model-notes-views');
        $this->publishes([
            __DIR__ . '/../config/notes.php' => base_path('config/notes.php'),
        ], 'model-notes-config');
    }

    public function register()
    {
        $this->app->bind('model-notes', function () {
            return new ModelNotes;
        });

        $this->mergeConfigFrom(__DIR__ . '/../config/notes.php', 'notes');
    }

}
