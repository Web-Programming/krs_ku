@extends('layouts.app')

@section('content')

<div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>KRSku</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
            @if (Auth::user()->status == "Belum mengisi KRS")
                <a href="/create-krsku" class="mx-2 btn btn-primary text-light">Buat KRS</a>
            @elseif (Auth::user()->status == "Belum divalidasi")
                <p class="mx-3 fw-bold">Menunggu Validasi dari BAA...</p>
            @elseif (Auth::user()->status == "KRS ditolak")
              <a href="/create-krsku" class="mx-2 btn btn-warning text-light">Update KRS</a>
              <span>KRS Ditolak! Harap Update KRS segera...</span>
            @elseif (Auth::user()->status == "KRS divalidasi")
              <p class="mx-3 fw-bold">KRS telah divalidasi</p>
            @endif
              <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">No</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kode MK</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Mata Kuliah</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">SKS</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kelas</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                       $no=1; 
                    @endphp
                    @foreach ($krs as $item)
                        @if ($item->user_id == Auth::user()->id && $item->user->status == "KRS divalidasi")
                            <tr>
                                <td>
                                <p class="text-sm font-weight-bold mb-0">{{ $no++ }}</p>
                                </td>
                                <td>
                                <h6 class="mb-0 text-sm">{{ $item->matakuliah->kodeMK }}</h6>
                                </td>
                                <td>
                                <h6 class="mb-0 text-sm">{{ $item->matakuliah->namaMK }}</h6>
                                </td>
                                <td>
                                <h6 class="mb-0 text-sm">{{ $item->matakuliah->sks }}</h6>
                                </td>
                                <td>
                                <h6 class="mb-0 text-sm">{{ $item->kelas->namaKelas }}</h6>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection