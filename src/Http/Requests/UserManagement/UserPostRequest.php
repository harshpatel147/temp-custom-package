<?php

namespace Smiley\UserCrud\Http\Requests\UserManagement;

use Illuminate\Foundation\Http\FormRequest;

class UserPostRequest extends FormRequest
{
    /**
     * The URI that users should be redirected to if validation fails.
     *
     * @var string
     */
    // protected $redirect = '/';

    // /**
    //  * Determine if the user is authorized to make this request.
    //  *
    //  * @return bool
    //  */
    // public function authorize()
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if($this->isMethod('PUT') && $this->route()->named('usercrud::admin.user.edit')){
            return [
                'name' => 'required',
                'email' => 'required|email',
                'contact_number' => 'required',
            ];
        }else{
            return [
                'name' => 'required',
                'email' => 'required|email|unique:' . config('usercrud.table_names.users'),
                'password' => 'required',
                'contact_number' => 'required'
            ];
        }
    }
}
