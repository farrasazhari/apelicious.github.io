<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>mywebsite</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Lab KSA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="viewmahasiswa.php">Mahasiswa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Lab Lainnya
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="https://tip.ub.ac.id/laboratorium/lab-bioindustri/">Lab Bioind</a></li>
                <li><a class="dropdown-item" href="https://tip.ub.ac.id/laboratorium/lab-rekayasa-proses-agroindustri/">Lab RPA</a></li>
                <li><a class="dropdown-item" href="https://tip.ub.ac.id/laboratorium/lab-manajemen-agroindustri/">Lab MAI</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="https://tip.ub.ac.id/laboratorium/lab-komputasi-dan-sistem-agroindustri/">Lab KSA</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Disabled</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"></input>
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>

    <!-- Jumbotron -->
    <div class="container-md">
      <div class="jumbotron jumbotron-fluid" >
        <div class="container " >
          <h1 class="display-4">Selamat Datang di Laboratorium Komputasi dan Sistem Agroindustri</h1>
          <p class="lead">Laboratorium terbaik untuk masa depan cerah anda.</p>
        </div>
      </div>
    </div>

    <!-- Slider -->
    <div id="carouselExampleIndicators" class="carousel slide  border-bottom pb-3 mb-5" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/slider1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/slider2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/slider3.jpg" class="d-block w-100" alt="...">
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
        <script src="js/bootstrap.bundle.min.js"> </script>
      </div>

    <!-- Card -->
    <div class="container text-center shadow">
      <h1><b><p class="mt-5 mb-3">PRAKTIKUM LAB KSA</p></b></h1>
      <div class="container text-center">
        <div class="row">

          <div class="col">
            <div class="card" style="width: 18rem;">
              <img src="img/card1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Sistem Teknologi Informasi</h5>
                <p class="card-text">Praktikum ini berisi tentang praktek pengembangan sistem informasi dan basis data yang meliputi pemodelan proses dan DFD, ER-Model, SQL (DDl, DML, Query), normalisasi, desain antar muka, dan system basis data berbasis web.</p>
                <a href="#" class="btn btn-primary">More info</a>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card" style="width: 18rem;">
              <img src="img/card2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Pemrograman Komputer</h5>
                <p class="card-text">Praktikum ini berisi tentang pengenalan tentang komputer dan bahasa pemrograman Python dan mempraktekkan percabangan dan perulangan, menggunakan fungsi, mempelajari struktur list dan mengenal objek pada python.</p>
                <a href="#" class="btn btn-primary">More info</a>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card" style="width: 18rem;">
              <img src="img/card3.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Gambar Teknik</h5>
                <p class="card-text">Praktikum ini berisi tentang pengenalan kegunaan alat-alat gambar, teknik membaca gambar, memproyeksikan bentuk, dan aturan dasar dalam pembuatan gambar teknik baik secara manual maupun menggunakan Autocad.</p>
                <a href="#" class="btn btn-primary">More info</a>
              </div>
            </div>
          </div>
      
          <div class="col">
            <div class="card" style="width: 18rem;">
              <img src="img/card4.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Statistika Industri</h5>
                <p class="card-text">Praktikum ini berisi tentang statistika deskriptif, probabilitas, distribusi probabilitas diskrit dan kontinu, teknik sampling, estimasi parameter, uji hipotesis, dan analisis regresi dan korelasi linear dan nonlinear.</p>
                <a href="#" class="btn btn-primary">More info</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <div class="container">
      <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Praktikum</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Team</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
        </ul>
        <p class="text-center text-muted">© 2023 Lab KSA</p>
      </footer>
    </div>

</body>
</html>
