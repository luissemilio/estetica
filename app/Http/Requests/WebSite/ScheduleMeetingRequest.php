<?php

namespace App\Http\Requests\WebSite;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class ScheduleMeetingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'bail|required|string|max:255',
            'email' => 'bail|required|email|max:255',
            'phone' => 'bail|required|string',
            'mesage' => 'bail|required|string'
        ];
    }

    /**
     *Return all errors in ResponseResponse if validations fail
     */
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->json(['errors' => $validator->errors()], 400)
        );
    }

    /**
     * Return messages for the validation rules that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required'        => 'El nombre es requerido',
            'email.required'        => 'El email es requerido',
            'email.email'        => 'El email debe ser de tipo correo electronico',
			'phone.required' => 'El telefono es requerido',
			'mesage.required' => 'El mensaje es requerido',
        ];
    }

}
