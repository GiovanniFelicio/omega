<?php

namespace Modules\Core\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Core\Entities\User;
use Modules\Core\Http\Resource\UserResource;

class UserController extends Controller
{
    public function index()
    {
        return new Response(User::all(), Response::HTTP_ACCEPTED);
    }

    public function store(Request $request)
    {
        //
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
