@extends('layout.main');

@section('container')
            <nav class="navbar w-100" style="padding: 2% 0; background-image: linear-gradient(to right, #001743 , #350261); color: white;">
                <div style="margin-left: 5%;">
                    <h1>Pengguna</h1>
                </div>
            </nav>
    
            <div class="d-flex flex-column " style="width: 100%;">
                <div class="container">
                    <div  style="margin: 3% 5% 2% 5%;">
                        <h3>Data Pengguna</h3>
                    </div>
    
                    <div style="margin: 0 5%; border: 0;"> <!-- border-radius: 10px; overflow: hidden; -->
                        <table class="table table-bordered">
                            <thead class="thead-dark" style="background-color: #6600BD; color: white;">
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">No Handphone</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>mark@gmail.com</td>
                                <td>085XXXXXX002</td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Jacob@gmail.com</td>
                                <td>082XXXXXX019</td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>Larry@gmail.com</td>
                                <td>081XXXXXX713</td>
                              </tr>
                            </tbody>
                        </table>
                    </div>
                    
                </div>

                <div class="d-flex flex-row-reverse" style="margin: 0 5% 2% 5%;">
                    <p class="hyperlink fs-6" style="margin-right: 3%; font-weight: 500; color: #350261">Lihat Semua</p>
                </div>

            </div>

            
            
@endsection