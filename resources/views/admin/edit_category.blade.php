@extends('admin_layout')
@section('admin_content')
	<div class="row justify-content-md-center">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					<div class="card-title-wrap bar-danger">
						<h4 class="card-title" id="horz-layout-card-center">EDIT CATEGORY</h4>
					</div>
				</div>
				<div class="card-body">
					<div class="px-3">
						<form class="form form-horizontal" action="{{url('/update_category', $category_info->category_id)}}" method="post">
							{{csrf_field()}}
							<div class="form-body">
								<div class="form-group row">
									<label class="col-md-3 label-control">Category Name: </label>
									<div class="col-md-9">
										<input type="text" class="form-control" name="category_name" value="{{$category_info->category_name}}">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-3 label-control">Description :</label>
									<div class="col-md-9">
										<textarea rows="2" class="form-control" name="category_description" >{{$category_info->category_description}}</textarea>
									</div>
								</div>
							</div>

							<div class="form-actions center">
								<button type="submit" class="btn btn-success">
									<i class="icon-note"></i> Update
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection