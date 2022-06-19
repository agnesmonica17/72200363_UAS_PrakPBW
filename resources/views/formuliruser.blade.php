@extends('layouts.main')
@section('title', 'Mahasiswa')
@section('content')
    <div class="container-fluid mt-4 rounded">
        <form action="/user/simpanuser" method="POST" class="pt-2 pb-2">
            @csrf
              <div class="form-group w-25">
                  <label>NIK User</label>
                  <input type="text" name='nik_user' class="form-control" placeholder="Masukkan NIK User" required autofocus>
              </div>
              <div class="form-group w-25">
                  <label>Nama User</label>
                  <input type="text" name='nama_user' class="form-control" placeholder="Masukkan Nama User" required>
              </div>
              <div class="form-group w-25">
                  <label>Nomor HandPhone</label>
                  <input type="text" name='nomor' class="form-control" placeholder="Masukkan Nomor HP User" required>
              </div>
              <div class="form-group w-25">
                  <label>Email User</label>
                  <input type="email" name='email' class="form-control" placeholder="Masukkan Nomor HP User" required>
              </div>
              <div class="form-group w-25">
                  <label>Password</label>
                  <input type="password" name='password' class="form-control" placeholder="Masukkan Password" required>
              </div>
              <div class="form-group pt-4">
                <input type="submit" value="SAVE" class="btn btn-outline-primary">
            </div>
          </form>
    </div>
@endsection