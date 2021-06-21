<?php


namespace Modules\Core\Entities\Repository\Impls;


use Modules\Core\Entities\Patient;
use Modules\Core\Entities\Repository\Interfaces\PatientRepositoryInterface;

class PatientRepositoryImpl implements PatientRepositoryInterface
{

    public function findAll() {
        return Patient::all();
    }

    public function save(Patient $patient)
    {
        return $patient->save();
    }
}
