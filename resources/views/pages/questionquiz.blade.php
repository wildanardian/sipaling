<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quiz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/questionquiz.css') }}">
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Poppins" />
</head>
<body>
    <h3 class="col-5 mt-5 mb-3"><span>I</span>Quiz Pengenalan HTML</h3>
    <div class="container-xl">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10 p-4 mb-5">
                <div class="number">
                    <div class="question">
                        <h5><span>1. </span> Apa kepanjangan dari HTML?</h5>
                    </div>
                    <div class="choice" style="justify-content:start;">
                        <div class="choose">
                            <h6>O</h6>
                            <p>Hyper Text Markup Language</p>
                        </div>
                        <div class="choose">
                            <h6>O</h6>
                            <p>Hyper Text Multi Language</p>
                        </div>
                        <div class="choose">
                            <h6>O</h6>
                            <p>Hybrid Text Markup Language</p>
                        </div>
                        <div class="choose">
                            <h6>O</h6>
                            <p>Hybrid Text Manual Language</p>
                        </div>
                    </div>
                </div>
                <div class="number">
                    <div class="question">
                        <h5><span>2. </span> Elemen yang mengartikan dokumen ditulis dengan HTML adalah</h5>
                    </div>
                    <div class="choice">
                        <div class="choose">
                            <h6>O</h6>
                            <p>html</p>
                        </div>
                        <div class="choose">
                            <h6>O</h6>
                            <p>/html</p>
                        </div>
                        <div class="choose">
                            <h6>O</h6>
                            <p>!DOCTYPE html</p>
                        </div>
                        <div class="choose">
                            <h6>O</h6>
                            <p>!DOCTYPE html5</p>
                        </div>
                    </div>
                </div>
                <div class="number">
                    <div class="question">
                        <h5><span>3. </span> Elemen 'title' berfungsi untuk</h5>
                    </div>
                    <div class="choice">
                        <div class="choose">
                            <h6>O</h6>
                            <p>Informasi tentang halaman HTML</p>
                        </div>
                        <div class="choose">
                            <h6>O</h6>
                            <p>Sebagai Judul Dokumen</p>
                        </div>
                        <div class="choose">
                            <h6>O</h6>
                            <p>Sebagai Judul  dari halaman HTML yang akan tampil di tab browser</p>
                        </div>
                        <div class="choose">
                            <h6>O</h6>
                            <p>Sebagai Judul Tiap Topik</p>
                        </div>
                    </div>
                </div>
                <div class="number">
                    <div class="question">
                        <h5><span>4. </span> Kata lain elemen pada HTML adalah</h5>
                    </div>
                    <div class="choice">
                        <div class="choice">
                            <div class="choose">
                                <h6>O</h6>
                                <p>element</p>
                            </div>
                            <div class="choose">
                                <h6>O</h6>
                                <p>doctype</p>
                            </div>
                            <div class="choose">
                                <h6>O</h6>
                                <p>title</p>
                            </div>
                            <div class="choose">
                                <h6>O</h6>
                                <p>tag</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="number mb-5">
                    <div class="question">
                        <h5><span>5. </span> Penulisan elemen pada HTML dimulai dengan</h5>
                    </div>
                    <div class="choice">
                        <div class="choice">
                            <div class="choose">
                                <h6>O</h6>
                                <p>'p' (open tag)</p>
                            </div>
                            <div class="choose">
                                <h6>O</h6>
                                <p>'/p' (open tag)</p>
                            </div>
                            <div class="choose">
                                <h6>O</h6>
                                <p>'s' (start tag)</p>
                            </div>
                            <div class="choose">
                                <h6>O</h6>
                                <p>'/s' (start tag)</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button class="btn" style="background-color: #94EF9D" >
                        <div class="col">
                            <a  href="{{ route('result-quiz') }}" class="text-dark" style="text-decoration: none;" >Submit</a>
                            <img src="{{ 'images/double-arrow-right.png' }}" />
                        </div>
                    </button>
                </div>
            </div>
            
        </div>
        
    </div>
</body>
</html>