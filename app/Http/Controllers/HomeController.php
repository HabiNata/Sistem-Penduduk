<?php

namespace App\Http\Controllers;

use App\Models\DataPenduduk;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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
    public function index()
    {
        if (session('success_message')) {
            Alert::success('Success', session('success_message'));
        } elseif (session('failure_message')) {
            Alert::alert('Failed', session('failure_message'));
        }

        $datas = DataPenduduk::paginate(15);

        return view('home', compact('datas'));
    }
}
