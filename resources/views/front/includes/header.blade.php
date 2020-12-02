<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="{{asset('/')}}/asset/img/logo.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
    <link rel="stylesheet" href="{{asset('/')}}/asset/css/owl.carousel.css">
    <link rel="stylesheet" href="{{asset('/')}}/asset/css/owl.theme.default.css">
    <link rel="stylesheet" href="{{asset('/')}}/asset/css/style.css">

    <title>Solve - Local Search, Social, News, Videos, Shopping</title>
</head>

<body>

    <section class="navbar-section">
            <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
                
                <a class="navbar-brand ml-4" href="{{url('/')}}"><img src="{{asset('/')}}/asset/img/logo.png" class="img-fluid" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse float-right" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item highlight">
                        <a class="nav-link" href="{{url('/free-listing')}}">Free Listing <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-shopping-bag text-warning"></i></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{url('/advertise')}}">Advertise</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">English</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#" tabindex="-1" aria-disabled="true" data-toggle="modal" data-target="#login-modal">Login</a>

                            <!-- Login Modal -->
                            
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/sign-up')}}">Sign Up</a>
                        </li>
                        <!-- Dropdown Nave -->



                    </ul>
                </div>
            </nav>
            <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="edit-modal-Label" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center">

                            <div class="d-block">
                                <a href="#">
                                    <img src="{{asset('/')}}/asset/img/logo.png" class="img-fluid" alt="">
                                </a>
                            </div>


                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-dark">
                            <p class="text-center">Login for Seamless experience</p>
                            <form>
                                <div class="form-group">

                                    <input type="text" class="form-control" id="loginName" aria-describedby="loginName" placeholder="Name">

                                </div>
                                <div class="form-group">

                                    <input type="text" class="form-control" id="loginNumber" placeholder="Mobile Number">
                                </div>

                                <button type="submit" class="btn btn-info">Send OTP</button>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
    </section>
    <div class="2nd-nav bg-light text-center font-weight-bold sticky-top">
        <div class="container">
            <div class=" d-flex flex-wrap justify-content-between align-items-center">
        <span class="2nvi"><button class="btn btn-lg text-dark" id="navOpen"><i class="fas fa-bars"></i></button></span>
        <span class="2nvi px-2">All Shops</span>
        <span class="2nvi px-2">All Brands</span>
        <span class="2nvi px-2">All Services</span>
        <span class="2nvi px-2">Profile</span>
        <span class="2nvi px-2">Help</span>
            </div>
        </div>
        
    </div>
    <div class="nav-side-menu nav-closed" id="sideNav">
                <h5 class=" pb-2 mb-2"><a href="#" class="text-light text-center bg-danger float-right p-2"  id="navClose"><i class="fas fa-times"></i> Close </a></h5>
                <div id="jquery-accordion-menu" class="jquery-accordion-menu">
                    <ul>
                        <li class="active">
                            <a href=""> Solve</a>
                        </li>
                        <li>
                            
                        </li>
                        <li><a href="#"><i class="fa fa-cog"></i>Services </a>
                            <ul class="submenu">
                            <li><a href="{{url('/moto-care')}}">
                                Moto Care</a></li>
                                <li><a href="#">Hosting </a></li>
                                <li><a href="#">Design </a>
                                    <ul class="submenu">
                                        <li><a href="#">Graphics </a></li>
                                        <li><a href="#">Vectors </a></li>
                                        <li><a href="#">Photoshop </a></li>
                                        <li><a href="#">Fonts </a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Consulting </a></li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="fa fa-suitcase"></i>Categories </a>
                            <ul class="submenu">
                                <li><a href="#">Web Design </a></li>
                                <li><a href="#">Graphics </a><span class="jquery-accordion-menu-label">10 </span></li>
                                <li><a href="#">Photoshop </a></li>
                                <li><a href="#">Programming </a></li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="fa fa-suitcase"></i>Shops </a>
                            <ul class="submenu">
                                <li><a href="#">Web Design </a></li>
                                <li><a href="#">Graphics </a><span class="jquery-accordion-menu-label">10 </span></li>
                                <li><a href="#">Photoshop </a></li>
                                <li><a href="#">Programming </a></li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="fa fa-suitcase"></i>Brands </a>
                            <ul class="submenu">
                                <li><a href="#">Web Design </a></li>
                                <li><a href="#">Graphics </a><span class="jquery-accordion-menu-label">10 </span></li>
                                <li><a href="#">Photoshop </a></li>
                                <li><a href="#">Programming </a></li>
                            </ul>
                        </li>
                        
                </div>
    </div>