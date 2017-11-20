<?php
namespace imranrbx\Facebook;

use Illuminate\Support\ServiceProvider;

use Imranrbx\Facebook\Library\Facebook;

class FacebookServiceProvider extends ServiceProvider
{

    public  function boot(){
    	$this->loadRoutesFrom(__DIR__."/routes.php");
    	 $this->publishes([
        __DIR__.'/Config/facebook.php' => config_path('facebook.php'),
    ]);
    	 $this->loadViewsFrom(__DIR__.'/Views','fbp');
    	 $this->publishes([
        __DIR__.'/Views' => resource_path('views/vendor/fbp'),
    ]);
    }
    public function register()
    {
  		$this->app->bind('fbm', function($app){
  			return new Facebook(config('facebook.fb'));
  		});

    }
}
