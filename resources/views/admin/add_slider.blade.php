@extends('admin_layout')
@section('admin_content')
	<div class="row justify-content-md-center">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					<div class="card-title-wrap bar-danger">
						<h4 class="card-title" id="horz-layout-card-center">ADD Slider</h4>
					</div>
				</div>
				<div class="card-body">
					<div class="px-3">
						<form class="form form-horizontal" action="{{url('/save_slider')}}" method="post" enctype="multipart/form-data">
							{{csrf_field()}}
							<div class="form-body">
								<div class="form-group row">
									<label class="col-md-3 label-control">Slider Image: </label>
									<div class="col-md-9">
										<label id="projectinput8" class="file center-block">
											<input type="file" id="file" name="slider_image" required="required">
											<span class="file-custom"></span>
											: </label>
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
									<i class="icon-note"></i> Add Slider
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection