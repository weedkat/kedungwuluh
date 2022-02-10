<?php

namespace App\Http\Controllers;

use App\Models\LaporanKeluhan;
use App\Http\Requests\StoreLaporanKeluhanRequest;
use App\Http\Requests\UpdateLaporanKeluhanRequest;

class LaporanKeluhanController extends Controller
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
     * @param  \App\Http\Requests\StoreLaporanKeluhanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLaporanKeluhanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LaporanKeluhan  $laporanKeluhan
     * @return \Illuminate\Http\Response
     */
    public function show(LaporanKeluhan $laporanKeluhan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LaporanKeluhan  $laporanKeluhan
     * @return \Illuminate\Http\Response
     */
    public function edit(LaporanKeluhan $laporanKeluhan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLaporanKeluhanRequest  $request
     * @param  \App\Models\LaporanKeluhan  $laporanKeluhan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLaporanKeluhanRequest $request, LaporanKeluhan $laporanKeluhan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LaporanKeluhan  $laporanKeluhan
     * @return \Illuminate\Http\Response
     */
    public function destroy(LaporanKeluhan $laporanKeluhan)
    {
        //
    }
}
