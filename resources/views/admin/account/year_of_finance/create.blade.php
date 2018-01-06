@extends('layouts.backend.master')

@section('ptitle', 'অর্থ বছর')

@section('back-button')
    @include('layouts.backend.common.back-button')
@endsection 

@section('ctitle', 'অর্থ বছর যোগ করুন')

@section('content')
    <form action="{{ route('settings.year-of-finances.store') }}" method="POST" role="form">
    {{ csrf_field() }}
    
    <div class="row ">
            <div class="col-md-3">
                <div>
                    <label class="form-label">অর্থ বছর </label>   
                     @php 
                        $year = (int)date('Y');
                    @endphp             
                    <input type="text" name="year_of_finance" class="form-control" value="{{ old('name') }}" placeholder="{{ $year-1}}-{{$year}}">
                    @include('layouts.backend.common.formError', ['key' => 'name'])
                </div>
            </div>            
        </div> 

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg  class="form-control"">সেভ করুন </button>                    
                </div>
            </div>
        </div> 
</form>

@endsection

