@extends('layouts.backend.master')

@section('ptitle', 'অর্থ বছর')

@section('back-button')
	@include('layouts.backend.common.back-button')
@endsection 
@section('ctitle', 'অর্থ বছরের তালিকা ')

@section('content')
    @if(count($year_of_finances))
		@include('admin.account.year_of_finance.view.table')
    @else
		<h3 class="text-center">No result was found to display. <a class="btn btn-link" href="{{ route('settings.year-of-finances.create') }}"> Create new one</a></h3>
    @endif
@endsection

@section('script')
	@include('layouts.backend.common._datatable', [
		'columns' => [ 0, 1 ]
	])
@endsection
