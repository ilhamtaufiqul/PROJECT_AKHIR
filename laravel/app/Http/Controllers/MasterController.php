<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function welcome()
    {
        $data = [
            'tittle' => 'Home | Pokok Gass Official'
        ];
        return view('landing.home', $data);
    }

    public function about()
    {
        $data = [
            'tittle' => 'About Us'
        ];
        return view('landing.about', $data);
    }

    public function contact()
    {
        $data = [
            'tittle' => 'Contact Us'
        ];
        return view('landing.contact', $data);
    }

    public function fitur()
    {
        $data = [
            'tittle' => 'Fitur'
        ];
        return view('landing.fitur', $data);
    }
}