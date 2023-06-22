@extends('layouts.app-user')

@section('jumbotron')

<section class="jumbotron text-center">
    <div class="container">
        <h1 class="display-4">Sistem Pakar Penentu Profil Risiko Reksa Dana</h1>
        <br>
        <p class="lead">Temukan Profil Risiko Investasi Reksa Dana yang Tepat untuk Mengoptimalkan Keuangan Anda!</p>
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
                        <button type="submit" class="btn btn-primary">mulai</button>
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
                <h1>Reksa Dana itu apa sih?</h1>
                <blockquote class="blockquote">
                <p>
                Reksa dana adalah investasi yang disebarkan pada beberapa alat investasi yang diperdagangkan di pasar modal dan pasar uang 
                yang meliputi saham, obligasi, dan commercial paper. 
                Reksa dana adalah sebuah wadah yang digunakan untuk menghimpun dana dari masyarakat pemodal 
                untuk selanjutnya diinvestasikan dalam portofolio efek oleh manajer investasi.
                </p>
                </blockquote>
                <figcaption class="blockquote-footer">
                Berdasarkan UU Pasar Modal No. 8 Tahun 1995 pasal 1 ayat 27 <cite title="Source Title"></cite>
                </figcaption>
            </div>
        </div>
        <div class="col-md-12 mb-5 mt-4">
            <div class="row row-cols-2">
                <div class="col-md-6 d-flex">
                    <img src="images/img1.jpg" alt="Image" class="img-fluid" width="400" height="400">
                </div>
                <div class="col-md-6 mb-4 mt-5">
                    <h2>Kenapa Reksa Dana?</h2>
                    <blockquote class="blockquote">
                    <p>Reksa dana merupakan salah satu alternatif investasi bagi masyarakat pemodal 
                        yang tidak memiliki waktu dan keahlian untuk menghitung risiko atas investasi mereka </p>
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mb-4">
                <h2>Keuntungan Reksa Dana</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4 mt-4" >
                <img src="images/murah.png" alt="Image" class="img-fluid" width="100">
                <h2>Murah</h2>
                <p>Reksa dana memiliki tingkat kecil atau terjangkau dalam hal biaya investasi.
                    Biaya yang terkait dengan reksa dana biasanya meliputi biaya pembelian (load fee), 
                    biaya penjualan (redemption fee), dan biaya administrasi. 
                    Biaya-biaya ini cenderung lebih rendah dibandingkan dengan biaya yang terkait dengan investasi langsung di pasar modal. Dengan biaya yang terjangkau, 
                    reksa dana memberikan akses yang lebih luas kepada investor dengan berbagai tingkat modal.</p>
            </div>
            <div class="col-md-4 mb-4 mt-4">
                <img src="images/mudah.png" alt="Image" class="img-fluid" width="100">
                <h2>Mudah</h2>
                <p>Investasi dalam reksa dana relatif mudah dilakukan. 
                    Investor hanya perlu membuka rekening di perusahaan manajemen investasi atau lembaga keuangan yang menyediakan layanan reksa dana, 
                    kemudian memilih reksa dana yang sesuai dengan tujuan dan profil risiko investasi mereka. 
                    Proses pembelian dan penjualan unit reksa dana juga lebih sederhana dibandingkan dengan proses investasi langsung di pasar modal. 
                    Selain itu, reksa dana juga menyediakan kemudahan dalam hal pemantauan dan pelaporan investasi.</p>
            </div>
            <div class="col-md-4 mb-4 mt-4">
                <img src="images/efisien.png" alt="Image" class="img-fluid" width="100">
                <h2>Efisien</h2>
                <p> Reksa dana dikelola oleh manajer investasi yang memiliki pengetahuan dan pengalaman dalam industri keuangan dan investasi. 
                    Manajer investasi melakukan analisis pasar, melakukan pemilihan instrumen investasi yang tepat, dan mengelola portofolio secara aktif. 
                    Mereka terus memantau dan menyesuaikan portofolio reksa dana sesuai dengan kondisi pasar dan tujuan investasi yang ditetapkan. 
                    Keberadaan manajer investasi membantu mengurangi beban investor dalam mengelola investasi dan memastikan bahwa investasi dilakukan oleh ahlinya.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h2>Kenapa harus memperhatikan profil risiko?</h2>
                <blockquote class="blockquote">
                <p>Karena setiap investor memiliki toleransi risiko yang berbeda. 
                    Beberapa mungkin lebih suka investasi yang lebih konservatif dengan risiko rendah, 
                    sementara yang lain mungkin siap mengambil risiko yang lebih tinggi untuk potensi keuntungan yang lebih besar. 
                    Dengan mengetahui profil risiko Anda, 
                    Anda dapat memilih reksa dana yang sesuai dengan tujuan keuangan dan kenyamanan Anda.</p>
                </blockquote>
            </div>
            <div class="col-md-6">
                <img src="images/img2.jpg" alt="Image" class="img-fluid">
            </div>
        </div>
        <div class="col-md-12 mb-5 mt-4">
            <div class="row row-cols-2">
                <div class="col-md-6 d-flex">
                    <img src="images/img3.jpg" alt="Image" class="img-fluid" width="400" height="400">
                </div>
                <div class="col-md-6 mb-4 mt-5">
                    <h3>Mulailah perjalanan menuju keputusan investasi yang lebih cerdas</h3>
                    <blockquote>
                    <p>Dengan mengetahui profil risiko Anda, Anda dapat memilih reksa dana yang sesuai dengan tujuan keuangan dan kenyamanan Anda</p>
                    </blockquote>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">Mulai</button>
                </div>
            </div>
        </div>
    </div>
@endsection

