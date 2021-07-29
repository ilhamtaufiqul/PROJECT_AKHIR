<div class="masthead">
<div class="container-xl" style="padding-top: 2cm">
<div class="card">
<div class="card-header">
    <!-- Judul -->
    <h1 class="display-4 text-left">Open Trip</h1>
    </div>

    <div class="card-header">
        <h4>
            <form class=" form-inline float-left" action="{{ route('guide.search') }}" method="GET">@csrf
                <input class="form-control mr-sm-2" type="text" name="kata" placeholder="Tujuan Open Trip">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="width: 3cm">
                    <i class="fas fa-search"></i> Cari
                </button>
            </form>
            <a href="{{ route('opentrip.create') }}" class="btn btn-success" style="float: right">
            <i class="fa fa-plus"></i> Tambah</a>
        </h4>
    </div>

    <div class="card-body">

        {{-- Flash Message --}}
        @if(Session::has('pesan'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <div>{{ Session::get('pesan') }}</div>
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr class="text-center">
                    <th>No</th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Open Member</th>
                    <th>Jadwal</th>
                    <th>Estimasi</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($opentrip as $data)
                <tr class="text-center" style="height: 3cm">
                    <td class=" align-middle">{{ ++$no }}</td>
                    <td class=" align-middle"><img src="{{ asset('images/'.$data->foto) }}" style="width: 100px"></td>
                    <td class=" align-middle">{{ $data->nama_opentrip }}</td>
                    <td class=" align-middle">{{ $data->open_member }}</td>
                    <td class=" align-middle">{{ $data->jadwal_berangkat }}</td>
                    <td class=" align-middle">{{ $data->estimasi }} Hari</td>
                    <td class=" align-middle">
                        <form action="{{ route('opentrip.destroy', $data->id) }}" method="POST">@csrf

                            {{-- Tombol Edit --}}
                            <a href="{{ route('opentrip.edit', $data->id) }}" class="btn btn-secondary">
                                <i class="fa fa-pencil-alt"></i> Edit
                            </a>

                            {{-- Tombol Tambah --}}
                            <button class="btn btn-danger" onclick="return confirm('Yakin Mau Dihapus?')">
                                <i class="fa fa-pencil-alt"></i> Hapus
                            </button>

                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>
