@extends('layouts.app')

@section('content')

<div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>List KRS</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">No</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">NPM</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Mahasiswa</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Aksi</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                       $no=1; 
                    @endphp
                    @foreach ($user as $item)
                        @if ($item->status == "Belum divalidasi")
                            <tr>
                                <td>
                                <p class="text-sm font-weight-bold mb-0">{{ $no++ }}</p>
                                </td>
                                <td>
                                <h6 class="mb-0 text-sm">{{ $item->username }}</h6>
                                </td>
                                <td>
                                <h6 class="mb-0 text-sm">{{ $item->nama }}</h6>
                                </td>
                                <td>
                                <h6 class="mb-0 text-sm">{{ $item->status }}</h6>
                                </td>
                                <td class="d-flex">

                                    <a href="" class="btn btn-primary btn-sm">
                                        Lihat KRS
                                    </a>
                                    <a href="" class="btn btn-success btn-sm mx-3">
                                        Validasi
                                    </a>
                                    <a href="" class="btn btn-danger btn-sm">

                                    <a href="/lihat-krs-{{ $item->id }}" class="btn btn-primary btn-sm">
                                        Lihat KRS
                                    </a>
                                    <a href="{{ url('validasi-krs-'.$item->id) }}" class="btn btn-success btn-sm mx-3">
                                        Validasi
                                    </a>
                                    <a href="{{ url('tolak-krs-'.$item->id) }}" class="btn btn-danger btn-sm">

                                        Tolak
                                    </a>
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