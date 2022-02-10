@extends('layouts.app')

@section('content')
    <main>
        <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
        <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
        <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
        <link rel="stylesheet" href="{{ url('css/form.css') }}">
        <div class="container-fluid">
            @if ($errors->any())
                @php
                    $message = '<ul class="m-0 ps-2"><h5 class="mt-0 mb-1 p-0"><b>Error :</b></h5><li>' . $errors->first() . '</li>';
                    foreach (array_slice($errors->all(), 1) as $error) {
                        $message = $message . '<li>' . $error . '</li>';
                    }
                    $message = $message . '</ul>';
                    Alert::toast($message, 'error');
                @endphp
            @else
                <script>
                    next();
                </script>
            @endif
            <div class="row justify-content-center">
                <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
                    <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                        <h2 id="heading">Form Surat Keterangan Umum</h2>
                        <p>Lengkapi form sebelum lanjut</p>
                        <form id="msform" action="{{ route('sku.store') }}" onsubmit="" method="POST">
                            <!-- progressbar -->
                            @csrf
                            <ul id="progressbar">
                                <li class="active" id="personal"><strong>Data Diri</strong></li>
                                <li class="active" id="payment"><strong>Surat Pendukung</strong></li>
                                <li id="confirm"><strong>Selesai</strong></li>
                            </ul>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div> <br> <!-- fieldsets -->
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="fs-title">Informasi Data Diri:</h2>
                                        </div>
                                        <div class="col-5">
                                            <h2 class="steps">Langkah 1 - 3</h2>
                                        </div>
                                    </div>
                                    <label class="fieldlabels">Nama Lengkap: *</label>
                                    <input type="text" id="nama_lengkap" name="nama_lengkap" placeholder="Nama anda" />
                                    <label class="fieldlabels">Nomor HP: *</label>
                                    <input type="text" name="no_hp" placeholder="Nomor HP" />
                                    <label class="fieldlabels">Tanggal Lahir: *</label>
                                    <input type="date" name="tanggal_lahir" placeholder="tanggal_lahir" />
                                    <label class="fieldlabels">Warga Negara: *</label>
                                    <input type="text" name="warga_negara" value="Indonesia" />
                                    <label class="fieldlabels">Agama: *</label>
                                    <select name="agama" id="agama">
                                        <option value="Islam">Islam</option>
                                        <option value="Protestan">Protestan</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Khonghucu">Khonghucu</option>
                                    </select>
                                    <label class="fieldlabels">Pekerjaan: *</label>
                                    <input type="text" name="pekerjaan" placeholder="Pekerjaan anda" />
                                    <label class="fieldlabels">Tempat Tinggal: *</label>
                                    <textarea name="tempat_tinggal" placeholder="Sesuai dengan KTP" rows="3"></textarea>
                                    <label class="fieldlabels">NIK: *</label>
                                    <input type="text" name="nik" placeholder="Nomor induk kependudukan" />
                                    <label class="fieldlabels">Status Kawin: *</label>
                                    <select name="status_kawin" id="status_kawin">
                                        <option value="Belum Kawin">Belum Kawin</option>
                                        <option value="Kawin">Kawin</option>
                                        <option value="Cerai Hidup">Cerai Hidup</option>
                                        <option value="Cerai Mati">Cerai Mati</option>
                                    </select>
                                    <label class="fieldlabels">Keperluan: *</label>
                                    <textarea name="keperluan" placeholder="Keperluan" rows="3"></textarea>
                                </div>
                                <input type="submit" name="next" class="next action-button" value="Lanjut" onclick="" />
                                <button type="submit"></button>
                            </fieldset>
                            <fieldset>
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
                                    <input type="file" name="ktp" accept="image/*">
                                    <label class="fieldlabels">Kartu Keluarga :</label>
                                    <input type="file" name="surat_kk" accept="image/*">
                                </div>
                                <input type="submit" name="next" class="next action-button" value="Ajukan" />
                                <input type="button" name="previous" class="previous action-button-previous"
                                    value="kembali" />
                            </fieldset>
                            <fieldset>
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
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'>
        </script>
        <script type='text/javascript' src=''></script>
        <script type='text/javascript' src=''></script>
        <script type="text/javascript" src="{{ url('js/form.js') }}"></script>
    </main>
@endsection
