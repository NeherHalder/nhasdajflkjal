 <style type="text/css">
 	th{
 		width: 30%;
 	}
 </style>
 <table class="table table-striped table-hover datatable js-exportable">
	<tr>
        <th>আবেদনকারীর নাম</th>
        <td>{{$application->name_bn}}</td>            
    </tr>
    <tr>
        <th>
        	@if($application->relation == "Father")
        	পিতার নাম 
        	@else 
        	স্বামীর নাম
        	@endif
        </th>
        <td>{{$application->father_husband_name}}</td>            
    </tr>
    <tr>
        <th>মাতার নাম</th>
        <td>{{$application->mother_name}}</td>            
    </tr>
    <tr>
        <th>আবেদনকারীর জন্ম তারিখ</th>
        <td>
        	{{ Carbon\Carbon::parse($application->app_dob)->format('d M, Y') }}
        </td>            
    </tr>
    <tr>
        <th>ভোটার আইডি নং</th>
        <td>{{$application->nid}}</td>            
    </tr>
    <tr>
        <th>বর্তমান ঠিকানা</th>
        <td>{{$application->present_add}}</td>            
    </tr>
    <tr>
        <th>স্থায়ী ঠিকানা</th>
        <td>{{$application->permanent_add}}</td>            
    </tr>
    <tr>
        <th>টেলিফোন নম্বর</th>
        <td>{{$application->tel_number}}</td>            
    </tr>
    <tr>
        <th>মোবাইল</th>
        <td>{{$application->mob_number}}</td>            
    </tr>
    <tr>
        <th>অফিস/ সংস্থা/ ব্যবসা প্রতিষ্ঠানের নাম</th>
        <td>{{$application->office_name}}</td>            
    </tr>
    <tr>
        <th>টি আই এন নম্বর</th>
        <td>{{$application->tin_no}}</td>            
    </tr>
    <tr>
        <th>আবেদনকৃত ফ্ল্যাটের আয়তন</th>
        <td>{{$application->flate_size}}</td>            
    </tr>
    <tr>
        <th>যে পেশা/কোটায় ফ্ল্যাট পাইতে আগ্রহী</th>
        <td>{{$application->job_type}}</td>            
    </tr>
    <tr>
        <th>হলফনামার তারিখ</th>
        <td>{{$application->holofnama_date}}</td>            
    </tr>
</table>