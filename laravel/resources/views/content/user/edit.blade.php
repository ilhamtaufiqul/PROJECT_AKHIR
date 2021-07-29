<div class="masthead">
<div class="container-xl" style="padding-top: 2cm">
<div class="card">
    <div class="card-header">
        <h4>Edit Galeri</h4>
    </div>

    <div class="card-body">
        <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">@csrf
            <div class="form-group">
                <label for="name">Nama User</label>
                <input type="text" class="form-control" name="name" value="{{ $user->name }}">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" value="{{ $user->email }}">
            </div>

            <div class="form-group">
                <label for="level">Level</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="level" value="operator"
                    @if($user->level == 'operator')
                        checked
                    @endif
                    ><label for="level" class=" form-check-label">Operator</label>
                </div>

                <div class="form-check">
                    <input class=" form-check-input" type="radio" name="level" value="admin"
                    @if($user->level == 'admin')
                        checked
                    @endif
                    ><label for="level" class=" form-check-label">Admin</label>
                </div>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password">
                <label>*) Jika Password tidak diganti, kosongkan saja.</label>
            </div>

            <div class="form-group">
                <a href="/user" class="btn btn-secondary">Batal</a>
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </form>
    </div>
</div>
</div>
</div>
