<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Notifications\DatabaseNotificationCollection;
use Illuminate\Validation\Rules\Password;

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
        Password::defaults(function () {
            return Password::min(8)
                    ->letters()
                    ->mixedCase()
                    ->numbers()
                    ->symbols()
                    ->uncompromised();
        });

        DatabaseNotificationCollection::macro('addModels', function () {
            return $this->each(function ($notification) {
                if(Arr::exists($notification->data, 'models')) {
                    foreach($notification->data['models'] as $key => $id) {
                        $model = "\App\Models\\$key";
                        $models[$key] = $model::find((int)$id); // find() and findOrFail() need an integer to return one element.
                    }
                    $notification->models = $models;
                }
            });
        });
     }
}
