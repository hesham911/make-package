<?php

namespace hesham\hpackage;
use Illuminate\Support\ServiceProvider;

Class HpackageServiceProvider extends ServiceProvider
{
    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views','hpackage');

        $this->publishes([
            __DIR__.'/views/hhome.blade.php'  =>   resource_path('views\hhome')
        ]);
    }

    public function register(){

    }
}