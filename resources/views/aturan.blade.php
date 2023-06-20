@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Aturan') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <table>
                        @foreach ($rules as $rule)
                        <tr>
                            <td>
                                <ul>
                                    <li> {{$rule->profil}}</li>
                                    <ul>
                                        <li>{{$rule->jawaban_1 }}</li>
                                        <li>{{$rule->jawaban_2 }}</li>
                                        <li>{{$rule->jawaban_3 }}</li>
                                        <li>{{$rule->jawaban_4 }}</li>
                                    </ul>
                                </ul>
                            </td>
                            <td>
                                <a href='/aturan/hapus/{{$rule->kode_rule}}' class="btn btn-sm btn-danger">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>

                    
                </div>
                <div class="card-footer">
                    <a href="/aturan/tambah" class="btn btn-primary">tambah</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
