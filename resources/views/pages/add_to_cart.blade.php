
@extends('layout')
@section('content')
<div class="container"> 
    <!--Breadcrumb Section Start-->
    <section class="breadcrumb-bg light-breadcrumb light-bg">                
        <div class="theme-container container">                 
            <div class="site-breadcumb col-md-4 space-80">                        
                <h1 class="section-title size-48 no-margin space-bottom-20"> shopping cart </h1>
            </div>  
        </div>
    </section>
    <!--Breadcrumb Section End-->
    <div class="row">
        <div class="col-md-12">
            <div class="cart-table space-bottom-20">
                <form class="cart-form">
                    <?php 
                    $contents=Cart::content();
                    ?>
                    <table class="product-table black-color table-bordered table-inverse">
                        <thead class="font-2">
                            <tr>
                                <th>Image</th>                                
                                <th>Name</th>  
                                <th>Price</th> 
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Action</th> 
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contents as $v_content)
                            <tr>
                                <td class="image">
                                    <div class="white-bg">
                                        <a class="media-link" href="#"><img src="{{URL::to($v_content->options->image)}}" style="height: 100px; width: 150px;" alt=""></a> 
                                    </div>
                                </td>
                                <td class="description">
                                    <a href="#" class="size-16 black-color">{{$v_content->name}}</a> 
                                    <ul>
                                        <li> <i class="arrow_carrot-right black-color size-18"></i> <span>Color :</span> <span class="gray-color">White</span> </li>
                                        <li> <i class="arrow_carrot-right black-color size-18"></i> <span>Size :</span> <span class="gray-color"> XL </span> </li>
                                    </ul>                                                                                     
                                </td>    
                                <td class="price size-16">{{$v_content->price}}</td> 
                                <td class="quantity">
                                    <div class="qty">
                                        <form action="{{url('/update-cart')}}" method="post">
                                            {{csrf_field()}}
                                        <input type="text" name="qty" value="{{$v_content->qty}}" autocomplete="off" size="2">
                                        <input type="hidden" name="rowId" value="{{$v_content->rowId}}">
                                        <input type="submit" name="submit" class="btn btn-info" value="update">
                                        </form>
                                    </div>
                                </td>
                                <td class="price size-16">{{$v_content->total}}</td>
                                <td class="remove-edit">
                                    <a href="{{URL::to('/delete-to-cart/'.$v_content->rowId)}}" class="icon_close size-24"></a>  
                                </td>
                            </tr> 
                            @endforeach     

                        </tbody>                               
                    </table>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="continue-shopping">
                                <div class="shp-btn col-sm-8">
                                    <a href="{{url('/')}}" class="theme-btn btn"> continue shopping </a>

                                </div>
                                <div class="col-md-6 col-sm-8">
                                    <div class="chk-total text-right">
                                        <ul class="font-2">
                                            <li class="title-1 size-18 space-top-15"> <b> grand total  <span class="red-color">TK.{{Cart::total()}}</span> </b> </li>
                                            <li class="space-10"> <hr class="fullwidth-divider"> </li>
                                            <?php $customer_id=Session::get('customer_id');
                                            $shipping_id=Session::get('shipping_id');

                                             ?>
                                            @if($customer_id !=NULL && $shipping_id !=NULL)
                                            <li>
                                            <a href="{{url('/payment')}}" class="theme-btn-1 btn submit-btn">Checkout</a> 
                                            </li>
                                            @else
                                            <li>
                                            <a href="{{url('/login-checkout')}}" class="theme-btn-1 btn submit-btn">Checkout</a> 
                                            </li>
                                           
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>

<!-- / CONTENT AREA -->
@endsection