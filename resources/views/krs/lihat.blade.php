@extends('layouts.app')

@section('content')

<div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h5>{{ $user->nama }}</h5>
              <h6>{{ $user->username }}</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
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
                        @if ($item->user_id == $user->id)
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