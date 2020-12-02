<footer class="container-fluid bg-grey py-5">
    <div class="container">
       <div class="row">
          <div class="col-md-6">
             <div class="row">
                <div class="col-md-6 ">
                   <div class="logo-part">
                      <img src="https://i.ibb.co/sHZz13b/logo.png" class="w-50 logo-footer" >
                      <p>7637 Laurel Dr. King Of Prussia, PA 19406</p>
                      <p>Use this tool as test data for an automated system or find your next pen</p>
                   </div>
                </div>
                <div class="col-md-6 px-4">
                   <h6> About Company</h6>
                   <p>But horizontal lines can only be a full pixel high.</p>
                   <a href="#" class="btn-footer"> More Info </a><br>
                   <a href="#" class="btn-footer"> Contact Us</a>
                </div>
             </div>
          </div>
          <div class="col-md-6">
             <div class="row">
                <div class="col-md-6 px-4">
                   <h6> Help us</h6>
                   <div class="row ">
                      <div class="col-md-6">
                         <ul>
                            <li> <a href="#"> Home</a> </li>
                            <li> <a href="#"> About</a> </li>
                            <li> <a href="#"> Service</a> </li>
                            <li> <a href="#"> Team</a> </li>
                            <li> <a href="#"> Help</a> </li>
                            <li> <a href="#"> Contact</a> </li>
                         </ul>
                      </div>
                      <div class="col-md-6 px-4">
                         <ul>
                            <li> <a href="#"> Cab Faciliy</a> </li>
                            <li> <a href="#"> Fax</a> </li>
                            <li> <a href="#"> Terms</a> </li>
                            <li> <a href="#"> Policy</a> </li>
                            <li> <a href="#"> Refunds</a> </li>
                            <li> <a href="#"> Paypal</a> </li>
                         </ul>
                      </div>
                   </div>
                </div>
                <div class="col-md-6 ">
                   <h6> Newsletter</h6>
                   <div class="social">
                      <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                      <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                   </div>
                   <form class="form-footer my-3">
                      <input type="text"  placeholder="search here...." name="search">
                      <input type="button" value="Go" >
                   </form>
                   <p>That's technology limitation of LCD monitors</p>
                </div>
             </div>
          </div>
       </div>
    </div>
</footer>

<!---------------- Always Display Fix Div ------------------->

<!--<div class="fix-right-div">
    <a href="advertise.htm">Advertise</a>
    <a href="#">Customer Care</a>
    <a href="sign-up.htm">Sign Up</a>

</div>-->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="{{asset('/')}}/asset/js/owl.carousel.min.js"></script>
<script src="{{asset('/')}}/asset/js/main.js"></script>
<script src="{{asset('/')}}/asset/js/xzoom.min.js"></script>
    <script src='https://hammerjs.github.io/dist/hammer.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.1/js/foundation.min.js'></script>

