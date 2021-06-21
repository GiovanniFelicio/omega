<?php

namespace Modules\Core\Entities\Passport;

use \Laravel\Passport\Client as BaseClient;


class Client extends BaseClient
{
    public function skipsAuthorization()
    {
        return true;
    }
}
