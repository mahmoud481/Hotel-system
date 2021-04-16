<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UpdateRoomRequest extends FormRequest
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
            "number"        => ["required" ,"unique:rooms,number,".$this->room->id ,"min:4"],
            "capacity"      => ["required"],
            "price"         => ["required"],
            "floor_id"      => ["required" , "exists:floors,id"],
            "manager_id"    => Rule::requiredIf(!Auth::user()->hasRole('manager')),
        ];
    }
}
