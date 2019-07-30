@extends('layout')
@section('content')
<section class="breadcrumb-bg light-breadcrumb light-bg">                
	<div class="theme-container container">                 
		<div class="site-breadcumb col-md-4 space-80">                        
			<h1 class="section-title size-48 no-margin space-bottom-20"> checkout </h1> 
			<ol class="breadcrumb breadcrumb-menubar">
				<li> <a href="#" class="gray-color"> Home </a> checkout </li>                             
			</ol>
		</div>  
	</div>
</section>
<!--Breadcrumb Section End-->

<section class="checkout-page space-100">
	<div class="theme-container container">                  
		<!-- Shopping Cart Starts -->
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<div class="heading chk">
					<h2 class="section-title size-18"> calculate shipping  <span class="icon_minus-06 size-30"></span> </h2>                              
				</div>
				<hr class="fullwidth-divider">
				<div class="calculate-wrap space-20">
					<form class="calculate-form" action="{{url('/save-shipping-details')}}" method="post">
					{{csrf_field()}}              
						<div class="form-group">
							<input type="text" name="shipping_email" placeholder="Email*" class="form-control" required="">
						</div>
						<div class="form-group">
							<input type="text" name="shipping_first_name" placeholder="First Name*" class="form-control" required="">
						</div>
						<div class="form-group">
							<input type="text" name="shipping_last_name" placeholder="Last Name*" class="form-control" required="">
						</div>
						<div class="form-group">
							<input type="text" name="shipping_address" placeholder="Address*" class="form-control" required="">
						</div>
						<div class="form-group">
							<input type="text" name="shipping_mobile_number" placeholder="Mobile Number*" class="form-control" required="">
						</div>
						<div class="form-group">
							<input type="text" name="shipping_city" placeholder="City*" class="form-control" required="">
						</div>

						<div class="form-group">
							<input class="theme-btn btn submit-btn" type="submit" value="Done"> 
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-6 col-sm-6">
				<div class="heading chk">
					<h2 class="section-title size-18"> coupon discount  <span class="icon_minus-06 size-30"></span> </h2>                              
				</div>
				<hr class="fullwidth-divider">
				<div class="coupon-wrap space-20">
					<form class="coupon-form">
						<div class="form-group block-inline"> <p> <i>Enter your coupon code if you have one.</i> </p> </div>                                   
						<div class="form-group">
							<input type="text" placeholder="Enter your code here !" class="form-control">
						</div>                                   
						<div class="form-group">
							<button class="theme-btn btn submit-btn" type="submit"> <b> apply coupon </b> </button>
						</div>
					</form>
				</div>
			</div>

		</div>
	</div>
</section>
@endsection