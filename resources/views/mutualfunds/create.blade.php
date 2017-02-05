@extends('app')
@section('content')
    <h1>Create New Mutual Fund</h1>
    {!! Form::open(['url' => 'mutualfunds']) !!}

    <div class="form-group">
        {!! Form::select('customer_id', $customers) !!}
    </div>

    <div class="form-group">
        {!! Form::label('code', 'Code:') !!}
        {!! Form::text('code',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('scheme_plan', 'Scheme Plan:') !!}
        {!! Form::text('scheme_plan',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('balance_amount', 'Balance Amount:') !!}
        {!! Form::text('balance_amount',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('acquired_date', 'Acquired Date:') !!}
        {!! Form::text('acquired_date',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('investment_amount', 'Investment Amount:') !!}
        {!! Form::text('investment_amount',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('current_value', 'Current Value:') !!}
        {!! Form::text('current_value',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('recent_date', 'Recent Date:') !!}
        {!! Form::text('recent_date',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('nominee', 'Nominee:') !!}
        {!! Form::text('nominee',null,['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop