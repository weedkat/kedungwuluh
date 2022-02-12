<?php

namespace App\Http\Controllers;

use App\Models\SuratPengantarCatatanKepolisian;
use App\Http\Requests\StoreSuratPengantarCatatanKepolisianRequest;
use App\Http\Requests\UpdateSuratPengantarCatatanKepolisianRequest;

class SuratPengantarCatatanKepolisianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('form.spck');
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
     * @param  \App\Http\Requests\StoreSuratPengantarCatatanKepolisianRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSuratPengantarCatatanKepolisianRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SuratPengantarCatatanKepolisian  $suratPengantarCatatanKepolisian
     * @return \Illuminate\Http\Response
     */
    public function show(SuratPengantarCatatanKepolisian $suratPengantarCatatanKepolisian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SuratPengantarCatatanKepolisian  $suratPengantarCatatanKepolisian
     * @return \Illuminate\Http\Response
     */
    public function edit(SuratPengantarCatatanKepolisian $suratPengantarCatatanKepolisian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSuratPengantarCatatanKepolisianRequest  $request
     * @param  \App\Models\SuratPengantarCatatanKepolisian  $suratPengantarCatatanKepolisian
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSuratPengantarCatatanKepolisianRequest $request, SuratPengantarCatatanKepolisian $suratPengantarCatatanKepolisian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SuratPengantarCatatanKepolisian  $suratPengantarCatatanKepolisian
     * @return \Illuminate\Http\Response
     */
    public function destroy(SuratPengantarCatatanKepolisian $suratPengantarCatatanKepolisian)
    {
        //
    }
}
