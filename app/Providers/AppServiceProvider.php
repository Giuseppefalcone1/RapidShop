<?php

namespace App\Providers;

use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Schema;

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
        if(Schema::hasTable('announcements') && Schema::hasTable('categories'))
        {
            $announcements = Announcement::all();
            $categories = Category::all();
            View::share('categories',$categories);
            View::share('announcements',$announcements);
        }
    }
}
