<div class="masthead">
<div class="container-xl" style="padding-top: 2cm">
<div class="card">
    <div class="card-header">
        <h4>Edit Gunung</h4>
    </div>

    <div class="card-body">
        <form action="{{ route('listmountain.update', $mountain->id) }}" method="POST" enctype="multipart/form-data">@csrf

            <div class="form-group">
                <label for="nama_gunung">Nama</label>
                <input type="text" class="form-control" name="nama_gunung" value="{{ $mountain->nama_gunung }}">
            </div>

            <div class="form-group">
                <label for="lokasi_gunung">Lokasi</label>
                <input type="text" class="form-control" name="lokasi_gunung" value="{{ $mountain->lokasi_gunung }}">
            </div>

            <div class="form-group">
                <label for="jalur_gunung">Jalur</label>
                <input type="text" class="form-control" name="jalur_gunung" value="{{ $mountain->jalur_gunung }}">
            </div>

            <div class="form-group">
                <label>Gambar</label>
                <br><img src="{{ asset('images/'.$mountain->foto) }}" style="width: 100px">
            </div>

            <div class="form-group">
                <label for="foto">Ganti Foto</label>
                <input type="file" class="form-control" name="foto">
                <label>*) Jika Gambar Tidak di Ganti, Kosongkan Saja.</label>
            </div>

            <div class="form-group">
                <a href="/mountain" class="btn btn-secondary">Batal</a>
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </form>
    </div>
</div>
</div>
</div>
