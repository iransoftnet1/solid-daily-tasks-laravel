<?php

namespace TaskApp;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class TaskServiceProvider extends ServiceProvider
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
        $this->loadMigrationsFrom([
            base_path('task_app/migrations')
        ]);
        $this->loadViewsFrom(base_path('task_app/views'),'Task');
        Route::middleware('web')
            ->group(base_path('task_app/route_auth.php'));
    }
}
