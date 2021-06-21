<?php


namespace Modules\Core\Http\Validators;

use App\Utils\ExceptionUtil;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class PatientValidator
{

    public static function validateRequestBodyToSave(Request $request)
    {

        $validator = Validator::make($request->all(),
            [
                'code' => 'required|integer|digits_between:5,100'
            ]
        );

        if ($validator->fails()) {
            ExceptionUtil::resolveValidatorException($validator->getMessageBag());
        }
    }

}
