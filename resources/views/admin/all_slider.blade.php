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
                          <h4 class="card-title">ALL Slider</h4>
                        </div>
                      </div>
                      <div class="card-body">
                      <div class="card-block">
                        <table class="table table-responsive-md text-center">
                            <thead>
                                <tr>
                                    <th>ID</th>                                  
                                    <th>Slider image</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            @foreach($all_slider_info as $v_slider)
                            <tbody>
                                <tr>
                                    <td>{{$v_slider->slider_id}}</td>
                                    <td><img src="{{URL::to($v_slider->slider_image)}}" alt="" style="height: 50px; width:150px;"> </td>                               
                                    <td>
                                        @if($v_slider->publication_status==1)
                                        <span class="lavel lavel-success">Active</span>
                                        @else
                                        <span class="lavel lavel-danger">Unactive</span>
                                          
                                        @endif
                                    </td>
                                    <td>
                                        @if($v_slider->publication_status==1)
                                        <a class="danger p-0" href="{{url('/unactive_slider/'.$v_slider->slider_id)}}" data-original-title="" title="">
                                            <i class="fa fa-thumbs-down font-medium-3 mr-2"></i>
                                        </a>
                                        @else
                                        <a class="success p-0" href="{{url('/active_slider/'.$v_slider->slider_id)}}" data-original-title="" title="">
                                            <i class="fa fa-thumbs-up font-medium-3 mr-2"></i>
                                        </a>
                                        @endif
                                        <a class="danger p-0" href="{{url('/delete_slider/'.$v_slider->slider_id)}}" data-original-title="" title="">
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