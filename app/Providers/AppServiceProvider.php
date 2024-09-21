<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator; //追記

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
       Paginator::useBootstrap();    //追記


}

public function boot(): void
{

    //
}
}