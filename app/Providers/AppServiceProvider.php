<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::directive('selfdateformate',function($dateformat){
            return "<?php echo ($dateformat)->format('m/d/Y');?>";
        });

        Blade::directive('allupper',function($allupper){
            return "<?php echo strtoupper($allupper); ?>";
        });
    }
}
