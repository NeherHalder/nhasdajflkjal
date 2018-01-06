@extends('frontend.layouts.master')
@section('content')
	<style type="text/css">
		label{
			font-size: 13px;
			font-weight: normal;
		}
	</style>

	<div class="container" style="background-color: #bfd8cb;">
		<div class="row" >
			<div class="col-md-12" style="background-color: #017048; text-align: left; height: 15px;"">
			</div>
			<div class="col-md-12" style="background-color: white; padding: 50px; text-align: left;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">

				<div class="col-md-12" style="text-align: center; padding-bottom: 30px; font-size: 22px;">
	    			<h1 style="color: black">আবেদন পত্র </h1>
	    		</div> 
          @include('layouts.backend.common.flash')
	    		<form role="form" method="post" action="{{URL::to('/applications')}}">   
            {{ csrf_field() }}     

            <div class="form-group">
                <label class="col-md-12" for="">আবেদনকারীর নাম:</label>
            </div>          
            <div class="box-body" style="width: 50%; float: left;">
             	<div class="form-group">
                <label class="col-md-12" for="name_bn">বাংলায়  </label>
                <input type="text" class="form-control" name="name_bn" id="name_bn" placeholder="নাম" required>
                @include('layouts.backend.common.formError', ['key' => 'name_bn'])
              </div>
              <div class="form-group">
                <label class="radio-inline">
                  <input type="radio" value="Father" name="relation" required>পিতা
                </label>
                <label class="radio-inline">
                  <input type="radio" value="Husband" name="relation" required>স্বামীর নাম
                </label>
                <input type="text" class="form-control" style="margin-top: 3px;" name="father_husband_name" placeholder="নাম" required>
                @include('layouts.backend.common.formError', ['key' => 'father_husband_name'])                
              </div>
              <div class="form-group">
                <label for="app_dob">আবেদনকারীর জন্ম তারিখ</label>
                <input type="text" class="form-control datepicker" name="app_dob" id="app_dob">
                @include('layouts.backend.common.formError', ['key' => 'app_dob'])                
              </div>
              <div class="form-group">
                <label class="col-md-12" for="p_address">বর্তমান ঠিকানা</label>
                <textarea class="form-control" name="present_add" id="p_address" required></textarea>
                @include('layouts.backend.common.formError', ['key' => 'present_add'])                
             </div>
            </div>


            <div class="box-body" style="width: 50%; float: left; padding-left: 15px;">
             	<div class="form-group">
                <label class="col-md-12" for="name_en">ইংরেজীতে (ক্যাপিটাল লেটারে)</label>
                <input type="text" class="form-control" style="text-transform: uppercase;" name="name_en" id="name_en" placeholder="NAME" required>
                @include('layouts.backend.common.formError', ['key' => 'name_en'])                
              </div>
              <div class="form-group">
                <label for="mother_name">মাতার নাম</label>
                <input type="text" class="form-control" name="mother_name" id="mother_name" placeholder="নাম">
                @include('layouts.backend.common.formError', ['key' => 'mother_name'])                
                </div> 
                <div class="form-group">
                  <label for="nid">ভোটার আইডি নং (যদি থাকে)</label>
                  <input type="number" class="form-control" name="nid" id="nid">
                  @include('layouts.backend.common.formError', ['key' => 'nid'])                
                </div>
                <div class="form-group">
                  <label class="col-md-12" for="permanent_add">স্থায়ী ঠিকানা </label>
                  <textarea class="form-control" name="permanent_add" id="permanent_add" required></textarea>
                  @include('layouts.backend.common.formError', ['key' => 'permanent_add'])                
                </div>
            </div>            
             
              <div class="box-body" style="width: 50%; float: left;">
             		<div class="form-group">
                  <label for="tel_number">টেলিফোন নম্বর (যদি থাকে)</label>
                  <input type="number" class="form-control" name="tel_number" id="tel_number" placeholder="">
                  @include('layouts.backend.common.formError', ['key' => 'tel_number'])                
                  </div>  
                  <div class="form-group">
                <label class="col-md-12" for="">পেশার বিবরণ:</label>
              </div>
              <div class="form-group">
                <label for="office_name">(ক) অফিস/ সংস্থা/ ব্যবসা প্রতিষ্ঠানের নাম </label>
                <input type="text" class="form-control" name="office_name" id="office_name" required>
                @include('layouts.backend.common.formError', ['key' => 'office_name'])                
              </div> 
             </div>
             <div class="box-body" style="width: 50%; float: left; padding-left: 15px;">
             		<div class="form-group">
                  <label for="mob_number">মোবাইল</label>
                  <input type="number" class="form-control" name="mob_number" id="mob_number" placeholder="০১XXX-XXXXXX" required>
                  @include('layouts.backend.common.formError', ['key' => 'mob_number'])                
                  </div> 
                  <div class="form-group">
                  <label>&nbsp;</label>
                  <label class="col-md-12" for="tin_no">টি আই এন নম্বর</label>
                  <input type="number" class="form-control" name="tin_no" id="tin_no">
              </div>
             </div>                  

              <div class="form-group">
                  <label class="col-md-12" for="">(খ) চাকুরীজীবি হইলে </label>
              </div>
              <div class="box-body" style="width: 50%; float: left;">
             		<div class="form-group">
                      <label for="disignation">১। পদের নাম</label>
                      <input type="text" class="form-control" name="disignation" id="disignation" placeholder="">
                  </div> 
                  <div class="form-group">
                      <label for="basic_salery">৩। বর্তমান প্রাপ্ত মূল বেতন </label>
                      <input type="number" class="form-control" name="basic_salery" id="basic_salery">
                  </div>   
                   <div class="form-group">
                      <label for="meyadkal">৫। মেয়াদ কাল </label>
                      <input type="text" class="form-control datepicker" name="meyadkal" id="meyadkal">
                  </div>  
             </div>

             <div class="box-body" style="width: 50%; float: left; padding-left: 15px;">
             		<div class="form-group">
                      <label for="pay_scale"> ২। বেতন স্কেল </label>
                      <input type="text" class="form-control" name="pay_scale" id="pay_scale" placeholder="">
                  </div>  
                  <div class="form-group">
                      <label for="joining_date">৪। চাকরিতে যোগদানের তারিখ </label>
                      <input type="text" class="form-control datepicker" name="joining_date" id="joining_date">
                  </div>  
             </div>

             <div class="form-group">
                  <label class="col-md-12" for="buisness_type">(গ) ব্যাবসায়ী হইলে ব্যাবসায় ধরণ </label>
                  <input type="text" class="form-control" name="buisness_type" id="buisness_type">
              </div>

              <div class="form-group">
                  <label class="col-md-12" for="other_income">(ঘ) অন্যান্য উৎস হইতে আয় ঃ</label>
                  <input type="number" class="form-control" name="other_income" id="other_income">
              </div>
              
  	          <div class="form-group">
                  <label class="col-md-12" for="">(ক) প্রসপেক্টাস ও আবেদনপত্র ক্রয়ের  রশিদ নম্বর </label>
              </div>
              <div class="box-body" style="width: 50%; float: left;">
             		<div class="form-group">
                      <label for="app_receipt_no">(মূল রশিদ সংযুক্ত করিতে হইবে)</label>
                      <input type="number" class="form-control" name="app_receipt_no" id="app_receipt_no" placeholder="">
                  </div>                         
             </div>
             <div class="box-body" style="width: 50%; float: left; padding-left: 15px;">
             		<div class="form-group">
                      <label for="">তারিখ</label>
                      <input type="text" class="form-control datepicker" name="receipt_date" id="" placeholder="">
                  </div>
            </div>

            
           

            <div class="box-body" style="width: 50%; float: left;">
            <div class="form-group">
                  <label class="col-md-12" for="pay_order_no">(খ) চেয়ারম্যান, জাতীয় গৃহায়ন কর্তৃপক্ষ বরাবরে জমাকৃত পে-অর্ডার/ব্যাংক ড্রাফ্ট নং</label>
                  <input type="number" class="form-control" name="pay_order_no" id="pay_order_no" placeholder="">
            </div>
             		<div class="form-group">
                      <label for="bank_branch">শাখা</label>
                      <input type="text" class="form-control" name="bank_branch" id="bank_branch" placeholder="">
                  </div>                         
             </div>
             <div class="box-body" style="width: 50%; float: left; padding-left: 15px;">
              <div class="form-group">
                  <label class="col-md-12" for="bank_name"><br>ব্যাংকের নাম</label>
                  <input type="text" class="form-control" name="bank_name" id="bank_name" placeholder="">
            </div>
             		<div class="form-group">
                      <label for="pay_order_date">তারিখ</label>
                      <input type="text" class="form-control datepicker" name="pay_order_date" id="pay_order_date" placeholder="">
                  </div>
              </div>

            	<div class="box-body" style="width: 50%; float: left;">
              <div class="form-group">
                  <label class="col-md-12" for="flate_size">আবেদনকৃত ফ্ল্যাটের আয়তন</label>
                  <select class="form-control"   name="flate_size" id="flate_size"  required>
                    <option value="">নির্বাচন করুন </option>
                    <option value="800">800 বর্গফুট</option>
                    <option value="1350">1350 বর্গফুট</option>
                    <option value="1500">1500 বর্গফুট</option>
                  </select>
              </div>
             		<div class="form-group">
                      <label for="holofnama_date">হলফনামার তারিখ</label>
                      <input type="text" class="form-control datepicker" name="holofnama_date" id="holofnama_date" placeholder="">
                  </div>     
                  <div class="form-group">
                      <label for="app_bank_name">ব্যাংকের নাম</label>
                      <input type="text" class="form-control" name="app_bank_name" id="app_bank_name" placeholder="">
                  </div>     
                  <div class="form-group">
                      <label for="">ঝডওঋঞ ঈঙউঊ (যদি থাকে) </label>
                      <input type="text" class="form-control" name="" id="" placeholder="">
                  </div>                   
             </div>
             <div class="box-body" style="width: 50%; float: left; padding-left: 15px;">
              <div class="form-group">
                  <label class="col-md-12" for="job_type">যে পেশা/কোটায় ফ্ল্যাট পাইতে আগ্রহী</label>
                  <select class="form-control"  name="job_type" id="job_type" required>
                    <option value="">নির্বাচন করুন </option>
                    <option value="মুক্তিযোদ্ধা">মুক্তিযোদ্ধা </option>
                    <option value="প্রকৌশলী">প্রকৌশলী </option>
                    <option value="চিকিৎসক ">চিকিৎসক</option>
                  </select>
              </div>
             		<div class="form-group">
                      <label for="app_bank_account_no">আবেদনকারীর (নিজ নামে) ব্যাংক হিসাব নম্বর</label>
                      <input type="text" class="form-control" name="app_bank_account_no" id="app_bank_account_no" placeholder="">
                  </div>
                  <div class="form-group">
                      <label for="app_bank_branch">শাখা</label>
                      <input type="text" class="form-control" name="app_bank_branch" id="app_bank_branch" placeholder="">
                  </div> 
                  <div class="form-group">
                      <label for="">জড়ঁঃরহম ঘড়. (যদি থাকে) </label>
                      <input type="text" class="form-control" name="" id="" placeholder="">
                  </div> 
              </div>

              <div class="form-group">
                <label>
                  <input type="checkbox" value="" checked> 
                  আমি অঙ্গীকার করিতেছি যে, আমার উপরোক্ত প্রদত্ত তথ্যসমূহ নির্ভূল এবং সত্য।
                </label>                   
              </div>   

             <div class="box-footer">
                  <button type="submit" class="btn btn-primary pull-right">আবেদন করুন</button>
              </div>
          </form>            
			</div>
			<div class="col-md-12" style="background-color: #bfd8cb; text-align: left; height: 3px;"">
			</div>
		</div>
	</div>
<script type="text/javascript">
  $(document).ready(function() {
    $('.datepicker').datepicker({
      dateFormat : 'yy-mm-dd',
      changeMonth: true,
      changeYear: true,
      yearRange: '-100y:c+nn',
    });
  });
</script>
@endsection

@section('flash-slider')
	<!-- <div id="flash_line">
	  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="721" height="230">
	    <param name="movie" value="{{asset('flash/ban_fla.swf')}}">
	    <param name="quality" value="high">
	    <embed src="{{asset('flash/ban_fla.swf')}}" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="721" height="230"></embed>
	  </object>
	</div> -->
    @include('frontend.common.slider')  
@endsection 

@section('flash-logo')
	<div id="flash_line_logo">
		<a href="http://glris.nha.gov.bd" target="_blank">
		<img src="{{asset('images/glris_logo.jpg')}}" width="239" height="230" border="0">
		</a>
	</div>
@endsection
