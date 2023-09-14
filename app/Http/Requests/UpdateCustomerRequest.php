<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCustomerRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'unit_count' => 'required|integer|max:10',
            'start_time' => 'required|string',
            'name' => 'required|string|max:50',
            'name_kana' => 'required|string|max:50',
            'post_code' => 'required|string|max:8',
            'address_1' => 'required|string|max:50',
            'address_2' => 'required|string|max:50',
            'address_3' => 'required|string|max:50',
            'tel_number' => 'required|string|max:20',
            'email' => 'required|string|max:50',
        ];
    }
}
