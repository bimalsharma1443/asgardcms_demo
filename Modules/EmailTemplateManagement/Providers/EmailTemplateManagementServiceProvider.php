<?php namespace Modules\EmailTemplateManagement\Providers;

use Illuminate\Support\ServiceProvider;

class EmailTemplateManagementServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerBindings();
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }

    private function registerBindings()
    {
        $this->app->bind(
            'Modules\EmailTemplateManagement\Repositories\Email_TemplateRepository',
            function () {
                $repository = new \Modules\EmailTemplateManagement\Repositories\Eloquent\EloquentEmail_TemplateRepository(new \Modules\EmailTemplateManagement\Entities\Email_Template());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\EmailTemplateManagement\Repositories\Cache\CacheEmail_TemplateDecorator($repository);
            }
        );
// add bindings

    }
}
