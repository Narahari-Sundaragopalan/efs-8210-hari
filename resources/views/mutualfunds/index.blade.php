@extends('layouts.app')

@section('content')
    <h1 style="text-align: center">Mutual Funds</h1>
    <a href="{{url('/mutualfunds/create')}}" class="btn btn-success">Create Mutual Fund</a>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>Cust No</th>
            <th>Cust Name</th>
            <th>Code</th>
            <th>Scheme Plan</th>
            <th>Balance Amount</th>
            <th>Acquired Date</th>
            <th>Investment Amount</th>
            <th>Current Value</th>
            <th>Recent Date</th>
            <th>Nominee</th>
            <th colspan="3">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($mutual_funds as $mutual_fund)
            <tr>
                <td>{{ $mutual_fund->customer->cust_number }}</td>
                <td>{{ $mutual_fund->customer->name }}</td>
                <td>{{ $mutual_fund->code }}</td>
                <td>{{ $mutual_fund->scheme_plan }}</td>
                <td>{{ $mutual_fund->balance_amount }}</td>
                <td>{{ $mutual_fund->acquired_date }}</td>
                <td>{{ $mutual_fund->investment_amount }}</td>
                <td>{{ $mutual_fund->current_value }}</td>
                <td>{{ $mutual_fund->recent_date }}</td>
                <td>{{ $mutual_fund->nominee }}</td>
                <td><a href="{{url('mutualfunds',$mutual_fund->id)}}" class="btn btn-primary">Read</a></td>
                <td><a href="{{route('mutualfunds.edit',$mutual_fund->id)}}" class="btn btn-warning">Update</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['mutualfunds.destroy', $mutual_fund->id]]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>
@endsection