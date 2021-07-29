<div class="jumbotron jumbotron-fluid">
    <div class="container" style="padding-top: 1cm">

        {{-- Judul --}}
        <h1 class="display-4 text-center" style="padding-left: 0.7cm">Daftar Gunung</h1>
        <h3 class=" text-muted text-center" style="padding-left: 1.2cm">Open Trip</h3>
        <hr>

        <div class="card-group">
            @foreach ($mountain as $data)
            <div class="card col-sm-3">
                <div class="row">
                    <div class="card-body">

                        <div class="header text-center" style="height: 1.5cm">
                            <h5 class="">MT. {{ $data->nama_gunung }}</h5>
                        </div>
                        <hr>

                        <div class="container" style="height: 3cm">
                            <div class="section">
                                <div class="d-flex justify-content-between align-items-center">
                                    <img class="img-thumbnail" style="height: 4cm;" alt="Responsive image" src="{{ asset('images/'.$data->foto) }}">
                                </div>
                            </div>
                        </div>

                        <div class="card-body" style="padding-top: 1.7cm;">
                            <li class=" list-unstyled"><strong>Gunung : </strong></li>
                            <li>{{ $data->nama_gunung }}</li>
                            <li class="list-unstyled"><strong>Lokasi : </strong></li>
                            <li>{{ $data->lokasi_gunung }}</li>
                            <li class="list-unstyled"><strong>Jalur : </strong></li>
                            <li>{{ $data->jalur_gunung }}</li>
                        </div>

                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group mx-auto">
                                    <a href="{{ route('list.opentrip', $data->mountain_seo) }}" type="button" class="btn btn-sm btn-outline-success" style="width: 3cm">View List</a>
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
</section>