<?php

namespace hesham\hpackage;
use Illuminate\Support\ServiceProvider;

Class HpackageServiceProvider extends ServiceProvider
{
    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views','hpackage');
    }

    public function register(){

    }
}