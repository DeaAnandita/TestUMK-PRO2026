<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRoomRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'kode_ruang' => 'required|unique:rooms,kode_ruang,' . $this->room,
            'nama_ruang' => 'required|max:100',
            'gedung' => 'required|max:100',
            'kapasitas' => 'required|integer|min:1',
            'fasilitas' => 'nullable|string',
            'status' => 'required|boolean',
        ];
    }
    
}
