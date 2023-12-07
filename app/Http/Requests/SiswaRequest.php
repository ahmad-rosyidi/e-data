<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SiswaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules()
    {
        return [
            'nama_awal' => 'required|max:30|regex:/^[\pL\pM ]+$/u',
            'nama_akhir' => 'required|max:30|regex:/^[\pL\pM ]+$/u',
            'email' => 'required|email:dns|unique:siswa|unique:users',
            'password' => 'required|min:8',
            'status' => 'required|in:0,1',
        ];
    }

    public function messages()
    {
        return [
            'nama_awal.required' => 'Nama awal siswa wajib diisi!',
            'nama_akhir.required' => 'Nama akhir siswa wajib diisi!',
            'email.required' => 'Email siswa wajib diisi!',
            'password.required' => 'Kata sandi wajib diisi!',
            'status.required' => 'Status wajib dipilih!',

            'password.min' => 'Kata sandi minimal 8 karakter!',

            'email.unique' => 'Email sudah terdaftar!',
            'email.dns' => 'Email tidak sah!',

            'status.in' => 'Invalid!',
        ];
    }
}
