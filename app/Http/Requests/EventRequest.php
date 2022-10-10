<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'name' => ['required'],
            'organizer' => ['required'],
            'image' => ['required','max:2048','mimes:png,jpg,jpeg,webp'],
            'description' => ['required','max:1000'],
            'dateEvent' => ['required']
        ];
    }

    public function messages()
    {
        return[
            'name.required' => "Nama Event wajib diisi",
            'organizer.required' => "Organizer  wajib diisi",

            'image.required' => "Image wajib diisi",
            'image.max' => "Image File terlalu besar harus kurang dari 4mb",
            'image.mimes' => "Image wajib diisi jpg png jpeg",

            'description.required' => "Description wajib diisi",
            'description.max' => "Description maksimal 1000 Karakter",

            'dateEvent.required' => "Tanggal Wajib diisi",
        ];
    }
}
