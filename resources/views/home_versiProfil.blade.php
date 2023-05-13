<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rental Mobil</title>
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
          <a class="nav-link active" aria-current="page" href="#">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pesanan?">Pemesanan</a>
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
                    <a href="/login" class="list-group-item list-group-item-action">Edit Akun</a>
                    <a href="/login" class="list-group-item list-group-item-action">Profil</a>
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
          <img src="assets/logging off.png">
        </div>
        <div class="modal-footer d-flex flex-column">
          <button type="button" class="btn btn-primary"  style="background-color: black; "> <a href="/home?" style="text-decoration: none; color:#fff;" data-toggle="modal" data-target="#"href="/Pesanan?"> Iya, keluar </a></button>
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
          <img src="assets/logging off.png">
        </div>
        <div class="modal-footer d-flex flex-column">
          <button type="button" class="btn btn-primary"  style="background-color: black; "> <a href="/home?" style="text-decoration: none; color:#fff;" data-toggle="modal" data-target="#"href="/pesanan?"> Iya, hapus </a></button>
          <a href="/home?" style="color:#252525">Tidak</a>
        </div>
      </div>
    </div>
  </div>
  
    <!-- slider -->
    <container class="slider">
      <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/parallax2.jpg" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block">
              <h1>Rental Mobil</h1>
              <p>
                Some representative placeholder content for the first slide.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/slider3.jpg" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block">
              <h2>Sewa Mobil Berkualitas</h2>
              <p>
                Some representative placeholder content for the second slide.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/slider22.jpg" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block">
              <h2>Tersedia Berbagai Macam Kendaraan</h2>
              <p>
                Some representative placeholder content for the third slide.
              </p>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </container>
    <!-- akhir slider-->

    <!-- Chat -->
    <div class="fitur_chat">
    <div class="icon_chat">
      <div class="btn btn-primary position-fixed" style="border-radius: 30px; padding : 10px;"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><img src="assets/chat.png" alt=""></div>
    </div>
<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Live Chat</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="pertanyaan"> <p>Selamat pagi, saya ingin tanya? Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit similique, quisquam nisi sapiente maxime hic explicabo, odit cupiditate saepe ipsum tempore quis beatae nesciunt commodi. Aliquam sunt tempore pariatur delectus?</p> </div>
    <div class="jawaban"><p>Iya, silahkan. loremlorem</p></div>
  </div>
  <div class="container text-center">
    <div class="row">
      <div class="col-md-8"><input class="form-control" type="text" placeholder="Tuliskan Pesan" aria-label="default input example"></div>
      <div class="col-md-4"><img src="assets/pesan.png" alt=""></div>
    </div>
  
