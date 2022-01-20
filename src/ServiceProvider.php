<?php

namespace McGo\Stamplate;

use Illuminate\Support\Carbon;
use McGo\Statamic\Vorlage\Commands\InstallTemplates;
use McGo\Statamic\Vorlage\Commands\UpdateTemplates;
use Statamic\Providers\AddonServiceProvider;
use Statamic\Statamic;

class ServiceProvider extends AddonServiceProvider
{

    public function boot()
    {
        parent::boot();

        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallTemplates::class,
                UpdateTemplates::class,
            ]);
        }
    }


    public function register()
    {
        parent::register(); // TODO: Change the autogenerated stub

        $locale = config('app.locale');
        Carbon::setLocale($locale);
        setlocale(LC_TIME, $locale);
    }
}