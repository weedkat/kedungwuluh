@extends('admin.layouts.navbar')

@section('content')
    <div class="container-fluid px-4">
        <div class="row">
            <div class="col-auto">
                <h1 class="mt-4">Tables</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Tables</li>
                </ol>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                {{ $title }}
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Nama Lengkap</th>
                            <th>keluhan</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama Lengkap</th>
                            <th>Nomor HP</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($lapor as $s)
                            <tr>
                                <td>{{ $s->nama_lengkap }}</td>
                                <td>{{ $s->keluhan }}</td>
                                <td>
                                    @switch($s->status)
                                        @case('proses')
                                            <span class="btn btn-warning">Proses</span>
                                        @break
                                        @case('terjawab')
                                            <span class="btn btn-success">Terjawab</span>
                                        @break
                                        @default

                                    @endswitch
                                </td>
                                <td style="width: 120px">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button group">
                                        <div class="btn-group me-2" role="group" aria-label="First group">
                                            <button type="button" class="btn btn-warning shadow-none" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal{{ $s->id }}" style="width: 40px">
                                                <i class="nav-icon fas fa-edit"></i>
                                            </button>
                                        </div>
                                        <div class="btn-group me-2" role="group" aria-label="Second group">
                                            {{-- <form action="{{ url('/manager/delete_ruang/' . $room->id_ruang) }}" --}}
                                            <form action="{{ route('lapor.destroy', $s->id) }}" method="post"
                                                onsubmit="validation(event)">
                                                @method('delete')
                                                @csrf
                                                <button id="hapus" class="btn btn-danger shadow-none delete-data"><i
                                                        class="nav-icon fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <div class="modal fade" id="exampleModal{{ $s->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header bg-dark">
                                            <h5 class="modal-title text-light" id="exampleModalLabel">
                                                {{ $s->nama_lengkap }}
                                            </h5>
                                            <button type="button" class="btn-close btn-close-white" aria-label="Close"
                                                data-bs-dismiss="modal">
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="col-md-offset-2 text-center">
                                                <div class="container">
                                                    <div class="row justify-content-center">
                                                        <div class="col-lg-12">
                                                            <div class="card shadow-lg border-0 rounded-lg mt-0">
                                                                <form class="form"
                                                                    action="{{ route('lapor.update', $s->id) }}"
                                                                    method="post" autocomplete="off" onsubmit="validation(event)">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="card-body">
                                                                        <div class="form-floating mb-3">
                                                                            <input class="form-control" id="nama_lengkap"
                                                                                name="nama_lengkap"
                                                                                placeholder="Nama Lengkap"
                                                                                value="{{ $s->nama_lengkap }}" readonly>
                                                                            <label for="inputNama">Nama Lengkap</label>
                                                                        </div>

                                                                        {{-- <div class="form-floating mb-3">

                                                                            <label for="inputNIK">NIK</label>
                                                                            <img src="{{url('public/file')}}" alt="">
                                                                        </div> --}}
                                                                        <div class="form-floating mb-3">
                                                                            <input class="form-control" id="no_hp"
                                                                                name="no_hp" placeholder="no_hp"
                                                                                value="{{ $s->no_hp }}" readonly>
                                                                            <label for="">Nomor HP</label>
                                                                        </div>


                                                                        <div class="form-floating mb-3">
                                                                            <input class="form-control"
                                                                                id="tempat_tinggal" name="tempat_tinggal"
                                                                                placeholder="tempat_tinggal"
                                                                                value="{{ $s->tempat_tinggal }}"
                                                                                readonly>
                                                                            <label for="">Tempat Tinggal</label>
                                                                        </div>

                                                                        <div class="form-floating mb-3">
                                                                            <input class="form-control" id="keperluan"
                                                                                name="keluhan" placeholder="keluhan"
                                                                                value="{{ $s->keluhan }}" readonly>
                                                                            <label for="">Laporan / Keluhan</label>
                                                                        </div>

                                                                        <div class="form-floating mb-3">
                                                                            <input class="form-control" id="catatan"
                                                                                name="catatan"
                                                                                placeholder="Catatan jika ada data salah"
                                                                                value="{{ $s->catatan }}"
                                                                                @if ($s->status !== 'proses') readonly @endif>
                                                                            <label for="">Catatan</label>
                                                                        </div>
                                                                        <div class="form-floating mb-3">
                                                                            <input class="form-control" id="kode_tiket"
                                                                                name="kode_tiket"
                                                                                placeholder="Kode permintaan"
                                                                                value="{{ $s->kode_tiket }}" readonly>
                                                                            <label for="">Kode Tiket</label>
                                                                        </div>
                                                                        <input type="hidden" name="action" value="">
                                                                    </div>
                                                                    <div class="card-footer py-3">
                                                                        <div class="d-flex flex-row-reverse">
                                                                            <input type="submit" class="btn btn-primary"
                                                                                value="Jawab" id="jawab">
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
