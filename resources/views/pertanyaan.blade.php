@extends('layouts.app-user')



@section('content')

    <form action="/konsultasi" method="POST" class="border roundex p-5 m-5">
        <input type="hidden" name="nama" value='{{$nama}}' id="">
        <h3> Jawablah beberapa pertanyaan berikut</h3>
        @csrf
        <div class="border rounded p-3 m-2">
            <label for="inputJawaban1" class="form-label">Tujuan investasi</label><br>
            <input type="radio" name="jawaban1" id="P1-A" value="P1-A">
            <label for="P1-A">Untuk memperoleh keamanan dan pertumbuhan nilai investasi</label><br>
            <input type="radio" name="jawaban1" id="P1-B" value="P1-B">
            <label for="P1-B">Sebagian kecil ditujukan untuk peningkatan nilai investasi dan sebagian besar untuk pendapatan</label><br>
            <input type="radio" name="jawaban1" id="P1-C" value="P1-C">
            <label for="P1-C">Tujuan utama adalah untuk peningkatan nilai investasi, Sebagian untuk pendapatan</label><br>
            <input type="radio" name="jawaban1" id="P1-D" value="P1-D">
            <label for="P1-D">Investasi jangka panjang</label>
        </div>
        
        <div class="border rounded p-3 m-2">
            <label for="inputJawaban2" class="form-label">Jangka Waktu Investasi?</label><br>
            <input type="radio" name="jawaban2" id="P2-A" value="P2-A">
            <label for="P2-A">kurang dari 1 tahun</label><br>
            <input type="radio" name="jawaban2" id="P2-B" value="P2-B">
            <label for="P2-B">1-3 tahun</label><br>
            <input type="radio" name="jawaban2" id="P2-C" value="P2-C">
            <label for="P2-C">3-5 tahun</label><br>
            <input type="radio" name="jawaban2" id="P2-D" value="P2-D">
            <label for="P2-D">lebih dari 5 tahun</label>
        </div>
        <div class="border rounded p-3 m-2">
            <label for="inputJawaban3" class="form-label">Porsi dana untuk investasi?</label><br>
            <input type="radio" name="jawaban3" id="P3-A" value="P3-A">
            <label for="P3-A">kurang dari 10 %</label><br>
            <input type="radio" name="jawaban3" id="P3-B" value="P3-B">
            <label for="P3-B">10-20 %</label><br>
            <input type="radio" name="jawaban3" id="P3-C" value="P3-C">
            <label for="P3-C">20-30 %</label><br>
            <input type="radio" name="jawaban3" id="P3-D" value="P3-D">
            <label for="P3-D">20-40 %</label>
        </div>
        
        <div class="border rounded p-3 m-2">
            <label for="inputJawaban4" class="form-label">Toleransi kerugian?</label><br>
                <input type="radio" name="jawaban4" id="P4-A" value="P4-A">
                <label for="P4-A">0 %</label><br>
                <input type="radio" name="jawaban4" id="P4-B" value="P4-B">
                <label for="P4-B">0-5 %</label><br>
                <input type="radio" name="jawaban4" id="P4-C" value="P4-C">
                <label for="P4-C">5-15 % </label><br>
                <input type="radio" name="jawaban4" id="P4-D" value="P4-D">
                <label for="P4-D">lebih dari 15 %</label>
        </div>
        <br>

        <button class="btn btn-primary">Selesai</button>
    </form>


@endsection
