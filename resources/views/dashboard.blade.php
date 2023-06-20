<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landing Page with Bootstrap</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Logo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<section class="jumbotron text-center">
    <div class="container">
        <h1 class="display-4">Welcome to Our Landing Page</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut nisl non dolor fermentum tempus
            vel non lectus.</p>
        <a href="#" class="btn btn-primary">Learn More</a>
    </div>
</section>

<section class="container">
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
</section>

<footer class="bg-dark text-white text-center py-4">
<p>&copy; 2023 Company Name. All rights reserved.</p>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>
