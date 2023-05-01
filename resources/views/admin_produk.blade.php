@extends('layout.main');

@section('container')
            <nav class="navbar w-100" style="padding: 2% 0; background-image: linear-gradient(to right, #001743 , #350261); color: white;">
                <div style="margin-left: 5%;">
                    <h1>Produk</h1>
                </div>
            </nav>
    
            <div class="d-flex justify-content-end" style="width: 100%;">
                <div style="margin: 3% 5% 3% ;">
                    <button type="button" class="btn btn-primary btn-lg" style="background-color: black;">Tambahkan Mobil</button>
                </div>
            </div>

            <div class="d-flex justify-content-evenly" style="padding: 5%;">
                <div class="card" style="width: 18rem; box-shadow: 4px 4px 16px rgb(0 0 0 / 10%);">
                    <img class="card-img-top" src="assets/toyota-rush1_prev_ui_left.png" alt="Card image cap">
                    <div class="card-body d-flex flex-column justify-content-center">
                      <h5 class="card-title">Rush</h5>
                      <p class="card-text">500K/Hari</p>
                      <a href="#" class="btn btn-primary">Edit Data</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem; box-shadow: 4px 4px 16px rgb(0 0 0 / 10%);">
                    <img class="card-img-top" src="assets/toyota-rush1_prev_ui_left.png" alt="Card image cap">
                    <div class="card-body d-flex flex-column justify-content-center">
                      <h5 class="card-title">Rush</h5>
                      <p class="card-text">500K/Hari</p>
                      <a href="#" class="btn btn-primary">Edit Data</a>
                    </div>
                </div>
            </div>
@endsection