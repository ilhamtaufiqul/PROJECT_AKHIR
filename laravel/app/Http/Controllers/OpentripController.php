<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OpenTrip;
use App\Mountain;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;

class OpentripController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'tittle' => 'Open Trip Page'
        ];

        $batas = 4;

        $opentrip = OpenTrip::orderBy('id', 'desc')->paginate($batas);
        $no = $batas * ($opentrip->currentPage() - 1);
        return view('admin.opentrip/index', $data, compact('opentrip', 'no'));
    }

    public function create()
    {
        $mountain = Mountain::all();
        return view('admin.opentrip/create', compact('mountain'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_opentrip' => 'required|string',
            'open_member' => 'required|numeric',
            'jadwal_berangkat' => 'required|date',
            'estimasi' => 'required|numeric',
            'foto' => 'required|image|mimes:jpeg,jpg,png'
        ]);
        $opentrip = new Opentrip;
        $opentrip->nama_opentrip = $request->nama_opentrip;
        $opentrip->open_member = $request->open_member;
        $opentrip->jadwal_berangkat = $request->jadwal_berangkat;
        $opentrip->estimasi = $request->estimasi;
        $opentrip->id_mountain = $request->id_mountain;
        $opentrip->id_user = Auth::id();

        $foto = $request->foto;
        $namafile = time() . '.' . $foto->getClientOriginalExtension();

        Image::make($foto)->resize(180, 130)
            ->save('thumb/' . $namafile);
        $foto->move('images/', $namafile);

        $opentrip->foto = $namafile;
        $opentrip->save();
        return redirect('/opentrip')->with('pesan', 'Data opentrip Berhasil Disimpan');
    }

    // Menghapus Data Guide
    public function destroy($id)
    {
        $opentrip = Opentrip::find($id);
        $namafile = $opentrip->foto;
        File::delete('images/' . $namafile);
        File::delete('thumb/' . $namafile);
        $opentrip->delete();
        return redirect('/opentrip')->with('pesan', 'Data opentrip Berhasil Dihapus');
    }

    public function edit($id)
    {
        $mountain = Mountain::all();
        $opentrip = Opentrip::find($id);
        return view('admin.opentrip/edit', compact('mountain', 'opentrip'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_opentrip' => 'required|string',
            'open_member' => 'required|numeric',
            'jadwal_berangkat' => 'required|date',
            'estimasi' => 'required|numeric',
            'foto' => 'required|image|mimes:jpeg,jpg,png'
        ]);
        $opentrip = Opentrip::find($id);
        if ($request->has('foto')) {
            $opentrip->nama_opentrip = $request->nama_opentrip;
            $opentrip->open_member = $request->open_member;
            $opentrip->jadwal_berangkat = $request->jadwal_berangkat;
            $opentrip->estimasi = $request->estimasi;
            $opentrip->id_mountain = $request->id_mountain;
            $opentrip->id_user = Auth::id();

            $foto = $request->foto;
            $namafile = time() . '.' . $foto->getClientOriginalExtension();

            Image::make($foto)->resize(180, 130)
                ->save('thumb/' . $namafile);
            $foto->move('images/', $namafile);
            $opentrip->foto = $namafile;
        } else {
            $opentrip->nama_opentrip = $request->nama_opentrip;
            $opentrip->open_member = $request->open_member;
            $opentrip->jadwal_berangkat = $request->jadwal_berangkat;
            $opentrip->estimasi = $request->estimasi;
            $opentrip->id_mountain = $request->id_mountain;
            $opentrip->id_user = Auth::id();
        }

        $opentrip->update();
        return redirect('/opentrip')->with('pesan', 'Data opentrip Berhasil Di Update');
    }
}
