@extends('layouts.backend.master')

@section('ptitle', 'অর্থ বছর')

@section('back-button')
    @include('layouts.backend.common.back-button')
@endsection 

@section('ctitle', 'অর্থ বছর আপডেট করুন ')

@section('content')
    <form action="{{ route('settings.year-of-finances.update', $year_of_finance) }}" method="POST" role="form">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    
    <div class="row ">
            <div class="col-md-3">
                <div>
                    <label class="form-label">অর্থ বছর </label>   
                    <input type="text" name="year_of_finance" class="form-control" value="{{ $year_of_finance->year_of_finance }}" >
                    @include('layouts.backend.common.formError', ['key' => 'year_of_finance'])
                </div>
            </div>            
        </div> 

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg  class="form-control"">আপডেট করুন </button>                    
                </div>
            </div>
        </div> 
</form>

@endsection

