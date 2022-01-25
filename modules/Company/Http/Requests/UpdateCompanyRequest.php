<?php

namespace Modules\Company\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanyRequest extends FormRequest
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
            'phone' => ['required',Rule::unique('companies','phone')->ignore($this->company)],
            'email'=>['required','email',Rule::unique('companies','email')->ignore($this->company)],
            'address'=>'required|max:255',
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
