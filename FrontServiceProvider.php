<?php namespace Foostart\Front;

use Illuminate\Support\ServiceProvider;
use LaravelAcl\Authentication\Classes\Menu\SentryMenuFactory;
use URL,
    Route;
use Illuminate\Http\Request;

class FrontServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(Request $request) {

        // load view
        $this->loadViewsFrom(__DIR__ . '/Views', 'package-front');

        // include view composers
        require __DIR__ . "/composers.php";

        // publish config
        $this->publishConfig();

        // publish lang
        $this->publishLang();

        // publish views
        $this->publishViews();

        // publish assets
        $this->publishAssets();
    }

    /**
     * Register the application services.
     * @return void
     */
    public function register() {
        include __DIR__ . '/routes.php';
    }

    /**
     * Public config to system
     * @source: vendor/foostart/package-front/config
     * @destination: config/
     */
    protected function publishConfig() {
        $this->publishes([
            __DIR__ . '/config/package-front.php' => config_path('package-front.php'),
                ], 'config');
    }

    /**
     * Public language to system
     * @source: vendor/foostart/package-front/lang
     * @destination: resources/lang
     */
    protected function publishLang() {
        $this->publishes([
            __DIR__ . '/lang' => base_path('resources/lang'),
        ]);
    }

    /**
     * Public view to system
     * @source: vendor/foostart/package-front/Views
     * @destination: resources/views/vendor/package-front
     */
    protected function publishViews() {

        $this->publishes([
            __DIR__ . '/Views' => base_path('resources/views/vendor/package-front'),
        ]);
    }

    /**
     * Published assets
     */
    protected function publishAssets() {

        $this->publishes([
            __DIR__ . '/public' => public_path('packages/foostart/package-front'),
        ]);
    }

}