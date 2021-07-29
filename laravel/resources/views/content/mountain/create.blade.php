<div class="masthead">
<div class="container-xl" style="padding-top: 2cm">
<div class="card">
    <div class="card-header">
        <h4>Tambah Gunung</h4>
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
        <form action="{{ route('listmountain.store') }}" method="POST" enctype="multipart/form-data">@csrf

            <div class="form-group">
                <label for="nama_gunung">Nama</label>
                <input type="text" class="form-control" name="nama_gunung">
            </div>

            <div class="form-group">
                <label for="lokasi_gunung">Lokasi</label>
                <input type="text" class="form-control" name="lokasi_gunung">
            </div>

            <div class="form-group">
                <label for="jalur_gunung">Jalur</label>
                <input type="text" class="form-control" name="jalur_gunung">
            </div>

            <div class="form-group">
                <label for="foto">Upload Foto</label>
                <input type="file" class="form-control" name="foto">
            </div>

            <div class="form-group">
                <a href="/mountain" class="btn btn-secondary">Batal</a>
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>

    </form>
    </div>
</div>
</div>
</div>
