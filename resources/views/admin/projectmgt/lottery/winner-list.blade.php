@extends('layouts.backend.master')

@section('ptitle', 'WINNER LIST')
@section('back-button')
	@include('layouts.backend.common.back-button')
@endsection 
@section('ctitle')
	PROJECT TITLE : &nbsp;&nbsp;{{ $project->title }}&nbsp; ({{ $project->location }})
@stop

@section('content')
    @if(count($winners))
		@include('admin.projectmgt.lottery.views._table')
    @else
		<h3 class="text-center">No result was found to display.</h3>
    @endif
@endsection

@section('script')
	@include('layouts.backend.common._datatable', [
		'columns' => [ 0, 1, 2, 3],
		'perPage' => 50
	])
@endsection