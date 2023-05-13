<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Akun</title>
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
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
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
  <section class="jumbotron text-center" class="text-center" style="background-color:#AE88FF40;">
    <h2 style="margin-top: 50px; padding-top:10px;">Edit Akun</h2>
    <div class="d-flex flex-row position-relative mt-1 mb-5" style="width: 100%; border-radius: 10px; height: 15vh;">
      <div class="d-flex justify-content-center position-absolute top-100 start-50 translate-middle" style="width: 100%;">
          <img src="{{ asset('assets/Profile Picture.png') }}" style="border-radius: 50%; width: 12%;">
          <div class="d-flex justify-content-center" style="background-color: #350261; width: fit-content; border-radius: 50%; padding: 0.3% 0; position: absolute; bottom: 12%; right: 44%;"><img src="{{ asset('assets/Camera Icon.png') }}" style="width: 60%;"></div>
      </div>
      
  </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill="#ffffff"
        fill-opacity="1"
        d="M0,96L48,106.7C96,117,192,139,288,144C384,149,480,139,576,122.7C672,107,768,85,864,90.7C960,96,1056,128,1152,138.7C1248,149,1344,139,1392,133.3L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
      ></path>
    </svg>
  </section>

  <form >
    <div class="mx-5 mb-4">
      <label for="exampleInputEmail1" class="form-label">Nama</label>
      <input type="text" class="form-control" style="border: 1px solid #e2dfdf; width : 50%; border-radius: 5px;" id="exampleInputNama" placeholder="Namakamu" aria-describedby="emailHelp">
    </div>
    <div class="mx-5 mb-4">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" style="border: 1px solid #e2dfdf; width : 50%; border-radius: 5px;" id="exampleInputEmail1" placeholder="@emailkamu" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mx-5 mb-4">
      <label for="exampleInputNo" class="form-label" >No Handphone</label>
      <input type="number" class="form-control" style="border: 1px solid #e2dfdf; width : 50%; border-radius: 5px;" id="exampleInputNo" placeholder="0851234++">
    </div>
  </form>

      <div class="data_pengguna m-5">
        <button class="border bg-dark border-0  shadow-sm p-2 rounded-2" style="color: #fff; width : 100px;"> <a href="/profil" style="color: #fff; text-decoration: none;" >Simpan</a></button>              
      </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
