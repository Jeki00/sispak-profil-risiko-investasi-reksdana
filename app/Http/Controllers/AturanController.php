<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\AturanController;
use App\Models\Rule;
use Illuminate\Support\Facades\DB;

class AturanController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index()
    {
        $rule = DB::table('rules as r')
        ->join('jawaban as j1', 'r.jawaban_1', '=', 'j1.kode_jawaban')
        ->join('jawaban as j2', 'r.jawaban_2', '=', 'j2.kode_jawaban')
        ->join('jawaban as j3', 'r.jawaban_3', '=', 'j3.kode_jawaban')
        ->join('jawaban as j4', 'r.jawaban_4', '=', 'j4.kode_jawaban')
        ->select('r.id','r.profil', 'j1.jawaban as jawaban_1', 'j2.jawaban as jawaban_2', 'j3.jawaban as jawaban_3', 'j4.jawaban as jawaban_4')
        ->get();

        return view('aturan',[
            'rules'=> $rule,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tambahAturan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $profil = $request['profil'];
        $jawaban1 = $request['jawaban1'];
        $jawaban2 = $request['jawaban2'];
        $jawaban3 = $request['jawaban3'];
        $jawaban4 = $request['jawaban4'];

        Rule::create([
            'profil'=>$profil,
            'jawaban_1'=>$jawaban1,
            'jawaban_2'=>$jawaban2,
            'jawaban_3'=>$jawaban3,
            'jawaban_4'=>$jawaban4,
        ]);

        return redirect('/aturan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Rule::find($id)->delete();
        return redirect('/aturan');
    }
}
