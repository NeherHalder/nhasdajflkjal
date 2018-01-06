@extends('layouts.backend.master')

@section('ptitle', 'খাত')

@section('back-button')
	@include('layouts.backend.common.back-button')
@endsection 
@section('ctitle', 'সকল খাতের নাম ')

@section('content')
    @if(count($sectors))
		@include('admin.account.sector.view.table')
    @else
		<h3 class="text-center">No result was found to display. <a class="btn btn-link" href="{{ route('settings.sectors.create') }}">  নুতন খাত তৈরী করুন </a></h3>
    @endif
@endsection

@section('script')
	@include('layouts.backend.common._datatable', [
		'columns' => [ 0, 1 ]
	])
@endsection