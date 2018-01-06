<div id="mainmenu1" style="padding-top:2px; margin-left: 12px;">
	<ul>
	  	<li><a href="{{URL::to('/')}}">Home</a></li>
	  	<li><a href="{{URL::to('/applications/create')}}">Application</a></li>
	    <li><a href="#">Contact us</a></li>
	  	<li><a href="http://www.nha.gov.bd/webmail" target="_blank">Web mail</a></li>
	  	<li><a href="{{URL::to('/login')}}">Login</a></li>
	</ul>
 </div>
@include('frontend.layouts.partials._navbar-clock')