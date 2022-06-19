@extends('layouts.main')
@section('title', 'Mahasiswa')
@section('content')
    <div class="container-fluid mt-4 rounded">
        <form action="/mahasiswa/simpanmahasiswa" method="POST" class="pt-2 pb-2">
            @csrf
              <div class="form-group w-25">
                  <label>NIM Mahasiswa</label>
                  <input type="number" name='nim' class="form-control" placeholder="Masukkan NIM" required>
              </div>
              <div class="form-group w-25">
                  <label>Nama Mahasiswa</label>
                  <input type="text" name='nama' class="form-control" placeholder="Masukkan Nama" required>
              </div>
              <label>Gender</label>
              <div class="form-group w-25">
                  <input type="radio" name='gender' value='Perempuan' class="form-check-input">
                  <label>Perempuan</label>
              </div>
              <div class="form-group w-25">
                  <input type="radio" name='gender' value='laki-Laki' class="form-check-input">
                  <label>Laki-Laki</label>
              </div>
              <div class="form-group w-25">
                  <label>Jurusan</label>
                  <select name="jurusan" class="form-control">
                      <option value="0">--Pilihan Jurusan Program Studi--</option>
                      <option value="sistem informasi">Sistem Informasi</option>
                      <option value="informatika">Informatika</option>
                      <option value="manajemen">Manajemen</option>
                      <option value="kedokteran">Kedokteran</option>
                      <option value="arsitektur">Arsitektur</option>
                  </select>
              </div>
              <label>Bidang Minat</label>
              <div class="form-check w-25">
                  <input type="checkbox" name='bdg_min[]' value="Teknologi dan Rekayasa" class="form-check-input">
                  <label>Teknologi dan Rekayasa</label>
              </div>
              <div class="form-check w-25">
                  <input type="checkbox" name='bdg_min[]' value="Kesehatan" class="form-check-input">
                  <label>Kesehatan</label>
              </div>
              <div class="form-check w-25">
                  <input type="checkbox" name='bdg_min[]' value="Pendidikan" class="form-check-input">
                  <label>Pendidikan</label>
              </div>
              <div class="form-check w-25">
                  <input type="checkbox" name='bdg_min[]' value="Humaniora" class="form-check-input">
                  <label>Humaniora</label>
              </div>
              <div class="form-group pt-4">
                <input type="submit" value="SAVE" class="btn btn-outline-primary">
            </div>
          </form>
    </div>
@endsection