<?php

namespace App\Http\Controllers;

use App\Models\SuratKeteranganUmum;
use App\Http\Requests\StoreSuratKeteranganUmumRequest;
use App\Http\Requests\UpdateSuratKeteranganUmumRequest;
use RealRashid\SweetAlert\Facades\Alert;

class SuratKeteranganUmumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreSuratKeteranganUmumRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSuratKeteranganUmumRequest $request)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'no_hp' => 'required',
            'tanggal_lahir' => 'required',
            'warga_negara' => 'required',
            'agama' => 'required',
            'pekerjaan' => 'required',
            'tempat_tinggal' => 'required',
            'nik' => 'required',
            'status_kawin' => 'required',
            'keperluan' => 'required',
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SuratKeteranganUmum  $suratKeteranganUmum
     * @return \Illuminate\Http\Response
     */
    public function show(SuratKeteranganUmum $suratKeteranganUmum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SuratKeteranganUmum  $suratKeteranganUmum
     * @return \Illuminate\Http\Response
     */
    public function edit(SuratKeteranganUmum $suratKeteranganUmum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSuratKeteranganUmumRequest  $request
     * @param  \App\Models\SuratKeteranganUmum  $suratKeteranganUmum
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSuratKeteranganUmumRequest $request, SuratKeteranganUmum $suratKeteranganUmum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SuratKeteranganUmum  $suratKeteranganUmum
     * @return \Illuminate\Http\Response
     */
    public function destroy(SuratKeteranganUmum $suratKeteranganUmum)
    {
        //
    }
}
