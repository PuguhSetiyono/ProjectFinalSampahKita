<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PelangganLoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Ubah menjadi true jika otorisasi diperlukan
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email_pl' => 'required|email',
            'password_pl' => 'required',
        ];
    }
}

