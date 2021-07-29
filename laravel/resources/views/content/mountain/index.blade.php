<div class="masthead">
<div class="container-xl" style="padding-top: 2cm">
<div class="card">


    <!-- Judul -->
    <div class="card-header">
        <h1 class="display-4 text-left">Mountain List</h1>
    </div>

    <div class="card-header">
        <h4>
            <a href="{{ route('listmountain.create') }}" class="btn btn-success" style="float: right">
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


        <div class="card-group">
            @foreach ($mountain as $data)

            {{-- Rincian Guide --}}
            <div class="card col-sm-3">
                <div class="row">
                    <div class="card-body">

                    <div class="header text-center" style="height: 1.5cm">
                        <h5>MT. {{ $data->nama_gunung }}</h5>
                    </div><hr>

                    <div class="container">
                    <div class="section">
                        <div class="d-flex justify-content-between align-items-center" style="height: 4.6cm">
                            <img class="img-thumbnail" alt="Responsive image" src="{{ asset('images/'.$data->foto) }}">
                        </div>
                    </div>

                    </div>
                    <div class="card-body" style="height: 5cm">
                        <li class="list-unstyled"><strong>Gunung : </strong></li>
                        <li>{{ $data->nama_gunung }}</li>
                        <li class="list-unstyled"><strong>Lokasi : </strong></li>
                        <li>{{ $data->lokasi_gunung }}</li>
                        <li class="list-unstyled"><strong>Jalur : </strong></li>
                        <li>{{ $data->jalur_gunung }}</li>
                    </div>

                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group mx-auto">
                            <a href="/guide" type="button" class="btn btn-sm btn-outline-success" style="width: 3cm">View Guide</a>
                            </div>
                        </div>
                    </div>

                    <div class="header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group mx-auto">
                                <form action="{{ route('listmountain.destroy', $data->id) }}" method="POST">@csrf

                                    {{-- Tombol Edit --}}
                                    <a href="{{ route('listmountain.edit', $data->id) }}" class="btn btn-sm btn-outline-secondary" style="width: 1.6cm">
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



    </div>


</div>
</div>
</div>
