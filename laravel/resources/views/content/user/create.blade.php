<div class="masthead">
<div class="container-xl" style="padding-top: 2cm">
<div class="card">
    <div class="card-header">
        <h4>Tambah Galeri</h4>
    </div>

    <div class="card-body">

        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">×</button>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </div>
        @endif
        <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">@csrf
        <div class="form-group">
            <label for="name">Nama User</label>
            <input type="text" class="form-control" name="name">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email">
        </div>

        <div class="form-group">
            <label for="level">Level</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="level" value="operator" checked>
                <label for="level" class=" form-check-label">Operator</label>
            </div>

            <div class="form-check">
                <input class=" form-check-input" type="radio" name="level" value="admin">
                <label for="level" class=" form-check-label">Admin</label>
            </div>

            <div class="form-check">
                <input class=" form-check-input" type="radio" name="level" value="admin">
                <label for="level" class=" form-check-label">Standart</label>
            </div>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" type="password" name="password">
        </div>

        <div class="form-group">
            <label for="password_confirmation">Password Confirmation</label>
            <input class="form-control" type="password" name="password_confirmation">
        </div>

        <div class="form-group">
            <a href="/user" class="btn btn-secondary">Batal</a>
            <button type="submit" class="btn btn-success">Simpan</button>
        </div>

    </form>
    </div>
</div>
</div>
</div>
