<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/owlcarousel/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/owlcarousel/dist/assets/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('/css/marketstyle.css?v=1.0') }}">
    <title>{{ config('app.name') }}</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand" href="#">
                <img src="{{ asset('/images/funstore-white.jpg') }}" alt="Logo" class="logo">
            </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Kategori
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <div class="input-group">
                        <input type="text" class="form-control navbar-search" placeholder="Cari Barang" aria-label="Cari Barang" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary bg-light" type="button" id="button-addon2" style="font-size: 18px;"><ion-icon name="search"></ion-icon></button>
                        </div>
                    </div>
                </ul>
                
                <form class="form-inline my-2 my-lg-0">
                    <button class="btn btn-outline-secondary mr-3" type="button" id="button-addon2" style="font-size: 24px; border: none !important;"><ion-icon name="cart"></ion-icon></button>
                    <span  style="font-size: 24px; color: #ccc;">|<span>
                    <button class="btn btn-outline-success mx-2 my-2 my-sm-0" type="submit">Masuk</button>
                    <button class="btn btn-success my-2 my-sm-0" type="submit">Daftar</button>
                </form>                
            </div>        
        </div>
    </nav>

    <div class="container my-3">
        <div class="owl-carousel">
            <div><img style="border-radius: 10px;" src="{{ asset('/images/slider/slide1.jpg') }}"></div>
            <div><img style="border-radius: 10px;" src="{{ asset('/images/slider/slide2.jpg') }}"></div>
            <div><img style="border-radius: 10px;" src="{{ asset('/images/slider/slide3.jpg') }}"></div>
            <div><img style="border-radius: 10px;" src="{{ asset('/images/slider/slide4.jpg') }}"></div>
            <div><img style="border-radius: 10px;" src="{{ asset('/images/slider/slide5.jpg') }}"></div>
        </div>
    </div>

    <div class="container my-3 px-4">
        <div class="row" style="border: 1px solid rgba(0,0,0,0.1); border-radius: 5px;">
            <div class="col-md-6 pt-2">
                <h5>Kategori</h5>
            </div>
            <div class="col-md-6 pt-2">
                <h5>Topup & PPOB</h5>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.js"></script>
    <script src="{{ asset('/owlcarousel/dist/owl.carousel.min.js') }}"></script>

    <script>
        $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
                center: true,
                items:3,
                loop:true,
                margin:10,
                autoplay: true,
                responsive:{
                    0: {
                        items: 1
                    },
                    600:{
                        items:2,
                        margin: 15
                    }
                }
            });

            $('.owl-category').owlCarousel({
                center: true,
                items:4,
                loop:true,
                margin:10,
                autoplay: true,
                responsive:{
                    0: {
                        items: 1
                    },
                    600:{
                        items:2,
                        margin: 15
                    }
                }
            });            
        });
    </script>

  </body>
</html>