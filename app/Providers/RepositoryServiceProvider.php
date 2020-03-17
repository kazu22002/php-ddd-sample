<?php
/**
 * Created by PhpStorm.
 * User: kazu22002
 * Date: 2019-09-30
 * Time: 14:28
 */

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     *
     */
    public function register()
    {
        $this->registerApplicationRepository();
        $this->registerDomainRepository();
    }

    private function registerApplicationRepository()
    {
//        $this->app->bind(\UserRepository::class, \EloquentUserRepository::class);
    }

    private function registerDomainRepository()
    {

    }
}
