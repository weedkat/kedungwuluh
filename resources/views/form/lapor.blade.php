@extends('layouts.app')

@section('content')
    <main>
        <link rel="stylesheet" href="{{ url('css/form.css') }}">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
                    <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                        <h2 id="heading">Form Surat Keterangan Umum</h2>
                        <p>Lengkapi form sebelum lanjut</p>
                        <form method="POST" id="msform" action="{{ route('sku.store') }}" enctype="multipart/form-data">
                            @csrf
                            <!-- progressbar -->
                            <ul id="progressbar">
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
                                        value="" onkeyup='saveValue(this);' />
                                    <label class="fieldlabels">Nomor HP: *</label>
                                    <input type="text" id="no_hp" name="no_hp" placeholder="Nomor HP"
                                        onkeyup='saveValue(this);' />
                                    <label class="fieldlabels">Tempat Lahir: *</label>
                                    <input type="text" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" onkeyup='saveValue(this);'>
                                    <label class="fieldlabels">Tanggal Lahir: *</label>
                                    <input type="date" id="tanggal_lahir" name="tanggal_lahir" placeholder="tanggal_lahir"
                                        onchange='saveValue(this);' />
                                    <label class="fieldlabels">Warga Negara: *</label>
                                    <input type="text" id="warga_negara" name="warga_negara" value="Indonesia"
                                        onkeyup='saveValue(this);' />
                                    <label class="fieldlabels">Agama: *</label>
                                    <select name="agama" id="agama" onchange='saveValue(this);'>
                                        <option value="Islam">Islam</option>
                                        <option value="Protestan">Protestan</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Khonghucu">Khonghucu</option>
                                    </select>
                                    <label class="fieldlabels">Pekerjaan: *</label>
                                    <input type="text" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan anda"
                                        onkeyup='saveValue(this);' />
                                    <label class="fieldlabels">Tempat Tinggal: *</label>
                                    <textarea id="tempat_tinggal" name="tempat_tinggal" placeholder="Sesuai dengan KTP"
                                        rows="3" onkeyup='saveValue(this);'></textarea>
                                    <label class="fieldlabels">NIK: *</label>
                                    <input type="text" id="nik" name="nik" placeholder="Nomor induk kependudukan"
                                        onkeyup='saveValue(this);' />
                                    <label class="fieldlabels">Status Kawin: *</label>
                                    <select name="status_kawin" id="status_kawin" onchange='saveValue(this);'>
                                        <option value="Belum Kawin">Belum Kawin</option>
                                        <option value="Kawin">Kawin</option>
                                        <option value="Cerai Hidup">Cerai Hidup</option>
                                        <option value="Cerai Mati">Cerai Mati</option>
                                    </select>
                                    <label class="fieldlabels">Keperluan: *</label>
                                    <textarea id="keperluan" name="keperluan" placeholder="Keperluan" rows="3"
                                        onkeyup='saveValue(this);'></textarea>
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
