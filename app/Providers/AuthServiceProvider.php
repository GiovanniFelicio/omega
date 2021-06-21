<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Laravel\Passport\Passport;
use Mockery\Generator\StringManipulation\Pass\Pass;
use Modules\Core\Entities\Passport\Client;

class AuthServiceProvider extends ServiceProvider
{

    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    public function boot()
    {
        $this->registerPolicies();

        Passport::routes(null, ['prefix' => 'api/v1']);

        Passport::tokensExpireIn(now()->addHours(4));

        Passport::useClientModel(Client::class);
    }
}
