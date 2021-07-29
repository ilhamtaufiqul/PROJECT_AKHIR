<div class="masthead">
<div class="container-xl" style="padding-top: 2cm">
<div class="card">
    <div class="card-header">
        <h4>Tambah Opentrip</h4>
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
        <form action="{{ route('opentrip.store') }}" method="POST" enctype="multipart/form-data">@csrf
        <div class="form-group">
            <label for="nama_opentrip">Nama Open Trip</label>
            <input type="text" class="form-control" name="nama_opentrip">
        </div>

        <div class="form-group">
            <label for="open_member">Open Member</label>
            <input type="text" class="form-control" name="open_member">
        </div>

        <div class="form-group">
            <label for="jadwal_berangkat">Jadwal Pemberangkatan</label>
            <input type="date" class="form-control" name="jadwal_berangkat">
        </div>

        <div class="form-group">
            <label for="estimasi">Estimasi Pemberangkatan (Hari)</label>
            <input type="text" class="form-control" name="estimasi">
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
            <label for="foto">Upload Foto</label>
            <input type="file" class="form-control" name="foto">
        </div>
        <div class="form-group">
            <a href="/opentrip" class="btn btn-secondary">Batal</a>
            <button type="submit" class="btn btn-success">Simpan</button>
        </div>
    </form>
    </div>
</div>
</div>
</div>
