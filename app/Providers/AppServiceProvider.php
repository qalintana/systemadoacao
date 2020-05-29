<?php

namespace App\Providers;

use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Support\ServiceProvider;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

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
    public function boot(Dispatcher $events)
    {
        //
        $events->listen(BuildingMenu::class, function(BuildingMenu $event){
            $event->menu->addBefore('perfil', [
                'key' => 'perfil',
                'text' => 'Mensagens',
                'label' => \App\Contact::all()->count(),
                'url' => '/admin/messages',
                'icon'=>'fas fa-sms'
            ]);
        });

    }
}
