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
                                    <th>ID</th>
                                    <th>Name</th>                                   
                                    <th>image</th>
                                    <th>price</th>
                                    <th>Cat Name</th>
                                    <th>Man Name</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            @foreach($all_product_info as $v_product)
                            <tbody>
                                <tr>
                                    <td>{{$v_product->product_id}}</td>
                                    <td>{{$v_product->product_name}}</td>
                                    <td><img src="{{URL::to($v_product->product_image)}}" alt="" style="height: 50px; width:50px;"> </td>
                                    <td>{{$v_product->product_price}}</td>
                                    <td>{{$v_product->category_name}}</td>
                                    <td>{{$v_product->manufactur_name}}</td>
                                    
                                    <td>
                                        @if($v_product->publication_status==1)
                                        <span class="lavel lavel-success">Active</span>
                                        @else
                                        <span class="lavel lavel-danger">Unactive</span>
                                          
                                        @endif
                                    </td>
                                    <td>
                                        @if($v_product->publication_status==1)
                                        <a class="danger p-0" href="{{url('/unactive_product/'.$v_product->product_id)}}" data-original-title="" title="">
                                            <i class="fa fa-thumbs-down font-medium-3 mr-2"></i>
                                        </a>
                                        @else
                                        <a class="success p-0" href="{{url('/active_product/'.$v_product->product_id)}}" data-original-title="" title="">
                                            <i class="fa fa-thumbs-up font-medium-3 mr-2"></i>
                                        </a>
                                        @endif
                                        <a class="info p-0" href="{{url('/edit_product/'.$v_product->product_id)}}" data-original-title="" title="">
                                            <i class="fa fa-edit font-medium-3 mr-2"></i>
                                        </a>
                                        <a class="danger p-0" href="{{url('/delete_product/'.$v_product->product_id)}}" data-original-title="" title="">
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