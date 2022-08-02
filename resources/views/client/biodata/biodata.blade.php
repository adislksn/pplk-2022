@extends('layouts.client.app')

<!-- TITLE -->
@section('title', 'Halaman - Profil')

@section('style')
    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/css/biodata.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
<!--icon-->
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
@endsection

@section('content')
<div class="body">
    <div class="container-fluid">
        <div class="row justify-content-around">

            <div class="col-lg-3 col-md-10 col-sm-12 justify-content-center">
                <div class="center" style="justify-content:center !important;">

                    <div class="bio-profile">
                        @if ($biodata->fotoProfil == null)
                        <img class="ratio ratio-1x1 profile" style="" src="{{ asset('assets/profile') }}/default.png" alt="fotoprofil">
                        @elseif($biodata->fotoProfil != null)
                        <img class="ratio ratio-1x1 profile" style="" src="{{ asset('assets/profile') }}/{{ $biodata->fotoProfil }}" alt="fotoprofil">
                        @endif
                    </div>

                    <div class="edit-profile py-md-4">
                        <a href="/edit-biodata" class="pt-5">
                            <label class="btn btn-primary fs-5">
                                EDIT PROFILE
                            </label>
                        </a>
                    </div>

                    <br><h1 align="center" >QR PRESENSI</h1> <br>
                    <div class=" qrCode Justify-content-center row container qr-code py-md-4" style=" width: 250px; height:250px;" >
                        <div class="w-100">
                            <div class="ratio ratio-1x1 content rounded">
                                    <iframe id="qrCode" src="{{ asset('assets/qrCode')}}/{{ $biodata->qrCode }} "></iframe>
                                    <img src="{{ asset('assets/logomini.png') }}" target="_blank" alt="logo kecil">

                            </div>

                        </div><!-- col-2 -->
                    </div>
                    <a href="#" class="btn btn-primary">PRINT QR CODE</a>

                </div><!-- row -->
            </div><!-- container -->

            <div class="col-xl-6 col-sm-12 mb-5">
                <h1 align="center" >BIODATA PENGGUNA</h1> <br>
                <div class="container">
                    <form class="col-sm-12 bio-form m-sm-auto container-fluid justify-content-between fle" method="POST">
                        <div class="row bio-input">
                            <label class="form-label" for="nama">Nama</label>
                            <input type="text" placeholder="{{ $biodata->nama }}" disabled>
                        </div>

                        <div class="row bio-input">
                            <label class="form-label" for="nim">NIM</label>
                            <input type="text" placeholder="{{ $biodata->nim }}" disabled>
                        </div>

                        <div class="row bio-input">
                            <label class="form-label" for="email">Email</label>
                            <input type="text" placeholder="{{ $biodata->email }}" disabled>
                        </div>

                        <div class="row bio-input">
                            <label class="form-label" for="kelompok">Kelompok</label>
                            <input type="text" placeholder="{{ $biodata->kelompok }}" disabled>
                        </div>

                        <div class="row bio-input">
                            <label class="form-label" for="prodi">Program Studi</label>
                            <input type="text" placeholder="{{ $biodata->prodi }}" disabled>
                        </div>

                        <div class="row bio-input">
                            <label class="form-label" for="notel">Nomor Telepon</label>
                            <input type="text" placeholder="{{ $biodata->nomorHp }}" disabled>
                        </div>

                        <div class="row bio-input">
                            <label class="form-label" for="instagram">Instagram</label>
                            <input type="text" placeholder="{{ $biodata->instagram }}" disabled>
                        </div>

                        <div class="row bio-input">
                            <label class="form-label" for="golongan darah">Golongan Darah</label>
                            <input type="text" placeholder="{{ $biodata->golonganDarah }}" disabled>
                        </div>

                        <div class="row bio-input">
                            <label class="form-label" for="riwayat">Riwayat Penyakit</label>
                            <input type="text" placeholder="{{ $biodata->riwayatPenyakit }}" disabled>
                        </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
    <!-- SCRIPTS -->
    <script src = "{{ asset('assets/js/biodata.js') }}"></script>
@endsection
