<?php

namespace App\Http\Requests;

use App\Amenity;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use App\Rules\Letters;
use Symfony\Component\HttpFoundation\Response;

class UpdateAmenityRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('amenity_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'required',
            ],
        ];
    }
}
