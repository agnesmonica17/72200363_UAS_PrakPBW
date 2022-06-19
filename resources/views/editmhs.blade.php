@extends('layouts.main')
@section('title', 'Mahasiswa')
@section('content')
<div class="col-lg-10 vh-100">
    <div class="card mt-4">
        <div class="card-header">
        </div>
        <div class="card-body">
            <div class="container-fluid rounded mt-4">
                @php
                $bdg_min = explode(',',$mahasiswa->bdg_min);
                @endphp
                <form action="/mahasiswa/updatemhs/{{ $mahasiswa->id }}" method="POST" class="pt-2 pb-2">
                    @csrf
                    @method('PUT')
                    <div class="form-group w-25">
                        <label>NIM</label>
                        <input type="number" name="nim" class="form-control" value="{{ $mahasiswa->nim }}" readonly>
                    </div>
                    <div class="form-group w-25">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" value="{{ $mahasiswa->nama }}" required>
                    </div>
                    <label>Gender</label>
                    <div class="form-check w-25">
                        <input type="radio" name="gender" value="Perempuan"
                            {{ $mahasiswa->gender == 'Perempuan' ? 'checked':''}} class="form-check-input">
                        <label>Perempuan</label>
                    </div>
                    <div class="form-check w-25">
                        <input type="radio" name="gender" value="laki-laki"
                            {{ $mahasiswa->gender == 'laki-laki' ? 'checked':''}} class="form-check-input">
                        <label>Laki-laki</label>
                    </div>
                    <div class="form-group w-25">
                        <label>Jurusan</label>
                        <select name="jurusan" class="form-control">
                            <option value="0">-Pilih Jurusan-</option>
                            <option value="sistem informasi"
                                {{ $mahasiswa->jurusan == 'sistem informasi' ? 'selected':''}}>-Sistem
                                Informasi-</option>
                            <option value="informatika"
                                {{ $mahasiswa->jurusan == 'informatika' ? 'selected':''}}>
                                -Pendidikan Bahasa Inggris-</option>
                            <option value="manajemen" {{ $mahasiswa->jurusan == 'manajemen' ? 'selected':''}}>
                                -Kedokteran-
                            </option>
                            <option value="kedokteran" {{ $mahasiswa->jurusan == 'kedokteran' ? 'selected':''}}>
                                -Arsitektur-
                            </option>
                            <option value="arsitektur" {{ $mahasiswa->jurusan == 'arsitektur' ? 'selected':''}}>
                                -Informatika-
                            </option>
                        </select>
                    </div>
                    <div class="form-check w-25">
                        <input type="checkbox" name="bdg_min[]" value="Teknologi dan Rekayasa"
                            {{ in_array('Teknologi dan Rekayasa', $bdg_min) ? 'checked':'' }}
                            class="form-check-input">
                        <label>Teknologi dan Rekayasa</label>
                    </div>
                    <div class="form-check w-25">
                        <input type="checkbox" name="bdg_min[]" value="Kesehatan"
                            {{ in_array('Kesehatan', $bdg_min) ? 'checked':'' }} class="form-check-input">
                        <label>Kesehatan</label>
                    </div>
                    <div class="form-check w-25">
                        <input type="checkbox" name="bdg_min[]" value="Pendidikan"
                            {{ in_array('Pendidikan', $bdg_min) ? 'checked':'' }} class="form-check-input">
                        <label>Pendidikan</label>
                    </div>
                    <div class="form-check w-25">
                        <input type="checkbox" name="bdg_min[]" value="Humaniora"
                            {{ in_array('Humaniora', $bdg_min) ? 'checked':'' }} class="form-check-input">
                        <label>Humaniora</label>
                    </div>
                    <div class="form-group w-25 mt-4">
                        <input type="submit" value="SAVE" class="btn btn-outline-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
</body>

</html>