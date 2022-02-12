<?php

namespace App\Http\Controllers;

use App\Models\SuratKeteranganUmum;
use App\Http\Requests\StoreSuratKeteranganUmumRequest;
use App\Http\Requests\UpdateSuratKeteranganUmumRequest;
use RealRashid\SweetAlert\Facades\Alert;
use SebastianBergmann\Environment\Console;

class SuratKeteranganUmumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('form.sku');
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
        $image1 = $request->file('ktp');
        $imagename1 = $image1->getClientOriginalName();
        $image1->move(public_path().'/file',$imagename1);
        $image2 = $request->file('surat_kk');
        $imagename2 = $image2->getClientOriginalName();
        $image2->move(public_path().'/file',$imagename2);
        SuratKeteranganUmum::insert($request->except(['_token']));
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
