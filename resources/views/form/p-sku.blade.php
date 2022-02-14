@extends('layouts.app')

@section('content')
    <main>
        <link rel="stylesheet" href="{{ url('css/form.css') }}">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
                    <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                        <h2 id="heading">Satus Pembuatan Surat Keterangan Umum</h2>
                        <p>selesai : selesai dibuat<br>proses : sedang diproses<br>perbaiki : data perlu diperbaiki sebelum
                            diproses kembali</p>
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
                                <td>{{ $sku->nama_lengkap }}</td>
                            </tr>
                            <tr>
                                <td>NIK</td>
                                <td>{{ $sku->nik }}</td>
                            </tr>
                            <tr>
                                <td>Keperluan</td>
                                <td>{{ $sku->keperluan }}</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>@switch($sku->status)
                                        @case('proses')
                                            <span class="btn btn-warning m-1">Proses</span>
                                            <script>
                                                var status = "{{ $sku->status }}";
                                            </script>
                                        @break
                                        @case('selesai')
                                            <span class="btn btn-success m-1">Selesai</span>
                                        @break
                                        @case('perbaiki')
                                            <span class="btn btn-danger m-1">Perbaiki</span>
                                        @break
                                        @default
                                    @endswitch
                                </td>
                            </tr>
                            @if ($sku->catatan != '')
                                <tr>
                                    <td>Catatan</td>
                                    <td>{{ $sku->catatan }}</td>
                                </tr>
                            @endif
                        </table>
                        <button class="btn btn-primary mt-2" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseForm" aria-expanded="false" aria-controls="collapseExample">
                            Lihat Detail
                        </button>
                        <div class="collapse" id="collapseForm">
                            <form method="POST" id="msform" action="{{ route('sku.edit', $sku->id) }}"
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
                                            value="{{ $sku->nama_lengkap }}" onkeyup='saveValue(this);' />
                                            <label class="fieldlabels">Gender: * </label>
                                            <select name="gender" id="gender" onchange='saveValue(this);'>
                                            <option value="laki-laki" @if($sku->gender=='laki-laki') selected @endif>Laki-laki</option>
                                            <option value="perempuan" @if($sku->gender=='perempuan') selected @endif>Perempuan</option>
                                        </select>
                                        <label class="fieldlabels">Nomor HP: *</label>
                                        <input type="text" id="no_hp" name="no_hp" placeholder="Nomor HP"
                                            onkeyup='saveValue(this);' value="{{ $sku->no_hp }}" />
                                        <label class="fieldlabels">Tempat Lahir: *</label>
                                        <input type="text" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir"
                                            onkeyup='saveValue(this);' value="{{ $sku->tempat_lahir }}">
                                        <label class="fieldlabels">Tanggal Lahir: *</label>
                                        <input type="date" id="tanggal_lahir" name="tanggal_lahir"
                                            placeholder="tanggal_lahir" onchange='saveValue(this);'
                                            value="{{ $sku->tanggal_lahir }}" />
                                        <label class="fieldlabels">Warga Negara: *</label>
                                        <input type="text" id="warga_negara" name="warga_negara"
                                            value="{{ $sku->warga_negara }}" onkeyup='saveValue(this);' />
                                        <label class="fieldlabels">Agama: *</label>
                                        <select name="agama" id="agama" onchange='saveValue(this);'>
                                            <option value="Islam" @if ($sku->agama == 'Islam') selected @endif>Islam</option>
                                            <option value="Protestan" @if ($sku->agama == 'Protestan') selected @endif>Protestan</option>
                                            <option value="Katolik" @if ($sku->agama == 'Katolik') selected @endif>Katolik</option>
                                            <option value="Hindu" @if ($sku->agama == 'Hindu') selected @endif>Hindu</option>
                                            <option value="Budha" @if ($sku->agama == 'Budha') selected @endif>Budha</option>
                                            <option value="Khonghucu" @if ($sku->agama == 'Khonghucu') selected @endif>Khonghucu</option>
                                        </select>
                                        <label class="fieldlabels">Pekerjaan: *</label>
                                        <input type="text" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan anda"
                                            onkeyup='saveValue(this);' value="{{ $sku->pekerjaan }}" />
                                        <label class="fieldlabels">Tempat Tinggal: *</label>
                                        <textarea id="tempat_tinggal" name="tempat_tinggal" placeholder="Sesuai dengan KTP"
                                            rows="3" onkeyup='saveValue(this);'>{{ $sku->tempat_tinggal }}</textarea>
                                        <label class="fieldlabels">NIK: *</label>
                                        <input type="text" id="nik" name="nik" placeholder="Nomor induk kependudukan"
                                            onkeyup='saveValue(this);' value="{{ $sku->nik }}" />
                                        <label class="fieldlabels">Status Kawin: *</label>
                                        <select name="status_kawin" id="status_kawin" onchange='saveValue(this);'>
                                            <option value="Belum Kawin" @if ($sku->status_kawin == 'Belum Kawin') selected @endif>Belum Kawin</option>
                                            <option value="Kawin" @if ($sku->status_kawin == 'Kawin') selected @endif>Kawin</option>
                                            <option value="Cerai Hidup" @if ($sku->status_kawin == 'Cerai Hidup') selected @endif>Cerai Hidup</option>
                                            <option value="Cerai Mati" @if ($sku->status_kawin == 'Cerai Mati') selected @endif>Cerai Mati</option>
                                        </select>
                                        <label class="fieldlabels">Keperluan: *</label>
                                        <textarea id="keperluan" name="keperluan" placeholder="Keperluan" rows="3"
                                            onkeyup='saveValue(this);'>{{ $sku->keperluan }}</textarea>
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
                                        <label class="fieldlabels">KTP :</label>
                                        <input type="file" id="ktp" name="ktp">
                                        <label class="fieldlabels">Kartu Keluarga :</label>
                                        <input type="file" id="surak_kk" name="surat_kk">
                                    </div>
                                    @if ($sku->status == 'perbaiki')
                                        <input type="submit" name="btnSubmit" class="next1 action-button" value="Ajukan" />
                                    @else
                                        <input type="hidden" name="btnSubmit" class="next1 action-button" value="Ajukan" />
                                    @endif
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
