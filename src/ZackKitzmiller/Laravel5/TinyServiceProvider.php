<?php namespace ZackKitzmiller\Laravel5;

use ZackKitzmiller\Tiny;
use Illuminate\Support\ServiceProvider;

class TinyServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->app->singleton('tiny.generate', function () {
            return new TinyGenerateCommand();
        });

        $this->commands('tiny.generate');
    }

    public function register()
    {
        $this->app->singleton('tiny', function () {
            $key = getenv('LEAGUE_TINY_KEY');

            return new Tiny($key);
        });
    }

    public function provides()
    {
        return array('tiny');
    }
}
