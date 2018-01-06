<a href="{{route('settings.office.create')}}" class="btn btn-primary" style="margin: 0px 0px 13px 0px">+ কার্যালয় যোগ করুন</a>
<table class="table table-bordered table-striped table-hover datatable js-exportable">
    <thead>
        <tr>
            <th>ক্রমিক নাম্বার</th>
            <th>কার্যালয়ের নাম</th>
            <th>কার্যালয়ের ঠিকানা</th>
            <th style="width: 85px;">Action</th>
        </tr>
    </thead>
    <tbody>
    @php 
    $i = 0;
    @endPhp 
        @foreach($all_office as $office)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $office->name }}</td>
                <td>{{ $office->address }}</td>
                
                <td>
                    <a class="btn btn-info btn-xs"
                        href="{{ route('settings.office.edit', $office) }}"
                    >পরিবর্তন করুন </a>&nbsp;&nbsp;                    
                </td>

            </tr>
        @endforeach
    </tbody>
</table>