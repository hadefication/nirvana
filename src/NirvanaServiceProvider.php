<?php
namespace Hadefication\Nirvana;

use Illuminate\Support\ServiceProvider;

class NirvanaServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('nirvana', function () {
            return $this->app->make('Hadefication\Nirvana\Nirvana');
        });
    }

    /**
     * Boot
     *
     * @return void
     */
    public function boot()
    {
        // Add resources here...
    }
}
