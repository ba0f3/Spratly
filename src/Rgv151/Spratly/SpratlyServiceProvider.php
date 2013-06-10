<?php namespace Rgv151\Spratly;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class SpratlyServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('rgv151/spratly');

        include __DIR__.'/../../routes.php';
        include __DIR__.'/../../views.php';
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
        //$this->registerDependency();
        //new CreateDemoDataCommand();

        $this->app['command.spratly.demo'] = $this->app->share(function($app)
        {
            return new CreateDemoDataCommand;
        });
        $this->commands('command.spratly.demo');
	}

    /**
     * Manually register mandatory services
     *
     * @return void
     */
    public function registerDependency() {

        $providers = array ();
        $aliases = array();
        if(class_exists('Zizaco\Entrust\EntrustServiceProvider')) {
            $providers[] = 'Zizaco\Entrust\EntrustServiceProvider';
            $aliases['Entrust'] = 'Zizaco\Entrust\EntrustFacade';
        }

        if(class_exists('Zizaco\Confide\ConfideServiceProvider')) {
            $providers[] = 'Zizaco\Confide\ConfideServiceProvider';
            $aliases['Confide'] = 'Zizaco\Confide\EntrustFacade';
        }

        $this->app->getProviderRepository()->load($this->app, $providers);
        AliasLoader::getInstance()->register($aliases);
    }

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('command.spratly.demo');
	}

}