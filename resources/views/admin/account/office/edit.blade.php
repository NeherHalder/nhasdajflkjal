@extends('layouts.backend.master')

@section('ptitle', 'কার্যালয়')

@section('back-button')
    @include('layouts.backend.common.back-button')
@endsection 

@section('ctitle', 'কার্যালয় পরিবর্তন করুন')

@section('content')
    <form action="{{ route('settings.office.update', $office) }}" method="POST" role="form" id="form_advanced_validation">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    
    <div class="row ">
            <div class="col-md-6">
                <div>
                    <label class="form-label">কার্যালয়ের নাম </label>
                    <input type="text" name="name" class="form-control" value="{{ $office->name }}">   
                    @include('layouts.backend.common.formError', ['key' => 'name'])
                </div>
            </div>    
            <div class="col-md-6">
                <div>
                    <label class="form-label">কার্যালয়ের ঠিকানা  </label>
                    <textarea name="address" class="form-control" rows="1">{{ $office->address }}</textarea>
                    @include('layouts.backend.common.formError', ['key' => 'address'])
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

