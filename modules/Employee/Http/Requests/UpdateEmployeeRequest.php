<?php

namespace Modules\Employee\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeeRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string','max:255'],
            'phone' => ['required',Rule::unique('employees','phone')->ignore($this->employee)],
            'email'=>['required','email',Rule::unique('employees','email')->ignore($this->employee)],
            'password'=>'nullable|min:8',
            'company'=>'required',
        
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
