@extends('layouts.app')

@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Buat Mata Kuliah</h6>
    </div>
    <hr>
    <div class="card-body">
        <form method="POST" action="/create-matakuliah" enctype="multipart/form-data">
            @csrf
        
            <div class="row mb-3">
                <label for="kodeMK" class="col-md-4 col-form-label text-md-end">Kode Mata Kuliah</label>
        
                <div class="col-md-6">
                    <input id="kodeMK" type="text" class="form-control" name="kodeMK" value="{{ old('kodeMK') }}" required autocomplete="kodeMK" autofocus placeholder="Masukkan Kode Mata Kuliah">
                </div>
            </div>
        
            <div class="row mb-3">
                <label for="namaMK" class="col-md-4 col-form-label text-md-end">Nama Mata Kuliah</label>
        
                <div class="col-md-6">
                    <input id="namaMK" type="text" class="form-control" name="namaMK" value="{{ old('namaMK') }}" required autocomplete="namaMK" autofocus placeholder="Masukkan Nama Mata Kuliah">
                </div>
            </div>
        
            <div class="row mb-3">
                <label for="dosen" class="col-md-4 col-form-label text-md-end">Dosen</label>
        
                <div class="col-md-6">
                    <input id="dosen" type="text" class="form-control" name="dosen" value="{{ old('dosen') }}" required autocomplete="dosen" autofocus placeholder="Masukkan Dosen">
                </div>
            </div>
                
            <div class="d-flex mb-3">
                <div class="m-auto">
                    <button type="submit" class="btn btn-primary text-light">
                        BUAT MATA KULIAH
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection