<?php


namespace Modules\Core\Entities\Repository\Interfaces;


use Modules\Core\Entities\Patient;

interface PatientRepositoryInterface
{

    public function findAll();

    public function save(Patient $patient);

}
