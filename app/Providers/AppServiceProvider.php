<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Livewire\Component;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Component::macro('alert', function ($type, $title, $text, $confirmButtonText, $cancelButton) {
            return  $this->dispatchBrowserEvent('alert', [
                'type' => $type,
                'message' => $title,
                'options' => [
                    'text' => $text,
                    'position'  =>  'center',
                    'timer'  =>  15000,
                    'toast'  =>  false,
                    'showCancelButton' => $cancelButton,
                    'confirmButtonColor' => '#aaa',
                    'cancelButtonColor' => '#aaa',
                    'cancelButtonText' => 'Close',
                    'confirmButtonText' => $confirmButtonText
                ]
            ]);
        });
    }
}
