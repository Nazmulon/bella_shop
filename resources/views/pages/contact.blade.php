@extends('layout')
@section('title', 'Contact Us')
@section('content')
	<section class="breadcrumb-bg contact-breadcrumb">                
                <div class="theme-container container ">
                    <div class="space-top-30"></div>
                    <div class="site-breadcumb col-md-4 space-80">                        
                        <h1 class="section-title size-48 no-margin space-bottom-20"> contact us </h1> 
                        <ol class="breadcrumb breadcrumb-menubar">
                            <li> <a href="{{url('/')}}" class="gray-color"> Home </a> <a href="#" class="gray-color"> Blog </a> contact </li>                             
                        </ol>
                    </div>  
                </div>
            </section>
            <!--Breadcrumb Section End-->

            <section class="wrapper space-100">
                <div class="theme-container container">

                    <!-- Contact Starts -->
                    <div class="row">
                        <div class="col-sm-4 contact-box text-center">
                            <div class="space-50">
                                <i class="icon_mobile gray-color size-40"></i>
                                <b class="title-1 light-black">Phone</b>
                                <p>Phone 01: 01742579745</p>
                                <p>Phone 02: 01680477200</p>
                            </div>
                        </div>
                        <div class="col-sm-4 contact-box text-center">
                            <div class="space-50">
                                <i class="icon_pin_alt gray-color size-40"></i>
                                <b class="title-1 light-black">address</b>
                                <p>Mirput-1, Block-C, Road-11, Mirpur, Dhaka-1216.</p>
                            </div>
                        </div>
                        <div class="col-sm-4 contact-box text-center">
                            <div class="space-50">
                                <i class="icon_mail_alt gray-color size-40"></i>
                                <b class="title-1 light-black">email</b>
                                <p>nazmulranbagha@gmail.com</p>
                                <p>nazmulon0@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <!-- / Contact Ends -->

                    <!-- Contact Form Starts -->
                    <div class="contact-form-wrap text-center space-80 row">                       
                        <form class="contact-form col-md-8 col-md-offset-2">
                            <h2 class="section-title size-18  space-bottom-15">  <span> If you got any questions </span> <span> please do not hesitate to send us a message. </span> </h2>
                            <div class="form-group col-sm-12 form-alert"></div>
                            <div class="">
                                <div class="form-group col-sm-12">
                                    <input required="" type="text" title="" data-placement="bottom" data-toggle="tooltip" value="" id="cf_name" name="cf_name" placeholder="Your Name" class="form-control name input-your-name" data-original-title="Name is required">
                                </div>
                                <div class="form-group col-sm-12">
                                    <input required="" type="text" title="" data-placement="bottom" data-toggle="tooltip" value="" id="cf_email" name="cf_email" placeholder="Your Email" class="form-control email input-email" data-original-title="Email is required">
                                </div>
                                <div class="form-group col-sm-12">
                                    <input type="text" title="" data-placement="bottom" data-toggle="tooltip" value="" id="cf_website" name="cf_website" placeholder="Subject" class="form-control website input-website">
                                </div>
                                <div class="form-group col-sm-12">
                                    <textarea title="" data-placement="top" data-toggle="tooltip" id="cf_message" name="cf_message" placeholder="Message" cols="10" rows="3" class="form-control message input-message" data-original-title="Message is required"></textarea>
                                </div>
                                <div class="form-group col-sm-12">
                                    <button class="btn-black btn submit-btn" type="submit"> <b> Send Message </b> </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Contact Form Ends -->

                    <!-- Map Starts-->
                    <div class="space-bottom-100">
                        <div class="google-map">
                            <div id="map-canvas2"></div>
                        </div>
                    </div>
                    <!-- / Map Ends -->

                </div>

            </section>
@endsection