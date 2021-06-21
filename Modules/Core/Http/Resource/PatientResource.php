<?php


namespace Modules\Core\Http\Resource;


use Illuminate\Http\Resources\Json\JsonResource;

class PatientResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'code' => $this->code
        ];
    }

}
