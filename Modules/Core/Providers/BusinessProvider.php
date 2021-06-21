<?php

namespace Modules\Core\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Core\Http\Business\Interfaces\PatientBusinessInterface;
use Modules\Core\Entities\Repository\Interfaces\PatientRepositoryInterface;
use Modules\Core\Http\Business\Impls\PatientBusinessImpls;

class BusinessProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(PatientBusinessInterface::class, function ($app) {
            return new PatientBusinessImpls(app(PatientRepositoryInterface::class));
        });
    }

    public function provides()
    {
        return [];
    }
}
