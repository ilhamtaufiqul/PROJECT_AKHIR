<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guide;
use App\Opentrip;
use App\Mountain;
use App\MountainGuide;
use App\MountainOpenTrip;

class GuestController extends Controller
{
    public function MountainGuide()
    {
        $data = [
            'tittle' => 'Mountain List'
        ];

        $mountain = MountainGuide::all();
        return view('guest.mountainguide', $data, compact('mountain'));
    }

    public function listguide($tittle)
    {
        $data = [
            'tittle' => 'Daftar Guide'
        ];

        $mountains = MountainGuide::where('mountain_seo', $tittle)->first();
        $guides = $mountains->photos()->orderBy('id', 'desc')->paginate(6);
        return view('guest.viewguide', $data, compact('mountains', 'guides'));
    }

    public function MountainOpenTrip()
    {
        $data = [
            'tittle' => 'Open Trip List'
        ];

        $mountain = MountainOpenTrip::all();
        return view('guest.mountainopentrip', $data, compact('mountain'));
    }

    public function listopentrip($tittle)
    {
        $data = [
            'tittle' => 'Daftar Open Trip'
        ];

        $mountains = MountainOpenTrip::where('mountain_seo', $tittle)->first();
        $opentrips = $mountains->photos()->orderBy('id', 'desc')->paginate(6);
        return view('guest.viewopentrip', $data, compact('mountains', 'opentrips'));
    }
}
