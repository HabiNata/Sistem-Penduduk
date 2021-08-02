<?php

namespace App\Http\Controllers;

use App\Http\Requests\DataPendudukRequest;
use App\Models\Agama;
use App\Models\DataPenduduk;
use App\Models\JenisKelamin;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
// use RealRashid\SweetAlert\Facades\Alert;
use RealRashid\SweetAlert\Facades\Alert;

class DataPendudukController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (session('success_message')) {
            Alert::success('Success', session('success_message'));
        } elseif (session('failure_message')) {
            Alert::error('Failed', session('failure_message'));
        }

        $JenisKelamin = JenisKelamin::all(['id', 'jenis_kelamin']);

        $Agama = Agama::all(['id', 'agama']);

        $Status = Status::all(['id', 'status']);

        return view('Pages.Create', compact(['JenisKelamin', 'Agama', 'Status']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DataPendudukRequest $request, DataPenduduk $DataPenduduk)
    {
        $data = $request->validated();

        $item = $DataPenduduk->create($data);

        if (!$item) {
            return redirect()->route('penduduk.create')->withFailureMessage('Failed Add!');
        } else {
            return redirect()->route('home')->withSuccessMessage('Success Add!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DataPenduduk::findOrFail($id);

        return view('Pages.Show', compact(['data']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DataPenduduk::findOrFail($id);
        $JenisKelamin = JenisKelamin::all(['id', 'jenis_kelamin']);

        $Agama = Agama::all(['id', 'agama']);

        $Status = Status::all(['id', 'status']);

        return view('Pages.Edit', compact(['data', 'JenisKelamin', 'Agama', 'Status']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DataPendudukRequest $request, $id)
    {
        $data = $request->validated();

        $item = DataPenduduk::findOrFail($id);
        $item->update($data);

        if (!$item) {
            return redirect()->route('home')->withFailureMessage('Failed Update!');
        } else {
            return redirect()->route('home')->withSuccessMessage('Success Update!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
        $item  = DataPenduduk::find($id);
        $item->delete();

        if (!$item) {
            return Redirect()->route('home')->withFailureMessage('Failed Delete!');
        } else {
            return Redirect()->route('home')->withSuccessMessage('Success Delete!');
        }
    }
}
