<div class="masthead">
    <div class="container-xl" style="padding-top: 2cm">
        <div class="card">
            <div class="card-header">
                <h4>Edit Album</h4>
            </div>

            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">×</button>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </div>
            @endif

            <div class="card-body">
                <form action="{{ route('opentrip.update', $opentrip->id) }}" method="POST" enctype="multipart/form-data">@csrf
                    <div class="form-group">
                        <label for="nama_opentrip">Nama Open Trip</label>
                        <input type="text" class="form-control" name="nama_opentrip" value="{{ $opentrip->nama_opentrip }}">
                    </div>

                    <div class="form-group">
                        <label for="open_member">Open Member</label>
                        <input type="text" class="form-control" name="open_member" value="{{ $opentrip->open_member }}">
                    </div>

                    <div class="form-group">
                        <label for="jadwal_berangkat">Jadwal Pemberangkatan</label>
                        <input type="date" class="form-control" name="jadwal_berangkat" value="{{ $opentrip->jadwal_berangkat }}">
                    </div>

                    <div class="form-group">
                        <label for="estimasi">Estimasi Pemberangkatan (Hari)</label>
                        <input type="text" class="form-control" name="estimasi" value="{{ $opentrip->estimasi }}">
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
                        <br><img src="{{ asset('images/'.$opentrip->foto) }}" style="width: 100px">
                    </div>

                    <div class="form-group">
                        <label for="foto">Ganti Foto</label>

                        <input type="file" class="form-control" name="foto">
                        <label>*) Jika Foto Tidak di Ganti, Kosongkan Saja.</label>
                    </div>

                    <div class="form-group">
                        <a href="/opentrip" class="btn btn-secondary">Batal</a>
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>