<header>  
    <section class="header-topbar">
        <div class="container theme-container">  
            <div class="border">
                <div class="row">
                    <div class="col-md-5 col-sm-6"> 
                        <p class="gray-color">Best perfecr choice for your life ! </p>
                    </div>
                    <div class="col-md-7 col-sm-6">
                        <ul class="list-items pull-right top-nav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >My Account</a>
                                <ul class="dropdown-menu">  
                                    <li><a href="#">My Account</a></li>                                                
                                    <li><a href="#"> Account Information </a></li>                                                
                                    <li><a href="#">Change Password</a></li>
                                    <li><a href="#">Address Books</a></li>
                                </ul>
                            </li>                                                                  
                    </ul>
                </div>
            </div>    
        </div>
    </div>
</section>
<section class="main-header">
    <div class="header-wrap upper-text"> 
        <div class="container theme-container">
            <div class="top-bar">
                <div class="row">
                    <div class="col-md-2 col-sm-3"> 
                        <div class="logo  navbar-brand">
                            <h2 class="logo-title  font-2"> <a href="{{url('/')}}"> <span class="theme-color">ELE</span>Pro </a> </h2>                                
                            <span class="nav-trigger toggle-hover visible-xs">
                                <a class="toggle-icon icon-cube size-24" href="#"> </a>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 navigation font-2">
                        <nav>                                                               
                            <div class="navbar-collapse no-padding" id="primary-navigation">                                        
                                <ul class="nav navbar-nav primary-navbar">
                                    <li class="dropdown active">
                                        <a href="{{url('/')}}">home</a>    
                                    </li>  
                                    <li class="dropdown mega-dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" > Collection </a>                                            
                                        <div class="dropdown-menu mega-dropdown-menu">
                                            <div class="col-sm-4 menu-block">
                                                <div class="sub-list">
                                                    <img class="img-responsive" src="{{asset('frontend/assets/img/main/megamenu/img-1.jpg')}}" alt="">
                                                    <h2 class="title-2">promotions</h2>
                                                    <ul>
                                                        <li><a href="#">New Products</a></li>
                                                        <li><a href="#">Back To School</a></li>
                                                        <li><a href="#">Must Have</a></li>
                                                        <li><a href="#">Denim Collection</a></li>
                                                        <li><a href="#">Daily Standards</a></li>
                                                        <li><a href="#">Black Label</a></li>                             
                                                    </ul>
                                                </div>
                                            </div>  
                                        </div>
                                    </li> 
                                    <li><a href="#about">about</a></li>                        
                                    <li><a href="contact-us.html">Contact</a></li> 
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="col-md-3 col-sm-5 top-right text-right">
                        <?php 
                    $contents=Cart::content();

                    ?>
                        <ul class="top-elements">     
                            <li class="cart-hover"> 
                                <a href="{{url('/show_cart')}}" class="cart-icon size-24"><span class="items-count font-2"> <b> 2 </b> </span>   </a> 
                                <ul class="pop-up-box cart-popup">
                            @foreach($contents as $v_content)
                                    
                                    <li class="cart-list">

                                        <div class="cart-img"> <img src="{{URL::to($v_content->options->image)}}" alt=""> </div>
                                        <div class="cart-title">
                                            <a class="font-2 size-12" href="#">{{$v_content->name}}</a>
                                            <p class="caption-text font-3"> 
                                                <span class="size-14 black-color">TK.{{$v_content->price}}</span> <del class="gray-color size-12"> TK.102.50 </del> 
                                            </p>
                                        </div>
                                        <div class="icon ion-android-close size-20 del-item">
                                            <a href="{{URL::to('/delete-to-cart/'.$v_content->rowId)}}" class="icon_close size-24"></a> 
                                        </div>

                                    </li>
                                     @endforeach 
                                    <li class="cart-list buttons">
                                        <div class=""> 
                                            <a href="{{url('/show_cart')}}" class="theme-btn-1 btn small-btn">View Cart</a>
                                        </div>
                                        <div class="pull-right"> 
                                            <a href="" class="theme-btn btn small-btn"> Checkout </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</section>
</header>