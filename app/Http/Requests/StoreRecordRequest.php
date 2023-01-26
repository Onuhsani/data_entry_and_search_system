<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRecordRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'gf1' => 'required | string | max:3',
            'ga1' => 'required | string | max:3',
            'gf2' => 'required | string | max:3',
            'ga2' => 'required | string | max:3',
            'score1' => 'required | string | max:30',
            'score2' => 'required | string | max:30',
        ];
    }
}