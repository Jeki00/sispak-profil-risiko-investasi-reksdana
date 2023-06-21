<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function store(Request $request)  {
        $name = $request->session()->key('nama');

        dd($name);

        return view('pertanyaan');
    }
}
