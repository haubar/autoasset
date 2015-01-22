<?php namespace Kerkerker\Autoasset;

use Illuminate\Support\ServiceProvider;

class AssetServiceProvider extends ServiceProvider
{

  protected $defer = true;

  public function boot()
  {
    $this->app['config']->package('Kerkerker/autoasset', $this->guessPackagePath() .'/config');
  }

  public function register()
  {
    $this->app->bindShared('autoasset', function($app)
    {
      return new AssetBuilder(
          $app['url'], $this->app['config']->get('autoasset::config.filename'));
    });
  }

  public function provides()
  {
    return array('autoasset');
  }
}
