<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class StoreFloorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "name"          => ["required" ,"min:3"],
            "number"        => ["required" ,"unique:floors,number" ,"digits:4"],
            "manager_id"    => Rule::requiredIf(!Auth::user()->hasRole('manager')),
        ];
    }
}
