<!--
    ini untuk contoh pemanggilan halaman master di halaman landingpage
    kita bisa menggunakan fungsi bawaan laravel yaitu extends
-->

@extends('pages.master')

<!--
    ini untuk contoh penggunaan section pada halaman landingpage,
    - sesuaikan nama section di halaman ini dengan yang ada di halaman master
    - isi content yang akan ditampilkan pada landing page pada line di bawah @ section sampai sebelum @ stop
-->

@section('main-content')
    <!-- isi konten yang akan ditampilkan di halaman ini disini-->
    <section class="top-landing-page">
        <div class="row justify-content-center">
            <div class="col my-auto">
                <div class="left-content">
                    <img src="{{ url('/images/person.png') }}" alt="person"/>
                </div>
            </div>
            <div class="col my-auto">
                <div class="right-content">
                    <h2>MAKES CODING</h2>
                    <h2 class="change">EASIER</h2>
                    <p>Contoh Deskripsi: Bergabunglah dengan kami agar membantu anda dalam belajar web programming
                        dengan materi dan live session tanpa batas
                    </p>
                    <a class="btn" href="#" role="button">Get started</a>
                </div>
            </div>
        </div>
    </section>

    @include('components.ourprogram')

    @include('components.testimoni')

@stop
