@extends('layouts.backend.master')

@section('ptitle', 'Payment Statement')

@section('back-button')
    @include('layouts.backend.common.back-button')
@endsection 

@section('ctitle')
	PAYMENT STATEMENTS
@stop

@section('content')  

<table class="table table-bordered table-striped table-hover datatable js-exportable">
    <thead>
        <tr>
            <th>Date</th>
            <th>Particulars</th>
            <th>Debit</th>
            <th>Credit</th>
            <th>Vat</th>
            <th>Balance</th>
        </tr>
    </thead>
    <tbody>        
        <tr>
            <td>27th august 2015</td>
            <td style="color:red"> Project first pertial Fees</td>
            <td> 120000</td>
            <td> 0.00</td>
            <td>1200</td>
            <td>121200</td>
        </tr>
        <tr>
            <td>29th august 2015</td>
            <td style="color:green"> Project first pertial peyment of Fees</td>
            <td> 0.00</td>
            <td> 121200</td>
            <td>0.00</td>
            <td>0.00</td>
        </tr>
        <tr>
            <td>27th august 2016</td>
            <td style="color:red"> Project third pertial Fees</td>
            <td> 120000</td>
            <td> 0.00</td>
            <td>1200</td>
            <td>121200</td>
        </tr>
        <tr>
            <td>29th august 2016</td>
            <td style="color:green"> Project third pertial peyment of Fees</td>
            <td> 0.00</td>
            <td> 121200</td>
            <td>0.00</td>
            <td>0.00</td>
        </tr>    

        <tr>
            <td>27th august 2016</td>
            <td style="color:red"> Project second pertial Fees</td>
            <td> 120000</td>
            <td> 0.00</td>
            <td>1200</td>
            <td>121200</td>
        </tr>
        <tr>
            <td>29th august 2016</td>
            <td style="color:green"> Project second pertial peyment of Fees</td>
            <td> 0.00</td>
            <td> 121200</td>
            <td>0.00</td>
            <td>0.00</td>
        </tr>
    </tbody>
</table>
@endsection

@section('script')
	@include('layouts.backend.common._datatable', [
		'columns' => [ 0, 1, 2, 3, 4 ],
		'perPage' => 50
	])
@endsection
