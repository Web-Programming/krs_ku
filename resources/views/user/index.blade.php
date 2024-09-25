@extends('layouts.app')

@section('content')

<div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>List User</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <a href="/create-user" class="mx-2 btn btn-primary text-light">Buat User</a>
              <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">No</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Username</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Role</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Aksi</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                       $no=1; 
                    @endphp
                    @foreach ($user as $item)
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
                        <h6 class="mb-0 text-sm">{{ $item->role }}</h6>
                      </td>
                      <td class="d-flex">
                        <a href="/update-user-{{ $item->id }}" class="btn btn-warning btn-sm">
                            Ubah
                        </a>
                        <form action="/delete-user-{{ $item->id }}" method="POST">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm mx-2">
                                Hapus
                            </button>
                        </form>
                      </td>
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