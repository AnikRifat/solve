@extends('front.layout.master')
@section('main-body')
<section class="subtitle-inner">
    <div class="container">

        <div class="shortByResult">
            <ul class=" mb-0 list-unstyled d-flex justify-content-between">
                <li>Short Result By :</li>
                <li><a href="#">Top Result</a></li>
                <li><a href="#">Popularity</a></li>
                <li>
                    <div class="dropdown">
                        <span class=" dropdown-toggle" id="distance-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Distance
                        </span>
                        <div class="dropdown-menu" aria-labelledby="distance-dropdown">
                            <a class="dropdown-item" href="#">2km</a>
                            <a class="dropdown-item" href="#">4km</a>
                            <a class="dropdown-item" href="#">6km</a>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#">Location</a>

                </li>
            </ul>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="sidebar">
                    <div class="div">
                        <ul class="list-unstyled">
                            <li><a href="#"> Car Repair & Services</a></li>
                            <hr>
                            <li><a href="">Car Repair & Services near me</a></li>
                            <li><a href=""></a></li>
                        </ul>
                    </div>

                    <div class="div">
                        <h6 class="font-weight-bold">Popular Area</h6>
                        <ul class="list-unstyled">
                            <li><a href="#"> Car Repair & Services in West Tripura</a></li>
                            <li><a href=""> Car Repair & Services in Kalyani</a></li>
                            <li><a href=""> Car Repair & Services in Krishna Nagar</a></li>
                            <li><a href="#"> Car Repair & Services in Agartala Guard</a></li>
                            <li><a href=""> Car Repair & Services in Siddhi Ashram</a></li>
                            <li><a href=""> Car Repair & Services in Khowai</a></li>

                        </ul>
                    </div>
                    <div class="div">
                        <h6 class="font-weight-bold">Also use for:</h6>
                        <ul class="list-unstyled">
                            <li><a href="#"> Placement Services (Candidate)</a></li>
                            <li><a href=""> Bus Services</a></li>
                            <li><a href=""> Transporters</a></li>
                            <li><a href="#"> Car Hire</a></li>
                            <li><a href=""> Beauty Spas</a></li>
                            <li><a href=""> Car Repair & Services in Khowai</a></li>
                            <li><a href="" class="font-weight-bold text-dark text-center"> See More</a></li>


                        </ul>
                    </div>


                </div>
            </div>
            <div class="col-md-7 product-des">
                <div class="row border-bottom pt-2 pb-2 mt-2 mb-2">

                    <div class="col-md-6">
                        <a href="#">
                            <img src="{{asset('/')}}/asset/img/category-page/moto-wash.jpg" class="img-fluid rounded" alt="image">
                        </a>

                    </div>


                    <div class="col-md-6 ">
                        <a href="hind-motor.htm">
                            <h5 class="text-dark">Hind Motors </h5>
                            <ul class="list-unstyled">
                                <li class="text-warning"><span class="text-light p-1 bg-success">3.5</span> <span><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i></span> <span class="text-primary ">44 votes</span></li>
                                <li><span><i class="fas fa-phone-volume"></i></span> +(91)-8132993741</li>
                                <li><span><i class="fas fa-map-marked-alt"></i></span> Agartala, ...| <span class=" " data-toggle="tooltip" data-placement="bottom" title="National Highway 44, East Champamura, Agartala, West Tripura - 799008">
                                        More
                                    </span>

                                </li>
                                <li> <span><i class="fas fa-chevron-right"></i></span> Car Repair & Services</li>
                                <li> <span><i class="fas fa-chevron-right"></i></span> OPEN NOW</li>
                                <li> <span><i class="fas fa-chevron-right"></i></span> Get Quotes</li>


                            </ul>
                        </a>

                    </div>
                </div>

                <div class="row border-bottom pt-2 pb-2 mt-2 mb-2">

                    <div class="col-md-6">
                        <a href="#">
                            <img src="{{asset('/')}}/asset/img/category-page/moto-wash.jpg" class="img-fluid rounded" alt="image">
                        </a>

                    </div>


                    <div class="col-md-6 ">
                        <a href="#">
                            <h5 class="text-dark">Hind Motors </h5>
                            <ul class="list-unstyled">
                                <li class="text-warning"><span class="text-light p-1 bg-success">3.5</span> <span><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i></span> <span class="text-primary ">44 votes</span></li>
                                <li><span><i class="fas fa-phone-volume"></i></span> +(91)-8132993741</li>
                                <li><span><i class="fas fa-map-marked-alt"></i></span> Agartala, ...| <span class=" " data-toggle="tooltip" data-placement="bottom" title="National Highway 44, East Champamura, Agartala, West Tripura - 799008">
                                        More
                                    </span>

                                </li>
                                <li> <span><i class="fas fa-chevron-right"></i></span> Car Repair & Services</li>
                                <li> <span><i class="fas fa-chevron-right"></i></span> OPEN NOW</li>
                                <li> <span><i class="fas fa-chevron-right"></i></span> Get Quotes</li>

                            </ul>
                        </a>

                    </div>
                </div>
                <div class="row border-bottom pt-2 pb-2 mt-2 mb-2">

                    <div class="col-md-6">
                        <a href="#">
                            <img src="{{asset('/')}}/asset/img/category-page/moto-wash.jpg" class="img-fluid rounded" alt="image">
                        </a>

                    </div>


                    <div class="col-md-6 ">
                        <a href="hind-motor.htm">
                            <h5 class="text-dark">Hind Motors </h5>
                            <ul class="list-unstyled">
                                <li class="text-warning"><span class="text-light p-1 bg-success">3.5</span> <span><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i></span> <span class="text-primary ">44 votes</span></li>
                                <li><span><i class="fas fa-phone-volume"></i></span> +(91)-8132993741</li>
                                <li><span><i class="fas fa-map-marked-alt"></i></span> Agartala, ...| <span class=" " data-toggle="tooltip" data-placement="bottom" title="National Highway 44, East Champamura, Agartala, West Tripura - 799008">
                                        More
                                    </span>

                                </li>
                                <li> <span><i class="fas fa-chevron-right"></i></span> Car Repair & Services</li>
                                <li> <span><i class="fas fa-chevron-right"></i></span> OPEN NOW</li>
                                <li> <span><i class="fas fa-chevron-right"></i></span> Get Quotes</li>

                            </ul>
                        </a>

                    </div>
                </div>
            </div>

        </div>


    </div>
</section>
@endsection