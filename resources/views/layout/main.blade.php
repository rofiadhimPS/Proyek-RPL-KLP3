<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cars Admin | {{  $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="css/index.css" rel="stylesheet">
    <link href="css/admin_pesanan.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin_pesanan.css') }}">
  </head>
  <body>

    <div class="d-flex flex-row">
        <!-- Sidebar -->
        <nav  style="width: 25%;height: 100vh; padding: 5% 0; box-shadow: 4px 4px 16px rgb(0 0 0 / 10%);">
            <div class="">
                <ul class="fs-2 d-grid gap-4 " style="list-style-type: none; padding: 0;">
                    <li class="menu-list {{ ($title === "Dashboard") ? 'active' : '' }}" onclick="window.location.href = '/webadmin';"><img src="{{ asset('assets/Vector_Dashboard.png') }}" class="menu-list__icon"><a class="nav-link active" aria-current="page" href="#">Dashboard</a></li>
                    <li class="menu-list {{ ($title === "Pengguna") ? 'active' : '' }}" onclick="window.location.href = '/webadmin/pengguna';"><img src="{{ asset('assets/Vector_Pengguna.png') }}" class="menu-list__icon"><a class="nav-link active" aria-current="page" href="#">Pengguna</a></li>
                    <li class="menu-list {{ ($title === "Pesanan") ? 'active' : '' }}" onclick="window.location.href = '/webadmin/pesanan';"><img src="{{ asset('assets/Vector_Pesanan.png') }}" class="menu-list__icon"><a class="nav-link active" aria-current="page" href="#">Pesanan</a></li>
                    <li class="menu-list {{ ($title === "Produk") ? 'active' : '' }}" onclick="window.location.href = '/webadmin/produk';"><img src="{{ asset('assets/Vector_Produk.png') }}" class="menu-list__icon"><a class="nav-link active" aria-current="page" href="#">Produk</a></li>
                    <li class="menu-list {{ ($title === "Chat") ? 'active' : '' }}" onclick="window.location.href = '/webadmin/chat';"><img src="{{ asset('assets/Vector_Chat.png') }}" class="menu-list__icon"><a class="nav-link active" aria-current="page" href="#">Chat</a></li>
                    <li class="menu-list {{ ($title === "Notifikasi") ? 'active' : '' }}" onclick="window.location.href = '/webadmin/notifikasi';"><img src="{{ asset('assets/Vector_Notif.png') }}" class="menu-list__icon"><a class="nav-link active" aria-current="page" href="#">Notifikasi</a></li>
                    <li class="menu-list {{ ($title === "Akun") ? 'active' : '' }}" onclick="window.location.href = '/webadmin/akun';"><img src="{{ asset('assets/Vector_Akun.png') }}" class="menu-list__icon"><a class="nav-link active" aria-current="page" href="#">Akun</a></li>
                </ul>
            </div>
        </nav>
        <!-- Sidebar -->

        <div style="width: 75%;">
            @yield('container')
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('JS/admin_dashboard.js') }}"></script>
  </body>
</html>