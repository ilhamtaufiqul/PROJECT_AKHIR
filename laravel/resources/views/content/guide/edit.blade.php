<div class="masthead">
    <div class="container-xl" style="padding-top: 2cm">
        <div class="card">
            <div class="card-header">
                <h4>Edit Guide</h4>
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

                <form action="{{ route('listguide.update', $guide->id) }}" method="POST" enctype="multipart/form-data">@csrf

                    <div class="form-group">
                        <label for="nama_guide">Nama Guide</label>
                        <input type="text" class="form-control" name="nama_guide" value="{{ $guide->nama_guide }}">
                    </div>

                    <div class="form-group">
                        <label for="asal_guide">Asal Guide</label>
                        <input type="text" class="form-control" name="asal_guide" value="{{ $guide->asal_guide }}">
                    </div>

                    <div class="form-group">
                        <label for="tglahir_guide">Tgl Lahir Guide</label>
                        <input type="date" class="form-control" name="tglahir_guide" value="{{ $guide->tglahir_guide }}">
                    </div>

                    <div class="form-group">
                        <label for="lokasi_guide">Spesial Guide</label>
                        <input type="text" class="form-control" name="lokasi_guide" value="{{ $guide->lokasi_guide }}">
                    </div>

                    <div class="form-group">
                        <label for="id_mountain">Mountain</label>
                        <select name="id_mountain" class="form-control">
                            <option value="" selected>Pilih Mountain</option>
                            @foreach ($mountain as $data)
                            <option value="{{ $data->id }}">{{ $data->nama_gunung}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Foto</label>
                        <br><img src="{{ asset('images/'.$guide->foto) }}" style="width: 100px">
                    </div>

                    <div class="form-group">
                        <label for="foto">Ganti Foto</label>
                        <input type="file" class="form-control" name="foto" value="{{ $guide->foto }}">
                        <label>*) Jika Gambar Tidak di Ganti, Kosongkan Saja.</label>
                    </div>

                    <div class="form-group">
                        <a href="/guide" class="btn btn-secondary">Batal</a>
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>