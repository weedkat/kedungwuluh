@extends('layouts.app')

@section('content')
    <main>
        <link rel="stylesheet" href="{{ url('css/form.css') }}">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
                    <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                        <h2 id="heading">Form Keluhan / Laporan</h2>
                        <p>Lengkapi form sebelum lanjut</p>
                        <form method="POST" id="msform" action="{{ route('lapor.store') }}" enctype="multipart/form-data">
                            @csrf
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li id="personal"><strong>Data Diri</strong></li>
                                <li id="payment"><strong>Foto Pendukung</strong></li>
                                <li id="confirm"><strong>Selesai</strong></li>
                            </ul>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div> <br> <!-- fieldsets -->
                            <fieldset id="fieldset1" class="fieldset">
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="fs-title">Laporan / Keluhan:</h2>
                                        </div>
                                        <div class="col-5">
                                            <h2 class="steps">Langkah 1 - 3</h2>
                                        </div>
                                    </div>
                                    <label class="fieldlabels">Nama Lengkap: * </label>
                                    <input type="text" id="nama_lengkap" name="nama_lengkap" placeholder="Nama anda"
                                        value="" onkeyup='saveValue(this);' />
                                    <label class="fieldlabels">Nomor HP: *</label>
                                    <input type="text" id="no_hp" name="no_hp" placeholder="Nomor HP"
                                        onkeyup='saveValue(this);' />
                                    <label class="fieldlabels">Tempat Tinggal: *</label>
                                    <textarea id="tempat_tinggal" name="tempat_tinggal" placeholder="Sesuai dengan KTP"
                                        rows="3" onkeyup='saveValue(this);'></textarea>
                                    <label class="fieldlabels">Keluhan/laporan: *</label>
                                    <textarea id="keperluan" name="Keluhan" placeholder="keluhan / laporan" rows="3"
                                        onkeyup='saveValue(this);'></textarea>
                                </div>
                                <input type="button" name="next" class="next action-button" value="Lanjut" onclick="" />
                            </fieldset>
                            <fieldset id="fieldset2" class="fieldset">
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="fs-title">Unggah Foto Pendukung: (optional)</h2>
                                        </div>
                                        <div class="col-5">
                                            <h2 class="steps">Langkah 2 - 3</h2>
                                        </div>
                                    </div>
                                    <label class="fieldlabels">Foto :</label>
                                    <input type="file" id="foto" name="foto">
                                </div>
                                <input type="submit" name="btnSubmit" class="next1 action-button" value="Ajukan" />
                                <input type="button" name="previous" class="previous action-button-previous"
                                    value="kembali" />
                            </fieldset>
                            <fieldset id="fieldset3" class="fieldset">
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="fs-title">Finish:</h2>
                                        </div>
                                        <div class="col-5">
                                            <h2 class="steps">Langkah 3 - 3</h2>
                                        </div>
                                    </div> <br><br>
                                    @if (session()->has('kode'))
                                        <h2 class="purple-text text-center"><strong>Berhasil !</strong></h2> <br>
                                        <div class="row justify-content-center">
                                            <div class="col-3"> <img src="{{ url('images/success.png') }}"
                                                    class="fit-image"> </div>
                                        </div> <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-7 text-center">
                                                <h5 class="purple-text text-center">Kode anda : {{ session('kode') }}</h5>
                                                <h5 class="purple-text text-center">Berhasil</h5>
                                            </div>
                                        </div>
                                    @else
                                        <h2 class="purple-text text-center"><strong>Gagal !</strong></h2> <br>
                                        <div class="row justify-content-center">
                                            <div class="col-3"> <img src="{{ url('images/error.png') }}"
                                                    class="fit-image"> </div>
                                        </div> <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-7 text-center">
                                                <h5 class="purple-text text-center">Ada kesalahan pada saat input data,
                                                    silahkan dicoba kembali</h5>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <input type="button" name="next" class="ok action-button" value="Ajukan"
                                    onclick="location.href='/';" />
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'>
        </script>
        <script type="text/javascript" src="{{ url('js/form.js') }}"></script>
    </main>
@endsection
