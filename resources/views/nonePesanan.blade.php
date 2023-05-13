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
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  </head>
  <style>

      div.cardPesanan{
          display:flex;
          justify-content: center;
      }
      div.cardPesanan img{
          width: 50%;
        }
  </style>
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
           <a class="nav-link" aria-current="page" href="/home?"
             >Beranda</a
           >
         </li>
         <li class="nav-item">
           <a class="nav-link" href="/pesanan?">Pemesanan</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="/notifikasi">Notifikasi</a>
         </li>
         <button
           type="button"
           class="btn btn-light"
           style="border-radius: 30px; ">
           <a href="/login">Login</a>
         </button>
       </ul>
     </div>
   </div>
 </nav>
 <!-- akhir navbar -->
 <!-- card  -->
 <div class="isi" style="margin-top:100px; ">
 <h2 style="text-align:center;">Status Pesanan</h2>
 <div class="cardPesanan" style="text-align: center;">
 <div class="card mb-3" style="max-width: 540px; margin-left: 0px;">
    <div class="row g-0">
      <div class="col-md-4" style=" padding:0px;">
        <img src="{{ asset('assets/status-kosong.png') }}" class="img-fluid rounded-start" alt="tidak ada pesanan">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <p class="card-text">Tidak ada Pesanan</p>
        </div>
      </div>
    </div>
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