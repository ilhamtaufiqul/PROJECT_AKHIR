    <div class="masthead">
    <div class="container-xl" style="padding-top: 2cm">
    <div class="card">
        <div class="card-header">
            <h4>Data User
                <a href="{{ route('user.create') }}" class="btn btn-success" style="float: right">
                    <i class="fa fa-plus"></i> Tambah User</a>
            </h4>
        </div>

        <div class="card-body">

            <!-- Flash Message -->
            @if(Session::has('pesan'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <div>{{ Session::get('pesan') }}</div>
            </div>
            @endif

            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Level</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($user as $data)
                        <tr>
                            <td>{{ ++$no }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->level }}</td>
                            <td>
                                <form action="{{ route('user.destroy', $data->id) }}" method="POST">@csrf

                                    {{-- Tombol Edit --}}
                                    <a href="{{ route('user.edit', $data->id) }}" class="btn btn-secondary">
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
                <div style="float: right">{{ $user->links() }}</div>
            </div>
        </div>
    </div>
    </div>
    </div>
