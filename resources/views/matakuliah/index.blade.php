@extends('layouts.app')

@section('content')

<div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>List Mata Kuliah</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                {{-- <a href="/create-matakuliah" class="mx-2 btn btn-primary text-light">Buat Mata Kuliah</a> --}}
              <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">No</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kode Mata Kuliah</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Mata Kuliah</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">SKS</th>
                      {{-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Aksi</th> --}}
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                       $no=1; 
                    @endphp
                    @foreach ($matakuliah as $item)
                    <tr>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">{{ $no++ }}</p>
                      </td>
                      <td>
                        <h6 class="mb-0 text-sm">{{ $item->kodeMK }}</h6>
                      </td>
                      <td>
                        <h6 class="mb-0 text-sm">{{ $item->namaMK }}</h6>
                      </td>
                      <td>
                        <h6 class="mb-0 text-sm">{{ $item->sks }}</h6>
                      </td>
                      {{-- <td class="d-flex">
                        <a href="/update-matakuliah-{{ $item->id }}" class="btn btn-warning btn-sm">
                            Ubah
                        </a>
                        <form action="/delete-matakuliah-{{ $item->id }}" method="POST">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm mx-2">
                                Hapus
                            </button>
                        </form>
                      </td> --}}
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection