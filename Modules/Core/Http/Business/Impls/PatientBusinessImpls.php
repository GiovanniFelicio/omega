<?php


namespace Modules\Core\Http\Business\Impls;

use Illuminate\Http\Request;
use Modules\Core\Entities\Patient;
use Modules\Core\Entities\Repository\Interfaces\PatientRepositoryInterface;
use Modules\Core\Http\Business\Interfaces\PatientBusinessInterface;
use Modules\Core\Http\Validators\PatientValidator;

class PatientBusinessImpls implements PatientBusinessInterface
{
    protected $repository;

    public function __construct(PatientRepositoryInterface $patientRepository)
    {
        $this->repository = $patientRepository;
    }

    public function findAll()
    {
        return $this->repository->findAll();
    }

    public function save(Request $request)
    {
        PatientValidator::validateRequestBodyToSave($request);

        $patient = new Patient();
        $patient->code = $request['code'];
        $patient->person_id = '2';

        $patient = $this->repository->save($patient);

        return response()->json($patient);
    }
}
