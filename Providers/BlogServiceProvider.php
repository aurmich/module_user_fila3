<?php

declare(strict_types=1);

namespace Modules\Blog\Providers;

use Illuminate\Routing\Router;
use Modules\Blog\Console\Commands;
use Modules\Blog\Projectors;
use Modules\Xot\Datas\XotData;
use Modules\Xot\Providers\XotBaseServiceProvider;
use Spatie\EventSourcing\Facades\Projectionist;

class BlogServiceProvider extends XotBaseServiceProvider
{
    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

    public string $module_name = 'blog';

    public function bootCallback(): void
    {
        // $kernel = $this->app->make('Illuminate\Contracts\Http\Kernel');
        // $kernel->pushMiddleware(SwitchLanguageLocale::class);
        $router = app('router');
        $this->registerMyMiddleware($router);
        $this->registerRoutes($router);

        $this->registerCommands();

        Projectionist::addProjectors([
            Projectors\BetBalanceProjector::class,
            Projectors\ArticleProjector::class,
            // YetAnotherProjector::class,
        ]);
    }

    public function registerCommands(): void
    {
        $this->commands([
            Commands\RatingArticleCommand::class,
            Commands\RatingArticleWinnerCommand::class,
            Commands\ShowArticleListCommand::class,
            Commands\ShowArticleCommand::class,
            Commands\ProfileRatingsCommand::class,
        ]);
    }

    public function registerRoutes(Router $router): void
    {
        /*$this->app['router']->group(['prefix' => \Config::get('my-package::prefix')], function ($router) {
         $router->get('my-route', 'MyVendor\MyPackage\MyController@action');
         $router->get('my-second-route', 'MyVendor\MyPackage\MyController@otherAction');
        });
        */
        $xot = XotData::make();
        // dddx($xot->main_module);
        // $xot->update(['main_module'=>'Blog']);
        // $router->get('/', $xot->getHomeController());
    }

    public function registerCallback(): void
    {
    }

    public function registerMyMiddleware(Router $router): void
    {
        // $router->pushMiddlewareToGroup('web', SetDefaultLocaleForUrlsMiddleware::class);
        // $router->pushMiddlewareToGroup('web', SwitchLanguageLocale::class);
        // $router->appendMiddlewareToGroup('api', SwitchLanguageLocale::class);
        // dddx(app()->getLocale());
    }
}
