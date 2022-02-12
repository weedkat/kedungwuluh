<?php

namespace App\Http\Controllers;

use App\Models\SuratKeteranganTidakMampu;
use App\Http\Requests\StoreSuratKeteranganTidakMampuRequest;
use App\Http\Requests\UpdateSuratKeteranganTidakMampuRequest;

class SuratKeteranganTidakMampuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sktm = SuratKeteranganTidakMampu::all();

        $title = 'Surat Keterangan Umum';

        return view('admin.sktm', compact('title', 'sktm'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSuratKeteranganTidakMampuRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSuratKeteranganTidakMampuRequest $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SuratKeteranganTidakMampu  $suratKeteranganTidakMampu
     * @return \Illuminate\Http\Response
     */
    public function show(SuratKeteranganTidakMampu $suratKeteranganTidakMampu)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SuratKeteranganTidakMampu  $suratKeteranganTidakMampu
     * @return \Illuminate\Http\Response
     */
    public function edit(SuratKeteranganTidakMampu $suratKeteranganTidakMampu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSuratKeteranganTidakMampuRequest  $request
     * @param  \App\Models\SuratKeteranganTidakMampu  $suratKeteranganTidakMampu
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSuratKeteranganTidakMampuRequest $request, SuratKeteranganTidakMampu $suratKeteranganTidakMampu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SuratKeteranganTidakMampu  $suratKeteranganTidakMampu
     * @return \Illuminate\Http\Response
     */
    public function destroy(SuratKeteranganTidakMampu $suratKeteranganTidakMampu)
    {
        $suratKeteranganTidakMampu->delete();
        return back();
    }
}
