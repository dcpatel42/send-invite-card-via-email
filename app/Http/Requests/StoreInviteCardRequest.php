<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInviteCardRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'card_name' => 'required|max:255',
            'guest_list' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'province' => 'required',
            'country' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg',
            'font_file' => 'required|mimes:jpeg,jpg',
            'font_size' => 'nullable|numeric',
            'font_color' => 'nullable|string',
            'pos_x' => 'nullable|numeric',
            'pos_y' => 'nullable|numeric',
            'angle' => 'nullable|numeric',
            'status' => 'nullable|in:0,1'
        ];
    }
}
