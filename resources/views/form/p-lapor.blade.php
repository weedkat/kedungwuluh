@extends('layouts.app')

@section('content')
    <main>
        <link rel="stylesheet" href="{{ url('css/form.css') }}">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
                    <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                        <h2 id="heading">Satus Laporan / Keluhan</h2>
                        <p>proses : sedang diproses<br>terjawab : laporan sudah dijawab</p>
                        <style>
                            table,
                            th,
                            td {
                                border: 1px solid black;
                                border-collapse: collapse;
                            }

                        </style>
                        <table>
                            <tr>
                                <td>Nama Lengkap</td>
                                <td>{{ $lapor->nama_lengkap }}</td>
                            </tr>
                            <tr>
                                <td>NIK</td>
                                <td>{{ $lapor->no_hp }}</td>
                            </tr>
                            <tr>
                                <td>Laporan/Keluhan</td>
                                <td>{{ $lapor->keluhan }}</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>@switch($lapor->status)
                                        @case('proses')
                                            <span class="btn btn-warning m-1">Proses</span>
                                        @break
                                        @case('terjawab')
                                            <span class="btn btn-success m-1">Terjawab</span>
                                        @break
                                        @default
                                    @endswitch
                                </td>
                            </tr>
                            @if ($lapor->catatan != '')
                                <tr>
                                    <td>Catatan</td>
                                    <td>{{ $lapor->catatan }}</td>
                                </tr>
                            @endif
                        </table>
                        <button class="btn btn-primary mt-2" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseForm" aria-expanded="false" aria-controls="collapseExample">
                            Lihat Detail
                        </button>
                        <div class="collapse" id="collapseForm">
                            <form method="POST" id="msform" action=""
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <!-- progressbar -->
                                <ul id="progressbar" class="mt-4">
                                    <li id="personal"><strong>Data Diri</strong></li>
                                    <li id="payment"><strong>Surat Pendukung</strong></li>
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
                                                <h2 class="fs-title">Informasi Data Diri:</h2>
                                            </div>
                                            <div class="col-5">
                                                <h2 class="steps">Langkah 1 - 3</h2>
                                            </div>
                                        </div>
                                        <label class="fieldlabels">Nama Lengkap: * </label>
                                        <input type="text" id="nama_lengkap" name="nama_lengkap" placeholder="Nama anda"
                                            value="{{ $lapor->nama_lengkap }}" onkeyup='saveValue(this);' />
                                        <label class="fieldlabels">Nomor HP: *</label>
                                        <input type="text" id="no_hp" name="no_hp" placeholder="Nomor HP"
                                            onkeyup='saveValue(this);' value="{{ $lapor->no_hp }}" />
                                        <label class="fieldlabels">Tempat Tinggal: *</label>
                                        <textarea id="tempat_tinggal" name="tempat_tinggal" placeholder="Sesuai dengan KTP"
                                            rows="3" onkeyup='saveValue(this);'>{{ $lapor->tempat_tinggal }}</textarea>
                                        <label class="fieldlabels">Keluhan/Laporan: *</label>
                                        <textarea id="keperluan" name="keluhan" placeholder="Keperluan" rows="3"
                                            onkeyup='saveValue(this);'>{{ $lapor->keluhan }}</textarea>
                                    </div>
                                    <input type="button" name="next" class="next action-button" value="Lanjut" onclick="" />
                                </fieldset>
                                <fieldset id="fieldset2" class="fieldset">
                                    <div class="form-card">
                                        <div class="row">
                                            <div class="col-7">
                                                <h2 class="fs-title">Unggah Surat:</h2>
                                            </div>
                                            <div class="col-5">
                                                <h2 class="steps">Langkah 2 - 3</h2>
                                            </div>
                                        </div>
                                        <label class="fieldlabels">Foto :</label>
                                        <input type="file" id="foto" name="foto">
                                    </div>
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
                                        <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                                        <div class="row justify-content-center">
                                            <div class="col-3"> <img src="{{ url('images/success.png') }}"
                                                    class="fit-image"> </div>
                                        </div> <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-7 text-center">
                                                <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="button" name="next" class="ok action-button" value="Selesai"
                                        onclick="location.href='/';" />
                                </fieldset>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="{{ url('js/form1.js') }}"></script>
    </main>
@endsection
