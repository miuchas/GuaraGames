<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      $this->publishes([
      'vendor/bootstrap/dist' => public_path('vendor/bootstrap'),
      ], 'public');
      $games = DB::table("games")->select('id', 'Nome')->get();
      view()->share('games', $games);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
