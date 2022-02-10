@extends('admin.layouts.navbar')

@section('content')

    <div class="container-fluid px-4 mt-4">
        <div class="row justify-content-center" style="margin-top: 10%">
            <div class="col-md-6 col-lg-6">
                <h3 class="text-center mb-4">
                    Tambah Akun
                </h3>
                <form>
                    <!-- Nama Lengkap -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example1">Nama</label>
                        <input type="text" id="form3Example1" class="form-control" />
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example3">Email</label>
                        <input type="email" id="form3Example3" class="form-control" />
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example4">Password</label>
                        <input type="password" id="form3Example4" class="form-control" />
                    </div>

                    <!-- Password Konfirmasi -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example4">Password Konfirmasi</label>
                        <input type="password" id="form3Example4" class="form-control" />
                    </div>

                    <!-- Submit button -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-block mb-4">Tambah Akun</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
