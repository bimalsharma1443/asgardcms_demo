<?php namespace Modules\Questionnaire\Providers;

use Illuminate\Support\ServiceProvider;

class QuestionnaireServiceProvider extends ServiceProvider
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
            'Modules\Questionnaire\Repositories\QuestionnaireRepository',
            function () {
                $repository = new \Modules\Questionnaire\Repositories\Eloquent\EloquentQuestionnaireRepository(new \Modules\Questionnaire\Entities\Questionnaire());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Questionnaire\Repositories\Cache\CacheQuestionnaireDecorator($repository);
            }
        );
// add bindings

    }
}
