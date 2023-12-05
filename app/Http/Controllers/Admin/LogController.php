<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LogController extends Controller
{
    public function index()
    {
        $data = Log::all();
        return view(
            'admin.log.index',
            compact('data')
        );
    }

    public function hapus($id)
    {
        DB::table('log')
            ->where('id', '=', $id)
            ->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
