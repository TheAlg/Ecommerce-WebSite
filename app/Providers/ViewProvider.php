<?php
declare(strict_types=1);

namespace Base\Providers;

use Phalcon\Config;
use Phalcon\Di\DiInterface;
use Phalcon\Di\ServiceProviderInterface;
use Phalcon\Mvc\View;
use Phalcon\Mvc\View\Engine\Volt;
use Base\Container\Application;
use App\Forms\LoginForm;
use App\Forms\SignUpForm;
use Base\Plugins\Views;
use function Base\Container\getCurrentUri;

class ViewProvider implements ServiceProviderInterface
{
    /**
     * @var string
     */
    protected $providerName = 'view';

    /**
     * @param DiInterface $di
     */
    public function register(DiInterface $di): void
    {
        /** @var Config $config */
        $config = $di->getShared('config');
        /** @var string $viewsDir */
        $viewsDir = $config->path('application.viewsDir');
        /** @var string $cacheDir */
        $cacheDir = $config->path('application.cacheDir');
        /** @var string $partialeDir */
        $partialDir = $config->path('application.partialDir');
        $LayoutsDir = $config->path('application.LayoutsDir');
        $di->setShared($this->providerName, function () use ($viewsDir, $cacheDir, $partialDir, $LayoutsDir, $di) {
            $view = new View();
            //globale variables
            $view->url = getCurrentUri();
            //forms
            $view->loginForm = new loginForm();
            $view->singUpForm = new SignUpForm();
            //cart variables
            $view->cart_count = $di->get('cart')->instance('cart')->count();
            $view->cart_items = $di->get('cart')->instance('cart')->content();
            $view->cart_totalPrice = $di->get('cart')->instance('cart')->total();

            
            $view->setViewsDir($viewsDir);
            $view->setPartialsDir($partialDir);
            $view->setLayoutsDir($LayoutsDir);
            $view->registerEngines([
                '.volt' => function (View $view) use ($cacheDir, $di) {
                    $volt = new Volt($view, $di);
                    $volt->setOptions([
                        'always'     => true,
                        //'path'      => $cacheDir . 'volt/',
                        'separator' => '_',
                    ]);
                    $volt->getCompiler()->addFunction('contains','str_contains');
                    $volt->getCompiler()->addFunction('push','array_push');
                    $volt->getCompiler()->addFunction('sizeof','sizeof');


                    return $volt;
                },
            ]);
            return $view;
        });
        //view functions
        $di->setShared(
            'v', function (){
                return new Views;
            });
    }
}
