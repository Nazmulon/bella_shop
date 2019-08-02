@extends('admin_layout')
@section('admin_content')
	<div class="main-content">
          <div class="content-wrapper">
            <div class="container-fluid"><!--Extended Table starts-->
              <section id="extended">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="card">
                      <div class="card-header">
                        <div class="card-title-wrap bar-success">
                          <h4 class="card-title">ALL Catagory</h4>
                        </div>
                      </div>
                      <div class="card-body">
                      <div class="card-block">
                        <table class="table table-responsive-md text-center">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Shipping Name</th>
                                    <th>Shipping Address</th>
                                    <th>Mobile</th>
                                </tr>
                            </thead>
                    
                            <tbody>
                                

                                @foreach($order_by_id as $v_order)
                                <tr>
                                    
                                    <td>{{$v_order->order_id}}</td>
                                    <td>{{$v_order->shipping_first_name}}</td>
                                    <td>{{$v_order->shipping_address}}</td>
                                    <td>{{$v_order->shipping_mobile_number}}</td>
                                    
                                </tr>
                                @endforeach
                            </tbody>
                        
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Extended Table Ends-->
<!--Shopping cart starts-->
<!--Shopping cart ends-->
            </div>
          </div>
        </div>
@endsection