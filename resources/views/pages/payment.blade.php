@extends('layout')
@section('content')
	<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Credit Card Payment Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}" />

    {{-- <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script> --}}
</head>
<body>

<div class="container">

<div class="page-header">
    <h1 align="center"><b>Credit Card Payment Form</b></h1>
</div>

<!-- Credit Card Payment Form - START -->

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <h3 class="text-center">Payment Details</h3>
                        <img class="img-responsive cc-img" src="http://www.prepbootstrap.com/Content/images/shared/misc/creditcardicons.png">
                    </div>
                </div>
                <div class="panel-body">
                    <form action="{{url('/order_place')}}" method="post">
                    	{{csrf_field()}}
                        <div class="row">
                            <div class="col-xs-12">
                                <label>HandCash</label>
                                <input type="radio" name="payment_method" class="form-control" value="handcash" />
                               
                            </div>
                            <div class="col-xs-12">
                                <label>Bkash</label>
                                    <input type="radio" name="payment_method" class="form-control" value="bkash" />
                            </div>
                            <div class="col-xs-12">
                                <label>MasterCard</label>
                                    <input type="radio" name="payment_method" class="form-control" value="cart" />                                                                 
                            </div>
                        </div>
                        <div class="panel-footer">
                    <div class="row">
                        <div class="col-xs-12">
                            <button type="submit" class="btn btn-warning btn-lg btn-block">Process payment</button>
                        </div>
                    </div>
                </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>

<style>
    .cc-img {
        margin: 0 auto;
    }
</style>
<!-- Credit Card Payment Form - END -->

</div>

</body>
</html>
@endsection