<div class="masthead">
    <div class="container-xl" style="padding-top: 2cm">
        <div class="card">

        {{-- Judul --}}
        <div class="card-header">
            <h1 class="display-4 text-left">Data Album</h1>
        </div>

        <div class="card-header">
            <h4>

                <!-- Search -->
                <form class=" form-inline float-left" action="{{ route('album.search') }}" method="GET">@csrf
                    <input class="form-control mr-sm-2" type="text" name="kata" placeholder="Nama Album">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="width: 3cm">
                        <i class="fas fa-search"></i> Cari
                    </button>
                </form>

                <!-- Tombol Kembali -->
                <a href="/jasaguide" class="btn btn-secondary" style="float: right">
                <i class="fa"></i> Kembali</a>
            </h4>
        </div>
        
        <div class="card-body bg-danger text-white">
            <div class="ml-auto">Ditemukan {{ count($data_album) }} data dengan kata : {{ $cari }}</div>
        </div>

        <div class="card-body">


            {{-- Pesan Jika ada salah --}}
            @if(Session::has('pesan'))
                <div>{{ Session::get('pesan') }}</div>
            @endif

            {{-- Search --}}
            @if(count($data_album))

            {{-- Flash Message --}}
            @if(Session::has('pesan'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <div>{{ Session::get('pesan') }}</div>
                </div>
            @endif
            

        {{-- Tabel --}}
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Asal</th>
                        <th>Umur</th>
                        <th>Keterangan</th>
                        <th>Harga</th>
                        <th>Tgl Lahir</th>
                        @if (Auth::check() && Auth::user()->level == 'operator')
                        <th>Aksi</th>
                        @endif

                    </tr>
                </thead>
                <tbody>

                    @foreach ($data_album as $album)
                    <tr>
                            <td>{{ ++$no }}</td>
                            <td>{{ $album->nama_album }}</td>
                            <td>{{ $album->asal }}</td>
                            <td>{{ $album->umur }} Tahun </td>
                            <td>{{ $album->ket }}</td>
                            <td>Rp. {{ number_format($album->harga, 0, ',', '.') }} </td>
                            <td>{{ $album->tgl_lahir->format('d/m/Y') }}</td>

                            @if (Auth::check() && Auth::user()->level == 'operator')
                            <td>
                                <form action="{{ route('guide.destroy', $guide->id) }}" method="POST">
                                    @csrf

                                    {{-- Tombol Edit --}}
                                        <a class="btn btn-secondary" href="{{ route('guide.edit', $guide->id) }}">Edit</a>

                                    {{-- Tombol Tambah --}}
                                        <button class="btn btn-danger" onclick="return confirm('Yakin Mau Dihapus?')">Hapus</button>
                                </form>
                            </td>
                            @endif

                    </tr>
                    @endforeach

                </tbody>
            </table>
            {{-- Pagination --}}
            <div>Jumlah Guide : {{ $jumlah_guide }}</div>
            <div>{{ $data_guide->links() }}</div>

            @else
                <div class="card-body bg-dark text-white">
                    <h4>Pencarian Dengan Nama : <a style="color: #ff0000">{{ $cari }}</a> <br>Tidak Ditemukan</h4>
                </div>
            @endif

        </div>
        </div>


        </div>
    </div>
</div>