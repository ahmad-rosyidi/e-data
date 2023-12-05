<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SiswaRequest;
use App\Models\Log;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Siswa::all();
        return view(
            'admin.siswa.index',
            compact('data')
        );
    }

    public function simpan(SiswaRequest $request)
    {
        $nama_awal = Str::title($request->nama_awal);
        $nama_akhir = Str::title($request->nama_akhir);

        Siswa::create([
            'nama_awal' => $nama_awal,
            'nama_akhir' => $nama_akhir,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'status' => $request->status,
        ]);

        $log = 'Menambah data siswa: ';
        Log::create([
            'aktifitas' => $log . $nama_awal . " " . $nama_akhir,
            'user_id' => auth()->user()->id,
            'oleh' => auth()->user()->name,
        ]);


        return redirect()->route('admin.siswa.index')->with('success', 'Data berhasil dibuat!');
    }

    public function status_aktif(Request $request, $id)
    {
        $data = Siswa::find($id);

        $nama_awal = Str::title($data->nama_awal);
        $nama_akhir =  Str::title($data->nama_akhir);

        DB::table('siswa')
            ->where('id', '=', $id)
            ->update(['status' => '1']);

        $log = 'Mengaktifkan data siswa: ';
        Log::create([
            'aktifitas' => $log . $nama_awal . " " . $nama_akhir,
            'user_id' => auth()->user()->id,
            'oleh' => auth()->user()->name,
        ]);

        return redirect()->back()->with('success', 'Data berhasil diperbaharui!');
    }

    public function status_tidak_aktif(Request $request, $id)
    {
        $data = Siswa::find($id);

        $nama_awal = Str::title($data->nama_awal);
        $nama_akhir =  Str::title($data->nama_akhir);

        DB::table('siswa')
            ->where('id', '=', $id)
            ->update(['status' => '0']);

        $log = 'Me-non-aktifkan data siswa: ';
        Log::create([
            'aktifitas' => $log . $nama_awal . " " . $nama_akhir,
            'user_id' => auth()->user()->id,
            'oleh' => auth()->user()->name,
        ]);

        return redirect()->back()->with('success', 'Data berhasil diperbaharui!');
    }

    public function hapus(Request $request, $id)
    {
        $data = Siswa::find($id);

        $nama_awal = Str::title($data->nama_awal);
        $nama_akhir =  Str::title($data->nama_akhir);

        DB::table('siswa')
            ->where('id', '=', $id)
            ->delete();

        $log = 'Menghapus data siswa: ';
        Log::create([
            'aktifitas' => $log . $nama_awal . " " . $nama_akhir,
            'user_id' => auth()->user()->id,
            'oleh' => auth()->user()->name,
        ]);

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }

    public function ubah(Request $request, $id)
    {
        $data = Siswa::find($id);
        return view('admin.siswa.modal-edit', ['data' => $data]);
    }

    public function perbarui(Request $request, string $id)
    {

        $ids = Siswa::find($id);
        $email_old = $ids['email'];
        $email_new = $request->email;

        if ($email_old && $email_new  === null) {
            $request->validate(
                [
                    'nama_awal' => 'required|max:30|regex:/^[\pL\pM ]+$/u',
                    'nama_akhir' => 'required|max:30|regex:/^[\pL\pM ]+$/u',
                    'email' => 'nullable|email:dns|unique:siswa|required',
                    'status' => 'in:0,1',
                ],
                [
                    'nama_awal.required' => 'Nama awal siswa wajib diisi!',
                    'nama_akhir.required' => 'Nama akhir siswa wajib diisi!',
                    'email.required' => 'Email siswa wajib diisi!',
                    'email.unique' => 'Email sudah terdaftar!',
                    'email.dns' => 'Email tidak sah!',
                    'status.in' => 'Invalid!',
                ],
            );
        } elseif ($email_old && $email_new === true) {
            $request->validate(
                [
                    'nama_awal' => 'required|max:30|regex:/^[\pL\pM ]+$/u',
                    'nama_akhir' => 'required|max:30|regex:/^[\pL\pM ]+$/u',
                    'email' => 'nullable|email:dns|unique:siswa',
                    'status' => 'in:0,1',
                ],
                [
                    'nama_awal.required' => 'Nama awal siswa wajib diisi!',
                    'nama_akhir.required' => 'Nama akhir siswa wajib diisi!',
                    'email.required' => 'Email siswa wajib diisi!',
                    'email.unique' => 'Email sudah terdaftar!',
                    'email.dns' => 'Email tidak sah!',
                    'status.in' => 'Invalid!',
                ]
            );
        } elseif ($email_old !== $email_new) {
            $request->validate(
                [
                    'nama_awal' => 'required|max:30|regex:/^[\pL\pM ]+$/u',
                    'nama_akhir' => 'required|max:30|regex:/^[\pL\pM ]+$/u',
                    'email' => 'nullable|email:dns|unique:siswa',
                    'status' => 'in:0,1',
                ],
                [
                    'nama_awal.required' => 'Nama awal siswa wajib diisi!',
                    'nama_akhir.required' => 'Nama akhir siswa wajib diisi!',
                    'email.required' => 'Email siswa wajib diisi!',
                    'email.unique' => 'Email sudah terdaftar!',
                    'email.dns' => 'Email tidak sah!',
                    'status.in' => 'Invalid!',
                ]
            );
        } else {
            $request->validate(
                [
                    'nama_awal' => 'required|max:30|regex:/^[\pL\pM ]+$/u',
                    'nama_akhir' => 'required|max:30|regex:/^[\pL\pM ]+$/u',
                    'email' => 'nullable|email:dns',
                    'status' => 'in:0,1',
                ],
                [
                    'nama_awal.required' => 'Nama awal siswa wajib diisi!',
                    'nama_akhir.required' => 'Nama akhir siswa wajib diisi!',
                    'email.required' => 'Email siswa wajib diisi!',
                    'email.unique' => 'Email sudah terdaftar!',
                    'email.dns' => 'Email tidak sah!',
                    'status.in' => 'Invalid!',
                ]
            );
        }

        $nama_awal = Str::title($request->nama_awal);
        $nama_akhir = Str::title($request->nama_akhir);

        Siswa::where('id', $id)->update([
            'nama_awal' => $nama_awal,
            'nama_akhir' => $nama_akhir,
            'email' => $request->email,
            'status' => $request->status,
        ]);

        $log = 'Mengubah data siswa: ';
        Log::create([
            'aktifitas' => $log . $nama_awal . " " . $nama_akhir,
            'user_id' => auth()->user()->id,
            'oleh' => auth()->user()->name,
        ]);


        return redirect()->back()->with('success', 'Data berhasil diperbaharui!');
    }
}
