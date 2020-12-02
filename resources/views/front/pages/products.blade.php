@extends('front.layout.master')
@section('main-body')
<section class="body-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-8">
                        <div class="bsc">
                        <img src="{{asset('/')}}/asset/img/shop/shopcover.jpg" alt="" class="img-fluid shop-cover">
                    </div>
                    </div>
                    <div class="col-md-4">
                        <div class="profile-card p-4">
                          <div class="row">
                              <div class="col-md-4 col-4 pr-0">
                                  <div class="bdp">
                                      <img src="{{asset('/')}}/asset/img/shop/dp.jpg" alt="" class="img-fluid dp">
                                  </div>
                              </div>
                              <div class="col-md-8 col-8">
                                  <div class="prdetails">
                                      <h5 class="text-dark">Evaly Rio Iterational Max pro</h5>
                                  </div>
                              </div>
                              <hr>
                              <div class="col-md-12">
                                  <div class="oti py-4">
                                      <div class="row">
                                          <div class="col-2 pr-0 pb-2">
                                              <i class="fas fa-map-marker-alt"></i>
                                            </div>
                                          <div class="col-10 pl-0 pb-2">
                                              <span class="inf-text">Level:05, Block: A, Shop:32, Bashundhara City Shopping Complex, Panthapath Dhaka</span>
                                            </div>
                                          <div class="col-2 pr-0 pb-2">
                                              <i class="fas fa-phone-alt"></i>
                                            </div>
                                          <div class="col-10 pl-0 pb-2">
                                              <span class="inf-text">xxxxxxxxxxxxx</span>
                                            </div>
                                          <div class="col-2 pr-0 pb-2">
                                              <i class="fas fa-bell"></i>
                                            </div>
                                          <div class="col-10 pl-0 pb-2">
                                              <span class="inf-text">Followed by 7165 people</span>
                                            </div>
                                            <div class="col-5 pt-3">
                                                <button class="btn btn-secondary btn-block">
                                                     <i class="fas fa-comments mr-2"></i>Chat
                                                    </button>
                                            </div>
                                            <div class="col-7 pt-3">
                                                <button class="btn btn-danger btn-block">
                                                     <i class="fas fa-bell mr-2"></i> FOllow
                                                    </button>
                                        </div>
                                        
    
                                        </div>
                                  </div>
                              </div>
                          </div>  
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 productsection">
                <h3 class="text-center p-2 my-2 text-light bg-secondary apt">All Products</h3>
    
                <div class="row">
                    <div class="col-md-3 pr-0">
                        <ul class="list-group categogy-sec">
                            <li class="list-group-item bg-danger text-light p-2 text-center">Category</li>
                            <li class="list-group-item">First item <i class="fas fa-angle-right float-right mt-1"></i></li>
                            <li class="list-group-item">Second item <i class="fas fa-angle-right float-right mt-1"></i></li>
                            <li class="list-group-item">Third item <i class="fas fa-angle-right float-right mt-1"></i></li>
                          </ul>
                    </div>
                    <div class="col-md-9 px-0">
                        <div class="product-search-box">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Search">
                                <div class="input-group-append">
                                  <button class="btn btn-ps px-4" type="submit"><i class="fas fa-search"></i></button>
                                </div>
                              </div>
                        </div>
                        <div class="products-area">
                            @include('front.includes.product-card')
                            @include('front.includes.product-card')
                            @include('front.includes.product-card')
                            @include('front.includes.product-card')
                            @include('front.includes.product-card')
                            @include('front.includes.product-card')
                            @include('front.includes.product-card')
                            @include('front.includes.product-card')
                            @include('front.includes.product-card')
                            @include('front.includes.product-card')
                            @include('front.includes.product-card')
                            @include('front.includes.product-card')
                            @include('front.includes.product-card')
                            @include('front.includes.product-card')
                            @include('front.includes.product-card')
                            @include('front.includes.product-card')
                            @include('front.includes.product-card')
                            @include('front.includes.product-card')
                            @include('front.includes.product-card')
                            @include('front.includes.product-card')
                            @include('front.includes.product-card')
                            @include('front.includes.product-card')
                            @include('front.includes.product-card')
                            @include('front.includes.product-card')
                            @include('front.includes.product-card')
                            @include('front.includes.product-card')
                            @include('front.includes.product-card')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
    </div>
    </section>
@endsection