<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rule;
use Illuminate\Support\Facades\DB;

class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pertanyaan');
    }

    public function consult(Request $request)
    {
        $nama = $request->query('nama');

        dd($nama);
        $jawaban1 = $request['jawaban1'];
        $jawaban2 = $request['jawaban2'];
        $jawaban3 = $request['jawaban3'];
        $jawaban4 = $request['jawaban4'];


        $profil = DB::table('rules as r')
        ->where('jawaban_2', $jawaban2)
        ->where('jawaban_2', $jawaban2)
        ->where('jawaban_3', $jawaban3)
        ->where('jawaban_4', $jawaban4)
        ->join('jawaban as j1', 'r.jawaban_1', '=', 'j1.kode_jawaban')
        ->join('jawaban as j2', 'r.jawaban_2', '=', 'j2.kode_jawaban')
        ->join('jawaban as j3', 'r.jawaban_3', '=', 'j3.kode_jawaban')
        ->join('jawaban as j4', 'r.jawaban_4', '=', 'j4.kode_jawaban')
        ->select('r.id','r.profil', 'j1.jawaban as jawaban_1', 'j2.jawaban as jawaban_2', 'j3.jawaban as jawaban_3', 'j4.jawaban as jawaban_4')
        ->get();

        // dd(count($profil));


        return view('hasil',[
            'profil'=>$profil,
            'ada'=>count($profil),
            'nama'=>$nama
        ]);
        
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }
}
