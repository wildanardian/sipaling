<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">

</head>

<body>

    <!-- page master ini adalah page utama yang akan di gunakan pada halaman-halaman lain -->
    <!-- include: untuk memanggil html lain, contoh komponen navbar ini, letak direktorinya ada di resources/views/components/navbar.blade.php-->
    @include('components.navbar_dashboard')

    <!--
        section: untuk membuat suatu komponen baru yang bisa diisi dengan komponen sesuai dengan keinginan kita
        - untuk di halaman master, penggunaan section seperti ini.
        - untuk contoh pemanggilan di halaman lain bisa dilihat contohnya pada direktori resources/views/landingpage/landingpage.blade.php
        - untuk section yang ada di halaman master ini tidak perlu diisi konten, karena kita akan mengisi konten nya saat berada di halaman lain
    -->
    <div class="container text-center mb-5">
        <div class="row align-items-start">
            <div class="col-3">
                <div class="card border rounded-5 m-auto mt-5" style="width: 18rem">
                    <div class="d-flex fotoakun">
                        <div class="d-block m-auto isigambarakun">
                            <img id="gambarAkun" src="{{ 'images/user-white.png' }}" alt="" />
                            <h3>Andrew</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="myclass mt-3">
                            <h5 class="card-title mt-1 ms-1 fw-bold">My Class</h5>
                        </div>
                        <div class="myclass mt-3">
                            <h5 class="card-title mt-1 ms-1 fw-bold">My Rank</h5>
                        </div>
                        <div class="myclass mt-3">
                            <h5 class="card-title mt-1 ms-1 fw-bold">My Courses</h5>
                        </div>
                
                        <p class="mt-4 mb-1" style="color: #8e8e8e">Description</p>
                        <div class="mydesc">
                            <p class="card-text ms-2 mt-2">
                                This will be description
                            </p>
                        </div>
                
                    </div>
                </div>
                
            </div>
            <div class="col-9 mt-5">
                <div class="container-md">
                    <div class="col-14 d-flex">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top mx-auto pt-4" src="{{ 'images/html.png' }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title text-center fw-bolder">Pengenalan HTML</h5>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top mx-auto pt-4" src="{{ 'images/html.png' }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title text-center fw-bolder">Pengenalan HTML</h5>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top mx-auto pt-4" src="{{ 'images/html.png' }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title text-center fw-bolder">Pengenalan HTML</h5>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top mx-auto pt-4" src="{{ 'images/html.png' }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title text-center fw-bolder">Pengenalan HTML</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-md">
                    <div class="row"></div>
                    <div class="col-1"></div>
                    <div class="col-14 d-flex">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top mx-auto pt-4" src="{{ 'images/html.png' }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title text-center fw-bolder">Pengenalan HTML</h5>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top mx-auto pt-4" src="{{ 'images/html.png' }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title text-center fw-bolder">Pengenalan HTML</h5>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top mx-auto pt-4" src="{{ 'images/html.png' }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title text-center fw-bolder">Pengenalan HTML</h5>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top mx-auto pt-4" src="{{ 'images/html.png' }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title text-center fw-bolder">Pengenalan HTML</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- letak direktorinya ada di resources/views/components/footer.blade.php-->
    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
</body>

</html>
