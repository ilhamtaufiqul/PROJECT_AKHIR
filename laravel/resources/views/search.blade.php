@extends('layout.master')

@extends('layout.navbar')

@section('content')

{{-- Pesan Jika ada salah --}}
@if(Session::has('pesan'))
    <div>{{ Session::get('pesan') }}</div>
@endif

<div class="jumbotron jumbotron-fluid">
    <div class="container" style="padding-top: 1cm">


        {{-- Search --}}
        @if(count($data_guide))

        {{-- Flash Message --}}
        @if(Session::has('pesan'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <div>{{ Session::get('pesan') }}</div>
            </div>
        @endif


        {{-- Judul --}}
        <h1 class="display-4 text-left">Data Guide

            {{-- Tambah guide
            <p align="right">
                <a href="{{ route('guide.create') }}" class="btn btn-success">Tambah Guide</a>
            </p> --}}


        </h1><hr>

        <div class="container">
            <div class="row">

                <div class="mr-auto">
                    <form class="form-inline float-left" action="{{ route('guide.search') }}" method="GET">@csrf
                        <input class="form-control mr-sm-2" type="text" name="kata" placeholder="Nama Guide">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="width: 1.9cm">Cari</button>
                    </form>
                </div>

                <div class="ml-auto">
                    <div class="ml-auto p-2">Ditemukan {{ count($data_guide) }} data dengan kata : {{ $cari }}</div>
                </div>

            </div>
        </div>


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
                        <th>Aksi</th>

                    </tr>
                </thead>
                <tbody>

                    @foreach ($data_guide as $guide)
                    <tr>
                            <td>{{ ++$no }}</td>
                            <td>{{ $guide->nama }}</td>
                            <td>{{ $guide->asal }}</td>
                            <td>{{ $guide->umur }} Tahun </td>
                            <td>{{ $guide->ket }}</td>
                            <td>Rp. {{ number_format($guide->harga, 0, ',', '.') }} </td>
                            <td>{{ $guide->tgl_lahir->format('d/m/Y') }}</td>
                        <td>
                            <form action="{{ route('guide.destroy', $guide->id) }}" method="POST">
                                @csrf

                                {{-- Tombol Edit --}}
                                    <a class="btn btn-secondary" href="{{ route('guide.edit', $guide->id) }}">Edit</a>

                                {{-- Tombol Tambah --}}
                                    <button class="btn btn-danger" onclick="return confirm('Yakin Mau Dihapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

        {{-- Pagination --}}
        <div>Jumlah Guide : {{ $jumlah_guide }}</div>
        <div>{{ $data_guide->links() }}</div>


    </div>
</div>
@else
    <div class="jumbotron bg-dark text-light">
        <h4>Pencarian Dengan Nama : <a style="color: #ff0000">{{ $cari }}</a> <br>Tidak Ditemukan</h4>
        <a href="/jasaguide" class="btn btn-secondary my-2 my-sm-0" type="submit">Kembali</a>
    </div>
@endif

@endsection



