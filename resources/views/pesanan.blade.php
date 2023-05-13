<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/pesanan.css') }}">
    </head>
    <body>
        <!-- navbar -->
    <nav
    class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top"
    style="
      background: linear-gradient(89.97deg, #35015f 0.02%, #6157ff 99.97%);
    "
  >
    <div class="container">
      <a class="navbar-brand" href="#">Cv. Adinalta</a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="/"
              >Beranda</a
            >
          </li>
          <li class="nav-item ">
            <a class="nav-link active" href="/pesanan">Pemesanan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/notifikasi">Notifikasi</a>
          </li>
          <button
            type="button"
            class="btn btn-light"
            style="border-radius: 30px"
          >
            Login
          </button>
        </ul>
      </div>
    </div>
  </nav>
  <!-- akhir navbar -->
        
        <section class="section-pesanan mt-5">
            <div class="container">
                <h3 class="text-uppercase fs-3 fw-bold text-center">Status Pesanan</h3>
                <div class="card mt-5" style="max-width: max-content;border: 0;">
                    <div class="row g-5">
                        <div class="col">
                            <img src="{{ asset('assets/avanza.png') }}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col justify-content-center">
                            <div class="card-body">
                                <h5 class="card-title fw-bold fs-1">Fortuner</h5>
                                <p class="card-text fs-2 fw-normal m-0">Rp500.000</p>
                                <p class="card-text"><small class="text-muted">4.0 | 8 Kali Terpesan</small> </p>
                                
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>

                                <h5 class="" style="border: 1px solid #6157FF; width: fit-content; padding: 8px 40px; margin: 40px 0 20px; border-radius: 10px;">Spesifikasi</h5>
                                <h5>Tipe Mobil        : Xxxx</h5>
                                <h5>Tahun             : 2018</h5>
                                <h5>Warnae            : Silver, Hitam, Putih</h5>
                                <h5>Metode Pembayaran : Transfer</h5>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- <div class="d-flex align-items-center flex-column">
                    <button type="button" class="btn-lg " style="border-radius: 50%; padding: 0 15px; z-index: 2;"><h1>></h1></button>
                </div> -->
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>