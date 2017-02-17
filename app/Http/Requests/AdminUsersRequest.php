<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AdminUsersRequest extends Request
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
            'name'                  =>  'required|min:3|max:255',
            'email'                 =>  'required|email|unique:users',
            'role_id'               =>  'required|digits_between:1,10',
            'is_active'             =>  'required|digits_between:0,1',
            'password'              =>  'required|min:6|max:255|confirmed'
        ];
    }
}
