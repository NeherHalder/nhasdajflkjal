@extends('layouts.backend.master')

@section('ptitle', 'NHA PROJECT MANAGEMENT SYSTEM')
@section('back-button')
	@include('layouts.backend.common.back-button')
@endsection 
@section('ctitle')
	PROJECT TITLE : &nbsp;&nbsp;{{ $project->title }}&nbsp; ({{ $project->location }})
@stop

@section('content')
<form class="form-inline" method="post" action="/lottery/">
	{{ csrf_field() }}
  	<div class="form-group">
    	<label for="email">Set Limit</label>
    	<input type="number" class="form-control" id="">
  	</div>
	<button type="submit" class="btn btn-default">Start</button>
</form>
@stop
