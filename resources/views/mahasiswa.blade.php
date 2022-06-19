@extends('layouts.main')
@section('title', 'Mahasiswa')
@section('content')

<div class="col-lg-10 vh-100">
    <div class="card mt-4">
        <div class="card-header">
            <a name="" class="btn btn-primary" href="/mahasiswa/formMhs" role="button"><i
                    class="bi bi-plus-circle-fill"></i> ADD MAHASISWA</a>
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
                        <th scope="col">NIM</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Bidang Minat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mahasiswa as $no => $m)
                    <tr>
                        <th scope="row">{{$mahasiswa->firstItem()+$no}}</th>
                        <td>{{$m->nim}}</td>
                        <td>{{$m->nama}}</td>
                        <td>{{$m->gender}}</td>
                        <td>{{$m->jurusan}}</td>
                        <td>{{$m->bdg_min}}</td>
                        <td>
                            <a href="/mahasiswa/editmhs/{{ $m -> id }}" class="btn btn-outline-primary"><i
                                    class="bi bi-pencil-square"></i></a>
                            <a href="/mahasiswa/hapusmhs/{{ $m -> id }}" class="btn btn-outline-primary"><i
                                    class="bi bi-trash3"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <span class="float-right">{{$mahasiswa->links()}}</span>
        </div>
    </div>
</div>
@endsection