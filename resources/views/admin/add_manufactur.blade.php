@extends('admin_layout')
@section('admin_content')
	<div class="row justify-content-md-center">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					<div class="card-title-wrap bar-danger">
						<h4 class="card-title" id="horz-layout-card-center">ADD MANUFACTUR</h4>
					</div>
				</div>
				<div class="card-body">
					<div class="px-3">
						<form class="form form-horizontal" action="{{url('/save_manufactur')}}" method="post">
							{{csrf_field()}}
							<div class="form-body">
								<div class="form-group row">
									<label class="col-md-3 label-control">Manufactur Name: </label>
									<div class="col-md-9">
										<input type="text" class="form-control" name="manufactur_name" required="required">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-3 label-control">Description :</label>
									<div class="col-md-9">
										<textarea rows="2" class="form-control" name="manufactur_description"></textarea>
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
									<i class="icon-note"></i> Save
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