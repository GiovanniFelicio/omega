<?php

namespace Modules\Core\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Diet\Entities\Person;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'person_id',
        'code',
        'created_at',
        'updated_at'
    ];

    protected $primaryKey = 'id';

    protected $table = 'omg_patient';

    protected function person()
    {
        return $this->hasMany(Person::class, 'person_id', 'id');
    }

    protected static function newFactory()
    {
        return \Modules\Diet\Database\factories\PatientFactory::new();
    }
}
