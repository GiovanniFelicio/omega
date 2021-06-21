<?php

namespace Modules\Core\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Core\Entities\Repository\Impls\PatientRepositoryImpl;
use Modules\Core\Entities\Repository\Interfaces\PatientRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(PatientRepositoryInterface::class, PatientRepositoryImpl::class);
    }

    public function provides()
    {
        return [];
    }
}
