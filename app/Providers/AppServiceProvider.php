<?php

namespace App\Providers;

use Livewire\Livewire;
use Livewire\Component;
use function Livewire\on;
use function Livewire\store;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        on('dehydrate', function (Component $component) {
            if (! Livewire::isLivewireRequest()) {
                return;
            }

            if (store($component)->has('redirect')) {
                return;
            }

            if($component instanceof \App\Livewire\Number) {
                return;
            }

            $component->dispatch('increment-number');
        });
    }
}
