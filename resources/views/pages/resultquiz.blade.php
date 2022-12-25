<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quiz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/result.css') }}">
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Poppins" />
</head>
<body>
    
    <div class="container-xxl">
        <div class="row">
            <div class="col-5 my-auto" >
                <div class="navbar">
                    <h6 class="position-fixed start-0 top-0 ms-4 mt-4 text-dark">Si Paling</h6>
                    <div class="account position-fixed end-0 top-0 me-5 mt-3">
                        <h6 class="mt-1">Hai Andrew</h6>
                        <img src="{{ '/images/user-green.png' }}" class="rounded float-end"alt="">
                    </div>
                </div>
                <div class="left-content text-center my-auto">
                    <img src="{{ '/images/man-study.png' }}" alt="">
                </div>
            </div>
            <div class="col-7 my-auto">
                <div class="right-content ">
                    <h1>Hasil Quiz<br><span>Pengenalan HTML</span></h1>
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">Benar</th>
                                <th scope="col">Salah</th>
                                <th scope="col">Skor Akhir</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <div class="row">
                                <td>5</td>
                                <td>0</td>
                                <td>100</td>
                                </div>
                            </tr>
                        </tbody>
                    </table>
                    <div class="button d-flex">
                        <div class="btn-left"><a class="btn" href="{{ route('dashboard') }}" role="button">Kembali Ke Kelas</a></div>
                        <div class="btn-right"><a class="btn " href="{{ route('quiz') }}" role="button">ulangi Quiz</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>