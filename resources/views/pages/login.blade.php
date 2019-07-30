@extends('layout')
@section('content')
<section class="breadcrumb-bg login-breadcrumb">                
	<div class="theme-container container ">
		<div class="space-top-30"></div>
		<div class="site-breadcumb col-md-4 space-80">                        
			<h1 class="section-title size-48 no-margin space-bottom-20"> login / register </h1> 
			<ol class="breadcrumb breadcrumb-menubar">
				<li> <a href="{{url('/')}}" class="gray-color"> Home </a> <a href="#" class="gray-color"> Blog </a> login / register </li>                             
			</ol>
		</div>  
	</div>
</section>
<!--Breadcrumb Section End-->

<section class="login-reg-wrap space-100">
	<div class="theme-container container">

		<!-- Login Starts -->
		<div class="row">
			<div class="col-md-4 col-sm-5">
				<div class="login-wrap">
					<h2 class="section-title no-margin size-18"> log in your account </h2>
					<form class="login-form row space-top-15" action="{{url('/customer_login')}}" method="post">
						{{csrf_field()}}
						<div class="form-group col-md-12">
							<input required="" type="email" data-original-title="Name is required" class="form-control name input-your-name" placeholder="Email" name="customer_email" value="" data-toggle="tooltip" data-placement="bottom" title="">
						</div>
						<div class="form-group col-md-12">
							<input required="" type="password" data-original-title="Email is required" class="form-control email input-email" placeholder="Password" name="password" value="" data-toggle="tooltip" data-placement="bottom" title="">
						</div>
						<div class="form-group col-md-12">
							<button type="submit" class="theme-btn btn submit-btn"> <b> Login </b> </button>
						</div>
					</form>
				</div>
			</div>
			<div class="space-15 visible-xs"></div>
			<div class="col-md-8 col-sm-7">
				<div class="register-wrap">
					<h2 class="section-title no-margin size-18"> Don't have an Account? Register Now </h2>
					<form class="register-form row  space-top-15" action="{{url('/customer_registration')}}" method="post">
						{{csrf_field()}}
						<div class="form-group col-md-6">
							<input required="" type="text" data-original-title="Login" class="form-control name input-your-name" placeholder="Full Name" name="customer_name" value="" data-toggle="tooltip" data-placement="bottom" title="">
						</div>
						<div class="form-group col-md-6">
							<input required="" type="text" data-original-title="Email is required" class="form-control email input-email" placeholder="Email Address" name="customer_email" value="" data-toggle="tooltip" data-placement="bottom" title="">
						</div>  
						<div class="form-group col-md-6">
							<input required="" type="text" class="form-control website input-website" placeholder="Password" name="password" value="" data-toggle="tooltip" data-placement="bottom" title="">
						</div>
						<div class="form-group col-md-6">
							<input type="text" class="form-control website input-website" placeholder="Phone" name="mobile_number" value="" data-toggle="tooltip" data-placement="bottom" title="">
						</div>    
						<div class="form-group col-md-12">
							<button type="submit" class="theme-btn-1 larg-btn btn submit-btn"> <b> register now </b> </button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- / Login Ends -->

	</div>
	<div class="space-40 visible-lg"></div>
</section>
@endsection