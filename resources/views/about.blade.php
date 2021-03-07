@extends('layout/main')

@section('title', 'About')

@section('container')
<style>
.img-circle {
 border-radius: 50%;
-moz-border-radius: 50%;
-webkit-border-radius: 50%;
}
</style>
<div class="container">
    <div class="row">
            <center>
             <h1 class="mt-3">My Portfolio</h1>
             <img src="img/iyuu.jpeg"
             style="width=150px; height:200px;" class=img-circle>
             <p class="mt-4">Fitria Yesisca | Teknologi Informasi | 185150701111002</p> 
            </center>
            <p class="mt-5">Halo, selamat datang di website saya di mata kuliah pemrograman website lanjut. Perkenalkan saya Sisca dari prodi TI angkatan 2018.
                Disini saya akan menjelaskan lebih lanjut terkait dengan pemweblan. Sebelumnya, kita harus mempelajari matkul pemweb dahulu agar
                lebih jelas dan paham mengenai pemrograman website.
            </p>
        </div>
    </div>
</div>
@endsection
