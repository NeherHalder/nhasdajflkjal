@extends('layouts.backend.master')

@section('ptitle', 'USER PROFILE')

@section('back-button')
	@include('layouts.backend.common.back-button')
@endsection 

@section('ctitle')
	PROFILE
@stop

@section('content')    
	<div class="row">
		<div class="col-md-4 col-xs-12">
			<div class="text-center slide">
				<img class="img-circle img-responsive" src="{{ asset('images/profile.png') }}" alt="Generic placeholder image" width="200" height="200">
				<div style="margin-left: -25%">
					<h4>{{$user->name}}</h4>
					<p>{{$user->designation}}</p>
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
									<td class="col-md-6"><h4>Name</h4></td>
									<td><p>{{$user->name}}</p></td>
								</tr>								
								<tr>
									<td><h4>Designation</h4></td>
									<td><p>{{$user->designation}}</p></td>
								</tr>
								<tr>
									<td><h4>Mobile</h4></td>
									<td><p>{{$user->phone}}</p></td>
								</tr>
								<tr>
									<td><h4>Signature </h4></td>
									<td></td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<td colspan="2">
										<a class="btn btn-success pull-right"j style="margin-top: 15px;" href="{{URL::to('/profile/edit')}}">Edit</a>
									</td>

								</tr>
							</tfoot>
						</table>
					</div>	
				</div>
			</div>	
		</div>
	</div>	
@endsection

@section('script')
	@include('layouts.backend.common._datatable', [
		'columns' => [ 0, 1, 2, 3, 4 ],
		'perPage' => 50
	])
@endsection




