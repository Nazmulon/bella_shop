
@extends('layout')
@section('title', 'Home')
@section('category')

<section class="cate-bar">
    <div class="container theme-container">
        <div class="col-md-3 col-sm-4 col-xs-12 cat-menu theme-color-bg">
            <h2 class="section-title">categories</h2> 
            <i class="icon ion-android-menu cate-toggle"></i>
        </div>
        <div class="col-md-9 col-sm-8 col-xs-12 cat-search">
            <form action="#" class="cate-form">
                <div class=" selectpicker-wrapper col-md-2 col-sm-4 col-xs-5 no-padding">
                    <select
                    class="selectpicker white-color" data-live-search="false" data-width="100%"
                    data-toggle="tooltip" title="All Categories">
                    <option>Clothing</option>
                    <option>Accesories</option>
                    <option> Jwellery </option>
                    <option> Technoogt </option>
                    <option> Living  </option>
                    <option> Promotion </option>
                    <option> Accessory </option>
                    <option> Mobile </option>
                    <option> Job </option>

                </select>
            </div>
            <div class="no-padding  col-md-10 col-sm-8 col-xs-7">
                <div class="form-group">                                                   
                    <input type="text" placeholder="laptop, mobile, television,etc..." class="form-control text">
                    <button class="title-2 submit-btn white-arrow"> Search <i class="arrow_right  size-18 white-arrow"></i></button>                                                  
                </div>
            </div>
        </form> 
    </div>
</div>
</section>
<!-- / Categories Bar Ends -->

<section class="container theme-container space-bottom-30">
    <div class="col-md-3 col-sm-4 col-xs-12 no-padding cate-wrap">
        <nav>                                                               
            <div class="navbar-collapse no-padding">                                        
                <ul class="nav navbar-nav cate-navbar">
                    <?php
                    $all_published_category=DB::table('tbl_category')
                    ->where('publication_status',1)
                    ->get();
                    ?> 
                    @foreach($all_published_category as $v_category)
                    <li><a href="{{url('/show_categoey/'.$v_category->category_id)}}">{{$v_category->category_name}}</a></li>    
                    @endforeach                                
                </ul>
            </div>
        </nav>
    </div>
    <div class="col-md-9 col-sm-8 col-xs-12">
        <!-- Main Slider Start -->
        <div class="slider-section">
            <div class="tp-banner-container">
                <div class="tp-banner" >
                    <ul>
                        <!-- SLIDE  -->
                        <?php
                        $all_published_slider=DB::table('tbl_slider')
                                                ->where('publication_status',1)
                                                ->get();
                        ?> 
                    @foreach($all_published_slider as $v_slider)
                        <li data-transition="boxslide" data-slotamount="7" data-masterspeed="1000" data-delay="6000"  data-thumb="{{asset('frontend/assets/img/electronic/slider/layer-img1.png')}}" data-title="NEW ARRIVAL">
                            <!-- MAIN IMAGE -->
                            <img src="{{asset($v_slider->slider_image)}}"  alt="newslide2014_1"  data-bgposition="center top" data-bgrepeat="no-repeat">
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption customin slide-box fadeout"
                            data-x="center"
                            data-y="70"
                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600; transformOrigin:50% 50%;"
                            data-speed="600"
                            data-start="600"
                            data-easing="Power3.easeInOut"
                            data-splitin="none"
                            data-splitout="none"
                            data-elementdelay="0.1"
                            data-endelementdelay="0.1"
                            data-end="7300"
                            data-endspeed="300"
                            style="z-index: 2; max-width: 330px; max-height: 350px; background:#fff;width:100%;height:100%; white-space: nowrap;">
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption lfb font-2 upper-text gray-color"
                        data-x="center" data-hoffset="0"
                        data-y="90" data-voffset="-75" 
                        data-speed="1000"
                        data-start="1000"
                        data-easing="Power4.easeInBack"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.1"
                        data-endspeed="500"
                        data-endeasing="Power4.easeIn"
                        style="z-index: 2; letter-spacing: 3px;"> <div class="sm-txt"> special sale </div>
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption lfb section-title size-36"
                    data-x="center" data-hoffset="0"
                    data-y="120" data-voffset="-75" 
                    data-speed="1200"
                    data-start="1200"
                    data-easing="Power4.easeInBack"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.1"
                    data-endspeed="500"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 3;"> <div class="lrg-txt"> macbook pro <br> just <span class="theme-color"> $1200 </span> </div>
                </div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption lfb"
                data-x="center" data-hoffset="0"
                data-y="240" data-voffset="-75" 
                data-speed="1000"
                data-start="1400"
                data-easing="Power4.easeInBack"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.01"
                data-endelementdelay="0.1"
                data-endspeed="500"
                data-endeasing="Power4.easeIn"
                style="z-index: 3;"> 
                <div class="pera">Neque porro quisquam est qui dolorem <br> dolor sit amet, consectetur,</div>
            </div>

            <!-- LAYER NR. 5 -->
            <div class="tp-caption lfb slide-btn"
            data-x="center" data-hoffset="0"
            data-y="320" data-voffset="-75" 
            data-speed="1000"
            data-start="1600"
            data-easing="Power4.easeInBack"
            data-splitin="none"
            data-splitout="none"
            data-elementdelay="0.01"
            data-endelementdelay="0.1"
            data-endspeed="500"
            data-endeasing="Power4.easeIn"
            style="z-index: 3;">                                
            <button class="btn btn-black btn-2"> <span class="btn-txt"> purchase now </span> <i class="btn-icon icon ion-chevron-right"></i> </button>     

        </div>    

    </li>  
@endforeach
                          
</ul>
</div>
</div>
</div>  
<!-- / Main Slider Ends -->  
</div>
</section>
@endsection
@section('content')
<section class="space-bottom-60">
    <div class="container theme-container">
        <div class="space-15 visible-xs"></div>
        <div class="row">  
            <div class="col-md-4 col-sm-4">
                <div class="banner" style="background-image: url({{asset('frontend/assets/img/electronic/banner/banner-1.jpg')}}); background-repeat: no-repeat; background-size: cover; background-position: center center;">
                    <div class="banner-content">
                        <h2 class="section-title white-color"> tablet pro </h2>
                        <p class="gray-color-2"> Lorem Ispum Dolor </p>
                        <p class="title-2"> <a href="#" class="white-arrow">  Shop Now <i class="arrow_right size-24"></i>    </a> </p>   
                    </div>
                </div>
            </div>

            <span class="visible-xs space-20"></span>
            <div class="col-md-4 col-sm-4">
                <div class="banner" style="background-image: url({{asset('frontend/assets/img/electronic/banner/banner-2.jpg')}}); background-repeat: no-repeat; background-size: cover; background-position: center center;">
                    <div class="banner-content">
                        <h2 class="section-title white-color"> combo x2 </h2>
                        <p class="gray-color-2"> Lorem Ispum Dolor </p>
                        <p class="title-2"> <a href="#" class="white-arrow">  Shop Now <i class="arrow_right size-24"></i>    </a> </p>   
                    </div>
                </div>
            </div>

            <span class="visible-xs space-20"></span>

            <div class="col-md-4 col-sm-4">
                <div class="banner" style="background-image: url({{asset('frontend/assets/img/electronic/banner/banner-3.jpg')}}); background-repeat: no-repeat; background-size: cover; background-position: center center;">
                    <div class="banner-content">
                        <h2 class="section-title white-color"> camera </h2>
                        <p class="gray-color-2"> Lorem Ispum Dolor </p>
                        <p class="title-2"> <a href="#" class="white-arrow">  Shop Now <i class="arrow_right size-24"></i>    </a> </p>   
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Banner Ends -->

<!-- Deal Starts-->
<section class="space-bottom-30">
    <div class="container theme-container">
        <div class="title-wrap">
            <h2 class="section-title"> deal of the day </h2>  
        </div>

        <div class="deal-slider text-center space-top-40 slide-nav-1">
            @foreach($product_category as $v_category)
            <div  class="item">
                <div class="thumbnail-wrap">
                    <div class="thumbnail">
                        <div class="thumbnail-img light-bg">
                            <div class="flipper">
                                <div class="front">
                                    <a title="Product" href="#">
                                        <img class="img-responsive" src="{{asset($v_category->product_image)}}" alt="" style="height: 250px;" />                                                      
                                    </a>
                                </div>
                                <div class="back">                                                               
                                    <a href="#">
                                        <img class="img-responsive" src="{{asset($v_category->product_image)}}" alt="" style="height: 250px;"/>                                                      
                                    </a>
                                </div>   
                                <div class="sale-tag"> <span> sale </span> </div>
                            </div>                                                                                         
                        </div>
                        <div class="caption">
                            <div class="caption-title space-15"><a href="#" class="title-2">{{$v_category->product_name}} </a></div> 
                            <div class="caption-text font-3"> <span class="size-18 black-color">TK.{{$v_category->product_price}}</span> <del class="gray-color"> TK.599.99 </del> </div>                                                   
                        </div>
                        <div class="deal-cntdwn">
                            <div id="cntdwn-1"></div>
                        </div>
                    </div>
                </div>    
            </div>
            @endforeach

        </div>
    </div>
