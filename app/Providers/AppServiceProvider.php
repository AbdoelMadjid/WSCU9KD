<?php

namespace App\Providers;

use \SmartUI;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //

        // register our UI plugins
        SmartUI\UI::register('widget', 'SmartUI\Components\Widget');
        SmartUI\UI::register('datatable', 'SmartUI\Components\DataTable');
        SmartUI\UI::register('button', 'SmartUI\Components\Button');
        SmartUI\UI::register('tab', 'SmartUI\Components\Tab');
        SmartUI\UI::register('accordion', 'SmartUI\Components\Accordion');
        SmartUI\UI::register('carousel', 'SmartUI\Components\Carousel');
        SmartUI\UI::register('smartform', 'SmartUI\Components\SmartForm');
        SmartUI\UI::register('nav', 'SmartUI\Components\Nav');
    }
}
