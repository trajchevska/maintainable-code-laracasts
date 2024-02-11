<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\{WireRepositoryInterface, PayoneerRepositoryInterface, WiseRepositoryInterface, PaymentOption};
use App\Repositories\{WireRepository, PayoneerRepository, WiseRepository};
use App\Services\PaymentOptions\{Wire, Payoneer, Wise};

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(WireRepositoryInterface::class, WireRepository::class);
        $this->app->bind(PayoneerRepositoryInterface::class, PayoneerRepository::class);
        $this->app->bind(PayoneerRepositoryInterface::class, PayoneerRepository::class);
        $this->app->bind(WiseRepositoryInterface::class, WiseRepository::class);
        $this->app->bind(PaymentOption::class, function ($app) {
            if (request()->input('payment_type') == 'wire') {
                return $app->make(Wire::class);
            } elseif (request()->input('payment_type') == 'payoneer') {
                return $app->make(Payoneer::class);
            } elseif (request()->input('payment_type') == 'wise') {
                return $app->make(Wise::class);
            } else {
                throw new \Exception('Invalid payment type.');
            }
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
