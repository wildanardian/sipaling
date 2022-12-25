<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link href="{{ asset('css/login.css') }}" rel="stylesheet">

</head>

<body>

    <div class="container">
        <div class="row align-items-start">
            <div class="col text-center mt-5">
                <a href="{{ route('landingpage') }}" id="back_to"><h3 class="mt-3 mb-5">SI PALING</h3></a>
                <div class="mt-5">
                    <img id="gambar" src="{{ 'images/person-stand.png' }}" />
                </div>
            </div> 
            <div class="col">
                <div class="cover" style="background-color: white;">
                    <div class="col">
                        <div class="card-body pt-5 ps-5">
                            <h3 class="card-title">Welcome To Si Paling</h3>
                            <p style="color:#999999;">Glad to see you again !</p>
            
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="exsample@gmail.com">
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label align-items-start">Password</label>
                                <input type="password" class="form-control" id="exampleFormControlInput1"
                                    placeholder="password">
                            </div>

                            <!-- tombol login -->
                            <div class="d-flex">
                                <button class="btn" id="button-login"><a id="go_to" href="{{ route('dashboard') }}">Login</a></button>
                            </div>
                            <div class="d-flex">
                                <div class="row mt-5">

                                    <div class="d-flex align-content-center">
                                        <div class="textnya">
                                            <p style="color:#999999;">Create account with</p>
                                        </div>
                                        <div class="ms-4 border border-2 lingkaranbuaticon"></div>
                                        <div class="ms-3 border border-2 lingkaranbuaticon"></div>
                                        <div class="ms-3 border border-2 lingkaranbuaticon"></div>
                                    </div>

                                </div>

                            </div>

                            <!-- tombol login -->

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
</body>

</html>
