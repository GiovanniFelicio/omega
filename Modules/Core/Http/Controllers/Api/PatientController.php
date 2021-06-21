<?php

namespace Modules\Core\Http\Controllers\Api;

use \Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Core\Http\Business\Interfaces\PatientBusinessInterface;

class PatientController extends Controller
{
    private $business;

    public function __construct(PatientBusinessInterface $patientBusiness)
    {
        $this->business = $patientBusiness;
    }

    public function index()
    {
        return new Response($this->business->findAll(), 200);
    }

    public function store(Request $request)
    {
        return new Response($this->business->save($request), Response::HTTP_CREATED);
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
