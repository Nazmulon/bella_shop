
@extends('layout')
@section('title', 'Product_details')
@section('category')
    <!-- CONTENT AREA -->

            <!--Breadcrumb Section Start-->
            <section class="breadcrumb-bg light-bg">                
                <div class="theme-container container ">
                    <div class="space-top-30"></div>
                    <div class="site-breadcumb col-md-6 space-80">                        
                        <h1 class="section-title size-48 no-margin space-bottom-20">product detail</h1> 
                        <ol class="breadcrumb breadcrumb-menubar">
                            <li> <a href="{{url('/')}}" class="gray-color"> Home </a> <a href="#" class="gray-color"> Clothing </a> Product Detail </li>                             
                        </ol>
                    </div>  
                </div>
            </section>
            <!--Breadcrumb Section End-->

            <div class="wrapper space-100 prod-lay-2">
                <!-- Single Product Starts -->
                <div class="theme-container container">                  
                    <div class="row">
                        <!-- Single Products Slider Starts --> 
                        <div class="col-md-6">                                  
                            <!-- Main Slider Start -->
                            <section id="prod-slider-2" class="carousel slide main-slider prod-slider-2">  
                                <!--Carousel Slide Button Start-->
                                <div class="col-md-10 col-sm-8 col-sm-offset-1 col-md-offset-0 slider-img">
                                    <div class="carousel-inner product-fullwidth light-bg slider">
                                        <div class="item active">  
                                            <img src="{{URL::to($product_by_details->product_image)}}" alt="..."/>
                                        </div>      
                                    </div>
                                </div>
                                <div class="slider-pagination col-md-2 col-sm-2 no-padding">                
                                    <ul class="product-thumbnails">
                                        <li class="active" data-slide-to="0" data-target="#prod-slider-2">
                                            <a href="#"><img class="img-responsive" alt="img" src="{{URL::to($product_by_details->product_image)}}"></a></li>
                                        <li data-slide-to="1" data-target="#prod-slider-2">
                                            <a href="#"><img class="img-responsive" alt="img" src="{{URL::to($product_by_details->product_image)}}"></a></li>
                                        <li data-slide-to="2" data-target="#prod-slider-2">
                                            <a href="#"><img class="img-responsive" alt="img" src="{{URL::to($product_by_details->product_image)}}"></a></li> 
                                        <li data-slide-to="3" data-target="#prod-slider-2">
                                            <a href="#"><img class="img-responsive" alt="img" src="{{URL::to($product_by_details->product_image)}}"></a></li> 
                                    </ul>  
                                </div>   
                            </section>
                            <!-- / Main Slider Ends -->                                      
                        </div>
                        <!-- Single Products Slider Ends --> 

                        <div class="space-40 clearfix visible-sm visible-xs"></div>

                        <!-- Products Description Starts --> 
                        <div class="col-md-6">
                            <div class="product-content content-style-2">
                                <div class="prod-lr-btn">                                   
                                    <a href="#" class="arrow_carrot-left"></a>
                                    <a href="#" class="arrow_carrot-right"></a>
                                </div>
                                <div class="product-heading">
                                    <h2 class="product-title">{{$product_by_details->product_name}}</h2>                                              
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
                                        <span class="size-30 black-color">TK.{{$product_by_details->product_price}}</span>
                                        <del class="gray-color size-24">  </del>
                                    </p>
                                </div>

                                <div class="tabs-wrap  space-top-7">
                                    <div class="tab">
                                        <ul id="tabs" class="nav font-2 upper-text prod-tabs">                                         
                                            <li class="active"><a href="#prod-tab-1" data-toggle="tab">{{$product_by_details->product_size}}</a></li>
                                            <li class=""><a href="#prod-tab-2" data-toggle="tab"> shipping </a></li>
                                            <li class=""><a href="#prod-tab-3" data-toggle="tab"> return </a></li>
                                        </ul>
                                    </div>
                                    <div class="tab-content prod-tab-content space-top-20">
                                        <div id="prod-tab-1" class="tab-pane fade in active">                                           
                                            <ul>
                                                <li> <i class="icon_stop"></i> <span class="des"> {{$product_by_details->product_size}}</span> </li>
                                                <li> <i class="icon_stop"></i> <span class="des"> Shoulder seam to hem measures approx 58" / 147 cm in length </span> </li>
                                                <li> <i class="icon_stop"></i> <span class="des"> Model Measurements: Height 5'9" / 175 cm, Waist 26" / 66 cm, Bust 32" / 81 cm, Hips 34.5" / 88 cm </span> </li>                                               
                                            </ul>
                                            <p>This is a demo shop, the actual product is available for order on Amazon.com.</p>
                                        </div>
                                        <div id="prod-tab-2" class="tab-pane fade">
                                            <ul>
                                                <li> <i class="icon_stop"></i> <span class="des"> {{$product_by_details->product_size}}</span> </li>
                                                <li> <i class="icon_stop"></i> <span class="des"> Shoulder seam to hem measures approx 58" / 147 cm in length </span> </li>
                                                <li> <i class="icon_stop"></i> <span class="des"> Model Measurements: Height 5'9" / 175 cm, Waist 26" / 66 cm, Bust 32" / 81 cm, Hips 34.5" / 88 cm </span> </li>                                               
                                            </ul>
                                            <p>This is a demo shop, the actual product is available for order on Amazon.com.</p>
                                        </div>
                                        <div id="prod-tab-3" class="tab-pane fade">
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
                                <form action="{{url('/add_to_cart')}}" method="post">
                                    {{csrf_field()}}
                                    <div class="quantity">
                                        <button class="btn minus"><i class="icon_minus-06"></i></button>
                                        <input type="number" title="Qty" value="1" name="qty" min="1" step="1" class="form-control qty">
                                        <input type="hidden" name="product_id" value="{{$product_by_details->product_id}}">
                                        <button class="btn plus"><i class="icon_plus"></i></button>
                                    </div>
                                    <div class="add-to-cart">
                                        <button type="submit" class="theme-btn-1 btn cart-btn"> <i class="icon ion-ios-plus-empty white-color size-24"></i> Add to Cart </button>                                       
                                    </div> 
                                </form>                                   
                            </div>

                                <div class="prod-code upper-text space-top-40">
                                    <p> <span class="font-2 gray-color">SKU : </span> <b class="black-color">11F25a3678</b> </p>
                                    <div class="prod-social"> 
                                        <span class="font-2 gray-color">Share : </span>
                                        <ul class="list-items">
                                            <li><a class="facebook" href="#"><i class="social_facebook"></i></a></li>
                                            <li><a class="twitter" href="#"><i class="social_twitter"></i></a></li>
                                            <li><a class="instagram" href="#"><i class="social_googleplus"></i></a></li>
                                            <li><a class="pinterest" href="#"><i class="social_pinterest"></i></a></li>
                                            <li><a class="pinterest" href="#"><i class="social_instagram"></i></a></li>
                                        </ul> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Products Description Ends -->                         
                    </div>

                    <div class="space-top-70"></div>

                    <!-- Products Description Tabination Starts -->
                    <div class="product-description text-center space-30 des-2">                        
                        <h2 class="section-title space-bottom-30 size-18"> Product Description </h2> 
                        <p>  
                            A classic chambray shirt gets a western revival with a traditional print. The vertical pattern is featured on pre-washed and 
                            distressed fabric to ensure a natural vintage appearance while the slim fit was made to suit the modern man. Snap buttons, 
                            a western yoke and smile pockets are the finishing touches that make this piece authentic.
                        </p>                        
                    </div>
                    <!-- Products Description Tabination Ends -->

                    <!-- Related Products Starts-->     
                    <div id="product" class="space-50 text-center">
                        <h2 class="section-title space-bottom-40 size-18"> Related Products </h2> 
                        <div class="relative-div row">                           
                            <div class="related-prod-slider space-bottom-30">
                                <!-- Slides -->

                                <div class="thumbnail-wrap">
                                    <div class="thumbnail">
                                        <div class="thumbnail-img light-bg">
                                            <div class="flipper">
                                                <div class="front">
                                                    <a href="#"> <img class="img-responsive" src="#" alt=""/> </a>
                                                </div>
                                                <div class="back">                                                               
                                                    <a href="#"> <img class="img-responsive" src="#" alt=""/> </a>
                                                </div> 
                                                <div class="new-tag"> <span> new </span> </div>
                                            </div>
                                            <ul class="thumbnail-conten list-items black-bg">
                                                <li>

                                                 <a href="#"> <i class="icon ion-android-add size-18"></i> <span class="font-2 upper-text"> Add To Cart </span> </a> 
                                             </li>
                                                <li> <a href="#"> <i class="icon ion-ios-heart-outline size-20"></i> </a> </li>
                                                <li> <a href="#product-preview" data-toggle="modal"> <i class="icon ion-ios-eye-outline size-24"></i> </a> </li>
                                            </ul>                                                    
                                        </div>
                                        <div class="caption">
                                            <div class="caption-title space-15"><a href="#" class="title-2"> aldo black leather shoes </a></div>
                                            <div class="caption-text font-3"> <span class="size-18 black-color"> $78.90 </span> </div>                                                   
                                        </div>
                                    </div>
                                </div>

                            </div>                          
                        </div>
                    </div>          
                    <!-- / Related Product Ends -->

                </div>
                <!-- / Single Product Ends -->
            </div>

            <!-- / CONTENT AREA -->



@endsection