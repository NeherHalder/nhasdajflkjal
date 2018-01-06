@extends('layouts.backend.master')

@section('ptitle', 'DASHBOARD PAGE')

@section('ctitle', 'ADMIN DASHBOARD PAGE')

@section('content')
<div class="row">
	<div class="col-md-6">
		<a href="{{URL::to('/applications')}}" class="btn btn-block btn-lg"
			style="height: 100px; line-height: 80px;text-align: center;font-size: 1.5em; background-color: #8BC34A"
		>
			<i class="material-icons">gamepad</i>
			COLLECTION AUTOMATION
		</a>
	</div>
	<div class="col-md-6">
		<a href="{{URL::to('/paymnt-statement')}}" class="btn btn-block btn-info btn-lg"
			style="height: 100px; line-height: 80px;text-align: center;font-size: 1.5em;"
		>
			<i class="material-icons">gamepad</i>
			ACCOUNTS EXPENDITURE
		</a>
	</div>
	<div class="col-md-6">
		<a href="{{URL::to('/project-management')}}" class="btn btn-block btn-success btn-lg"
			style="height: 100px; line-height: 80px;text-align: center;font-size: 1.5em;"
		>
			<i class="material-icons">gamepad</i>
			PROJECT MANAGEMNET
		</a>
	</div>
	<div class="col-md-6">
		<a href="#" class="btn btn-block btn-lg"
			style="height: 100px; line-height: 80px;text-align: center;font-size: 1.5em; background-color: #673ab7; color: red;"
		>
			<i class="material-icons">gamepad</i>
			HRM
		</a>
	</div>
	<div class="col-md-6">
		<a href="#" class="btn btn-block btn-warning btn-lg"
			style="height: 100px; line-height: 80px;text-align: center;font-size: 1.5em;"
		>
			<i class="material-icons">gamepad</i>
			ASSET MANAGEMNET | INVENTORY
		</a>
	</div>
</div>
@endsection