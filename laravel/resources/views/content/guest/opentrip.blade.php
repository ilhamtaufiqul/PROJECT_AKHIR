<div class="jumbotron jumbotron-fluid">
    <div class="container" style="padding-top: 1cm">

        {{-- Judul --}}
        <h1 class="display-4 text-left" style="padding-left: 0.7cm">Guide List : {{ $mountains->nama_gunung }}</h1>

        {{-- Tombol Kembali --}}
        <a href="/mountains" class="btn btn-secondary" style="float: right">
        <i class="fa"></i> Kembali</a><br><hr>

        {{-- Isi Halaman --}}
            <div class="card-group">
            @foreach ($opentrips as $data)

            {{-- Rincian Guide --}}
            <div class="card col-sm-3">
                <div class="row">
                    <div class="card-body">

                        <div class="container" style="height: 4cm">
                            <div class="section">
                                <div class="d-flex justify-content-between">
                                    <img class="img-thumbnail" src="{{ asset('images/'.$data->foto) }}">
                                </div>
                            </div>
                        </div>

                        {{-- <div class="header text-center" style="height: 1.5cm">
                            <h5 class="">Special Guide</h5>
                            <li class="list-unstyled">{{ $data->lokasi_guide }}</li>
                        </div> --}}

                        <div class="card-body" style="height: 5cm">
                            <li class="list-unstyled"><strong>Nama : </strong></li>
                            <li>{{ $data->nama_opentrip }}</li>
                            <li class="list-unstyled"><strong>Open Member : </strong></li>
                            <li>{{ $data->open_member }}</li>
                            <li class="list-unstyled"><strong>Jadwal Berangkat : </strong></li>
                            <li>{{ $data->jadwal_berangkat }}</li>
                        </div>

                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group mx-auto">
                                <button type="button" class="btn btn-sm btn-outline-success" style="width: 3cm">View Details</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach
            </div>

        <div>{{ $opentrips->links() }}</div>

    </div>
</div>
