<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCoordinate extends FormRequest
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
               'name' => 'required',
                'kind' => 'required',
                'address' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'price' => 'required',
                // 'openweek' => 'required',
                // 'break_week' => 'required',
                // 'close_week' => 'required',
                // 'open_weekend' => 'required',
                // 'break_weekend' => 'required',
                // 'close_weekend' => 'required',
                'note' => 'required'
        ];
    }
}
