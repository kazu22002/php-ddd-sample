<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        # 商用環境以外だった場合、SQLログを出力する
        if (config('app.env') !== 'production') {
//            \DB::listen(function ($query) {
//                $sql = $query->sql;
//                for ($i = 0; $i < count($query->bindings); $i++) {
//                    $sql = preg_replace("/\?/", $query->bindings[$i], $sql, 1);
//                }
//                \Log::info("Query Time:{$query->time}s] $sql ");
//            });
        }
    }
}
