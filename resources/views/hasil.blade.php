@extends('layouts.app-user')


@section('content')

<div class="row justify-content-center m-5">
    <div class="col-md-8">
        <div class="card" >
            <div class="card-header">
                <h4>Hasil</h4>
            </div>
            
            @if ($ada==0)
                <div class="card-body d-flex align-items-center">
                    <h4> Maaf belum dapat memberikan hasil. Aturan masih dalam tahap pengembangan</h4>
                </div>
            @else
            <div class="card-body" >
                @foreach ($profil as $item)
                <h3>
                    Hai {{$nama}}, Jenis profil investasi anda adalah <br><strong> {{$item->profil}} </strong>
                </h3>
                   <p> Berdasarkan jawaban berikut: </p>
                <ul>
                    <li>
                        {{$item->jawaban_1}}
                    </li>
                    <li>
                        {{$item->jawaban_2}}
                    </li>
                    <li>
                        {{$item->jawaban_3}}
                    </li>
                    <li>
                        {{$item->jawaban_4}}
                    </li>
                </ul>
                <h5>Reksadana yang cocok adalah <strong> {{$item->nama_reksadana}} </strong></h5>
                <p>{{$item->deskripsi}}</p>
                @endforeach
            </div>
            @endif

                
            <div class="card-footer">
                <a href="/" class="btn btn-danger">kembali</a>
            </div>
        </div>
    </div>
</div>



    

@endsection