</div>
</div>
    <container class="input_data">
      <!-- dropdown tipe mobil -->

      <div class="dropdown">
        <button
          class="btn btn-primary dropdown-toggle"
          type="button"
          data-bs-toggle="dropdown"
          aria-expanded="false"
        >
          Tipe Mobil
        </button>

        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Avanza</a></li>
          <li><a class="dropdown-item" href="#">Expander</a></li>
          <li><a class="dropdown-item" href="#">Toyota Rush</a></li>
          <li><a class="dropdown-item" href="#">Grand Innova</a></li>
          <li><a class="dropdown-item" href="#">Innova Riborn</a></li>
          <li><a class="dropdown-item" href="#">Venturer</a></li>
          <li><a class="dropdown-item" href="#">Fortuner</a></li>
          <li><a class="dropdown-item" href="#">Pajero</a></li>
          <li><a class="dropdown-item" href="#">Alphard</a></li>
          <li><a class="dropdown-item" href="#">Vellfire</a></li>
          <li><a class="dropdown-item" href="#">Hiace</a></li>
          <li><a class="dropdown-item" href="#">Bus Pariwisata</a></li>
        </ul>
      </div>
      <!-- akhir dropdown -->
      <!-- datepicker -->
      <div class="tanggal">
        <input type="datetime-local" />
      </div>
      <!-- akhir datepicker -->
    </container>
    <container class="brand">
      <div class="toyota">
        <img src="assets/logo-toyota.png" alt="gambar logo toyota" />
      </div>
      <div class="mitsubishi">
        <img src="assets/logo-mitsubishi.png" alt="gambar logo toyota" />
      </div>
    </container>
    <!-- keunggulan -->
    <container class="keunggulan">
      <div class="title">
        <h2>Kenapa Memillih Kami?</h2>
      </div>
      <div class="rowKeunggulan">
        <div class="colKeunggulan">
          <img src="assets/sopir-berpengalaman.png" alt="">
          <p>Sopir berpengalaman</p>
        </div>
        <div class="colKeunggulan">
          <img src="assets/pelayanan-berkualitas.png" alt="">
          <p>Pelayanan Berkualitas</p>
        </div>
        <div class="colKeunggulan">
          <img src="assets/sewa mobil murah.png" alt="">
          <p>Harga Terjangkau</p>
        </div>
      </div>
    </container>
  
    <!-- Produk -->
    <container class="produk">
      <h2>Produk</h2>
      <div class="produk">
        <div class="card-group">
          <div class="card">
            <img
              src="assets/new avanza.jpg"
              class="card-img-top"
              alt=" rental mobil avanza"
            />
            <div class="card-body">
              <div class="container text-center">
                <div class="row g-2">
                  <div class="col-6">
                    <div class="p-3"><span> tersedia</span></div>
                  </div>
                  <div class="col-6">
                    <div class="p-3"><h3>Xpander</h3></div>
                  </div>
                  <div class="col-6">
                    <div class="p-3">
                      <img src="assets/rating.png" alt="rating" />
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="p-3"><h5>Rp.560K/hari</h5></div>
                  </div>
                </div>
              </div>
              <div class="buttonProduk">
                <button><a href="/login">Rental Sekarang</a></button>
              </div>
              <div class="buttonDetail">
                <a href="/detailmobil">Detail</a>
              </div>
            </div>
          </div>
          <div class="card">
            <img
              src="assets/xpander_prev_ui.png"
              class="card-img-top"
              alt="rental mobil xpander"
            />
            <div class="card-body">
              <div class="container text-center">
                <div class="row g-2">
                  <div class="col-6">
                    <div class="p-3"><span> tersedia</span></div>
                  </div>
                  <div class="col-6">
                    <div class="p-3"><h3>Xpander</h3></div>
                  </div>
                  <div class="col-6">
                    <div class="p-3">
                      <img src="assets/rating.png" alt="rating" />
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="p-3"><h5>Rp.560K/hari</h5></div>
                  </div>
                </div>
              </div>
              <div class="buttonProduk">
                <button><a href="/login">Rental Sekarang</a></button>
              </div>
              <div class="buttonDetail">
                <a href="detail_mobil.html">Detail</a>
              </div>
            </div>
          </div>
          <div class="card">
            <img
              src="assets/toyota-rush1_prev_ui.png"
              class="card-img-top"
              alt="Rental Mobil Toyota Rush"
            />
            <div class="card-body">
              <div class="container text-center">
                <div class="row g-2">
                  <div class="col-6">
                    <div class="p-3"><span> tersedia</span></div>
                  </div>
                  <div class="col-6">
                    <div class="p-3"><h3>Xpander</h3></div>
                  </div>
                  <div class="col-6">
                    <div class="p-3">
                      <img src="assets/rating.png" alt="rating" />
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="p-3"><h5>Rp.560K/hari</h5></div>
                  </div>
                </div>
              </div>
              <div class="buttonProduk">
                <button><a href="/login">Rental Sekarang</a></button>
              </div>
              <div class="buttonDetail">
                <a href="detail_mobil.html">Detail</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="produk">
        <div class="card-group">
          <div class="card">
            <img
              src="assets/grand innova.jpg"
              class="card-img-top"
              alt="Rental mobil grand Innova"
            />
            <div class="card-body">
              <div class="container text-center">
                <div class="row g-2">
                  <div class="col-6">
                    <div class="p-3"><span> tersedia</span></div>
                  </div>
                  <div class="col-6">
                    <div class="p-3"><h3>Xpander</h3></div>
                  </div>
                  <div class="col-6">
                    <div class="p-3">
                      <img src="assets/rating.png" alt="rating" />
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="p-3"><h5>Rp.560K/hari</h5></div>
                  </div>
                </div>
              </div>
              <div class="buttonProduk">
                <button><a href="/login">Rental Sekarang</a></button>
              </div>
              <div class="buttonDetail">
                <a href="detail_mobil.html">Detail</a>
              </div>
            </div>
          </div>
          <div class="card">
            <img
              src="assets/innova riborn.png"
              class="card-img-top"
              alt="Rental Mobil Innova riborn"
            />
            <div class="card-body">
              <div class="container text-center">
                <div class="row g-2">
                  <div class="col-6">
                    <div class="p-3"><span> tersedia</span></div>
                  </div>
                  <div class="col-6">
                    <div class="p-3"><h3>Xpander</h3></div>
                  </div>
                  <div class="col-6">
                    <div class="p-3">
                      <img src="assets/rating.png" alt="rating" />
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="p-3"><h5>Rp.560K/hari</h5></div>
                  </div>
                </div>
              </div>
              <div class="buttonProduk">
                <button><a href="/login">Rental Sekarang</a></button>
              </div>
              <div class="buttonDetail">
                <a href="detail_mobil.html">Detail</a>
              </div>
            </div>
          </div>
          <div class="card">
            <img
              src="assets/venturer.png"
              class="card-img-top"
              alt="rental mobil venturer"
            />
            <div class="card-body">
              <div class="container text-center">
                <div class="row g-2">
                  <div class="col-6">
                    <div class="p-3"><span> tersedia</span></div>
                  </div>
                  <div class="col-6">
                    <div class="p-3"><h3>Xpander</h3></div>
                  </div>
                  <div class="col-6">
                    <div class="p-3">
                      <img src="assets/rating.png" alt="rating" />
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="p-3"><h5>Rp.560K/hari</h5></div>
                  </div>
                </div>
              </div>
              <div class="buttonProduk">
                <button><a href="/login">Rental Sekarang</a></button>
              </div>
              <div class="buttonDetail">
                <a href="detail_mobil.html">Detail</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="produk">
        <div class="card-group">
          <div class="card">
            <img
              src="assets/fortuner.png"
              class="card-img-top"
              alt="Rental mobil fortuner"
            />
            <div class="card-body">
              <div class="container text-center">
                <div class="row g-2">
                  <div class="col-6">
                    <div class="p-3"><span> tersedia</span></div>
                  </div>
                  <div class="col-6">
                    <div class="p-3"><h3>Xpander</h3></div>
                  </div>
                  <div class="col-6">
                    <div class="p-3">
                      <img src="assets/rating.png" alt="rating" />
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="p-3"><h5>Rp.560K/hari</h5></div>
                  </div>
                </div>
              </div>
              <div class="buttonProduk">
                <button><a href="/login">Rental Sekarang</a></button>
              </div>
              <div class="buttonDetail">
                <a href="detail_mobil.html">Detail</a>
              </div>
            </div>
          </div>
          <div class="card">
            <img
              src="assets/pajero 1.svg"
              class="card-img-top"
              alt="Rental Mobil pajero"
            />
            <div class="card-body">
              <div class="container text-center">
                <div class="row g-2">
                  <div class="col-6">
                    <div class="p-3"><span> tersedia</span></div>
                  </div>
                  <div class="col-6">
                    <div class="p-3"><h3>Xpander</h3></div>
                  </div>
                  <div class="col-6">
                    <div class="p-3">
                      <img src="assets/rating.png" alt="rating" />
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="p-3"><h5>Rp.560K/hari</h5></div>
                  </div>
                </div>
              </div>
              <div class="buttonProduk">
                <button><a href="/login">Rental Sekarang</a></button>
              </div>
              <div class="buttonDetail">
                <a href="detail_mobil.html">Detail</a>
              </div>
            </div>
          </div>
          <div class="card">
            <img
              src="assets/alphard 1.svg"
              class="card-img-top"
              alt="rental mobil Alphard"
            />
            <div class="card-body">
              <div class="container text-center">
                <div class="row g-2">
                  <div class="col-6">
                    <div class="p-3"><span> tersedia</span></div>
                  </div>
                  <div class="col-6">
                    <div class="p-3"><h3>Xpander</h3></div>
                  </div>
                  <div class="col-6">
                    <div class="p-3">
                      <img src="assets/rating.png" alt="rating" />
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="p-3"><h5>Rp.560K/hari</h5></div>
                  </div>
                </div>
              </div>
              <div class="buttonProduk">
                <button><a href="/login">Rental Sekarang</a></button>
              </div>
              <div class="buttonDetail">
                <a href="detail_mobil.html">Detail</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="produk">
        <div class="card-group">
          <div class="card">
            <img
              src="assets/vellfire (1).jpg"
              class="card-img-top"
              alt="Rental mobil Vellfire"
            />
            <div class="card-body">
              <div class="container text-center">
                <div class="row g-2">
                  <div class="col-6">
                    <div class="p-3"><span> tersedia</span></div>
                  </div>
                  <div class="col-6">
                    <div class="p-3"><h3>Xpander</h3></div>
                  </div>
                  <div class="col-6">
                    <div class="p-3">
                      <img src="assets/rating.png" alt="rating" />
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="p-3"><h5>Rp.560K/hari</h5></div>
                  </div>
                </div>
              </div>
              <div class="buttonProduk">
                <button><a href="/login">Rental Sekarang</a></button>
              </div>
              <div class="buttonDetail">
                <a href="detail_mobil.html">Detail</a>
              </div>
            </div>
          </div>

          <div class="card">
            <img
              src="assets/hiace 1.svg"
              class="card-img-top"
              alt="Rental Mobil Hiace"
            />
            <div class="card-body">
              <div class="container text-center">
                <div class="row g-2">
                  <div class="col-6">
                    <div class="p-3"><span> tersedia</span></div>
                  </div>
                  <div class="col-6">
                    <div class="p-3"><h3>Xpander</h3></div>
                  </div>
                  <div class="col-6">
                    <div class="p-3">
                      <img src="assets/rating.png" alt="rating" />
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="p-3"><h5>Rp.560K/hari</h5></div>
                  </div>
                </div>
              </div>
              <div class="buttonProduk">
                <button><a href="/login">Rental Sekarang</a></button>
              </div>
              <div class="buttonDetail">
                <a href="detail_mobil.html">Detail</a>
              </div>
            </div>
          </div>
          <div class="card">
            <img
              src="assets/bus pariwisata.svg"
              class="card-img-top"
              alt="rental bus"
            />
            <div class="card-body">
              <div class="container text-center">
                <div class="row g-2">
                  <div class="col-6">
                    <div class="p-3"><span> tersedia</span></div>
                  </div>
                  <div class="col-6">
                    <div class="p-3"><h3>Xpander</h3></div>
                  </div>
                  <div class="col-6">
                    <div class="p-3">
                      <img src="assets/rating.png" alt="rating" />
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="p-3"><h5>Rp.560K/hari</h5></div>
                  </div>
                </div>
              </div>
              <div class="buttonProduk">
                <button><a href="/login">Rental Sekarang</a></button>
              </div>
              <div class="buttonDetail">
                <a href="detail_mobil.html">Detail</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </container>
    <!-- gelombang -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill="#ae88ff"
        fill-opacity="1"
        d="M0,96L48,106.7C96,117,192,139,288,144C384,149,480,139,576,122.7C672,107,768,85,864,90.7C960,96,1056,128,1152,138.7C1248,149,1344,139,1392,133.3L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
      ></path>
    </svg>
    <section class="jumbotron text-center" style="background:#ae88ff;">
      <div class="position-relative">
        <div class="bgColor">
          <div class="testimoni">
            <h2>Testimoni</h2>
            <img
              src="assets/TESTIMONIAL LANDING PAGE.png"
              alt="testimoni rental mobil"
            />
          </div>
            <div class="client d-flex align-content-center flex-wrap flex-column">
              <h2>Client Kami</h2>
              <div class="card-group">
                <div class="card p-0">
                  <img src="assets/client_wisata.jpeg" class="card-img-top" alt="..." style="width:100%;">
                  <div class="card-body  text-center">
                    <h5 class="card-title">Client</h5>
                    <p class="card-text">Orang Biasa </p>
                  </div>
                </div>
                <div class="card p-0">
                  <img src="assets/client_tumming.jpeg" class="card-img-top p-0" alt="..." style="width:100%;">
                  <div class="card-body  text-center">
                    <h5 class="card-title">Tumming Abu</h5>
                    <p class="card-text">Komedian dan Kreator Konten</p>
                  </div>
                </div>
                <div class="card p-0">
                  <img src="assets/client-arman.jpeg" class="card-img-top p-0" alt="..." style="width:100%;">
                  <div class="card-body  text-center">
                    <h5 class="card-title">Armand Maulana</h5>
                    <p class="card-text">Musisi</p>
                  </div>
                </div>
              </div>
            
           
          </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path
            fill="#ffffff"
            fill-opacity="1"
            d="M0,96L48,106.7C96,117,192,139,288,144C384,149,480,139,576,122.7C672,107,768,85,864,90.7C960,96,1056,128,1152,138.7C1248,149,1344,139,1392,133.3L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
          ></path>
        </svg>
        </div>

        </section>
    <!-- Artikel -->
    <section class="jumbotron text-center" style="background:#fff">
      <div class="position-relative">
        <div class="artikel">
          <h2>Artikel</h2>
          <div class="cardArtikel">
            <div class="container text-center">
              <div class="row align-items-start">
                <div class="col">
                  <div class="cardArtikel" style="width: 18rem">
                    <img
                      src="assets/99 kubah.jpg"
                      class="card-img-top"
                      alt="destinasi wisata makassar"
                    />
                    <div class="card-body">
                      <h5 class="card-title">Masjid 99 Kubah</h5>
                      <p class="card-text">Makassar</p>
                      <a href="#" class="btn btn-dark">Lihat Selengkapnya</a>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="cardArtikel" style="width: 18rem">
                    <img
                      src="assets/apparalarang.png"
                      class="card-img-top"
                      alt="destinasi wisata makassar"
                    />
                    <div class="card-body">
                      <h5 class="card-title">Tebing Appalarang</h5>
                      <p class="card-text">Bulukumba</p>
                      <a href="#" class="btn btn-dark">Lihat Selengkapnya</a>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="cardArtikel" style="width: 18rem">
                    <img
                      src="assets/bira.png"
                      class="card-img-top"
                      alt="destinasi wisata makassar"
                    />
                    <div class="card-body">
                      <h5 class="card-title">Tanjung Bira</h5>
                      <p class="card-text">Bulukumba</p>
                      <a href="#" class="btn btn-dark">Lihat Selengkapnya</a>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="cardArtikel" style="width: 18rem">
                    <img
                      src="assets/bantimurung.jpeg"
                      class="card-img-top"
                      alt="destinasi wisata makassar"
                    />
                    <div class="card-body">
                      <h5 class="card-title">Bantimurung</h5>
                      <p class="card-text">Maros</p>
                      <a href="#" class="btn btn-dark">Lihat Selengkapnya</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    
    

    <!-- footer -->
    <section class="footer">
      <footer>
        <div class="row">
          <div class="col" id="colFooter">
            <div class="wrapper-col-1">
              <h1>Cv.Adinalta</h1>
              <p>Rental mobil Makassar berkulitas, terjangkau dan Aman</p>
              <div class="wrapper-icon d-flex">
                <a href="#"><img src="assets/fb (1).png" alt=""></a>
                <a href="#"><img src="assets/ig.png" alt=""></a>
                <a href="#"><img src="assets/twit.png" alt=""></a>                
              </div>
          </div>
        </div>
          <div class="col" id="colFooter">
            <div class="wrapper-col-2">
              <h1>Usefull Link</h1>
              <P>Tentang Kami</P>
              <p>Produk Kami</p>
              <p>Layanan</p>
              <p>Kebijakan Privasi</p>
            </div>
          </div>
          <div class="col" id="colFooter">
            <div class="wrapper-col-3">
              <h1>Artikel</h1>
              <p>10 Tips Aman Berkendera</p>
              <p>Cara Merawat Mobil Agar Terlihat Baru</p>
              <p>Mulai Berbisnis Rental Mobil</p>
              <p>Cara Menghilangkan Bau Pada Mobil</p>
            </div>
          </div>
          <div class="col" id="colFooter">
            <div class="wrapper-col-3">
              <h1>Contact Us</h1>
              <p>info@teamapp.com</p>
              <p>Cara Merawat Mobil Agar Terlihat Baru</p>
              <p>0821 2389 2913</p>
              <p>2972 Westheimer Rd. Santa Ana, Illinois 85486 </p>
            </div>
          </div>
        </div>
        <div class="copyright">© Copyright CV. ADINALTA All Right Reserved</div>
      </footer>
    </section>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
