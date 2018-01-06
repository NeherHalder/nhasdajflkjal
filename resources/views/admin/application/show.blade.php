@extends('layouts.backend.master')
@section('back-button')
	@include('layouts.backend.common.back-button')
@endsection 
@section('ptitle', 'APPLICATIONS')

@section('ctitle', 'APPLICANT DETAILS')

@section('content')
    @if(count($application))
		@include('admin.application.view._show')
    @else
		<h3 class="text-center">No result was found to display. <a class="btn btn-link" href="{{ route('settings.users.create') }}"> Create new one</a></h3>
    @endif
@endsection

@section('script')
	@include('layouts.backend.common._datatable', [
		'columns' => [ 0]
	])
@endsection