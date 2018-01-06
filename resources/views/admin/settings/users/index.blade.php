@extends('layouts.backend.master')

@section('ptitle', 'LIST USERS')

@section('ctitle', 'ALL USERS PAGE')

@section('content')
    @if(count($users))
		@include('admin.settings.users.views._table')
    @else
		<h3 class="text-center">No result was found to display. <a class="btn btn-link" href="{{ route('settings.users.create') }}"> Create new one</a></h3>
    @endif
@endsection

@section('script')
	@include('layouts.backend.common._datatable', [
		'columns' => [ 0, 1, 2, 3, 4 ]
	])
@endsection