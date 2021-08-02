<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DataPendudukRequest extends FormRequest
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
            'nik' => ['required', 'integer'],
            'no_kartu_keluarga' => [
                'required', 'integer'
            ],
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => ['required', 'date'],
            'jenis_kelamin_id' => ['required', 'integer', 'exists:jenis_kelamin,id'],
            'agama_id' => ['required', 'integer', 'exists:agama,id'],
            'status_id' => ['required', 'integer', 'exists:status,id'],
            'pendidikan' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required'
        ];
    }
}
