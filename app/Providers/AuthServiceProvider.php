<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        'App\Models\Task' => 'App\Policies\TaskPolicy',
    ];

    /**
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        Passport::routes();

        // access_token 設定核發後15天過期
        Passport::tokensExpireIn(now()->addDays(15));

        // refresh_token 設定核發後30天過期
        Passport::refreshTokensExpireIn(now()->addDays(30));

        Passport::tokensCan([
            'create-animals' => '建立動物資訊',
            'user-info' => '使用者資訊'
        ]);
    }
}
