@extends('layouts.main')
@section('title', 'Mahasiswa')
@section('content')

<div class="col-lg-10 vh-100">
    <div class="card mt-4">
        <div class="card-header">
            <a name="" class="btn btn-primary" href="/user/formuliruser" role="button"><i
                    class="bi bi-plus-circle-fill"></i> ADD USER</a>
            <form class="form-inline my-2 my-lg-0 float-right" method="GET" action="/mahasiswa/cari">
                <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        @if (session('alertcreate'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('alertcreate') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @elseif (session('alertupdate'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{ session('alertupdate') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @elseif (session('alertdelete'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session('alertdelete') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NIK User</th>
                        <th scope="col">Nama User</th>
                        <th scope="col">No HP</th>
                        <th scope="col">Email</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $no => $u)
                    <tr>
                        <th scope="row">{{$user->firstItem()+$no}}</th>
                        <td>{{$u->nik_user}}</td>
                        <td>{{$u->nama_user}}</td>
                        <td>{{$u->nomor}}</td>
                        <td>{{$u->email}}</td>
                        <td>
                            <a href="/user/edituser/{{ $u -> id }}" class="btn btn-outline-success"><i
                                    class="bi bi-pencil-square"></i></a>
                            <a href="/user/hapususer/{{ $u -> id }}" class="btn btn-outline-danger"><i
                                    class="bi bi-trash3"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <span class="float-right">{{$user->links()}}</span>
        </div>
    </div>
</div>
@endsection