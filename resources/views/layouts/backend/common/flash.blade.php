@if(session()->has('success'))
	<div class="alert alert-success flash-msg">
	    {{ session()->get('success') }}
	</div>
@endif

@if(session()->has('warning'))
	<div class="alert bg-red flash-msg">
	    {{ session()->get('warning') }}
	</div>
@endif