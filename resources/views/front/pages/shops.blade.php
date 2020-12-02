@extends('front.layout.master')
@section('main-body')
<section class="body-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6"><h3 class="text-dark text-center">Shops</h3></div>
        <div class="col-md-6">
          <div class="product-search-box">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search">
                <div class="input-group-append">
                  <button class="btn btn-ps px-4" type="submit"><i class="fas fa-search"></i></button>
                </div>
              </div>
        </div>
        </div>
      </div>
    
    <div class="brand-area">
                                      @include('front.includes.shop-card')
                                      @include('front.includes.shop-card')
                                      @include('front.includes.shop-card')
                                      @include('front.includes.shop-card')
                                      @include('front.includes.shop-card')
                                      @include('front.includes.shop-card')
                                      @include('front.includes.shop-card')
                                      @include('front.includes.shop-card')
                                      @include('front.includes.shop-card')
                                      @include('front.includes.shop-card')
                                      @include('front.includes.shop-card')
                                      @include('front.includes.shop-card')
                                      @include('front.includes.shop-card')
                                      @include('front.includes.shop-card')
                                      @include('front.includes.shop-card')
                                      @include('front.includes.shop-card')
                                      @include('front.includes.shop-card')
                                      @include('front.includes.shop-card')
                                      @include('front.includes.shop-card')
                                      @include('front.includes.shop-card')
                                      @include('front.includes.shop-card')
                                      @include('front.includes.shop-card')
                                      @include('front.includes.shop-card')
                                      @include('front.includes.shop-card')
                                      @include('front.includes.shop-card')
                                      @include('front.includes.shop-card')
                                      @include('front.includes.shop-card')
    </div>
</div>
</section>
@endsection