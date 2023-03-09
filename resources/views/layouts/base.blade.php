<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title') - CISTEM</title>
        <link rel="icon" href="{{ asset('/favicon.ico')}}" type="image/x-icon">
        <link rel="stylesheet" href="{{ asset('/css/bootstrap/bootstrap.css')}}">
        <link rel="stylesheet" href="{{ asset('/css/fontawesome/all.css')}}">
        <link rel="stylesheet" href="{{ asset('/css/fontawesome/fontawesome.css')}}">
        <script src="{{ asset('/js/bootstrap/bootstrap.js')}}"></script>
        <script src="{{ asset('/js/fontawesome/fontawesome.js')}}"></script>
        @yield('metadata')
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 d-flex align-items-center justify-content-center">
                    <a href="{{ route('index') }}"><img src="{{ asset('/images/logo_cistem.png')}}" width="200px" class="m-4"/></a>
                    
                </div>
                <div class="col-0 col-md-4"></div>
                <div class="col-12 col-md-4 d-flex align-items-center justify-content-center">
                    <div class="text-center">
                        <div>
                            <a href="https://www.facebook.com/Cistemuco" target="_blank" style="text-decoration:none" title="Facebook: Cistemuco"><i class="fa-brands fa-facebook fs-5"></i></a>
                            <a href="https://www.instagram.com/cistem.profesionales.temuco" target="_blank" style="text-decoration:none" class="mx-2" title="Instagram: cistem.profesionales.temuco"><i class="fa-brands fa-instagram fs-5"></i></a>
                            <a href="https://wa.me/56920506724" target="_blank" style="text-decoration:none" title="WhatsApp: +569 2050 6724"><i class="fa-brands fa-whatsapp fs-5"></i></a>
                        </div>
                        <h6>Mesa central</h6>
                        <h5><a href="tel:569 2050 6724" style="text-decoration: none" class="text-dark">+569 2050 6724</a></h5>
                    </div>
                </div>
                <div class="col-12 p-0">
                    @include('.layouts.navbar')
                </div>
            </div>
        </div>
        <div class="w-100 pb-4">
            @yield('content')
        </div>
        @include('.layouts.footer')
    </body>
</html>