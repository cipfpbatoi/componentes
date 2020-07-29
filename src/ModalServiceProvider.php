<?php // src/ModalServiceProviderphp

namespace Batoi;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class ModalServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'batoi-modal');

        Blade::component('Batoi\Modal','modal');
    }
}