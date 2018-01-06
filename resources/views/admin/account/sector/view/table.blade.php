<a href="{{route('settings.sectors.create')}}" class="btn btn-primary" style="margin: 0px 0px 13px 0px">+ খাত যোগ করুন</a>
<table class="table table-bordered table-striped table-hover datatable js-exportable">
    <thead>
        <tr>
            <th>ক্রমিক নাম্বার</th>
            <th>খাতের নাম</th>
            <th style="width: 85px;">Action</th>
        </tr>
    </thead>
    <tbody>
    @php 
    $i = 0;
    @endPhp 
        @foreach($sectors as $sector)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $sector->name }}</td>
                
                <td>
                    <a class="btn btn-info btn-xs"
                        href="{{ route('settings.sectors.edit', $sector) }}"
                    >পরিবর্তন করুন </a>&nbsp;&nbsp;                    
                </td>

            </tr>
        @endforeach
    </tbody>
</table>