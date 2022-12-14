@extends('layouts.client.app')

<!-- TITLE -->
@section('title', 'Senat ')

@section('style')
    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/css/style-kabinet.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endsection

@section('content')
    <!--Content web mulai dari sini-->

    <div class="container-fluid text-light justify-content-center mt-4">
        <div class="">
            <div class="row">
            <div class="" style="text-align-last: center;">
                <h3 class="fw-bold teks2 mt-4 " >SENAT KM ITERA</h3>
                <h3 class="teks3">KELUARGA MAHASISWA</h3>
                <h3 class="teks3">ITERA 2022-2023</h3>
                <br>
                <h5 class="text-start fw-bold teks4">Ketua Senator KM ITERA</h5>
                <h6 class="text-start teks5">Rahmat Ramadhan</h6>
                <h5 class="text-start fw-bold teks4">Wakil Ketua Senator KM ITERA</h5>
                <h6 class="text-start teks5">Reza Kusuma </h6>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="mt-md-4 mt-sm-5 justify-content-center d-flex flex-wrap ">

            <a href="https://www.instagram.com/senatkmitera/" target="_blank" class="buttons background-gradient sosmed mx-lg-5 mx-sm-3">
            <div class="icon text-center ">
                <i class="fab fa-instagram"></i>
            </div>
            </a>
            <a href="https://www.youtube.com/c/KMITERA/featured" target="_blank" class="buttons background-gradient sosmed mx-lg-5 mx-sm-3">
                <div class="icon text-center ">
                    <i class="fab fa-youtube"></i>
                </div>
            </a>
            <a href="https://twitter.com/KM_ITERA" target="_blank" class="buttons background-gradient sosmed mx-lg-5 mx-sm-3">
                <div class="icon text-center ">
                    <i class="fab fa-twitter"></i>
                </div>
            </a>
        </div>

    </div>

        <div style="text-align: center;" class="container justify-content-center mt-3 text-light mt-md-5 mt-sm-2 mb-sm-5" id="visiMisi">
        <h2 class="text-center fw-bold teks3">VISI</h2>
        <p class="teks5">"Terwujudnya senat KM ITERA yang amanah, komunikatif, dan intelektual guna mempersatukan elemen yang ada di KM ITERA agar dapat bersinergi baik internal maupun eksternal"</p>
        <h2 class="text-center fw-bold teks3">MISI</h2>
        <p class="teks5">1. Mewujudkan penyelenggaraan fungsi legislasi yang efektif dan efisien</p>
        <p class="teks5">2. Mewujudkan fungsi anggaran organisasi yang transparant dan akuntabel</p>
        <p class="teks5">3. Mewujudkan penyelenggaraan fungsi pengawasan yang efektif dan transparant</p>
        </div>
    </div>
</div><br><br>




@endsection

@section('script')
<script src="{{ asset('assets/js/kabinet.js') }}"></script>
@endsection
