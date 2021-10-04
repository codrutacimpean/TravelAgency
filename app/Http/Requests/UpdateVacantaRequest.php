<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateVacantaRequest extends FormRequest
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
            'Destinatie'=>'required|min:3',
            'Tara'=>'required|max:10',
            'Stele'=>'numeric',
            'Data_Sosire'=>'required|date|after:tomorrow',
            'Modalitate_Transport'=>'required',
            'Pret/Pers/Euro'=>'numeric'
        ];
    }
}
