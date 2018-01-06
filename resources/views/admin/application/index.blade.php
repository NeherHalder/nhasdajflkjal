@extends('layouts.backend.master')

@section('ptitle', 'APPLICATIONS')

@section('back-button')
	@include('layouts.backend.common.back-button')
@endsection 

@section('ctitle', 'ALL APPLICATIONS')

@section('content')
    @if(count($applications))
		@include('admin.application.view.table')
    @else
		<h3 class="text-center">No result was found to display. <a class="btn btn-link" href="{{ route('settings.users.create') }}"> Create new one</a></h3>
    @endif
@endsection

@section('script')
	@include('layouts.backend.common._datatable', [
		'columns' => [ 0, 1, 2 ]
	])
@endsection