@extends('layouts.main')
@section('title', 'Mahasiswa')
@section('content')
<div class="col-lg-10 vh-100">
    <div class="card mt-4">
        <div class="card-header">
        </div>
        <div class="card-body">
            <div class="container-fluid rounded mt-4">
                <form action="/user/simpanupdateuser/{{ $user->id }}" method="POST" class="pt-2 pb-2">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label>NIK</label>
                        <input type="text" name="nik_user" class="form-control" value="{{ $user->nik_user }}" readonly required>
                    </div>
                    <div class="form-group row">
                        <label>Nama User</label>
                        <input type="text" name="nama_user" class="form-control" value="{{ $user->nama_user }}" required>
                    </div>
                    <div class="form-group row">
                        <label>Nomor HandPhone</label>
                        <input type="text" name="nomor" class="form-control" value="{{ $user->nomor }}" required>
                    </div>
                    <div class="form-group row">
                        <label>Email User</label>
                        <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
                    </div>
                    <div class="form-group row">
                        <label>Password User</label>
                        <input type="password" name="password" class="form-control" value="{{ $user->password }}" required>
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