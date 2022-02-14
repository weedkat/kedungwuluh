<?php

namespace App\Http\Controllers;

use App\Models\SuratKeteranganUmum;
use App\Http\Requests\StoreSuratKeteranganUmumRequest;
use App\Http\Requests\UpdateSuratKeteranganUmumRequest;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Session;

class SuratKeteranganUmumController extends Controller
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
        $title = 'Daftar Permintaan Surat Keterangan Umum';

        $sku = SuratKeteranganUmum::all();

        return view('admin.sku', compact('title', 'sku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form.sku');
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
        $image1->move(public_path() . '/file', $imagename1);
        $image2 = $request->file('surat_kk');
        $imagename2 = $image2->getClientOriginalName();
        $image2->move(public_path() . '/file', $imagename2);
        $kode = '';
        do {
            $kode = 'SKU' . rand(100000, 999999);
        } while (SuratKeteranganUmum::where('kode_tiket', $kode)->exists());

        $request->merge([
            'kode_tiket' => $kode,
        ]);
        SuratKeteranganUmum::insert($request->except(['_token']));
        Session::put('kode', $kode);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SuratKeteranganUmum  $suratKeteranganUmum
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        dd($request);
        $kode = strtoupper($request->kode_tiket);
        $sku = SuratKeteranganUmum::where('kode_tiket', $kode)->first();
        if ($sku) {
            return view('form.p-sku', compact('sku'));
        } else {
            Alert::toast('Tiket tidak ditemukan', 'error');
            return back();
        }
    }

    // public function show(Request $request, $id = null)
    // {
    //     $kode = strtoupper($request->kode_tiket);
    //     $sku = SuratKeteranganUmum::where('kode_tiket', $kode);
    //     if ($sku) {
    //         return view('form.p-sku', compact('sku'));
    //     } else {
    //         Alert::toast('Tiket tidak ditemukan', 'error');
    //         return back();
    //     }
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SuratKeteranganUmum  $suratKeteranganUmum
     * @return \Illuminate\Http\Response
     */
    public function edit(StoreSuratKeteranganUmumRequest $request, $id)
    {
        $sku = SuratKeteranganUmum::find($id);
        if ($sku->status == 'perbaiki') {
            $sku->update($request->all());
            $sku->update(['status' => 'proses']);
            Alert::toast("Berhasil Diperbarui", "success");
            return back();
        } else {
            Alert::toast("Hanya untuk perbaikan", "error");
            return back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSuratKeteranganUmumRequest  $request
     * @param  \App\Models\SuratKeteranganUmum  $suratKeteranganUmum
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSuratKeteranganUmumRequest $request, $id)
    {
        $sku = SuratKeteranganUmum::find($id);
        switch ($request->action) {
            case 'Selesai':
                switch ($sku->status) {
                    case 'perbaiki':
                        Alert::toast('Request Belum Diperbaiki', 'error');
                        break;
                    case 'selesai':
                        Alert::toast('Request Sudah Selesai', 'error');
                        break;
                    default:
                        $sku->update([
                            'keterangan_lain' => $request->keterangan_lain,
                            'catatan' => $request->catatan,
                            'status' => 'selesai'
                        ]);
                        Alert::toast('Request Diproses', 'success');
                        break;
                }
                break;
            case 'Perbaiki':
                switch ($sku->status) {
                    case 'perbaiki':
                        Alert::toast('Request Belum Diperbaiki', 'error');
                        break;
                    case 'selesai':
                        Alert::toast('Request Sudah Selesai', 'error');
                        break;
                    default:
                        $sku->update([
                            'keterangan_lain' => $request->keterangan_lain,
                            'catatan' => $request->catatan,
                            'status' => 'perbaiki'
                        ]);
                        break;
                        Alert::toast('Request Dikembalikan', 'success');
                }
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SuratKeteranganUmum  $suratKeteranganUmum
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SuratKeteranganUmum::destroy($id);
        Alert::toast('Request Berhasil Dihapus', 'success');
        return back();
    }
}
