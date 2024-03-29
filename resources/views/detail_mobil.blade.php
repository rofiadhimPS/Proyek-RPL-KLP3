<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Detail Mobil</title>
    <meta
      name="description"
      content="Rental mobil Makassar menyediakan sewa mobil dengan pelayanan berkualitas, murah dan mengutamakan kenyamanan. Rental mobil makassar menyediakan berbagai macam mobil sesuai dengan kebutuhan dan keinginan client."
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Mulish:wght@300&family=Poppins:ital,wght@0,100;1,200&family=Roboto:wght@900&family=Sen:wght@400;700;800&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.rtl.min.css"
      integrity="sha384-WJUUqfoMmnfkBLne5uxXj+na/c7sesSJ32gI7GfCk4zO4GthUKhSEGyvQ839BC51"
      crossorigin="anonymous"
    />
    <link rel="icon" href="{{ asset('assets/tkro.png') }}" />
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}" />
  </head>
  <style>
    button a{
      text-decoration : none;
    }
  </style>
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
          <a class="nav-link active" aria-current="page" href="#">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pesanan">Pemesanan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/notifikasi">Notifikasi</a>
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
          <button type="button" class="btn btn-primary"  style="background-color: black; "> <a href="/" style="text-decoration: none; color:#fff;" data-toggle="modal" data-target="#"href="nonePesanan.html"> Iya, keluar </a></button>
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
          <a href="/home?" style="color:#252525">Tidak</a>
        </div>
      </div>
    </div>
  </div>
    <!-- card -->
    <section class="section-pesanan mt-5">
      <div class="container">
          <h3 class="text-uppercase fs-3 fw-bold text-center pt-5">Status Pesanan</h3>
          <div class="card d-flex flex-row" style="margin: 4% 0; width: 85%;border-radius: 10px; box-shadow: 4px 4px 16px rgb(0 0 0 / 10%); flex-wrap:wrap; justify-content: flex-center;">
            <div class="d-flex align-items-center justify-content-center" style="background-color: #837ED940">
              <img style="width:100%;" src="{{ asset('assets/toyota-rush1_prev_ui_left.png') }}" >
            </div>
            <div class="d-flex align-items-center"style="margin-left: 7%">
              <div class="d-flex flex-column" >
                  <h5 class="card-title fw-bold fs-1">Fortuner</h5>
                  <p class="card-text fs-2 fw-normal m-0">Rp500.000</p>
                  <p class="card-text"><small class="text-muted"> <img src="{{ asset('assets/star.png') }}" alt="rating rental mobil">4.0 | 8 Kali Terpesan</small> </p>
                  
                  <h5 class="" style="border: 1px solid #6157FF; width: fit-content; padding: 8px 40px; margin: 40px 0 20px; border-radius: 10px;">Spesifikasi</h5>
                  <h5>Tipe Mobil        : Xxxx</h5>
                  <h5>Tahun             : 2018</h5>
                  <h5>Warnae            : Silver, Hitam, Putih</h5>
                  <h5>Metode Pembayaran : Transfer dan Cash</h5>
                  <h5>Jumlah Seat       : 4 seat</h5>
              </div> 
            </div>   
          </div>
          <!-- <div class="d-flex align-items-center flex-column">
              <button type="button" class="btn-lg " style="border-radius: 50%; padding: 0 15px; z-index: 2;"><h1>></h1></button>
          </div> -->
      </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <!-- Review dan Komentar -->
  <div class="review">
    <div class="judulReview"><p>Review dan Rating</p></div>
    <div class="isiReview">
      <div class="nama">Masbro</div>
      <div class="rating"><img src="{{ asset('assets/rating.png') }}" alt=""></div>
      <div class="komentar">
        <div class="isiKomentar">Sangat baik</div>
        <div class="tanggal">12 Nov 2023</div>
      </div>

    </div>
    <div class="isiReview">
      <div class="nama">Masbro</div>
      <div class="rating"><img src="{{ asset('assets/rating.png') }}" alt=""></div>
      <div class="komentar">
        <div class="isiKomentar">Sangat baik</div>
        <div class="tanggal">12 Nov 2023</div>
      </div>

    </div>

  </div>
   

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
