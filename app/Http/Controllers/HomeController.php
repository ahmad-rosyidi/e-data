<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    //

    public function clientDashboard()
    {
        return view('client.dashboard.index');
    }

    public function adminDashboard()
    {
        return view('admin.dashboard.index');
    }
}
