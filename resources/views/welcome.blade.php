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
    <link href="{{ asset('/fontawesome/css/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('/fontawesome/css/brands.css') }}" rel="stylesheet">
    <link href="{{ asset('/fontawesome/css/solid.css') }}" rel="stylesheet">    
    <link rel="stylesheet" href="{{ asset('/owlcarousel/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/owlcarousel/dist/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/marketstyle.css?v=1.0') }}">
    <title>{{ config('app.name') }}</title>
  </head>
  <body>

    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white">
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
    
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <span style="display: flex; align-items: center; justify-content: center; font-size: 28px; color: green;">
            <i class="fas fa-shopping-cart"></i>
            <font size="2px">&nbsp;Mau belanja murah ?&nbsp;<a href="#">Masuk aja dulu</a></strong></font>
        </span>            
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    {{-- <div class="alert alert-success alert-dismissible fade show" role="alert">
        Mau belanja?&nbsp;<font size="2px"><font weight="bold"><strong><a href="#">Masuk aja dulu</a></strong></font></font>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> --}}

    <div class="container mt-5 pt-5">
        <div class="slider owl-carousel owl-theme">
            <div><img src="{{ asset('/images/slider/slide1.jpg') }}"></div>
            <div><img src="{{ asset('/images/slider/slide2.jpg') }}"></div>
            <div><img src="{{ asset('/images/slider/slide3.jpg') }}"></div>
            <div><img src="{{ asset('/images/slider/slide4.jpg') }}"></div>
            <div><img src="{{ asset('/images/slider/slide5.jpg') }}"></div>
            <div><img src="{{ asset('/images/slider/slide6.jpg') }}"></div>
        </div>
    </div>

    <div class="container my-3 px-4">
        <div class="row" style="border: 1px solid rgba(0,0,0,0.1); border-radius: 5px;">
            <div class="col-md-6 pt-2" style="background-color: #ffffff;">
                <h5>&nbsp;Kategori Pilihan</h5>
                <div class="category owl-carousel owl-theme">
                    <div>
                        <div class="category-carousel-box pt-2">
                            <img style="width: 48px;" src="{{ asset('/images/product_category/accesories_icon.jpeg') }}">
                            <div class="clearfix">&nbsp;</div>
                            <h6>Accesories</h6>
                        </div>
                    </div>
                    <div>
                        <div class="category-carousel-box pt-2">
                            <img style="width: 48px;" src="{{ asset('/images/product_category/craft_icon.png') }}">
                            <div class="clearfix">&nbsp;</div>
                            <h6>Craft</h6>
                        </div>
                    </div>                    
                    <div>
                        <div class="category-carousel-box pt-2">
                            <img style="width: 48px;" src="{{ asset('/images/product_category/drink_icon.jpg') }}">
                            <div class="clearfix">&nbsp;</div>
                            <h6>Drink</h6>                       
                        </div>
                    </div>                                        
                    <div>
                        <div class="category-carousel-box pt-2">
                            <img style="width: 48px;" src="{{ asset('/images/product_category/fashion_icon.jpg') }}">
                            <div class="clearfix">&nbsp;</div>
                            <h6>Fashion</h6>                      
                        </div>
                    </div>                                                            
                    <div>
                        <div class="category-carousel-box pt-2">
                            <img style="width: 48px;" src="{{ asset('/images/product_category/food_icon.png') }}">
                            <div class="clearfix">&nbsp;</div>
                            <h6>Food</h6>                     
                        </div>
                    </div>                                                                                
                    <div>
                        <div class="category-carousel-box pt-2">
                            <img style="width: 48px;" src="{{ asset('/images/product_category/furniture_icon.png') }}">
                            <div class="clearfix">&nbsp;</div>
                            <h6>Furniture</h6>                     
                        </div>
                    </div>                                                                                                    
                </div>                
            </div>
            <div class="col-md-6 pt-2" style="background-color: #ffffff;">
                <h5>&nbsp;Topup & PPOB</h5>
                <ul class="nav nav-pills nav-fill" style="border: 1px solid rgba(0,0,0,0.1); ">
                    <li class="nav-item">
                        <a class="nav-link active" href="#Pulsa" data-toggle="tab">Pulsa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Paketdata" data-toggle="tab">Paket Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#ListrikPLN" data-toggle="tab">Listrik PLN</a>
                    </li>
                </ul>                
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="Pulsa">
                        <div class="container">
                            <form>
                                <div class="d-flex row">
                                    <div class="form-group mx-2">
                                        <label for="notelp">Nomor Telepon</label>
                                        <input type="text" class="form-control" id="notelp" aria-describedby="notelp" placeholder="081234567890">
                                    </div>
                                    <div class="form-group mx-2">
                                        <label for="nominal">Nominal</label>
                                        <input type="text" class="form-control" id="nominal" placeholder="nominal">
                                    </div>
                                    <div class="form-group">
                                        <br />
                                        <button type="submit" class="btn btn-primary mt-2">Bayar</button>
                                    </div>                                    
                                </div>
                            </form>          
                        </div>              
                    </div>
                    <div role="tabpanel" class="tab-pane" id="Paketdata">
                        <div class="container">
                            <form>
                                <div class="d-flex row">
                                    <div class="form-group mx-2">
                                        <label for="notelp">Nomor Telepon</label>
                                        <input type="text" class="form-control" id="notelpdata" aria-describedby="notelp" placeholder="081234567890">
                                    </div>
                                    <div class="form-group mx-2">
                                        <label for="nominal">Nominal</label>
                                        <input type="text" class="form-control" id="nominaldata" placeholder="nominal">
                                    </div>
                                    <div class="form-group">
                                        <br />
                                        <button type="submit" class="btn btn-primary mt-2">Bayar</button>
                                    </div>                                    
                                </div>
                            </form>          
                        </div>                                     
                    </div>
                    <div role="tabpanel" class="tab-pane" id="ListrikPLN">
                        <div class="container">
                            <form>
                                <div class="d-flex row">
                                    <div class="form-group mx-2">
                                        <label for="notelp">Jenis Produk Listrik</label>
                                        <select class="form-control" id="produk_listrik" name="produk_listrik">
                                            <option value="token">Token Listrik</option>
                                            <option value="tagihan">Tagihan Listrik</option>
                                        </select>
                                    </div>
                                    <div class="form-group mx-2">
                                        <label for="notelp">ID Meter / Pelanggan</label>
                                        <input type="text" class="form-control" id="idpelanggan" aria-describedby="idpelanggan" placeholder="1122334455">
                                    </div>
                                    <div class="form-group mx-2">
                                        <label for="nominal">Nominal</label>
                                        <select class="form-control" id="nominal_listrik" name="nominal_listrik">
                                            <option value="10000">Rp 10.000</option>
                                            <option value="20000">Rp 20.000</option>
                                            <option value="25000">Rp 25.000</option>
                                            <option value="50000">Rp 50.000</option>
                                            <option value="100000">Rp 100.000</option>
                                            <option value="200000">Rp 200.000</option>
                                            <option value="500000">Rp 500.000</option>
                                            <option value="1000000">Rp 1.000.000</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <br />
                                        <button type="submit" class="btn btn-primary mt-2">Submit</button>
                                    </div>                                    
                                </div>
                            </form>          
                        </div>                                      
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- FOOTER -->
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <img src="{{ asset('/images/funstore-white.png') }}" alt="Logo" class="logo">
            </div>
        </div>
    </div>
    <div class="container-fluid py-3" style="background-color: rgba(0,0,0,0.7);">
        <div class="row">
            <div class="col-md-4">
                <ul class="list-group">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Morbi leo risus</li>
                    <li class="list-group-item">Porta ac consectetur ac</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="list-group">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Morbi leo risus</li>
                    <li class="list-group-item">Porta ac consectetur ac</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="list-group">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Morbi leo risus</li>
                    <li class="list-group-item">Porta ac consectetur ac</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
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
            $('.slider').owlCarousel({
                center: true,
                items:6,
                loop:true,
                margin:10,
                autoplay: true,
                nav: true,
                navText: ['<ion-icon name="arrow-dropleft"></ion-icon>','<ion-icon name="arrow-dropright"></ion-icon>'],
                dots: true,
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

            $('.category').owlCarousel({
                items:4,
                loop:true,
                autoplay: true,
                nav: true,
                navText: ['<ion-icon name="arrow-dropleft"></ion-icon>','<ion-icon name="arrow-dropright"></ion-icon>'],
                dots: false,
                responsive:{
                    0: {
                        items: 3
                    },
                    600:{
                        items:4,
                    }
                }
            });            
        });
    </script>

  </body>
</html>