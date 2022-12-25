<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quiz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/quiz.css') }}">
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Poppins" />
</head>
<body>
    <div class="container-xxl">
        <div class="row">
            <div class="col-5 my-auto" >
                <div class="navbar">
                    <a href="#"><h6 class="position-fixed start-0 top-0 ms-5 mt-4 text-dark">Si Paling</h6></a>
                    <div class="account position-fixed end-0 top-0 me-5 mt-3">
                        <h6 class="mt-1">Hai Andrew</h6>
                        <img src="{{ 'images/user-green.png' }}" class="rounded float-end"alt="">
                    </div>
                </div>
                <div class="left-content text-center my-auto">
                    <img src="{{ 'images/man-study.png' }}" alt="">
                </div> 
            </div>
            <div class="col-7 my-auto">
                <div class="right-content ">
                    <h1>Quiz<br><span>Pengenalan HTML</span></h1>
                    <a class="btn" href="{{ route('question-quiz') }}" role="button">Mulai Quiz</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>