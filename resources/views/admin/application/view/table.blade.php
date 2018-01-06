<div class="table-responsive">
    <table class="table table-bordered table-striped table-hover datatable js-exportable">
    <thead>
        <tr>
            <th>Sr.No</th>
            <th>Name</th>            
            <th>Mobile No.</th>
            <th>Flate Size</th>
            <th style="width: 50px;">Action</th>
        </tr>
    </thead>
    <tbody>
    @php 
    $i = 0;
    @endPhp 
        @foreach($applications as $application)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $application->name_en }}</td>
                <td>{{ $application->mob_number }}</td>
                <td>{{ $application->flate_size }}</td>
                
                <td>
                    <a class="btn btn-info btn-xs"
                        href="{{ route('applications.show', $application) }}"
                    >Details</a>&nbsp;&nbsp;                    
                </td>

            </tr>
        @endforeach
    </tbody>
</table>
</div>