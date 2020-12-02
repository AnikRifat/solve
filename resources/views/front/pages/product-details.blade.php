@extends('front.layout.master')
@section('main-body')
<section class="body-section">
    <div class="container">
        <section class="product-section">
            <div class="product-details">
                <div class="row product-top-content">
                    <div class="col-md-6">
                        <!--                    <img src="product-img-1.jpg" class="img-fluid" alt="">-->
                        <div class="xzoom-container">
                            <img class="xzoom img-fluid" id="xzoom-default" src="{{asset('/')}}/asset/img/details/product-img-1-small.jpg" xoriginal="{{asset('/')}}/asset/img/details/product-img-1.jpg" />
                            <div class="xzoom-thumbs">
    
                                <div class="owl-carousel owl-carousel-x-zoom owl-theme mt-2">
                                    <div class="item">
                                        <a href="{{asset('/')}}/asset/img/details/product-img-1.jpg"><img class="xzoom-gallery" width="80" src="{{asset('/')}}/asset/img/details/product-img-1-small.jpg" xpreview="{{asset('/')}}/asset/img/details/product-img-1-small.jpg" title="The description goes here"></a>
                                    </div>
    
                                    <div class="item">
                                        <a href="{{asset('/')}}/asset/img/details/product-img-2.jpg"><img class="xzoom-gallery" width="80" src="{{asset('/')}}/asset/img/details/product-img-2-small.jpg" xpreview="{{asset('/')}}/asset/img/details/product-img-2-small.jpg" title="The description goes here"></a>
                                    </div>
    
                                    <div class="item">
                                        <a href="{{asset('/')}}/asset/img/details/product-img-3.jpg"><img class="xzoom-gallery" width="80" src="{{asset('/')}}/asset/img/details/product-img-3-small.jpg" xpreview="{{asset('/')}}/asset/img/details/product-img-3-small.jpg" title="The description goes here"></a>
                                    </div>
    
                                    <div class="item">
                                        <a href="{{asset('/')}}/asset/img/details/product-img-4.jpg"><img class="xzoom-gallery" width="80" src="{{asset('/')}}/asset/img/details/product-img-4-small.jpg" xpreview="{{asset('/')}}/asset/img/details/product-img-4-small.jpg" title="The description goes here"></a>
                                    </div>
    
                                    <div class="item">
                                        <a href="{{asset('/')}}/asset/img/details/product-img-5.jpg"><img class="xzoom-gallery" width="80" src="{{asset('/')}}/asset/img/details/product-img-5-small.jpg" xpreview="{{asset('/')}}/asset/img/details/product-img-5-small.jpg" title="The description goes here"></a>
                                    </div>
    
    
    
    
    
                                </div>
    
                            </div>
                        </div>
    
    
                    </div> <!-- //Col-md-6 End -->
                    <div class="col-md-6">
                        <div class="d-flex justify-content-between">
                            <h5>EV-2732L Evton Fashion Backpack For Women</h5>
                            <p class="mb-0"><a href="#"><i class="fas fa-share-alt"></i></a></p>
                        </div>
                        <div class="body-content">
                            <ul class="list-unstyled">
                                <li>SKU : <span>0X4C306</span></li>
                                <li>BRAND : <span><a href="#" class="text-secondary">Individual Collections </a> | <a href="#" class="text-secondary">More Leather Backpack from Individual Collections</a></span></li>
                            </ul>
                            <hr>
                            <p>৳ 2200 <span class="text-secondary">Starting price</span></p>
    
                            <div class="form-row">
                                <div class="form-group col-sm-6">
                                    <label for="qty">Quantity</label>
                                    <select name="qty" id="qty" class="form-control">
                                        <option value="Only 1">Only 1</option>
                                        <option value="Only 2">Only 2</option>
                                        <option value="Only 3">Only 3</option>
                                        <option value="Only 4">Only 4</option>
                                        <option value="Only 5">Only 5</option>
                                        <option value="Only 6">Only 6</option>
    
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div>
                            <a href="#available-shop" class="btn btn-info d-block text-light bg-danger font-weight-bold border-0">Check Avaliable Shop</a>
                        </div>
    
                        <div>
                            <p>Have questions about this product (SKU: 0X2E615)</p>
                            <h5 class="text-danger"> <span><i class="fas fa-shopping-cart fa-1x"></i></span> 09638111666</h5>
                        </div>
                        <hr>
    
                        <div class="content-bottom">
                            <p>Specifications</p>
    
    
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th scope="col">Brand:</th>
                                        <td scope="col">Evton</td>
    
                                    </tr>
                                    <tr>
                                        <th scope="col">Color:</th>
                                        <td scope="col">Black</td>
    
                                    </tr>
                                    <tr>
                                        <th scope="col">Material:</th>
                                        <td scope="col">Leather</td>
    
                                    </tr>
                                    <tr>
                                        <th scope="col">Model Number:</th>
                                        <td scope="col">Ev-2732L</td>
    
                                    </tr>
    
    
                                </tbody>
    
                            </table>
    
    
    
                        </div>
    
    
    
                    </div> <!-- //Col-md-6 End -->
                </div> <!-- //Main Row End -->
    
                <div class="available-shop" id="available-shop">
                    <h3>Available Shop</h3>
                    <div class="available-scroll">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="available-shop-div">
                                    <div class="p-4">
                                        <img src="{{asset('/')}}/asset/img/details/teciolk.jpg" class="img-fluid" alt="">
                                        <p class="text-center font-weight-bold ">Teciolk</p>
                                        <p class="text-center font-weight-bold text-warning mb-0"><span><i class="far fa-star"></i></span> <span><i class="far fa-star"></i></span> <span><i class="far fa-star"></i></span> <span><i class="far fa-star"></i></span> <span><i class="far fa-star"></i></span></p>
    
                                        <p class="text-center font-weight-bold">৳2200</p>
    
                                        <div class="cart-bottom text-center">
                                            <div class="row">
                                                <div class="col-md-6 pl-0 pr-0">
                                                    <button type="button" class="btn btn-light w-100"><i class="far fa-comment"></i> Chat</button>
                                                </div>
                                                <div class="col-md-6 pl-0 pr-0">
                                                    <button type="button" class="btn btn-danger w-100"><i class="fas fa-shopping-cart"></i> Buy Now</button>
                                                </div>
    
    
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                            </div>
                        </div>
                    </div>
    
                </div> <!-- //Available Shop div End -->
    
                <div class="review p-3">
                    <div class="row">
                        <div class="col-md-6">
                            <div style="line-height:300px">
                                <h3 class="d-inline-block">No Reviews Yet!
                                </h3>
                            </div>
    
                        </div>
                        <div class="col-md-6">
                            <img src="{{asset('/')}}/asset/img/details/empty-review.svg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div> <!-- //Review div End -->
    
    
                <div class="Related-Products">
                    <div class="clearfix">
                        <div class="float-left">
                            <h3>Related Products</h3>
                        </div>
                        <div class="float-right">
                            <div class="form-group mt-4">
    
                                <select name="list" id="list" class="form-control">
                                    <option value="All">All</option>
                                    <option value="Nearest">Nearest</option>
    
                                </select>
                            </div>
                        </div>
                    </div>
    
                    <div class="products-area">
                        <div class="product-card">
                             <div class="card">
                                 <img class="card-img-top product-img img-fluid" src="{{asset('/')}}/asset/img/shop/productimg.jpg">
                                 <div class="card-body p-1 text-center">
                                   <h5 class="card-title text-secondary">Shumash Tech</h5>
                                   <h5 class="card-text price text-dark"><span class="font-weight-bold">&#2547;</span> 2300</h5>
                                   <button class="btn add-cart text-light bn"><i class="fas fa-shopping-cart mr-2"></i>Buy Now</button>
                                 </div>
                             </div>
                         </div>
                         <div class="product-card">
                             <div class="card">
                                 <img class="card-img-top product-img img-fluid" src="{{asset('/')}}/asset/img/shop/productimg.jpg">
                                 <div class="card-body p-1 text-center">
                                   <h5 class="card-title text-secondary">Shumash Tech</h5>
                                   <h5 class="card-text price text-dark"><span class="font-weight-bold">&#2547;</span> 2300</h5>
                                     <button class="btn add-cart text-light bn"><i class="fas fa-shopping-cart mr-2"></i>Buy Now</button>
                                 </div>
                             </div>
                         </div>
                         <div class="product-card">
                             <div class="card">
                                 <img class="card-img-top product-img img-fluid" src="{{asset('/')}}/asset/img/shop/productimg.jpg">
                                 <div class="card-body p-1 text-center">
                                   <h5 class="card-title text-secondary">Shumash Tech max pro lite</h5>
                                   <h5 class="card-text price text-dark"><span class="font-weight-bold">&#2547;</span> 2300</h5>
                                   <button class="btn add-cart text-light bn"><i class="fas fa-shopping-cart mr-2"></i>Buy Now</button>
                                 </div>
                             </div>
                         </div>
                         <div class="product-card">
                             <div class="card">
                                 <img class="card-img-top product-img img-fluid" src="{{asset('/')}}/asset/img/shop/productimg.jpg">
                                 <div class="card-body p-1 text-center">
                                   <h5 class="card-title text-secondary">Shumash Tech</h5>
                                   <h5 class="card-text price text-dark"><span class="font-weight-bold">&#2547;</span> 2300</h5>
                                   <button class="btn add-cart text-light bn"><i class="fas fa-shopping-cart mr-2"></i>Buy Now</button>
                                 </div>
                             </div>
                         </div>
                         <div class="product-card">
                             <div class="card">
                                 <img class="card-img-top product-img img-fluid" src="{{asset('/')}}/asset/img/shop/productimg.jpg">
                                 <div class="card-body p-1 text-center">
                                   <h5 class="card-title text-secondary">Shumash Tech</h5>
                                   <h5 class="card-text price text-dark"><span class="font-weight-bold">&#2547;</span> 2300</h5>
                                   <button class="btn add-cart text-light bn"><i class="fas fa-shopping-cart mr-2"></i>Buy Now</button>
                                 </div>
                             </div>
                         </div>
                         <div class="product-card">
                             <div class="card">
                                 <img class="card-img-top product-img img-fluid" src="{{asset('/')}}/asset/img/shop/productimg.jpg">
                                 <div class="card-body p-1 text-center">
                                   <h5 class="card-title text-secondary">Shumash Tech max pro lite</h5>
                                   <h5 class="card-text price text-dark"><span class="font-weight-bold">&#2547;</span> 2300</h5>
                                   <button class="btn add-cart text-light bn"><i class="fas fa-shopping-cart mr-2"></i>Buy Now</button>
                                 </div>
                             </div>
                         </div>
                     </div>
    
    
    
                </div> <!-- //Related-Products div End -->
    
    
    
            </div> <!-- //Product Details End -->
    
    
    
    
        </section>
        
        
    </div>
    </section>
    @endsection
    