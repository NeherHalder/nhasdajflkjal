<a href="{{route('settings.year-of-finances.create')}}" class="btn btn-primary" style="margin: 0px 0px 13px 0px">+ অর্থ বছর</a>
<table class="table table-bordered table-striped table-hover datatable js-exportable">
    <thead>
        <tr>
            <th>ক্রমিক নাম্বার </th>
            <th>অর্থ বছর</th>
            <th style="width: 85px;">Action</th>
        </tr>
    </thead>
    <tbody>
    @php 
    $i = 0;
    @endPhp 
        @foreach($year_of_finances as $year_of_finance)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $year_of_finance->year_of_finance }}</td>
                
                <td>
                    <a class="btn btn-info btn-xs"
                        href="{{ route('settings.year-of-finances.edit', $year_of_finance) }}"
                    >পরিবর্তন করুন </a>&nbsp;&nbsp;                    
                </td>

            </tr>
        @endforeach
    </tbody>
</table>