<script>
(function($) {
            $(document).ready(function() {
                $('.xzoom, .xzoom-gallery').xzoom({
                    zoomWidth: 600,
                    title: true,
                    tint: '#333',
                    Xoffset: 15
                });
                $('.xzoom2, .xzoom-gallery2').xzoom({
                    position: '#xzoom2-id',
                    tint: '#ffa200'
                });
                $('.xzoom3, .xzoom-gallery3').xzoom({
                    position: 'lens',
                    lensShape: 'circle',
                    sourceClass: 'xzoom-hidden'
                });
                $('.xzoom4, .xzoom-gallery4').xzoom({
                    tint: '#006699',
                    Xoffset: 15
                });
                $('.xzoom5, .xzoom-gallery5').xzoom({
                    tint: '#006699',
                    Xoffset: 15
                });

                //Integration with hammer.js
                var isTouchSupported = 'ontouchstart' in window;

                if (isTouchSupported) {
                    //If touch device
                    $('.xzoom, .xzoom2, .xzoom3, .xzoom4, .xzoom5').each(function() {
                        var xzoom = $(this).data('xzoom');
                        xzoom.eventunbind();
                    });

                    $('.xzoom, .xzoom2, .xzoom3').each(function() {
                        var xzoom = $(this).data('xzoom');
                        $(this).hammer().on("tap", function(event) {
                            event.pageX = event.gesture.center.pageX;
                            event.pageY = event.gesture.center.pageY;
                            var s = 1,
                                ls;

                            xzoom.eventmove = function(element) {
                                element.hammer().on('drag', function(event) {
                                    event.pageX = event.gesture.center.pageX;
                                    event.pageY = event.gesture.center.pageY;
                                    xzoom.movezoom(event);
                                    event.gesture.preventDefault();
                                });
                            }

                            xzoom.eventleave = function(element) {
                                element.hammer().on('tap', function(event) {
                                    xzoom.closezoom();
                                });
                            }
                            xzoom.openzoom(event);
                        });
                    });

                    $('.xzoom4').each(function() {
                        var xzoom = $(this).data('xzoom');
                        $(this).hammer().on("tap", function(event) {
                            event.pageX = event.gesture.center.pageX;
                            event.pageY = event.gesture.center.pageY;
                            var s = 1,
                                ls;

                            xzoom.eventmove = function(element) {
                                element.hammer().on('drag', function(event) {
                                    event.pageX = event.gesture.center.pageX;
                                    event.pageY = event.gesture.center.pageY;
                                    xzoom.movezoom(event);
                                    event.gesture.preventDefault();
                                });
                            }

                            var counter = 0;
                            xzoom.eventclick = function(element) {
                                element.hammer().on('tap', function() {
                                    counter++;
                                    if (counter == 1) setTimeout(openfancy, 300);
                                    event.gesture.preventDefault();
                                });
                            }

                            function openfancy() {
                                if (counter == 2) {
                                    xzoom.closezoom();
                                    $.fancybox.open(xzoom.gallery().cgallery);
                                } else {
                                    xzoom.closezoom();
                                }
                                counter = 0;
                            }
                            xzoom.openzoom(event);
                        });
                    });

                    $('.xzoom5').each(function() {
                        var xzoom = $(this).data('xzoom');
                        $(this).hammer().on("tap", function(event) {
                            event.pageX = event.gesture.center.pageX;
                            event.pageY = event.gesture.center.pageY;
                            var s = 1,
                                ls;

                            xzoom.eventmove = function(element) {
                                element.hammer().on('drag', function(event) {
                                    event.pageX = event.gesture.center.pageX;
                                    event.pageY = event.gesture.center.pageY;
                                    xzoom.movezoom(event);
                                    event.gesture.preventDefault();
                                });
                            }

                            var counter = 0;
                            xzoom.eventclick = function(element) {
                                element.hammer().on('tap', function() {
                                    counter++;
                                    if (counter == 1) setTimeout(openmagnific, 300);
                                    event.gesture.preventDefault();
                                });
                            }

                            function openmagnific() {
                                if (counter == 2) {
                                    xzoom.closezoom();
                                    var gallery = xzoom.gallery().cgallery;
                                    var i, images = new Array();
                                    for (i in gallery) {
                                        images[i] = {
                                            src: gallery[i]
                                        };
                                    }
                                    $.magnificPopup.open({
                                        items: images,
                                        type: 'image',
                                        gallery: {
                                            enabled: true
                                        }
                                    });
                                } else {
                                    xzoom.closezoom();
                                }
                                counter = 0;
                            }
                            xzoom.openzoom(event);
                        });
                    });

                } else {
                    //If not touch device

                    //Integration with fancybox plugin
                    $('#xzoom-fancy').bind('click', function(event) {
                        var xzoom = $(this).data('xzoom');
                        xzoom.closezoom();
                        $.fancybox.open(xzoom.gallery().cgallery, {
                            padding: 0,
                            helpers: {
                                overlay: {
                                    locked: false
                                }
                            }
                        });
                        event.preventDefault();
                    });

                    //Integration with magnific popup plugin
                    $('#xzoom-magnific').bind('click', function(event) {
                        var xzoom = $(this).data('xzoom');
                        xzoom.closezoom();
                        var gallery = xzoom.gallery().cgallery;
                        var i, images = new Array();
                        for (i in gallery) {
                            images[i] = {
                                src: gallery[i]
                            };
                        }
                        $.magnificPopup.open({
                            items: images,
                            type: 'image',
                            gallery: {
                                enabled: true
                            }
                        });
                        event.preventDefault();
                    });
                }
            });
        })(jQuery);

        $('.owl-carousel-x-zoom').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 3
                },
                600: {
                    items: 5
                },
                1000: {
                    items: 5
                }
            }
        })
//product-details
</script>

</body>
</html>
