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
                          <h4 class="card-title">Manage Order</h4>
                        </div>
                      </div>
                      <div class="card-body">
                      <div class="card-block">
                        <table class="table table-responsive-md text-center">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Customer Name</th>
                                    <th>Oder Total</th>
                                    <th>Active Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            @foreach($all_order_info as $v_order)
                            <tbody>
                                <tr>
                                    <td>{{$v_order->order_id}}</td>
                                    <td>{{$v_order->customer_name}}</td>
                                    <td>{{$v_order->order_total}}</td>
                                    <td>{{$v_order->order_status}}</td>
                                    {{-- <td>
                                        @if($v_order->publication_status==1)
                                        <span class="lavel lavel-success">Active</span>
                                        @else
                                        <span class="lavel lavel-danger">Unactive</span>
                                          
                                        @endif
                                    </td> --}}
                                    <td>
                                     
                                        <a class="info p-0" href="{{url('/view_order/'.$v_order->order_id)}}" data-original-title="" title="">
                                            <i class="fa fa-edit font-medium-3 mr-2"></i>
                                        </a>
                                        <a class="danger p-0" href="" data-original-title="" title="">
                                            <i class="fa fa-trash-o font-medium-3 mr-2"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                           @endforeach
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