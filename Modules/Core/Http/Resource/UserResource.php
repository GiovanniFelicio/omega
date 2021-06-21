<?php


namespace Modules\Core\Http\Resource;


use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'username' => $this->username,
            'email' => $this->email
        ];
    }
}
