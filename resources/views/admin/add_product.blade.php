@extends('admin_layout')
@section('admin_content')
	<div class="row justify-content-md-center">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					<div class="card-title-wrap bar-danger">
						<h4 class="card-title" id="horz-layout-card-center">ADD PRODUCT</h4>
					</div>
				</div>
				<div class="card-body">
					<div class="px-3">
						<form class="form form-horizontal" action="{{url('/save_product')}}" method="post" enctype="multipart/form-data">
							{{csrf_field()}}
							<div class="form-body">
								<div class="form-group row">
									<label class="col-md-3 label-control">Product Name: </label>
									<div class="col-md-9">
										<input type="text" class="form-control" name="product_name" required="required">
									</div>
								</div>
								<div class="form-group row">
								<label class="col-md-3 label-control" for="category_id">Product Category</label>
									<div class="col-md-9">
										<select id="category_id" name="category_id" class="form-control">
											<option>Select Category</option>
									<?php
                    					$all_published_category=DB::table('tbl_category')
                                            					->where('publication_status',1)
                                            					->get();
                					?> 
                					@foreach($all_published_category as $v_category)
										<option value="{{$v_category->category_id}}">{{$v_category->category_name}}</option>              
               	 					@endforeach 
											
										</select>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="manufactur_id">Manufacture Name</label>
									<div class="col-md-9">
										<select id="manufactur_id" name="manufactur_id" class="form-control">
											<option value="video">Select Manufacture</option>
										<?php
                    					$all_published_manufactur=DB::table('tbl_manufactur')
                                            					->where('publication_status',1)
                                            					->get();
                						?> 
                					@foreach($all_published_manufactur as $v_manufactur)
										<option value="{{$v_manufactur->manufactur_id}}">{{$v_manufactur->manufactur_name}}</option>              
               	 					@endforeach 
										</select>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-3 label-control">Product Short Description :</label>
									<div class="col-md-9">
										<textarea rows="2" class="form-control" name="product_short_description"></textarea>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-3 label-control">Product Long Description :</label>
									<div class="col-md-9">
										<textarea rows="2" class="form-control" name="product_long_description"></textarea>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-3 label-control">Product Price: </label>
									<div class="col-md-9">
										<input type="text" class="form-control" name="product_price" required="required">
									</div>
								</div>
			
								<div class="form-group row">
									<label class="col-md-3 label-control">Image: </label>
									<div class="col-md-9">
										<label id="projectinput8" class="file center-block">
											<input type="file" id="file" name="product_image">
											<span class="file-custom"></span>
											: </label>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-3 label-control">Product Size: </label>
									<div class="col-md-9">
										<input type="text" class="form-control" name="product_size" required="required">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-3 label-control">Product Color: </label>
									<div class="col-md-9">
										<input type="text" class="form-control" name="product_color" required="required">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-md-3 label-control">Public Satus :</label>
									<div class="col-md-9">
										<input type="checkbox" name="publication_status" value="1">
									</div>
								</div>
							</div>

							<div class="form-actions center">
								<button type="submit" class="btn btn-success">
									<i class="icon-note"></i> Add Product
								</button>
								<button type="button" class="btn btn-danger mr-1">
									<i class="icon-trash"></i> Cancel
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection