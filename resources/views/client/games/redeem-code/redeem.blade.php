@extends('layouts.client.app')

<!-- TITLE -->
@section('title', 'Redeem Code')

@section('style')
    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/css/redeem-code-redeem.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
@endsection

@section('content')

    <!-- CONTENT -->

    <!-- start conten -->
    <div class="start-content">
        <div class="container-fluid redeem py-3 mt-4">
            <div class="row justify-content-around">
                <div class="col-11 text-start">
                    <p class="text-white title-text">REDEEM CODE</p>
                    <div class="line-indikator"></div>
                </div>
            </div>
        </div>
    </div>
            <div class="row justify-content-center" style="padding-bottom: 53px">
                <!-- card choesed -->
                <div class="col-8 col-lg-4 ">
                    <div class="card rounded-4">
                        <div class="bg-white rounded-4">
                            <div class="ratio ratio-16x9 bg-white rounded-4">
                                <img src="{{ asset('assets/logoCard/card.webp') }}" class="card-img-top img-box" alt="...">
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text pt-lg-2 pt-md-1 text-center text-light">
                                {{ $kode_game->nama }}
                            </p>
                        </div>
                    </div>
                </div>
                <!-- card choesed -->

                <!-- redeem code -->
                <div class="col-6 mt-4">
                    <form method="POST" action="/submitcode/{{ auth()->user()->id }}">
                        @csrf
                        <div class="form-group">
                            <div class="mb-3">
                                <label for="code-redeem" class="form-label text-white">CODE :</label>
                                <input type="text" name="code" value="" id="code-redeem" class="input-control" placeholder="___">
                                <input type="text" name="nomor" value="{{ $kode_game->no }}" id="code-redeem" style="display: none" class="input-control" placeholder="___">
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <!-- Button trigger modal -->>
                            <button type="submit" class="btn btn-redeem text-light d-flex justify-content-center" data-bs-toggle="modal"
                                data-bs-target=".bd-example-modal-sm{{ $kode_game->code }}">
                                <strong class="btn-tz">REDEEM</strong>
                            </button>
                        </div>
                    </form>
                </div>
                <!-- redeem code -->

            <!-- Vertically centered modal -->
            <!-- Modal -->
            <!-- Button trigger modal -->


            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                                <div class="conten-modal py-5">
                                    <h1 class="text-center dsplay-4"><strong>REDEEM CODE GAGAL</strong></h1>
                                    <p class="px-4 text-center">Yahh kode yang kalian masukan salah
                                        coba kode lain yuk !!.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

@endsection

@section('script')
    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
@endsection

