<div class="responsive">
    <table class="table table-bordered table-striped table-hover datatable js-exportable">
    <thead>
        <tr>
            <th>Sr.No</th>
            <th>Applicant Name</th>
            <th>Flat Size</th>
            <th>Mobile</th>
            <th style="text-align: center; width: 100px;">Action</th>
        </tr>
    </thead>
    <tbody>
        @php 
        $i = 0;
        @endPhp
        @foreach($winners as $winner)
            <tr>
                <td>{{++$i}}</td>
                <td>{{ $winner->name_en }}</td>
                <td>{{ $winner->flate_size }}</td>
                <td>{{ $winner->mob_number }}</td>              
                <td style="text-align: center;">
                    <a class="btn btn-info btn-xs"
                        href="{{ route('applications.show', $winner) }}"
                    >Details</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
 