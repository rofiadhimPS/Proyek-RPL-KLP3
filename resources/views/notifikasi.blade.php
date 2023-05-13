<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifikasi</title>
    <link rel="stylesheet" href="{{ asset('css/notifikasi.css') }}" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.rtl.min.css"
      integrity="sha384-WJUUqfoMmnfkBLne5uxXj+na/c7sesSJ32gI7GfCk4zO4GthUKhSEGyvQ839BC51"
      crossorigin="anonymous"
    />
</head>
<body>
     <!-- navbar -->
 <nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top" style="background: linear-gradient(89.97deg, #35015f 0.02%, #6157ff 99.97%);">
  <div class="container">
    <a class="navbar-brand" href="#">Cv.Adinalta</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse flex-row-reverse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pesanan">Pemesanan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/notifikasi">Notifikasi</a>
        </li>
        <li class="nav-item">
          <div class="btn btn-light" style="border-radius:50%; width:30px; height:30px; margin-left:10px; margin-top:5px;" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><a href=""><img src="assets/.png" alt=""></a></div>
        </li>
      </ul>
    </div>
  </div>
</nav>
 <!-- akhir navbar -->
 
    <!-- cardProfil -->
 
<div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Profil</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="row">
            <div class="col-sm-4">
                <img src="assets/" alt="">
            </div>
            <div class="col-sm-8" >
                <div class="row m-0">Nama Kamu</div>
                <div class="row m-0">@namakamu</div>
            </div>
            <div class="row mt-0 mb-0">
                <div class="list-group">
                    <a href="/editakun" class="list-group-item list-group-item-action">Edit Akun</a>
                    <a href="/profil" class="list-group-item list-group-item-action">Profil</a>
                    <button type="button" class="list-group-item list-group-item-action" style=" border: 1;" data-bs-toggle="modal" data-bs-target="#exampleModal">Log Out</button>
                    <button type="button" class="list-group-item list-group-item-action bg-danger text-white" style=" border: 1;" data-bs-toggle="modal" data-bs-target="#exampleModalHapus">Hapus Akun</button>
                    
                  </div>
            </div>
          </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #360363; flex-direction: space-between;">
          <h5 class="modal-title fs-4" id="exampleModalLabel" style="color: white;">Yakin ingin keluar?</h5>
        </div>
        <div class="modal-body d-flex justify-content-center md-3">
          <img src="{{ asset('assets/logging off.png') }}">
        </div>
        <div class="modal-footer d-flex flex-column">
          <button type="button" class="btn btn-primary"  style="background-color: black; "> <a href="/" style="text-decoration: none; color:#fff;" data-toggle="modal" data-target="#"href="/pesanan?"> Iya, keluar </a></button>
          <a href="/home?" style="color:#252525">Tidak</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Hapus Akun -->
  <div class="modal fade" id="exampleModalHapus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #360363; flex-direction: space-between;">
          <h5 class="modal-title fs-4" id="exampleModalLabel" style="color: white;">Hapus Akun?</h5>
        </div>
        <div class="modal-body d-flex justify-content-center md-3">
          <img src="{{ asset('assets/logging off.png') }}">
        </div>
        <div class="modal-footer d-flex flex-column">
          <button type="button" class="btn btn-primary"  style="background-color: black; "> <a href="/" style="text-decoration: none; color:#fff;" data-toggle="modal" data-target="#"href="nonePesanan.html"> Iya, hapus </a></button>
          <a href="home_versiProfil.html" style="color:#252525">Tidak</a>
        </div>
      </div>
    </div>
  </div>

    <div class="row notification-container" style="padding-top:60px;">
        
        <div class="card-notification">
          <div class="card-body d-flex">
            <div class="icon-card">
              <img class=" img-icon" src="{{ asset('assets/icon bayar.png') }}" alt="icon bayar">
            </div>
            <div class="text-notification p-3 ">
              <div>Pembayaran Dikonfirmasi</div>
            </div>

          </div>
          <div class="card-body d-flex">
            <div class="icon-card">
              <img class=" img-icon" src="{{ asset('assets/icon bayar.png') }}" alt="icon bayar">
            </div>
            <div class="text-notification p-3 ">
              <div>Pesanan Dibatalkan</div>
            </div>

          </div>
        </div>
        </div>

      </div>
</body>
</html>