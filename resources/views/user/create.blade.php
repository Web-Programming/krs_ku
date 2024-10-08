@extends('layouts.app')

@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Buat User</h6>
    </div>
    <hr>
    <div class="card-body">
        <form method="POST" action="/create-user" enctype="multipart/form-data">
            @csrf
        
            <div class="row mb-3">
                <label for="username" class="col-md-4 col-form-label text-md-end">Username</label>
        
                <div class="col-md-6">
                    <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="Masukkan Username">
                </div>
            </div>
        
            <div class="row mb-3">
                <label for="nama" class="col-md-4 col-form-label text-md-end">Nama</label>
        
                <div class="col-md-6">
                    <input id="nama" type="text" class="form-control" name="nama" value="{{ old('nama') }}" required autocomplete="nama" autofocus placeholder="Masukkan Nama">
                </div>
            </div>

            <div class="row mb-3">
                <label for="role" class="col-md-4 col-form-label text-md-end">Role</label>
        
                <div class="col-md-6">
                    <select name="role" id="role" class="form-control">
                        <option value="0">--</option>
                        <option value="BAA">BAA</option>
                        <option value="Mahasiswa">Mahasiswa</option>
                    </select>
                </div>
            </div>
        
            <div class="row mb-3">
                <label for="password" class="col-md-4 col-form-label text-md-end">Password</label>
        
                <div class="col-md-6">
                    <input id="password" type="password" class="form-control" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus placeholder="Masukkan Password">
                </div>
            </div>
                
            <div class="d-flex mb-3">
                <div class="m-auto">
                    <button type="submit" class="btn btn-primary text-light">
                        BUAT USER
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection