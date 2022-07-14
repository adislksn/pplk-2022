@extends('layouts.client.app')

<!-- TITLE -->
@section('title', 'Unit Pelaksana Teknis')

@section('style')
    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


    <!-- owl caorusel -->
    <link rel="stylesheet" href="{{ asset('assets/OwlCarousel2-2.3.4/dist/assets/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css') }}"">

    <!-- css lokal -->
    <link rel="stylesheet" href="{{ asset('assets/css/UPT.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endsection

@section('content')
    <!-- CONTENT -->
    <div class="container-fluid">
        <div class="row">
            <h2 class="text-center display-3 px-5 py-5 text-light animasi"><strong>UPT ITERA</strong></h2>
        </div>
        <div class="row">
            <div class="carousel owl-carousel justify-content-center" id="upt-carousel">
                <div class="card card-1 upt-card text-light p-3 mx-auto" data-merge="3">
                    <h3 class="text-center my-4">lorem</h3>
                    <p class="container">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati cum natus
                        corrupti voluptates
                        quisquam molestiae eos quam possimus cupiditate provident quasi doloremque, consequuntur at et
                        cumque porro odio ipsam dignissimos?
                        Provident, voluptatum libero! Accusantium, similique. Cum non quas nemo ullam recusandae,
                        consequatur laborum doloremque magnam deleniti nesciunt, ut molestias similique unde aut nulla
                        ab quisquam voluptatibus eaque molestiae sit voluptas!</p>
                </div>
                <div class="card card-2 upt-card text-light p-3 mx-auto" data-merge="3">
                    <h3 class="text-center my-4">lorem</h3>
                    <p class="container">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati cum natus
                        corrupti voluptates
                        quisquam molestiae eos quam possimus cupiditate provident quasi doloremque, consequuntur at et
                        cumque porro odio ipsam dignissimos?
                        Provident, voluptatum libero! Accusantium, similique. Cum non quas nemo ullam recusandae,
                        consequatur laborum doloremque magnam deleniti nesciunt, ut molestias similique unde aut nulla
                        ab quisquam voluptatibus eaque molestiae sit voluptas!</p>
                </div>
                <div class="card card-3 upt-card text-light p-3 mx-auto" data-merge="3">
                    <h3 class="text-center my-4">lorem</h3>
                    <p class="container">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati cum natus
                        corrupti voluptates
                        quisquam molestiae eos quam possimus cupiditate provident quasi doloremque, consequuntur at et
                        cumque porro odio ipsam dignissimos?
                        Provident, voluptatum libero! Accusantium, similique. Cum non quas nemo ullam recusandae,
                        consequatur laborum doloremque magnam deleniti nesciunt, ut molestias similique unde aut nulla
                        ab quisquam voluptatibus eaque molestiae sit voluptas!</p>
                </div>
                <div class="card card-4 upt-card text-light p-3 mx-auto" data-merge="3">
                    <h3 class="text-center my-4">lorem</h3>
                    <p class="container">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati cum natus
                        corrupti voluptates
                        quisquam molestiae eos quam possimus cupiditate provident quasi doloremque, consequuntur at et
                        cumque porro odio ipsam dignissimos?
                        Provident, voluptatum libero! Accusantium, similique. Cum non quas nemo ullam recusandae,
                        consequatur laborum doloremque magnam deleniti nesciunt, ut molestias similique unde aut nulla
                        ab quisquam voluptatibus eaque molestiae sit voluptas!</p>
                </div>
                <div class="card card-5 upt-card text-light p-3 mx-auto" data-merge="3">
                    <h3 class="text-center my-4">lorem</h3>
                    <p class="container">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati cum natus
                        corrupti voluptates
                        quisquam molestiae eos quam possimus cupiditate provident quasi doloremque, consequuntur at et
                        cumque porro odio ipsam dignissimos?
                        Provident, voluptatum libero! Accusantium, similique. Cum non quas nemo ullam recusandae,
                        consequatur laborum doloremque magnam deleniti nesciunt, ut molestias similique unde aut nulla
                        ab quisquam voluptatibus eaque molestiae sit voluptas!</p>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <!-- SCRIPTS -->
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <!-- owl script -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/') }}../OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
    <script>
        $(".carousel").owlCarousel({
            loop: true,
            center: true,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            stagePadding: 180,
            responsive: {
                0: {
                    items: 1,
                    nav: false,
                    stagePadding: 0,
                },
                600: {
                    items: 1,
                    nav: false,
                },
                1000: {
                    items: 1,
                    nav: false
                }
            }
        });
    </script>
@endsection
