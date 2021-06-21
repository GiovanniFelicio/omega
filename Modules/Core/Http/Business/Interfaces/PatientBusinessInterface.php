<?php


namespace Modules\Core\Http\Business\Interfaces;

use Illuminate\Http\Request;

interface PatientBusinessInterface
{

    public function findAll();

    public function save(Request $request);

}
