<?php

namespace Modules\Core\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Person extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'date_birth',
        'active',
        'created_at',
        'updated_at'
    ];

    protected $primaryKey = 'id';

    protected $table = 'omg_person';

    protected static function newFactory()
    {
        return \Modules\Core\Database\factories\PersonFactory::new();
    }
}
