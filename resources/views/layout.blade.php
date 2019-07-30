<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="agency, ecommerce">
        <meta name="author" content="Md. Siful Islam, Jtheme">

        <title>@yield('title')</title>

        <!-- Favicon -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('frontend/assets/ico/apple-touch-icon-144-precomposed.png')}}">
        <link rel="shortcut icon" href="{{asset('frontend/assets/ico/favicon.ico')}}">

        <!-- Font -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'> 


        <!-- CSS Global -->
        <link href="{{asset('frontend/assets/plugins/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">        
        <link href="{{asset('frontend/assets/plugins/css/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css">  
        <link href="{{asset('frontend/assets/plugins/css/owl.carousel.css')}}" rel="stylesheet" type="text/css">   
        <link href="{{asset('frontend/assets/plugins/css/subscribe-better.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('frontend/assets/plugins/css/jquery.countdown.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('frontend/assets/plugins/css/jquery.mCustomScrollbar.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('frontend/assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">   
        <link href="{{asset('frontend/assets/plugins/font-elegant/elegant.css')}}" rel="stylesheet" type="text/css">   
        <link href="{{asset('frontend/assets/plugins/ionicons-2.0.1/css/ionicons.min.css')}}" rel="stylesheet" type="text/css">   
        <link href="{{asset('frontend/assets/plugins/rs-plugin/css/settings.css')}}"  rel="stylesheet" media="screen" />

        <!-- Custom Style -->
        <link href="{{asset('frontend/assets/css/style-electronic.css')}}" rel="stylesheet" type="text/css">

    </head>
    <body id="home" class="wide">
        <!-- WRAPPER -->
        <div id="full-site-wrapper">
        <main class="wrapper"> 
            <!-- Header -->
            @include('pages.header')
            <!-- /Header -->

            <!-- CONTENT AREA -->

            <!-- Categories Bar Start -->
            @yield('category')

            <!-- Banner Start -->  
            @yield('content')
            <!-- / Feature Ends -->

            <!-- / CONTENT AREA -->

            <!-- FOOTER -->
            @include('pages.footer')
            <!-- /FOOTER -->

            <div id="to-top" class="to-top"> <i class="arrow_carrot-up"></i> </div>

        </main>
        <!-- /WRAPPER -->

        <!-- Product Preview Popup -->
        <section class="modal fade" id="product-preview" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg product-modal">
                <div class="modal-content">
                    <a aria-hidden="true" data-dismiss="modal" class="sb-close-btn close icon_close" href="#"></a>                 
                    <!-- Single Products Slider Starts --> 
                    <div class="col-md-7">                                  
                        <!-- Main Slider Start -->
                        <div id="prod-prev" class="carousel slide main-slider prod-slider-2">  
                            <!--Carousel Slide Button Start-->
                            <div class="col-md-10 col-sm-8 col-sm-offset-1 col-md-offset-0 slider-img">
                                <div class="carousel-inner product-fullwidth light-bg slider">
                                    <div class="item active">  
                                        <img src="{{asset('frontend/assets/img/main/popup/prod-1.jpg')}}" alt="...">                                        
                                    </div>     
                                    <div class="item">  
                                        <img src="{{asset('frontend/assets/img/main/popup/prod-2.jpg')}}" alt="...">  
                                    </div> 
                                    <div class="item">  
                                        <img src="{{asset('frontend/assets/img/main/popup/prod-3.jpg')}}" alt="...">                                         
                                    </div> 
                                    <div class="item">  
                                        <img src="{{asset('frontend/assets/img/main/popup/prod-4.jpg')}}" alt="...">                                         
                                    </div> 
                                </div>
                            </div>
                            <div class="slider-pagination col-md-2 col-sm-2 no-padding">                
                                <ul class="product-thumbnails">
                                    <li class="active" data-slide-to="0" data-target="#prod-prev">
                                        <a href="#"><img class="img-responsive" alt="img" src="{{asset('frontend/assets/img/main/popup/prod-thumb-1.jpg')}}"></a></li>
                                    <li data-slide-to="1" data-target="#prod-prev">
                                        <a href="#"><img class="img-responsive" alt="img" src="{{asset('frontend/assets/img/main/popup/prod-thumb-2.jpg')}}"></a></li>
                                    <li data-slide-to="2" data-target="#prod-prev">
                                        <a href="#"><img class="img-responsive" alt="img" src="{{asset('frontend/assets/img/main/popup/prod-thumb-3.jpg')}}"></a></li> 
                                    <li data-slide-to="3" data-target="#prod-prev">
                                        <a href="#"><img class="img-responsive" alt="img" src="{{asset('frontend/assets/img/main/popup/prod-thumb-4.jpg')}}"></a></li> 
                                </ul>  
                            </div>   
                        </div>
                        <!-- / Main Slider Ends -->                                      
                    </div>
                    <!-- Single Products Slider Ends --> 

                    <div class="space-40 clearfix visible-sm visible-xs"></div>

                    <!-- Products Description Starts --> 
                    <div class="col-md-5">
                        <div class="product-content content-style-2">                           
                            <div class="product-heading">
                                <h2 class="product-title">white beard t-shirt</h2>                                              
                            </div>
                            <div class="rating">                                                              
                                <span class="star active"></span>
                                <span class="star active"></span>
                                <span class="star active"></span>                                           
                                <span class="star active"></span>
                                <span class="star half"></span>
                                <div class="product-review">
                                    <ul class="list-items black-color">
                                        <li>04 Review(s) </li>
                                        <li> <a href="#"> Add Your Review </a> </li>
                                    </ul>
                                </div>
                            </div>                                            

                            <div class="product-price font-3">
                                <p class="caption-text">
                                    <span class="size-30 black-color"> $45.05 </span>
                                    <del class="gray-color size-24">  </del>
                                </p>
                            </div>

                            <div class="tabs-wrap  space-top-7">
                                <div class="tab">
                                    <ul class="nav font-2 upper-text prod-tabs">                                         
                                        <li class="active"><a href="#prod-prev-1" data-toggle="tab"> size guide </a></li>
                                        <li class=""><a href="#prod-prev-2" data-toggle="tab"> shipping </a></li>
                                        <li class=""><a href="#prod-prev-3" data-toggle="tab"> return </a></li>
                                    </ul>
                                </div>
                                <div class="tab-content prod-tab-content space-top-20">
                                    <div id="prod-prev-1" class="tab-pane fade in active">                                           
                                        <ul>
                                            <li> <i class="icon_stop"></i> <span class="des"> Modeled in size S. </span> </li>
                                            <li> <i class="icon_stop"></i> <span class="des"> Shoulder seam to hem measures approx 58" / 147 cm in length </span> </li>
                                            <li> <i class="icon_stop"></i> <span class="des"> Model Measurements: Height 5'9" / 175 cm, Waist 26" / 66 cm, Bust 32" / 81 cm, Hips 34.5" / 88 cm </span> </li>                                               
                                        </ul>
                                        <p>This is a demo shop, the actual product is available for order on Amazon.com.</p>
                                    </div>
                                    <div id="prod-prev-2" class="tab-pane fade">
                                        <ul>
                                            <li> <i class="icon_stop"></i> <span class="des"> Modeled in size S. </span> </li>
                                            <li> <i class="icon_stop"></i> <span class="des"> Shoulder seam to hem measures approx 58" / 147 cm in length </span> </li>
                                            <li> <i class="icon_stop"></i> <span class="des"> Model Measurements: Height 5'9" / 175 cm, Waist 26" / 66 cm, Bust 32" / 81 cm, Hips 34.5" / 88 cm </span> </li>                                               
                                        </ul>
                                        <p>This is a demo shop, the actual product is available for order on Amazon.com.</p>
                                    </div>
                                    <div id="prod-prev-3" class="tab-pane fade">
                                        <ul>
                                            <li> <i class="icon_stop"></i> <span class="des"> Modeled in size S. </span> </li>
                                            <li> <i class="icon_stop"></i> <span class="des"> Shoulder seam to hem measures approx 58" / 147 cm in length </span> </li>
                                            <li> <i class="icon_stop"></i> <span class="des"> Model Measurements: Height 5'9" / 175 cm, Waist 26" / 66 cm, Bust 32" / 81 cm, Hips 34.5" / 88 cm </span> </li>                                               
                                        </ul>
                                        <p>This is a demo shop, the actual product is available for order on Amazon.com.</p>
                                    </div>                                       
                                </div>

                            </div>

                            <hr class="fullwidth-divider">   

                            <div class="product-size space-top-15">
                                <form class="product-form">                                      
                                    <div class="form-group selectpicker-wrapper">
                                        <label class="size-13"> <span class="font-2"> Color </span> <span class="red-color"> * </span> <span class="required red-color pull-right"> Field Required *</span> </label>
                                        <div class="search-selectpicker selectpicker-wrapper">
                                            <select
                                                class="selectpicker input-price" data-live-search="true" data-width="100%"
                                                data-toggle="tooltip" title="Choose a color that you like.... ">
                                                <option>Pink</option>
                                                <option>Blue</option>
                                                <option>Marooon</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group selectpicker-wrapper">
                                        <label class="size-13"> <span class="font-2"> Size </span> <span class="red-color"> * </span> </label>
                                        <select
                                            class="selectpicker input-price" data-live-search="true" data-width="100%"
                                            data-toggle="tooltip" title="Choose a color that you like.... ">
                                            <option>Pink</option>
                                            <option>Blue</option>
                                            <option>Marooon</option>
                                        </select>
                                    </div>                                        
                                </form>                                            
                            </div>    

                            <div class="prod-btns space-top-20">
                                <div class="quantity">
                                    <button class="btn minus"><i class="icon_minus-06"></i></button>
                                    <input type="number" title="Qty" value="03" name="quantity" min="1" step="1" class="form-control qty">
                                    <button class="btn plus"><i class="icon_plus"></i></button>
                                </div>
                                <div class="add-to-cart">
                                    <button class=""> <i class="icon ion-ios-plus-empty white-color size-24"></i> Add to Cart </button>                                       
                                </div>                                    
                            </div>
                        </div>
                    </div>
                    <!-- Products Description Ends -->    
                </div>
            </div>
        </section>
        <!-- / Product Preview Popup -->

        <!-- Subscribe Popup -->
        {{-- <section class="subscribe-me">
            <a href="#close" class="sb-close-btn icon_close"></a>      
            <div class="popup-newsletter">
                <div class="col-md-7 col-sm-7 text-center space-top-50">
                    <div class="subscribe-wrap">
                        <h2 class="section-title space-bottom-15"> NEWSLETTER </h2>
                        <p>Subscribe to the Epro mailing list to receive updates on new arrivals, special offers and other discount information</p>

                        <form class="subscribe-form">
                            <div class="form-group col-sm-12 form-alert"></div>
                            <div class="form-group space-bottom-20">
                                <div class="subscribe-mail-info">
                                    <input type="text" class="form-control text" placeholder="Enter your email address">
                                    <button class="btn small-btn theme-btn-1">Subscribe</button>
                                </div>
                            </div>   
                            <div class="form-group">                                
                                <label class="checkbox-inline black-color"> <input type="checkbox"> <span> Don't show this popup again </span> </label>                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- / Subscribe Popup -->
        </div> <!-- Full Site Wrapper -->

        
        <!-- JS Global -->
        <script src="{{asset('frontend/assets/plugins/js/jquery-2.1.1.min.js')}}"></script>        
        <script src="{{asset('frontend/assets/plugins/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('frontend/assets/plugins/js/bootstrap-select.min.js')}}"></script>
        <script src="{{asset('frontend/assets/plugins/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('frontend/assets/plugins/js/jquery.subscribe-better.min.js')}}"></script>
        <script src="{{asset('frontend/assets/plugins/js/jquery.plugin.min.js')}}"></script>   
        <script src="{{asset('frontend/assets/plugins/js/jquery.countdown.js')}}"></script>   
        <script src="{{asset('frontend/assets/plugins/js/jquery.sticky.js')}}"></script>
        <script src="{{asset('frontend/assets/plugins/js/isotope.pkgd.min.js')}}"></script>        
        <script src="{{asset('frontend/assets/plugins/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
        <script src="{{asset('frontend/assets/plugins/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
        <script src="{{asset('frontend/assets/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

        <!-- Custom JS -->
        <script src="{{asset('frontend/assets/js/theme-electronic.js')}}"></script>


        <!--[if (gte IE 9)|!(IE)]><!-->   
        <!--        <script src="assets/js/jquery.cookie.js"></script>        
                <script src="assets/plugins/style-switcher/style.switcher.js"></script>-->
        <!--<![endif]-->
    </body>
</html>