@extends('admin_layout')
@section('admin_content')
	<div class="row justify-content-md-center">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					<div class="card-title-wrap bar-danger">
						<h4 class="card-title" id="horz-layout-card-center">EDIT MANUFACTUR</h4>
					</div>
				</div>
				<div class="card-body">
					<div class="px-3">
						<form class="form form-horizontal" action="{{url('/update_manufactur', $manufactur_info->manufactur_id)}}" method="post">
							{{csrf_field()}}
							<div class="form-body">
								<div class="form-group row">
									<label class="col-md-3 label-control">Manufactur Name: </label>
									<div class="col-md-9">
										<input type="text" class="form-control" name="manufactur_name" value="{{$manufactur_info->manufactur_name}}">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-3 label-control">Description :</label>
									<div class="col-md-9">
										<textarea rows="2" class="form-control" name="manufactur_description" >{{$manufactur_info->manufactur_description}}</textarea>
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