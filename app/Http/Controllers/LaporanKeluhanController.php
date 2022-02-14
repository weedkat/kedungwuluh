<?php

namespace App\Http\Controllers;

use App\Models\LaporanKeluhan;
use App\Http\Requests\StoreLaporanKeluhanRequest;
use App\Http\Requests\UpdateLaporanKeluhanRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class LaporanKeluhanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', [
            'except' => [
                'create',
                'store',
                'search',
                'edit',
                // Could add bunch of more methods too
            ],
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Daftar Laporan / Keluhan';

        $lapor = LaporanKeluhan::all();

        return view('admin.lapor', compact('title', 'lapor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form.lapor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLaporanKeluhanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLaporanKeluhanRequest $request)
    {
        $image1 = $request->file('foto');
        $imagename1 = $image1->getClientOriginalName();
        $image1->move(public_path() . '/file', $imagename1);
        $kode = '';
        do {
            $kode = 'LPR' . rand(100000, 999999);
        } while (LaporanKeluhan::where('kode_tiket', $kode)->exists());

        $request->merge([
            'kode_tiket' => $kode,
            'status' => 'proses',
        ]);
        LaporanKeluhan::insert($request->except(['_token']));
        Session::put('kode', $kode);
        return back();
    }

    public function search(Request $request)
    {

        $kode = strtoupper($request->kode_tiket);
        $lapor = LaporanKeluhan::where('kode_tiket', $kode)->first();
        if ($lapor) {
            return view('form.p-lapor', compact('lapor'));
        } else {
            Alert::toast('Tiket tidak ditemukan', 'error');
            return back();
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LaporanKeluhan  $laporanKeluhan
     * @return \Illuminate\Http\Response
     */
    public function show(LaporanKeluhan $laporanKeluhan)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LaporanKeluhan  $laporanKeluhan
     * @return \Illuminate\Http\Response
     */
    public function edit(StoreLaporanKeluhanRequest $request, $id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLaporanKeluhanRequest  $request
     * @param  \App\Models\LaporanKeluhan  $laporanKeluhan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLaporanKeluhanRequest $request, $id)
    {
        $lapor = LaporanKeluhan::find($id);
        $lapor->update([
            'catatan' => $request->catatan,
            'status' => 'terjawab']);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LaporanKeluhan  $laporanKeluhan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        LaporanKeluhan::destroy($id);
        Alert::toast('Request Berhasil Dihapus', 'success');
        return back();
    }
}
