<?php

namespace GooglePassLinkGenerator;

use Illuminate\Support\ServiceProvider;

class GreetingsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
    }

    public function register()
    {
        // Register any bindings or services if necessary
    }
}
