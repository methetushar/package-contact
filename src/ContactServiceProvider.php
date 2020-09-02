<?php
namespace tusharahmed\Contact;
use  \Illuminate\Support\ServiceProvider;
class ContactServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/view','contact');
    }

    public function register()
    {

    }
}
