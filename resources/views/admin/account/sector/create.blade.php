@extends('layouts.backend.master')

@section('ptitle', 'খাত')

@section('back-button')
    @include('layouts.backend.common.back-button')
@endsection 

@section('ctitle', 'খাত যোগ করুন')

@section('content')
    <form action="{{ route('settings.sectors.store') }}" method="POST" role="form" id="form_advanced_validation">
    {{ csrf_field() }}
    
    <div class="row ">
            <div class="col-md-3">
                <div>
                    <label class="form-label">খাতের নাম </label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}">   
                    @include('layouts.backend.common.formError', ['key' => 'name'])
                </div>
            </div>            
        </div> 

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg  class="form-control"">সেভ করুন</button>                    
                </div>
            </div>
        </div> 
</form>
@endsection

