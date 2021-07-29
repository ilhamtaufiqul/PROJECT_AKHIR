<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Mountain;
use Illuminate\Support\Facades\File;

class Mountain2Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'tittle' => 'Mountain List'
        ];
        $batas = 4;

        $no = 0;
        $mountain = Mountain::all();
        return view('admin.mountain/index', $data, compact('mountain', 'no'));
    }

    public function create()
    {
        return view('admin.mountain/create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_gunung' => 'required',
            'lokasi_gunung' => 'required',
            'jalur_gunung' => 'required',
            'foto' => 'required|image|mimes:jpeg,jpg,png'
        ]);
        $mountain = new Mountain;
        $mountain->nama_gunung = $request->nama_gunung;
        $mountain->lokasi_gunung = $request->lokasi_gunung;
        $mountain->jalur_gunung = $request->jalur_gunung;
        $mountain->mountain_seo = Str::slug($request->nama_gunung);

        $foto = $request->foto;
        $namafile = time() . '.' . $foto->getClientOriginalExtension();
        $foto->move('images/', $namafile);

        $mountain->foto = $namafile;
        $mountain->save();
        return redirect('/mountain')->with('pesan', 'Data Mountain Berhasil Disimpan');
    }

    // Menghapus Data Mountain
    public function destroy($id)
    {
        $mountain = Mountain::find($id);
        $namafile = $mountain->foto;
        File::delete('images/' . $namafile);
        $mountain->delete();
        return redirect('/mountain')->with('pesan', 'Data Mountain Berhasil Dihapus');
    }

    public function edit($id)
    {
        $mountain = Mountain::find($id);
        return view('admin.mountain/edit', compact('mountain'));
    }

    public function update(Request $request, $id)
    {
        $mountain = Mountain::find($id);
        if ($request->has('foto')) {
            $mountain->nama_gunung = $request->nama_gunung;
            $mountain->lokasi_gunung = $request->lokasi_gunung;
            $mountain->jalur_gunung = $request->jalur_gunung;
            $mountain->mountain_seo = Str::slug($request->nama_gunung);

            $foto = $request->foto;
            $namafile = time() . '.' . $foto->getClientOriginalExtension();
            $foto->move('images/', $namafile);
            $mountain->foto = $namafile;
        } else {
            $mountain->nama_gunung = $request->nama_gunung;
            $mountain->lokasi_gunung = $request->lokasi_gunung;
            $mountain->jalur_gunung = $request->jalur_gunung;
            $mountain->mountain_seo = Str::slug($request->nama_gunung);
        }

        $mountain->update();
        return redirect('/mountain')->with('pesan', 'Data Mountain Berhasil Di Update');
    }
}
