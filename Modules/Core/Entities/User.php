<?php

namespace Modules\Core\Entities;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'active'
    ];

    protected $table = 'omg_user';

    public function findForPassport($username)
    {
        return $this->where('username', $username)->first();
    }
}
