@extends('layouts.backend.master')

@section('ptitle', 'কার্যালয় ')

@section('back-button')
	@include('layouts.backend.common.back-button')
@endsection 
@section('ctitle', 'সকল কার্যালয়ের নাম ')

@section('content')
    @if(count($all_office))
		@include('admin.account.office.view.table')
    @else
		<h3 class="text-center">No result was found to display. <a class="btn btn-link" href="{{ route('settings.office.create') }}">  নুতন কার্যালয়  তৈরী করুন </a></h3>
    @endif
@endsection

@section('script')
	@include('layouts.backend.common._datatable', [
		'columns' => [ 0, 1, 2]
	])
@endsection