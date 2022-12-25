<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>

    <!-- page master ini adalah page utama yang akan di gunakan pada halaman-halaman lain -->
    <!-- include: untuk memanggil html lain, contoh komponen navbar ini, letak direktorinya ada di resources/views/components/navbar.blade.php-->
    @include('components.navbar')

    <!-- 
        section: untuk membuat suatu komponen baru yang bisa diisi dengan komponen sesuai dengan keinginan kita
        - untuk di halaman master, penggunaan section seperti ini. 
        - untuk contoh pemanggilan di halaman lain bisa dilihat contohnya pada direktori resources/views/landingpage/landingpage.blade.php
        - untuk section yang ada di halaman master ini tidak perlu diisi konten, karena kita akan mengisi konten nya saat berada di halaman lain
    -->
    @section('main-content')

    @show

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
