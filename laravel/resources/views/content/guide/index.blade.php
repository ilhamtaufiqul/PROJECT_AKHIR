<div class="masthead">
    <div class="container-xl" style="padding-top: 2cm">
    <div class="card">


        {{-- Judul --}}
        <div class="card-header">
            <h1 class="display-4 text-left">List Guide</h1>
        </div>


        {{-- Search Box --}}
        <div class="card-header">
            <h4>
                {{-- <form class=" form-inline float-left" action="{{ route('guide.search') }}" method="GET">@csrf
                    <input class="form-control mr-sm-2" type="text" name="kata" placeholder="Tujuan Open Trip">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="width: 3cm">
                        <i class="fas fa-search"></i> Cari
                    </button>
                </form> --}}
                <a href="{{ route('listguide.create') }}" class="btn btn-success" style="float: right">
                <i class="fa fa-plus"></i> Tambah</a>
            </h4>
        </div>


        {{-- Isi Halaman --}}
        <div class="card-body">

            {{-- Flash Message --}}
            {{-- @if(Session::has('pesan'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <div>{{ Session::get('pesan') }}</div>
                </div>
            @endif --}}

            {{-- <div class="container">
                <div class="row">
                    @foreach ($guide as $data)
                    <div class="col-md-3">
                        <div class="card">
                            <img src="{{ asset('images/'.$data->foto_guide) }}" style="width: 200px">
                            <th>Nama Guide</th> : <td>{{ $data->nama_guide }}</td>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div> --}}

                <div class="card-group">
                    @foreach ($guide as $data)

                    {{-- Rincian Guide --}}
                    <div class="card col-sm-3">
                        <div class="row">
                            <div class="card-body">

                            <div class="container" style="height: 4.7cm">
                            <div class="section">
                                <div class="d-flex justify-content-between" style="height: 4cm">
                                    <img class="img-thumbnail" src="{{ asset('images/'.$data->foto) }}">
                                </div>
                            </div>
                            </div>

                            <div class="header text-center" style="height: 1.5cm">
                                <h5 class="">Special Guide</h5>
                                <li class="list-unstyled">{{ $data->lokasi_guide }}</li>
                            </div>

                            <div class="card-body" style="height: 5cm">
                                <li class="list-unstyled"><strong>Nama : </strong></li>
                                <li>{{ $data->nama_guide }}</li>
                                <li class="list-unstyled"><strong>Asal : </strong></li>
                                <li>{{ $data->asal_guide }}</li>
                                <li class="list-unstyled"><strong>Tgl Lahir : </strong></li>
                                <li>{{ $data->tglahir_guide->format('d/m/Y') }}</li>
                            </div>

                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group mx-auto">
                                    <button type="button" class="btn btn-sm btn-outline-success" style="width: 3cm">View Details</button>
                                    </div>
                                </div>
                            </div>

                            <div class="header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group mx-auto">
                                        <form action="{{ route('listguide.destroy', $data->id) }}" method="POST">@csrf

                                            {{-- Tombol Edit --}}
                                            <a href="{{ route('listguide.edit', $data->id) }}" class="btn btn-sm btn-outline-secondary" style="width: 1.6cm">
                                                <i class="button"></i> Edit
                                            </a>

                                            {{-- Tombol Tambah --}}
                                            <button class="btn btn-sm btn-outline-danger" style="width: 1.6cm" onclick="return confirm('Yakin Mau Dihapus?')">
                                                <i class="button"></i> Hapus
                                            </button>

                                            </form>
                                    </div>
                                </div>
                            </div>

                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>



            {{-- <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Profil</th>
                        <th>Nama</th>
                        <th>Asal</th>
                        <th>Umur</th>
                        <th>Rate</th>
                        <th>Details</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($guide as $data)
                    <tr class="text-center">
                        <td>{{ ++$no }}</td>
                        <td><img src="{{ asset('images/'.$data->foto_guide) }}" style="width: 150px"></td>
                        <td>{{ $data->nama_guide }}</td>
                        <td>{{ $data->asal_guide }}</td>
                        <td>{{ $data->umur_guide }}</td>
                        <td></td>
                        <td>
                            <a href="" class="btn btn-success">
                            <i class="">View Details</i>
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('listguide.destroy', $data->id) }}" method="POST">@csrf

                            Tombol Edit
                            <a href="{{ route('listguide.edit', $data->id) }}" class="btn btn-secondary">
                                <i class="fa fa-pencil-alt"></i> Edit
                            </a>

                            Tombol Tambah
                            <button class="btn btn-danger" onclick="return confirm('Yakin Mau Dihapus?')">
                                <i class="fa fa-pencil-alt"></i> Hapus
                            </button>

                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div> --}}
        </div>
    </div>
    </div>
    </div>