</section>
<!-- / Deal Ends -->

<!-- Featured Products Starts-->
<section id="product" class="space-bottom-30">
    <div class="container theme-container">
        <div class="title-wrap">
            <h2 class="section-title"> featured products</h2>  
        </div>

        <div class="featured-slider text-center space-top-40 slide-nav-1">
            @foreach($product_category as $v_category)
            <div  class="item">
                <div class="thumbnail-wrap">
                    <div class="thumbnail">
                        <div class="thumbnail-img light-bg">
                            <div class="flipper">
                                <div class="front">
                                    <a title="Product" href="#">
                                        <img class="img-responsive" src="{{asset($v_category->product_image)}}" alt="" style="height: 250px;"/>                                                      
                                    </a>
                                </div>
                                <div class="back">                                                               
                                    <a href="#">
                                        <img class="img-responsive" src="{{asset($v_category->product_image)}}" alt="" style="height: 250px;"/>                                                      
                                    </a>
                                </div>   
                                <div class="sale-tag"> <span> sale </span> </div>
                            </div>
                            <ul class="thumbnail-conten list-items black-bg">
                                <li> <a href="#"> <i class="icon ion-android-add size-18"></i> <span class="font-2 upper-text"> Add To Cart </span> </a> </li>
                                <li> <a href="#"> <i class="icon ion-ios-heart-outline size-20"></i> </a> </li>
                                <li> <a href="#" data-toggle="modal"> <i class="icon ion-ios-eye-outline size-24"></i> </a> </li>
                            </ul>                                                    
                        </div>
                        <div class="caption">
                            <div class="caption-title space-15"><a href="#" class="title-2">{{$v_category->product_name}}</a></div> 
                            <div class="caption-text font-3"> <span class="size-18 black-color">TK.{{$v_category->product_price}} </span> <del class="gray-color">TK.150.95 </del> </div>                                                   
                        </div>
                    </div>
                </div>                       

                <div class="thumbnail-wrap">
                    <div class="thumbnail">
                        <div class="thumbnail-img light-bg">
                            <div class="flipper">
                                <div class="front">
                                    <a  href="#">
                                        <img class="img-responsive" src="{{asset($v_category->product_image)}}" alt="" style="height: 250px;"/>                                                      
                                    </a>
                                </div>
                                <div class="back">                                                               
                                    <a href="{{asset($v_category->product_image)}}">
                                        <img class="img-responsive" src="{{asset($v_category->product_image)}}" alt="" style="height: 250px;"/>                                                      
                                    </a>
                                </div>
                                <div class="new-tag"> <span> new </span> </div>
                            </div>
                            <ul class="thumbnail-conten list-items black-bg">
                                <li> <a href="#"> <i class="icon ion-android-add size-18"></i> <span class="font-2 upper-text"> Add To Cart </span> </a> </li>
                                <li> <a href="#"> <i class="icon ion-ios-heart-outline size-20"></i> </a> </li>
                                <li> <a href="#" data-toggle="modal"> <i class="icon ion-ios-eye-outline size-24"></i> </a> </li>
                            </ul>                                                    
                        </div>
                        <div class="caption">
                            <div class="caption-title space-15"><a href="#" class="title-2">Samsung Curved 55-Inch 4K</a></div>
                            <div class="caption-text font-3"> <span class="size-18 black-color"> $1,499.99 </span> </div>                                                     
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!-- / Featured Product Ends -->

<!-- Brand Slider Starts-->
<section id="brand-slider" class="space-bottom-50">
    <div class="container theme-container">
        <div class="title-wrap">
            <h2 class="section-title"> Brands Logo </h2>  
        </div>

        <div class="brand-slider text-center space-top-70 slide-nav-1">
            <div class="item">
                <a href="#"> <img src="{{asset('frontend/assets/img/electronic/brands/brand-1.png')}}" alt=""> </a>
            </div>
            <div class="item">
                <a href="#"> <img src="{{asset('frontend/assets/img/electronic/brands/brand-2.png')}}" alt=""> </a>
            </div>
            <div class="item">
                <a href="#"> <img src="{{asset('frontend/assets/img/electronic/brands/brand-3.png')}}" alt=""> </a>
            </div>
            <div class="item">
                <a href="#"> <img src="{{asset('frontend/assets/img/electronic/brands/brand-4.png')}}" alt=""> </a>
            </div>
            <div class="item">
                <a href="#"> <img src="{{asset('frontend/assets/img/electronic/brands/brand-5.png')}}" alt=""> </a>
            </div>
            <div class="item">
                <a href="#"> <img src="{{asset('frontend/assets/img/electronic/brands/brand-1.png')}}" alt=""> </a>
            </div>
            <div class="item">
                <a href="#"> <img src="{{asset('frontend/assets/img/electronic/brands/brand-2.png')}}" alt=""> </a>
            </div>
        </div>
    </div>
