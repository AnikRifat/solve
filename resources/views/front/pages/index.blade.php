@extends('front.layout.master')
@section('main-body')
<section class="carousel-section">
    <div class="container-nai">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="asset/img/carousel-banner/Flights.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="asset/img/carousel-banner/oyo-homepage.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="asset/img/carousel-banner/pharmeasy-banner.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <!--
    <h5>Third slide label</h5>
    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
-->
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="asset/img/carousel-banner/Recharge.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <!--
    <h5>Third slide label</h5>
    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
-->
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="asset/img/carousel-banner/street-dancer-banner.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <!--
    <h5>Third slide label</h5>
    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
    moto care, B2B, Book Hotel, Doctor, Education, IT, Hotel,
-->
                    </div>
                </div>


            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

            <div class="banner-front">
                <form>
                    <div class="form-row align-items-center">

                        <div class="col-md-4">

                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-map-marker-alt"></i></div>
                                </div>
                                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Mumbai">
                            </div>
                        </div>
                        <div class="col-md-8">

                            <div class="input-group ">

                                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Search for anything, anywhere in India">
                                <div class="input-group-prepend">
                                    <button type="submit" class="btn mb-2"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>


                    </div>
                </form>
            </div>
        </div>

    </div>
</section>

<section class="body-section p-4">

    <div class="container-nai">
        <div class="row-ki-service">

            <div class="col-md-12">
                <div class="popular-service">
                    <h4>Popular Services</h4>
                    <div class="owl-carousel owl-theme popular-carousel ">
                        <div class="item">
                            <div id="moto-carousel" class="carousel slide" data-ride="carousel">

                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="asset/img/services/moto-care1.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="asset/img/services/moto-care2.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="asset/img/services/moto-care3.jpg" class="d-block w-100" alt="...">
                                    </div>

                                </div>
                                <a class="carousel-control-prev" href="#moto-carousel" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#moto-carousel" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <div class="p-2">
                                <h6 class="text-center">Moto Care</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#">Car Repair</a></li>
                                    <li><a href="">Car Tyres</a></li>
                                    <li><a href="">Car Batteries</a></li>
                                </ul>
                                <div class="text-center">
                                    <a class="btn btn-info btn-sm" href="#" role="button">See More</a>
                                </div>


                            </div>



                        </div>
                        <div class="item">
                            <div id="restaurants" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="asset/img/services/restaurant1.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="asset/img/services/restaurant2.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="asset/img/services/restaurant3.jpg" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#restaurants" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#restaurants" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <div class="p-2">
                                <h6 class="text-center">Rrestaurants</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#">Order Online</a></li>
                                    <li><a href="">Book Table</a></li>
                                    <li><a href="">Trending</a></li>
                                </ul>
                                <div class="text-center">
                                    <a class="btn btn-info btn-sm" href="#" role="button">See More</a>
                                </div>


                            </div>



                        </div>
                        <div class="item">
                            <div id="shop-online" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="asset/img/services/shop-online1.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="asset/img/services/shop-online2.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="asset/img/services/shop-online3.jpg" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#shop-online" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#shop-online" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <div class="p-2">
                                <h6 class="text-center">Shop Online</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#">Mobile</a></li>
                                    <li><a href="">Telivisions</a></li>
                                    <li><a href="">Air Conditioners</a></li>
                                </ul>
                                <div class="text-center">
                                    <a class="btn btn-info btn-sm" href="#" role="button">See More</a>
                                </div>


                            </div>



                        </div>
                        <div class="item">
                            <div id="doctors" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="asset/img/services/doctors1.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="asset/img/services/doctors2.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="asset/img/services/doctors3.jpg" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#doctors" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#doctors" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <div class="p-2">
                                <h6 class="text-center">Doctors</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#">Dentists</a></li>
                                    <li><a href="">Dermatologists</a></li>
                                    <li><a href="">ENT</a></li>
                                </ul>
                                <div class="text-center">
                                    <a class="btn btn-info btn-sm" href="#" role="button">See More</a>
                                </div>


                            </div>



                        </div>
                        <div class="item">
                            <div id="b2b" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="asset/img/services/B2B1.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="asset/img/services/B2B2.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="asset/img/services/B2B3.jpg" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#b2b" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#b2b" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <div class="p-2">
                                <h6 class="text-center">B2B</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#">Electronics</a></li>
                                    <li><a href="">Industrial Machinery</a></li>
                                    <li><a href="">Logistics & Transportation</a></li>
                                </ul>
                                <div class="text-center">
                                    <a class="btn btn-info btn-sm" href="#" role="button">See More</a>
                                </div>


                            </div>



                        </div>
                    </div>
                </div>
                <!--<div class="hotelBook-service">
                    <h4>Hotel Book</h4>
                    <div class="owl-carousel owl-theme hotelBook-carousel ">
                        <div class="item">
                            <div id="car-repair-carousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="asset/img/services/moto-care1.jpg" class="d-block w-100" height="120" width="280" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="asset/img/services/moto-care2.jpg" class="d-block w-100" height="120" width="280" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="asset/img/services/moto-care3.jpg" class="d-block w-100" height="120" width="280" alt="...">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#car-repair-carousel" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#car-repair-carousel" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <div class="p-2">
                                <h6 class="text-center">Doctors</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#">Brake work</a></li>
                                    <li><a href="">Oil changes</a></li>
                                    <li><a href="">check engine</a></li>
                                    <li><a href="">The Electrical System</a></li>
                                    <li><a href="">Others</a></li>

                                </ul>
                                <div class="text-center">
                                    <a class="btn btn-info btn-sm" href="#" role="button">See More</a>
                                </div>


                            </div>



                        </div>
                        <div class="item">
                            <div id="car-repair-carousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="asset/img/services/moto-care1.jpg" class="d-block w-100" height="120" width="280" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="asset/img/services/moto-care2.jpg" class="d-block w-100" height="120" width="280" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="asset/img/services/moto-care3.jpg" class="d-block w-100" height="120" width="280" alt="...">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#car-repair-carousel" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#car-repair-carousel" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <div class="p-2">
                                <h6 class="text-center">Hospitals</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#">Brake work</a></li>
                                    <li><a href="">Oil changes</a></li>
                                    <li><a href="">check engine</a></li>
                                    <li><a href="">The Electrical System</a></li>
                                    <li><a href="">Others</a></li>

                                </ul>
                                <div class="text-center">
                                    <a class="btn btn-info btn-sm" href="#" role="button">See More</a>
                                </div>


                            </div>



                        </div>
                        <div class="item">
                            <div id="car-repair-carousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="asset/img/services/moto-care1.jpg" class="d-block w-100" height="120" width="280" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="asset/img/services/moto-care2.jpg" class="d-block w-100" height="120" width="280" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="asset/img/services/moto-care3.jpg" class="d-block w-100" height="120" width="280" alt="...">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#car-repair-carousel" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#car-repair-carousel" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <div class="p-2">
                                <h6 class="text-center">Dentists</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#">Brake work</a></li>
                                    <li><a href="">Oil changes</a></li>
                                    <li><a href="">check engine</a></li>
                                    <li><a href="">The Electrical System</a></li>
                                    <li><a href="">Others</a></li>

                                </ul>
                                <div class="text-center">
                                    <a class="btn btn-info btn-sm" href="#" role="button">See More</a>
                                </div>


                            </div>



                        </div>
                        <div class="item">
                            <div id="car-repair-carousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="asset/img/services/moto-care1.jpg" class="d-block w-100" height="120" width="280" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="asset/img/services/moto-care2.jpg" class="d-block w-100" height="120" width="280" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="asset/img/services/moto-care3.jpg" class="d-block w-100" height="120" width="280" alt="...">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#car-repair-carousel" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#car-repair-carousel" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <div class="p-2">
                                <h6 class="text-center">Chemists</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#">Brake work</a></li>
                                    <li><a href="">Oil changes</a></li>
                                    <li><a href="">check engine</a></li>
                                    <li><a href="">The Electrical System</a></li>
                                    <li><a href="">Others</a></li>

                                </ul>
                                <div class="text-center">
                                    <a class="btn btn-info btn-sm" href="#" role="button">See More</a>
                                </div>


                            </div>



                        </div>





                    </div>
                </div>-->
                <div class="onlineShop-service">
                    <h4 class="text-center pb-4 ">Shop By Store</h4>
                    <div class="shops-area p-2">
                                      @include('front.includes.shop-card')
                                      @include('front.includes.shop-card')
                                      @include('front.includes.shop-card')
                                      @include('front.includes.shop-card')
                                      @include('front.includes.shop-card')
                                      @include('front.includes.shop-card')
                                      @include('front.includes.shop-card')
                                      @include('front.includes.shop-card')
                                      @include('front.includes.shop-card')
                                      <div class="shop-card">
                                      <a href="{{url('/shops')}}" class="products-link">
                                            <div class="card">
                                            
                                            <div class="card-body p-1 text-center">
                                              <h5 class="card-title text-secondary">see more shops</h5>
                                            </div>
                                          </div>
                                        </a>
                                    </div>
                    </div>
                   
                </div>
                <div class="onlineShop-service">
                    <h4 class="text-center pb-4 ">SHOP By Brands</h4>
                    <div class="brand-area p-2">
                                      @include('front.includes.brand-card')
                                      @include('front.includes.brand-card')
                                      @include('front.includes.brand-card')
                                      @include('front.includes.brand-card')
                                      @include('front.includes.brand-card')
                                      @include('front.includes.brand-card')
                                      @include('front.includes.brand-card')
                                      @include('front.includes.brand-card')
                                      @include('front.includes.brand-card')
                                      <div class="brand-card">
                                        <a href="{{url('/brands')}}" class="products-link">
                                              <div class="card">
                                              
                                              <div class="card-body p-1 text-center">
                                                <h5 class="card-title text-secondary">see more brands</h5>
                                              </div>
                                            </div>
                                          </a>
                                      </div>
                    </div>
                   
                </div>
                <div class="apps-banner">


                    <div class="apps-banner-float">
                        <h5>Be a part of our family & get everything in your pocket</h5>
                        <p>Download the Solve App</p>
                        <div class="input-group ">

                            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter Phone Number">
                            <div class="input-group-prepend">
                                <button type="submit" class="btn btn-primary mb-2">Getapp</button>
                            </div>
                        </div>

                        <div class="">
                            <a href="#"><img src="asset/img/services/apps-store.png" class="img-fluid apps-img" alt="" height="10%" width="20%"></a>

                            <a href="#"><img src="asset/img/services/play-store.png" class="img-fluid apps-img" alt="" height="10%" width="20%"></a>
                        </div>



                    </div>

                </div>
            </div>
        </div>

    </div>
</section>
@endsection
