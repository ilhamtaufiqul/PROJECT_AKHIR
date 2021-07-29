<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guide;
use App\Mountain;
use App\User;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;

class GuideController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Tampilan Halaman Guide
    public function index()
    {
        $data = [
            'tittle' => 'Guide Page'
        ];
        $batas = 4;

        $guide = Guide::orderBy('id', 'desc')->paginate($batas);
        $no = $batas * ($guide->currentPage() - 1);
        return view('admin.guide.index', $data, compact('guide', 'no'));
    }


    // Menambah Guide
    public function create()
    {
        $mountain = Mountain::all();
        return view('admin.guide.create', compact('mountain'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_guide' => 'required|string',
            'asal_guide' => 'required|string',
            'tglahir_guide' => 'required|date',
            'foto' => 'required|image|mimes:jpeg,jpg,png'
        ]);
        $guide = new Guide;
        $guide->nama_guide = $request->nama_guide;
        $guide->asal_guide = $request->asal_guide;
        $guide->tglahir_guide = $request->tglahir_guide;
        $guide->lokasi_guide = $request->lokasi_guide;
        $guide->id_mountain = $request->id_mountain;
        $guide->id_user = Auth::id();

        $foto = $request->foto;
        $namafile = time() . '.' . $foto->getClientOriginalExtension();

        Image::make($foto)->resize(180, 130)
            ->save('thumb/' . $namafile);
        $foto->move('images/', $namafile);

        $guide->foto = $namafile;
        $guide->save();
        return redirect('/guide')->with('pesan', 'Guide Berhasil Di Tambahkan');
    }

    // Menghapus Guide
    public function destroy($id)
    {
        $guide = Guide::find($id);
        $namafile = $guide->foto;
        File::delete('images/' . $namafile);
        File::delete('thumb/' . $namafile);
        $guide->delete();
        return redirect('/guide')->with('pesan', 'Guide Berhasil Di Hapus');
    }

    // Mengedit Guide
    public function edit($id)
    {
        $mountain = Mountain::all();
        $guide = Guide::find($id);
        return view('admin.guide.edit', compact('mountain', 'guide'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_guide' => 'required|string',
            'asal_guide' => 'required|string',
            'tglahir_guide' => 'required|date',
            'foto' => 'required|image|mimes:jpeg,jpg,png'
        ]);
        $guide = Guide::find($id);
        if ($request->has('foto')) {
            $guide->nama_guide = $request->nama_guide;
            $guide->asal_guide = $request->asal_guide;
            $guide->tglahir_guide = $request->tglahir_guide;
            $guide->lokasi_guide = $request->lokasi_guide;
            $guide->id_mountain = $request->id_mountain;
            $guide->id_user = Auth::id();

            $foto = $request->foto;
            $namafile = time() . '.' . $foto->getClientOriginalExtension();

            Image::make($foto)->resize(180, 130)
                ->save('thumb/' . $namafile);
            $foto->move('images/', $namafile);
            $guide->foto = $namafile;
        } else {
            $guide->nama_guide = $request->nama_guide;
            $guide->asal_guide = $request->asal_guide;
            $guide->tglahir_guide = $request->tglahir_guide;
            $guide->lokasi_guide = $request->lokasi_guide;
            $guide->id_mountain = $request->id_mountain;
            $guide->id_user = Auth::id();
        }

        $guide->update();
        return redirect('/guide')->with('pesan', 'Guide Berhasil Di Update');
    }
}