</section>
<!-- / Brand Slider Starts-->

<!-- Best Seller Starts-->
<section id="best-seller" class="space-bottom-40">
    <div class="container theme-container">
        <div class="title-wrap">
            <h2 class="section-title"> Best Seller </h2>  
        </div>

        <div class="best-seller text-center space-top-40 slide-nav-1">
            @foreach($product_category as $v_category)
            <div  class="item">
                <div class="thumbnail-wrap">
                    <div class="thumbnail">
                        <div class="thumbnail-img light-bg">
                            <div class="flipper">
                                <div class="front">
                                    <a title="Product" href="#">
                                        <img class="img-responsive" src="{{asset($v_category->product_image)}}" alt="" style="height: 250px;"/>                                                      
                                    </a>
                                </div>
                                <div class="back">                                                               
                                    <a href="#">
                                        <img class="img-responsive" src="{{asset($v_category->product_image)}}" alt="" style="height: 250px;"/>                                                      
                                    </a>
                                </div>   
                                <div class="sale-tag"> <span> sale </span> </div>
                            </div>
                            <ul class="thumbnail-conten list-items black-bg">
                                <li> <a href="#"> <i class="icon ion-android-add size-18"></i> <span class="font-2 upper-text"> Add To Cart </span> </a> </li>
                                <li> <a href="#"> <i class="icon ion-ios-heart-outline size-20"></i> </a> </li>
                                <li> <a href="#" data-toggle="modal"> <i class="icon ion-ios-eye-outline size-24"></i> </a> </li>
                            </ul>                                                    
                        </div>
                        <div class="caption">
                            <div class="caption-title space-15"><a href="#" class="title-2">{{$v_category->product_name}}</a></div> 
                            <div class="caption-text font-3"> <span class="size-18 black-color">{{$v_category->product_price}}</span> <del class="gray-color"> $399.51 </del> </div>                                                   
                        </div>
                    </div>
                </div>    
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- / Best Seller Ends -->

