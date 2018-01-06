@extends('frontend.layouts.master')

@section('side-nav')
	<div id="line_01_a" style="margin-bottom: 10px;">
		@include('frontend.layouts.partials.side-navbar')  
	</div>
@endsection 

@section('content')
	<div id="line_01_b" style="min-height: 637px;">
	      <div id="line_01_b_box">
			<div id="line_01_b_text">
			  @include('layouts.backend.common.flash')
			  <h1>NHA at a glance</h1>
			  <p>Housing could be generally termed as a habitable shelter but its meaning stretches far from merely a shelter. It is the total living environment including dwelling units, land, the neighborhood services and utilities needed for the well being of its inhabitants. Housing is one of the basic beings, which provides security, and sense of belonging to the owner. The pre-requisite for health and comfort is proper housing. <a href="at_a_glance.html">read more ></a>
			  </p>    
			</div>
		</div>
		<!-- @include('frontend.layouts.partials.tabed-box')  -->   
	</div>
	
@endsection

@section('flash-slider')
	@include('frontend.common.slider')  
@endsection 

@section('flash-logo')
	<div id="flash_line_logo">
		<a href="http://glris.nha.gov.bd" target="_blank">
		<img src="{{asset('images/glris_logo.jpg')}}" width="239" height="230" border="0">
		</a>
	</div> 
@endsection

@section('right-sider')
	@include('frontend.layouts.partials.chairman-massage')
    @include('frontend.layouts.partials.important-links')
@endsection
