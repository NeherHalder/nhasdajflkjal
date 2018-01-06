@extends('layouts.backend.master')

@section('ptitle', 'USER PROFILE')
@section('back-button')
	@include('layouts.backend.common.back-button')
@endsection 
@section('ctitle')
	EDIT PROFILE
@stop

@section('content')  
	<form method="post" action="{{URL::to('/profile/edit')}}">
		{{ csrf_field() }}
		
		<div class="row">
			<div class="col-md-4 col-xs-12">
				<div class="slide">
					<img class="img-circle img-responsive" src="{{ asset('images/profile.png') }}" alt="Generic placeholder image" width="200" height="200">
					<h5>Change Profile Picture</h5>
					<input type="file" name="profile_pic">
					<div>
						@include('layouts.backend.common.formError', ['key' => 'profile_pic'])
					</div>

					<div class="social-icons">
						<a href="#"><span class="facebook"></span></a>
						<a href="#"><span class="twitter"></span></a>
						<a href="#"><span class="linkedin"></span></a>
						<a href="#"><span class="googleplus"></span></a>
					</div>
				</div>
			</div>
			<div class="col-md-8 col-xs-12">
				<div class="myskills slideanim slide">
					<h3 class="">Details</h3>
					
					<div class="skill-info"> 
						<div class="table-responsive">
							<table class="table" style="width: 95%">
								<tbody>
									<tr>
										<td class="col-md-4"><h4>Name</h4></td>
										<td>
											<input class="col-md-12" type="text" name="name" value="{{$user->name}}" style="margin: 0px;">
											@include('layouts.backend.common.formError', ['key' => 'name'])
										</td>
									</tr>								
									<tr>
										<td><h4>Designation</h4></td>
										<td>
											<input class="col-md-12" type="text" name="designation" value="{{$user->designation}}" style="margin: 0px;">
											@include('layouts.backend.common.formError', ['key' => 'designation'])
										</td>
									</tr>
								
									<tr>
										<td><h4>Signature </h4></td>
										<td>
											<input type="file" name="signature">
											@include('layouts.backend.common.formError', ['key' => 'signature'])
										</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<td colspan="2">
											<button type="submit" class="btn btn-success pull-right"j style="margin-top: 15px;">Save</button>
										</td>
									</tr>
								</tfoot>
							</table>
						</div>	
					</div>
				</div>	
			</div>
		</div>	
	</form>  

@endsection

@section('script')
	@include('layouts.backend.common._datatable', [
		'columns' => [ 0, 1, 2, 3, 4 ],
		'perPage' => 50
	])
@endsection