<!-- New Arrival, Faqs, Latest Post Starts-->
<section class="space-bottom-70">
    <div class="container theme-container">
        <div class="row">
            <div class="col-md-3 col-sm-5">
                <div class="arrv" style="background-image: url({{asset($v_category->product_image)}}); background-repeat: no-repeat; background-size: cover; background-position: center center;">

                    <div class="arrv-content">
                        <a href="#" class="section-title white-color"> new <br> arrival </a> 
                        <p class="gray-color-2"> Neque porro quisquam. </p>                                    
                    </div>
                </div>
            </div>
            <div class="space-15 visible-xs clear"></div>
            <div class="col-md-4 col-sm-7">
                <div class="gray-box">
                    <div class="title-wrap">
                        <h2 class="section-title"> Faqs </h2>  
                    </div>
                    <div class="faqs-slider space-top-30 slide-nav-1">
                        <div  class="item">
                            <div id="accordion">
                                <div class="panel faq-panel">
                                    <div class="faq-title">                                      
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#faq1"> How to refunds a products for store ? </a>                                                                                                                                        
                                    </div>
                                    <div id="faq1" class="panel-collapse collapse in">                                
                                        <div class="faq-detail">                                                       
                                            <p>If you bought a product that you don’t satisfaction. You will refunds 100% your money and we are support for ....</p>                                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="panel faq-panel">
                                    <div class="faq-title">                                      
                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq2"> How to have a voucher from bought JSX ? </a>                                                                                                                                        
                                    </div>
                                    <div id="faq2" class="panel-collapse collapse">                                
                                        <div class="faq-detail">                                                       
                                            <p>If you bought a product that you don’t satisfaction. You will refunds 100% your money and we are support for ....</p>                                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="panel faq-panel">
                                    <div class="faq-title">                                      
                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq3"> What to use in Nikon D500 Dx Camera ? </a>                                                                                                                                        
                                    </div>
                                    <div id="faq3" class="panel-collapse collapse">                                
                                        <div class="faq-detail">                                                       
                                            <p>If you bought a product that you don’t satisfaction. You will refunds 100% your money and we are support for ....</p>                                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="panel faq-panel">
                                    <div class="faq-title">                                      
                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq4"> How to use Gopro Hero4 Camera ? </a>                                                                                                                                        
                                    </div>
                                    <div id="faq4" class="panel-collapse collapse">                                
                                        <div class="faq-detail">                                                       
                                            <p>If you bought a product that you don’t satisfaction. You will refunds 100% your money and we are support for ....</p>                                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div  class="item">
                            <div id="accordion2">                                           
                                <div class="panel faq-panel">
                                    <div class="faq-title">                                      
                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#faq6"> How to have a voucher from bought JSX ? </a>                                                                                                                                        
                                    </div>
                                    <div id="faq6" class="panel-collapse collapse">                                
                                        <div class="faq-detail">                                                       
                                            <p>If you bought a product that you don’t satisfaction. You will refunds 100% your money and we are support for ....</p>                                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="panel faq-panel">
                                    <div class="faq-title">                                      
                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#faq7"> What to use in Nikon D500 Dx Camera ? </a>                                                                                                                                        
                                    </div>
                                    <div id="faq7" class="panel-collapse collapse">                                
                                        <div class="faq-detail">                                                       
                                            <p>If you bought a product that you don’t satisfaction. You will refunds 100% your money and we are support for ....</p>                                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="panel faq-panel">
                                    <div class="faq-title">                                      
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#faq5"> How to refunds a products for store ? </a>                                                                                                                                        
                                    </div>
                                    <div id="faq5" class="panel-collapse collapse in">                                
                                        <div class="faq-detail">                                                       
                                            <p>If you bought a product that you don’t satisfaction. You will refunds 100% your money and we are support for ....</p>                                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="panel faq-panel">
                                    <div class="faq-title">                                      
                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#faq8"> How to use Gopro Hero4 Camera ? </a>                                                                                                                                        
                                    </div>
                                    <div id="faq8" class="panel-collapse collapse">                                
                                        <div class="faq-detail">                                                       
                                            <p>If you bought a product that you don’t satisfaction. You will refunds 100% your money and we are support for ....</p>                                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space-15 visible-sm visible-xs clear"></div>
            <div class="col-md-5 col-sm-12">
                <div class="gray-box">
                    <div class="title-wrap">
                        <h2 class="section-title"> Latest Posts </h2>  
                    </div>
                    <div class="ltst-post-wrap space-top-30">

                        <div class="ltst-post">
                            <div class="row">
                                <div class="col-md-4 col-sm-3 col-xs-4">
                                    <img src="{{asset('frontend/assets/img/electronic/banner/post-1.jpg')}}" alt="">
                                </div>
                                <div class="col-md-8  col-sm-9 post-con">
                                    <a href="#" class="title"> <b>How to use camare Cannon EOS 4x</b> </a>
                                    <p>Rhinitis is a common disease in children, especially frequent in-season weather, humidity is too dry or too wet...</p>
                                </div>
                            </div>
                        </div>
                        <ul class="ltst-post-link">
                            <li> <i class="black-color icon_stop "></i> <a href="#"> Beat Solo 2 headphone - color of musical </a> </li>
                            <li> <i class="black-color icon_stop "></i> <a href="#"> 13 things to protect your macbook a long time </a> </li>
                            <li> <i class="black-color icon_stop "></i> <a href="#"> Discover the perfect of pixel in Samsung Led HD TV </a> </li>
                            <li> <i class="black-color icon_stop "></i> <a href="#"> Tips for create innovative photos with Nikon D500 Dx </a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / New Arrival, Faqs, Latest Post Ends -->

<!-- Feature Starts -->
<section class="space-bottom-70">
    <div class="container theme-container">
        <div class="row">
            <div class="col-md-3 col-sm-6 ftr-wrap">
                <div class="ftr-icn">
                    <i class="icon ion-cube"></i>
                </div>
                <div class="ftr-cnt">
                    <h2 class="title-2"> +15.000 Products </h2>
                    <p>Best for your life</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 ftr-wrap">
                <div class="ftr-icn">
                    <i class="icon ion-android-star"></i>
                </div>
                <div class="ftr-cnt">
                    <h2 class="title-2"> More 400 Brands </h2>
                    <p> Sony, LG, Toshiba, Lenovo... </p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 ftr-wrap">
                <div class="ftr-icn">
                    <i class="icon ion-android-pin"></i>
                </div>
                <div class="ftr-cnt">
                    <h2 class="title-2"> Free Shipping </h2>
                    <p> Free shipping on the world </p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 ftr-wrap">
                <div class="ftr-icn">
                    <i class="icon ion-social-usd"></i>
                </div>
                <div class="ftr-cnt">
                    <h2 class="title-2"> Refund in 07 days </h2>
                    <p> 100% free guarantee </p>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection