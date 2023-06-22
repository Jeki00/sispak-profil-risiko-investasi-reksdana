@extends('layouts.app-user')

@section('jumbotron')

<section class="jumbotron text-center">
    <div class="container">
        <h1 class="display-4">Welcome to Our Landing Page</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut nisl non dolor fermentum tempus
            vel non lectus.</p>
        <button class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">Mulai</button>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Identitas Pengguna</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/konsultasi" id="namaForm">
                    <div class="modal-body">
                        <label for="nama" class="form-label">Masukkan Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" required>
                        <button type="submit" class="btn btn-primary m-2">mulai</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 mb-4">
            <div class="col-md-12">
                <h2>Penjelasan</h2>
                <p>Ini adalah penjelasan tentang halaman landing page. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut nisl non dolor fermentum tempus vel non lectus.</p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <img src="image.jpg" alt="Image" class="img-fluid">
            <h2>Feature 1</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut nisl non dolor fermentum tempus vel non
                lectus.</p>
        </div>
        <div class="col-md-4 mb-4">
            <img src="image.jpg" alt="Image" class="img-fluid">
            <h2>Feature 2</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut nisl non dolor fermentum tempus vel non
                lectus.</p>
        </div>
        <div class="col-md-4 mb-4">
            <img src="image.jpg" alt="Image" class="img-fluid">
            <h2>Feature 3</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut nisl non dolor fermentum tempus vel non
                lectus.</p>
        </div>
        <div class="col-md-12 mb-5">
            <div class="row">
                <div class="col-md-6">
                    <img src="image.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-6 offset-md-6">
                    <h2>Feature 3</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut nisl non dolor fermentum tempus vel non
                        lectus.</p>
                </div>
            </div>
        </div>
        <div class="col-md-12 mb-5">
            <div class="row">
                <div class="col-md-6">
                    <h2>Feature 3</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut nisl non dolor fermentum tempus vel non
                        lectus.</p>
                </div>
                <div class="col-md-6">
                    <img src="image.jpg" alt="Image" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
@endsection

